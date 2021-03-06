cmake_minimum_required(VERSION 2.8.12)

project(php)

set(KDEVPHP_VERSION_MAJOR 5)
set(KDEVPHP_VERSION_MINOR 1)
set(KDEVPHP_VERSION_PATCH 40)
# KDevplatform dependency version
set( KDEVPLATFORM_VERSION "${KDEVPHP_VERSION_MAJOR}.${KDEVPHP_VERSION_MINOR}.${KDEVPHP_VERSION_PATCH}" )

configure_file( "${php_SOURCE_DIR}/kdevphpversion.h.cmake" "${php_BINARY_DIR}/kdevphpversion.h" @ONLY )

find_package (ECM "5.14.0" REQUIRED NO_MODULE)
set(CMAKE_MODULE_PATH ${CMAKE_MODULE_PATH} ${ECM_MODULE_PATH})

include(KDECompilerSettings NO_POLICY_SCOPE)
include(ECMAddTests)
include(ECMQtDeclareLoggingCategory)
include(KDEInstallDirs)
include(KDECMakeSettings)
include(GenerateExportHeader)
include(FeatureSummary)

find_package(Qt5 REQUIRED Core Widgets Test WebKitWidgets)
find_package(KF5 REQUIRED COMPONENTS Archive ThreadWeaver TextEditor I18n ItemModels KCMUtils)
find_package(KDevPlatform ${KDEVPLATFORM_VERSION} REQUIRED)
find_package(KDevelop-PG-Qt REQUIRED)

if (CMAKE_CXX_COMPILER_ID MATCHES "Clang")
    set(CMAKE_CXX_FLAGS "${CMAKE_CXX_FLAGS} -Wdocumentation")
endif()

add_definitions( -DKDE_DEFAULT_DEBUG_AREA=9043 )
add_definitions( -DTRANSLATION_DOMAIN=\"kdevphp\" )

include_directories(
    ${KDEVPGQT_INCLUDE_DIR}
)

add_subdirectory(app_templates)
add_subdirectory(parser)
add_subdirectory(duchain)
add_subdirectory(completion)
add_subdirectory(testprovider)
add_subdirectory(docs)

set(kdevphplanguagesupport_PART_SRCS
    phplanguagesupport.cpp
    phpparsejob.cpp
    phphighlighting.cpp

    codegen/refactoring.cpp
)
ecm_qt_declare_logging_category(kdevphplanguagesupport_PART_SRCS
    HEADER phpdebug.h
    IDENTIFIER PHP
    CATEGORY_NAME "kdevelop.languages.php"
)

kdevplatform_add_plugin(kdevphplanguagesupport JSON kdevphpsupport.json
    SOURCES ${kdevphplanguagesupport_PART_SRCS})
target_link_libraries(kdevphplanguagesupport
    KDev::Interfaces
    KDev::Language
    kdevphpduchain
    kdevphpparser
    kdevphpcompletion

    KF5::I18n
    KF5::TextEditor
)

# not writeable so that the refactoring actions get hidden
install(FILES phpfunctions.php DESTINATION ${DATA_INSTALL_DIR}/kdevphpsupport PERMISSIONS OWNER_READ GROUP_READ WORLD_READ)

# kdebugsettings file
install(FILES kdevphpsupport.categories DESTINATION ${KDE_INSTALL_CONFDIR})

feature_summary(WHAT ALL FATAL_ON_MISSING_REQUIRED_PACKAGES)
