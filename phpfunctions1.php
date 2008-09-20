<?php
// THIS FILE IS GENERATED
// WARNING! All changes made in this file will be lost!

/**
 * apache_child_terminate will register the
 * Apache process executing the current PHP request for termination
 * once execution of PHP code is completed. It may be used to
 * terminate a process after a script with high memory consumption has
 * been run as memory will usually only be freed internally but not
 * given back to the operating system.
 *
 * @return bool
 **/
function apache_child_terminate() {}

/**
 * Get a list of loaded Apache modules.
 *
 * @return array
 **/
function apache_get_modules() {}

/**
 * Fetch the Apache version.
 *
 * @return string
 **/
function apache_get_version() {}

/**
 * Get an Apache environment variable as specified by 
 * variable.
 *
 * @param string
 * @param bool
 * @return string
 **/
function apache_getenv($variable, $walk_to_top) {}

/**
 * This performs a partial request for a URI. It goes just far
 * enough to obtain all the important information about the given
 * resource.
 *
 * @param string
 * @return object
 **/
function apache_lookup_uri($filename) {}

/**
 * This function is a wrapper for Apache's table_get and
 * table_set. It edits the table of notes that exists
 * during a request. The table's purpose is to allow Apache modules to
 * communicate.
 *
 * @param string
 * @param string
 * @return string
 **/
function apache_note($note_name, $note_value) {}

/**
 * Fetches all HTTP requests from the current request.
 *
 * @return array
 **/
function apache_request_headers() {}

/**
 * apache_reset_timeout resets the Apache write timer,
 * which defaults to 300 seconds. With set_time_limit(0);
 * ignore_user_abort(true) and periodic
 * apache_reset_timeout calls, Apache can theoretically
 * run forever.
 *
 * @return bool
 **/
function apache_reset_timeout() {}

/**
 * Fetch all HTTP response headers.
 *
 * @return array
 **/
function apache_response_headers() {}

/**
 * apache_setenv sets the value of the Apache
 * environment variable specified by
 * variable.
 *
 * @param string
 * @param string
 * @param bool
 * @return bool
 **/
function apache_setenv($variable, $value, $walk_to_top) {}

/**
 * ascii2ebcdic is an Apache-specific function which
 * is available only on EBCDIC based operating systems (OS/390, BS2000).
 * It translates the ASCII encoded string ascii_str
 * to its equivalent EBCDIC representation (binary safe), and returns
 * the result.
 *
 * @param string
 * @return int
 **/
function ascii2ebcdic($ascii_str) {}

/**
 * ebcdic2ascii is an Apache-specific function which
 * is available only on EBCDIC based operating systems (OS/390, BS2000).
 * It translates the EBCDIC encoded string ebcdic_str
 * to its equivalent ASCII representation (binary safe), and returns
 * the result.
 *
 * @param string
 * @return int
 **/
function ebcdic2ascii($ebcdic_str) {}

/**
 * Fetches all HTTP headers from the current request.
 *
 * @return array
 **/
function getallheaders() {}

/**
 * virtual is an Apache-specific function which
 * is similar to !--#include virtual...-- in mod_include.
 * It performs an Apache sub-request. It is useful for including
 * CGI scripts or .shtml files, or anything else that you would
 * parse through Apache. Note that for a CGI script, the script
 * must generate valid CGI headers. At the minimum that means it
 * must generate a Content-type header.
 *
 * @param string
 * @return bool
 **/
function virtual($filename) {}

/**
 * Caches a variable in the data store, only if it's not already stored.
 *
 * @param string
 * @param mixed
 * @param int
 * @return bool
 **/
function apc_add($key, $var, $ttl) {}

/**
 * Retrieves cached information and meta-data from APC's data store.
 *
 * @param string
 * @param bool
 * @return array
 **/
function apc_cache_info($cache_type, $limited) {}

/**
 * Clears the user/system cache.
 *
 * @param string
 * @return bool
 **/
function apc_clear_cache($cache_type) {}

/**
 * Stores a file in the bytecode cache, bypassing all filters.
 *
 * @param string
 * @return bool
 **/
function apc_compile_file($filename) {}

/**
 * define is notoriously slow. Since the main benefit of
 * APC is to increase the performance of scripts/applications, this mechanism
 * is provided to streamline the process of mass constant definition. However,
 * this function does not perform as well as anticipated.
 *
 * @param string
 * @param array
 * @param bool
 * @return bool
 **/
function apc_define_constants($key, $constants, $case_sensitive) {}

/**
 * Removes a stored variable from the cache.
 *
 * @param string
 * @return bool
 **/
function apc_delete($key) {}

/**
 * Fetchs a stored variable from the cache.
 *
 * @param string
 * @return mixed
 **/
function apc_fetch($key) {}

/**
 * Loads a set of constants from the cache.
 *
 * @param string
 * @param bool
 * @return bool
 **/
function apc_load_constants($key, $case_sensitive) {}

/**
 * Retrieves APC's Shared Memory Allocation information.
 *
 * @param bool
 * @return array
 **/
function apc_sma_info($limited) {}

/**
 * Cache a variable in the data store.
 *
 * @param string
 * @param mixed
 * @param int
 * @return bool
 **/
function apc_store($key, $var, $ttl) {}

/**
 * This can be used to stop the running of your script, and await responses 
 * on the connected socket. To step the program, just send enter (a blank 
 * line), or enter a php command to be executed.
 *
 * @param int
 * @return bool
 **/
function apd_breakpoint($debug_level) {}

/**
 * Returns the current call stack as an array
 *
 * @return array
 **/
function apd_callstack() {}

/**
 * Behaves like perl's Carp::cluck. Throw a warning and a callstack.
 *
 * @param string
 * @param string
 * @return void
 **/
function apd_clunk($warning, $delimiter) {}

/**
 * Usually sent via the socket to restart the interpreter.
 *
 * @param int
 * @return bool
 **/
function apd_continue($debug_level) {}

/**
 * Behaves like perl's Carp::croak. Throw an error, a callstack and then
 * exit.
 *
 * @param string
 * @param string
 * @return void
 **/
function apd_croak($warning, $delimiter) {}

/**
 * Outputs the current function table.
 *
 * @return void
 **/
function apd_dump_function_table() {}

/**
 * Return all persistent resources as an array.
 *
 * @return array
 **/
function apd_dump_persistent_resources() {}

/**
 * Return all current regular resources as an array.
 *
 * @return array
 **/
function apd_dump_regular_resources() {}

/**
 * Usually sent via the socket to request information about the running 
 * script.
 *
 * @param string
 * @return bool
 **/
function apd_echo($output) {}

/**
 * Returns the names of all the variables defined in the active scope, (not 
 * their values).
 *
 * @return array
 **/
function apd_get_active_symbols() {}

/**
 * Starts debugging to pprof_{process_id} in the
 * dump directory.
 *
 * @param string
 * @param string
 * @return string
 **/
function apd_set_pprof_trace($dump_directory, $fragment) {}

/**
 * Starts debugging to apd_dump_{process_id} in the
 * dump directory.
 *
 * @param int
 * @param string
 * @return void
 **/
function apd_set_session_trace($debug_level, $dump_directory) {}

/**
 * This can be used to increase or decrease debugging in a different area of 
 * your application.
 *
 * @param int
 * @return void
 **/
function apd_set_session($debug_level) {}

/**
 * Connects to the specified tcp_server (eg. tcplisten)
 * and sends debugging data to the socket.
 *
 * @param string
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function apd_set_socket_session_trace($tcp_server, $socket_type, $port, $debug_level) {}

/**
 * Overrides built-in functions by replacing them in the symbol table.
 *
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function override_function($function_name, $function_args, $function_code) {}

/**
 * Renames a orig_name to new_name in the global function table. Useful
 * for temporarily overriding built-in functions.
 *
 * @param string
 * @param string
 * @return bool
 **/
function rename_function($original_name, $new_name) {}

/**
 * Returns an array with all keys from input lowercased
 * or uppercased. Numbered indices are left as is.
 *
 * @param array
 * @param int
 * @return array
 **/
function array_change_key_case($input, $case) {}

/**
 * Chunks an array into size large chunks.
 * The last chunk may contain less than size elements.
 *
 * @param array
 * @param int
 * @param bool
 * @return array
 **/
function array_chunk($input, $size, $preserve_keys) {}

/**
 * Creates an array by using the values from the
 * keys array as keys and the values from the
 * values array as the corresponding values.
 *
 * @param array
 * @param array
 * @return array
 **/
function array_combine($keys, $values) {}

/**
 * array_count_values returns an array using
 * the values of the input array as keys and
 * their frequency in input as values.
 *
 * @param array
 * @return array
 **/
function array_count_values($input) {}

/**
 * Compares array1 against array2 and
 * returns the difference. Unlike array_diff the array
 * keys are used in the comparision.
 *
 * @param array
 * @param array
 * @return array
 **/
function array_diff_assoc($array1, $array2) {}

/**
 * Compares the keys from array1 against the keys
 * from array2 and returns the difference.
 * This function is like array_diff except the
 * comparison is done on the keys instead of the values.
 *
 * @param array
 * @param array
 * @return array
 **/
function array_diff_key($array1, $array2) {}

/**
 * Compares array1 against array2 and
 * returns the difference. Unlike array_diff the array
 * keys are used in the comparision.
 *
 * @param array
 * @param array
 * @param callback
 * @return array
 **/
function array_diff_uassoc($array1, $array2, $key_compare_func) {}

/**
 * Compares the keys from array1 against the keys
 * from array2 and returns the difference.
 * This function is like array_diff except the
 * comparison is done on the keys instead of the values.
 *
 * @param array
 * @param array
 * @param callback
 * @return array
 **/
function array_diff_ukey($array1, $array2, $key_compare_func) {}

/**
 * Compares array1 against array2 and
 * returns the difference.
 *
 * @param array
 * @param array
 * @return array
 **/
function array_diff($array1, $array2) {}

/**
 * Fills an array with the
 * value of the value parameter, using the
 * values of the keys array as keys.
 *
 * @param array
 * @param mixed
 * @return array
 **/
function array_fill_keys($keys, $value) {}

/**
 * Fills an array with
 * num entries of the value of the
 * value parameter, keys starting at the
 * start_index parameter.
 *
 * @param int
 * @param int
 * @param mixed
 * @return array
 **/
function array_fill($start_index, $num, $value) {}

/**
 * Iterates over each value in
 * the input array passing them to the
 * callback function. If the 
 * callback function returns true, the current
 * value from input is returned into the
 * result array. Array keys are preserved.
 *
 * @param array
 * @param callback
 * @return array
 **/
function array_filter($input, $callback) {}

/**
 * array_flip returns an array in flip
 * order, i.e. keys from trans become values and values
 * from trans become keys.
 *
 * @param array
 * @return array
 **/
function array_flip($trans) {}

/**
 * @param array
 * @param array
 * @return array
 **/
function array_intersect_assoc($array1, $array2) {}

/**
 * array_intersect_key returns an array
 * containing all the values of array1
 * which have matching keys that are present in all the arguments.
 *
 * @param array
 * @param array
 * @return array
 **/
function array_intersect_key($array1, $array2) {}

/**
 * array_intersect_uassoc returns an array
 * containing all the values of array1
 * that are present in all the arguments. Note that the keys are used in
 * the comparison unlike in array_intersect.
 *
 * @param array
 * @param array
 * @param callback
 * @return array
 **/
function array_intersect_uassoc($array1, $array2, $key_compare_func) {}

/**
 * array_intersect_ukey returns an array
 * containing all the values of array1
 * which have matching keys that are present in all the arguments.
 *
 * @param array
 * @param array
 * @param callback
 * @return array
 **/
function array_intersect_ukey($array1, $array2, $key_compare_func) {}

/**
 * array_intersect returns an array
 * containing all the values of array1
 * that are present in all the arguments.
 * Note that keys are preserved.
 *
 * @param array
 * @param array
 * @return array
 **/
function array_intersect($array1, $array2) {}

/**
 * array_key_exists returns if the
 * given key is set in the array.
 * key can be any value possible
 * for an array index.
 *
 * @param mixed
 * @param array
 * @return bool
 **/
function array_key_exists($key, $search) {}

/**
 * array_keys returns the keys, numeric and
 * string, from the input array.
 *
 * @param array
 * @param mixed
 * @param bool
 * @return array
 **/
function array_keys($input, $search_value, $strict) {}

/**
 * array_map returns an array containing all
 * the elements of arr1 after applying the
 * callback function to each one.
 * The number of parameters that the callback
 * function accepts
 * should match the number of arrays
 * passed to the array_map
 *
 * @param callback
 * @param array
 * @return array
 **/
function array_map($callback, $arr1) {}

/**
 * array_merge_recursive merges the elements of
 * one or more arrays together so that the values of one are appended
 * to the end of the previous one. It returns the resulting array.
 *
 * @param array
 * @return array
 **/
function array_merge_recursive($array1) {}

/**
 * Merges the elements of one or more arrays together so that the values of
 * one are appended to the end of the previous one. It returns the resulting
 * array.
 *
 * @param array
 * @param array
 * @return array
 **/
function array_merge($array1, $array2) {}

/**
 * array_multisort can be used to sort several
 * arrays at once, or a multi-dimensional array by one or more
 * dimensions.
 *
 * @param array
 * @param mixed
 * @return bool
 **/
function array_multisort($arr, $arg) {}

/**
 * array_pad returns a copy of the
 * input padded to size specified by
 * pad_size with value
 * pad_value. If
 * pad_size is positive then the array is
 * padded on the right, if it's negative then on the left. If the
 * absolute value of pad_size is less than or
 * equal to the length of the input then no
 * padding takes place.
 * It is possible to add most 1048576 elements at a time.
 *
 * @param array
 * @param int
 * @param mixed
 * @return array
 **/
function array_pad($input, $pad_size, $pad_value) {}

/**
 * array_pop pops and returns the last value of
 * the array, shortening the
 * array by one element.
 * If array is empty (or is not an array),
 * will be returned. Will additionally produce a
 * Warning
 * when called on a non-array.
 *
 * @param array
 * @return mixed
 **/
function array_pop($array) {}

/**
 * array_product returns the product of values
 * in an array.
 *
 * @param array
 * @return number
 **/
function array_product($array) {}

/**
 * array_push treats array as a
 * stack, and pushes the passed variables onto the end of
 * array. The length of array
 * increases by the number of variables pushed. Has the same effect as:
 * 
 * 
 * 
 * repeated for each var.
 *
 * @param array
 * @param mixed
 * @return int
 **/
function array_push($array, $var) {}

/**
 * array_rand is rather useful when you want to
 * pick one or more random entries out of an array.
 *
 * @param array
 * @param int
 * @return mixed
 **/
function array_rand($input, $num_req) {}

/**
 * array_reduce applies iteratively the
 * function function to the elements of the
 * array input, so as to reduce the array to
 * a single value.
 *
 * @param array
 * @param callback
 * @param int
 * @return mixed
 **/
function array_reduce($input, $function, $initial) {}

/**
 * Takes an input array and returns a new array with
 * the order of the elements reversed.
 *
 * @param array
 * @param bool
 * @return array
 **/
function array_reverse($array, $preserve_keys) {}

/**
 * Searches haystack for needle.
 *
 * @param mixed
 * @param array
 * @param bool
 * @return mixed
 **/
function array_search($needle, $haystack, $strict) {}

/**
 * array_shift shifts the first value of the
 * array off and returns it, shortening the
 * array by one element and moving everything
 * down. All numerical array keys will be modified to start counting from zero
 * while literal keys won't be touched.
 *
 * @param array
 * @return mixed
 **/
function array_shift($array) {}

/**
 * array_slice returns the sequence of elements
 * from the array array as specified by the
 * offset and length
 * parameters.
 *
 * @param array
 * @param int
 * @param int
 * @param bool
 * @return array
 **/
function array_slice($array, $offset, $length, $preserve_keys) {}

/**
 * Removes the elements designated by offset and
 * length from the input array,
 * and replaces them with the elements of the
 * replacement array, if supplied.
 *
 * @param array
 * @param int
 * @param int
 * @param mixed
 * @return array
 **/
function array_splice($input, $offset, $length, $replacement) {}

/**
 * array_sum returns the sum of values in an array.
 *
 * @param array
 * @return number
 **/
function array_sum($array) {}

/**
 * Computes the difference of arrays with additional index check, compares
 * data by a callback function.
 *
 * @param array
 * @param array
 * @param callback
 * @return array
 **/
function array_udiff_assoc($array1, $array2, $data_compare_func) {}

/**
 * Computes the difference of arrays with additional index check, compares
 * data and indexes by a callback function.
 *
 * @param array
 * @param array
 * @param callback
 * @param callback
 * @return array
 **/
function array_udiff_uassoc($array1, $array2, $data_compare_func, $key_compare_func) {}

/**
 * Computes the difference of arrays by using a callback function for data
 * comparison. This is unlike array_diff which uses an
 * internal function for comparing the data.
 *
 * @param array
 * @param array
 * @param callback
 * @return array
 **/
function array_udiff($array1, $array2, $data_compare_func) {}

/**
 * Computes the intersection of arrays with additional index check, compares
 * data by a callback function.
 *
 * @param array
 * @param array
 * @param callback
 * @return array
 **/
function array_uintersect_assoc($array1, $array2, $data_compare_func) {}

/**
 * Computes the intersection of arrays with additional index check, compares
 * data and indexes by a callback functions Note that the keys are used in
 * the comparison unlike in array_uintersect.
 * Both the data and the indexes are compared by using separate callback functions.
 *
 * @param array
 * @param array
 * @param callback
 * @param callback
 * @return array
 **/
function array_uintersect_uassoc($array1, $array2, $data_compare_func, $key_compare_func) {}

/**
 * Computes the intersection of arrays, compares data by a callback function.
 *
 * @param array
 * @param array
 * @param callback
 * @return array
 **/
function array_uintersect($array1, $array2, $data_compare_func) {}

/**
 * Takes an input array and returns a new array
 * without duplicate values.
 *
 * @param array
 * @return array
 **/
function array_unique($array) {}

/**
 * array_unshift prepends passed elements to the front
 * of the array. Note that the list of elements is
 * prepended as a whole, so that the prepended elements stay in the same
 * order. All numerical array keys will be modified to start counting from
 * zero while literal keys won't be touched.
 *
 * @param array
 * @param mixed
 * @return int
 **/
function array_unshift($array, $var) {}

/**
 * array_values returns all the values from the
 * input array and indexes numerically the
 * array.
 *
 * @param array
 * @return array
 **/
function array_values($input) {}

/**
 * Applies the user-defined function funcname to each
 * element of the input array. This function will recur
 * into deeper arrays.
 *
 * @param array
 * @param callback
 * @param mixed
 * @return bool
 **/
function array_walk_recursive($input, $funcname, $userdata) {}

/**
 * array_walk is not affected by the internal array
 * pointer of array. array_walk
 * will walk through the entire array regardless of pointer position.
 *
 * @param array
 * @param callback
 * @param mixed
 * @return bool
 **/
function array_walk($array, $funcname, $userdata) {}

/**
 * This function sorts an array such that array indices maintain their
 * correlation with the array elements they are associated with.
 *
 * @param array
 * @param int
 * @return bool
 **/
function arsort($array, $sort_flags) {}

/**
 * This function sorts an array such that array indices maintain
 * their correlation with the array elements they are associated
 * with. This is used mainly when sorting associative arrays where
 * the actual element order is significant.
 *
 * @param array
 * @param int
 * @return bool
 **/
function asort($array, $sort_flags) {}

/**
 * Creates an array containing variables and their values.
 *
 * @param mixed
 * @return array
 **/
function compact($varname) {}

/**
 * Counts elements in an array, or properties in an object.
 *
 * @param mixed
 * @param int
 * @return int
 **/
function count($var, $mode) {}

/**
 * Every array has an internal pointer to its "current" element,
 * which is initialized to the first element inserted into the
 * array.
 *
 * @param array
 * @return mixed
 **/
function current($array) {}

/**
 * Return the current key and value pair from an array and advance the array
 * cursor.
 *
 * @param array
 * @return array
 **/
function each($array) {}

/**
 * end advances array's
 * internal pointer to the last element, and returns its value.
 *
 * @param array
 * @return mixed
 **/
function end($array) {}

/**
 * Import variables from an array into the current symbol table.
 *
 * @param array
 * @param int
 * @param string
 * @return int
 **/
function extract($var_array, $extract_type, $prefix) {}

/**
 * Searches haystack for needle.
 *
 * @param mixed
 * @param array
 * @param bool
 * @return bool
 **/
function in_array($needle, $haystack, $strict) {}

/**
 * key returns the index element of the current array
 * position.
 *
 * @param array
 * @return mixed
 **/
function key($array) {}

/**
 * Sorts an array by key in reverse order, maintaining key to data
 * correlations. This is useful mainly for associative arrays.
 *
 * @param array
 * @param int
 * @return bool
 **/
function krsort($array, $sort_flags) {}

/**
 * Sorts an array by key, maintaining key to data correlations. This is
 * useful mainly for associative arrays.
 *
 * @param array
 * @param int
 * @return bool
 **/
function ksort($array, $sort_flags) {}

/**
 * natcasesort is a case insensitive version of
 * natsort.
 *
 * @param array
 * @return bool
 **/
function natcasesort($array) {}

/**
 * This function implements a sort algorithm that orders alphanumeric strings
 * in the way a human being would while maintaining key/value associations.
 * This is described as a "natural ordering". An example of the difference
 * between this algorithm and the regular computer string sorting algorithms
 * (used in sort) can be seen in the example below.
 *
 * @param array
 * @return bool
 **/
function natsort($array) {}

/**
 * next behaves like
 * current, with one difference. It advances
 * the internal array pointer one place forward before returning the
 * element value. That means it returns the next array value and
 * advances the internal array pointer by one.
 *
 * @param array
 * @return mixed
 **/
function next($array) {}

/**
 * Rewind the internal array pointer.
 *
 * @param array
 * @return mixed
 **/
function prev($array) {}

/**
 * Create an array containing a range of elements.
 *
 * @param mixed
 * @param mixed
 * @param number
 * @return array
 **/
function range($low, $high, $step) {}

/**
 * reset rewinds array's internal
 * pointer to the first element and returns the value of the first array
 * element.
 *
 * @param array
 * @return mixed
 **/
function reset($array) {}

/**
 * This function sorts an array in reverse order (highest to lowest).
 *
 * @param array
 * @param int
 * @return bool
 **/
function rsort($array, $sort_flags) {}

/**
 * This function shuffles (randomizes the order of the elements in) an array.
 *
 * @param array
 * @return bool
 **/
function shuffle($array) {}

/**
 * This function sorts an array. Elements will be arranged from
 * lowest to highest when this function has completed.
 *
 * @param array
 * @param int
 * @return bool
 **/
function sort($array, $sort_flags) {}

/**
 * This function sorts an array such that array indices maintain their
 * correlation with the array elements they are associated with, using a
 * user-defined comparison function.
 *
 * @param array
 * @param callback
 * @return bool
 **/
function uasort($array, $cmp_function) {}

/**
 * uksort will sort the keys of an array using a
 * user-supplied comparison function. If the array you wish to sort
 * needs to be sorted by some non-trivial criteria, you should use
 * this function.
 *
 * @param array
 * @param callback
 * @return bool
 **/
function uksort($array, $cmp_function) {}

/**
 * This function will sort an array by its values using a user-supplied
 * comparison function. If the array you wish to sort needs to be sorted by
 * some non-trivial criteria, you should use this function.
 *
 * @param array
 * @param callback
 * @return bool
 **/
function usort($array, $cmp_function) {}

/**
 * Adds a tag to an existing BBCode_Container tag_set using tag_rules.
 *
 * @param resource
 * @param string
 * @param array
 * @return bool
 **/
function bbcode_add_element($bbcode_container, $tag_name, $tag_rules) {}

/**
 * Adds a smiley to the parser
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function bbcode_add_smiley($bbcode_container, $smiley, $replace_by) {}

/**
 * This function returns a new BBCode Resource used to parse BBCode strings.
 *
 * @param array
 * @return resource
 **/
function bbcode_create($bbcode_initial_tags) {}

/**
 * This function closes the resource opened by bbcode_create.
 *
 * @param resource
 * @return bool
 **/
function bbcode_destroy($bbcode_container) {}

/**
 * This function parse the string to_parse following the rules in the
 * bbcode_container created by bbcode_create
 *
 * @param resource
 * @param string
 * @return string
 **/
function bbcode_parse($bbcode_container, $to_parse) {}

/**
 * Attaches another parser to the bbcode_container.
 * This parser is used only when arguments must be parsed.
 * If this function is not used, the default argument parser
 * is the parser itself.
 *
 * @param resource
 * @param resource
 * @return bool
 **/
function bbcode_set_arg_parser($bbcode_container, $bbcode_arg_parser) {}

/**
 * Set or alter parser options
 *
 * @param resource
 * @param int
 * @param int
 * @return bool
 **/
function bbcode_set_flags($bbcode_container, $flags, $mode) {}

/**
 * Sums left_operand and
 * right_operand.
 *
 * @param string
 * @param string
 * @param int
 * @return string
 **/
function bcadd($left_operand, $right_operand, $scale) {}

/**
 * Compares the left_operand to the
 * right_operand and returns the result as an
 * integer.
 *
 * @param string
 * @param string
 * @param int
 * @return int
 **/
function bccomp($left_operand, $right_operand, $scale) {}

/**
 * Divides the left_operand by the
 * right_operand.
 *
 * @param string
 * @param string
 * @param int
 * @return string
 **/
function bcdiv($left_operand, $right_operand, $scale) {}

/**
 * Get the modulus of the left_operand using
 * modulus.
 *
 * @param string
 * @param string
 * @return string
 **/
function bcmod($left_operand, $modulus) {}

/**
 * Multiply the left_operand by the
 * right_operand.
 *
 * @param string
 * @param string
 * @param int
 * @return string
 **/
function bcmul($left_operand, $right_operand, $scale) {}

/**
 * Raise left_operand to the power 
 * right_operand.
 *
 * @param string
 * @param string
 * @param int
 * @return string
 **/
function bcpow($left_operand, $right_operand, $scale) {}

/**
 * Use the fast-exponentiation method to raise 
 * left_operand to the power
 * right_operand with respect to the modulus
 * modulus.
 *
 * @param string
 * @param string
 * @param string
 * @param int
 * @return string
 **/
function bcpowmod($left_operand, $right_operand, $modulus, $scale) {}

/**
 * Sets the default scale parameter for all subsequent bc math functions that
 * do not explicitly specify a scale parameter.
 *
 * @param int
 * @return bool
 **/
function bcscale($scale) {}

/**
 * Return the square root of the operand.
 *
 * @param string
 * @param int
 * @return string
 **/
function bcsqrt($operand, $scale) {}

/**
 * Subtracts the right_operand from the
 * left_operand.
 *
 * @param string
 * @param string
 * @param int
 * @return string
 **/
function bcsub($left_operand, $right_operand, $scale) {}

/**
 * Reads data from a bcompiler exe file and creates classes from the bytecodes.
 *
 * @param string
 * @return bool
 **/
function bcompiler_load_exe($filename) {}

/**
 * Reads data from a bzcompressed file and creates classes from the bytecodes.
 *
 * @param string
 * @return bool
 **/
function bcompiler_load($filename) {}

/**
 * Reads the bytecodes of a class and calls back to a user function.
 *
 * @param string
 * @param string
 * @return bool
 **/
function bcompiler_parse_class($class, $callback) {}

/**
 * Reads data from a open file handle and creates classes from the bytecodes.
 *
 * @param resource
 * @return bool
 **/
function bcompiler_read($filehandle) {}

/**
 * Reads the bytecodes from PHP for an existing class, and writes them to the
 * open file handle.
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function bcompiler_write_class($filehandle, $className, $extends) {}

/**
 * Reads the bytecodes from PHP for an existing constant, and writes them to
 * the open file handle.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function bcompiler_write_constant($filehandle, $constantName) {}

/**
 * An EXE (or self executable) file consists of 3 parts:
 * 
 * 
 * The stub (executable code, e.g. a compiled C program) that loads PHP
 * interpreter, bcompiler extension, stored Bytecodes and initiates a call
 * for the specified function (e.g. main) or class method (e.g. main::main)
 * 
 * The Bytecodes (uncompressed only for the moment)
 * The bcompiler EXE footer
 *
 * @param resource
 * @param int
 * @return bool
 **/
function bcompiler_write_exe_footer($filehandle, $startpos) {}

/**
 * This function complies specified source file into bytecodes, and writes
 * them to the open file handle.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function bcompiler_write_file($filehandle, $filename) {}

/**
 * Writes the single character \x00 to indicate End of compiled data.
 *
 * @param resource
 * @return bool
 **/
function bcompiler_write_footer($filehandle) {}

/**
 * Reads the bytecodes from PHP for an existing function, and writes them to
 * the open file handle. Order is not important, (eg. if function b uses 
 * function a, and you compile it like the example below, it will work
 * perfectly OK).
 *
 * @param resource
 * @param string
 * @return bool
 **/
function bcompiler_write_function($filehandle, $functionName) {}

/**
 * Searches for all functions declared in the given file, and writes their
 * correspondent bytecodes to the open file handle.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function bcompiler_write_functions_from_file($filehandle, $fileName) {}

/**
 * Writes the header part of a bcompiler file.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function bcompiler_write_header($filehandle, $write_ver) {}

/**
 * @param resource
 * @param string
 * @return bool
 **/
function bcompiler_write_included_filename($filehandle, $filename) {}

/**
 * Closes the given bzip2 file pointer.
 *
 * @param resource
 * @return int
 **/
function bzclose($bz) {}

/**
 * bzcompress compresses the given string and returns
 * it as bzip2 encoded data.
 *
 * @param string
 * @param int
 * @param int
 * @return mixed
 **/
function bzcompress($source, $blocksize, $workfactor) {}

/**
 * bzdecompress decompresses the given string containing
 * bzip2 encoded data.
 *
 * @param string
 * @param int
 * @return mixed
 **/
function bzdecompress($source, $small) {}

/**
 * Returns the error number of any bzip2 error returned by the given file
 * pointer.
 *
 * @param resource
 * @return int
 **/
function bzerrno($bz) {}

/**
 * Returns the error number and error string of any bzip2 error returned by 
 * the given file pointer.
 *
 * @param resource
 * @return array
 **/
function bzerror($bz) {}

/**
 * Gets the error string of any bzip2 error returned by the given file
 * pointer.
 *
 * @param resource
 * @return string
 **/
function bzerrstr($bz) {}

/**
 * Forces a write of all buffered bzip2 data for the file pointer
 * bz.
 *
 * @param resource
 * @return int
 **/
function bzflush($bz) {}

/**
 * bzopen opens a bzip2 (.bz2) file for reading or 
 * writing.
 *
 * @param string
 * @param string
 * @return resource
 **/
function bzopen($filename, $mode) {}

/**
 * bzread reads from the given bzip2 file pointer.
 *
 * @param resource
 * @param int
 * @return string
 **/
function bzread($bz, $length) {}

/**
 * bzwrite writes a string into the given bzip2 file 
 * stream.
 *
 * @param resource
 * @param string
 * @param int
 * @return int
 **/
function bzwrite($bz, $data, $length) {}

/**
 * This function will return the number of days in the
 * month of year for
 * the specified calendar.
 *
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function cal_days_in_month($calendar, $month, $year) {}

/**
 * cal_from_jd converts the Julian day given in
 * jd into a date of the specified
 * calendar. Supported
 * calendar values are
 * CAL_GREGORIAN,
 * CAL_JULIAN,
 * CAL_JEWISH and
 * CAL_FRENCH.
 *
 * @param int
 * @param int
 * @return array
 **/
function cal_from_jd($jd, $calendar) {}

/**
 * cal_info returns information on the
 * specified calendar.
 *
 * @param int
 * @return array
 **/
function cal_info($calendar) {}

/**
 * cal_to_jd calculates the Julian day count
 * for a date in the specified calendar.
 * Supported calendars are
 * CAL_GREGORIAN,
 * CAL_JULIAN,
 * CAL_JEWISH and
 * CAL_FRENCH.
 *
 * @param int
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function cal_to_jd($calendar, $month, $day, $year) {}

/**
 * Returns the Unix timestamp corresponding to midnight on Easter of
 * the given year.
 *
 * @param int
 * @return int
 **/
function easter_date($year) {}

/**
 * Returns the number of days after March 21 on which Easter falls
 * for a given year. If no year is specified, the current year is
 * assumed.
 *
 * @param int
 * @param int
 * @return int
 **/
function easter_days($year, $method) {}

/**
 * Converts a date from the French Republican Calendar to a Julian
 * Day Count.
 *
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function frenchtojd($month, $day, $year) {}

/**
 * Valid Range for Gregorian Calendar 4714 B.C. to 9999 A.D.
 *
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function gregoriantojd($month, $day, $year) {}

/**
 * Returns the day of the week. Can return a string or an integer
 * depending on the mode.
 *
 * @param int
 * @param int
 * @return mixed
 **/
function jddayofweek($julianday, $mode) {}

/**
 * Returns a string containing a month name.
 * mode tells this function which calendar to
 * convert the Julian Day Count to, and what type of month names are
 * to be returned.
 * 
 * Calendar modes
 * 
 * 
 * 
 * Mode
 * Meaning
 * Values
 * 
 * 
 * 
 * 
 * 0
 * Gregorian - abbreviated
 * Jan, Feb, Mar, Apr, May, Jun, Jul, Aug, Sep, Oct, Nov, Dec
 * 
 * 
 * 1
 * Gregorian
 * January, February, March, April, May, June, July, August, September, October, November, December
 * 
 * 
 * 2
 * Julian - abbreviated
 * Jan, Feb, Mar, Apr, May, Jun, Jul, Aug, Sep, Oct, Nov, Dec
 * 
 * 
 * 3
 * Julian
 * January, February, March, April, May, June, July, August, September, October, November, December
 * 
 * 
 * 4
 * Jewish
 * Tishri, Heshvan, Kislev, Tevet, Shevat, AdarI, AdarII, Nisan, Iyyar, Sivan, Tammuz, Av, Elul
 * 
 * 
 * 5
 * French Republican
 * Vendemiaire, Brumaire, Frimaire, Nivose, Pluviose, Ventose, Germinal, Floreal, Prairial, Messidor, Thermidor, Fructidor, Extra
 *
 * @param int
 * @param int
 * @return string
 **/
function jdmonthname($julianday, $mode) {}

/**
 * Converts a Julian Day Count to the French Republican Calendar.
 *
 * @param int
 * @return string
 **/
function jdtofrench($juliandaycount) {}

/**
 * Converts Julian Day Count to a string containing the Gregorian
 * date in the format of "month/day/year".
 *
 * @param int
 * @return string
 **/
function jdtogregorian($julianday) {}

/**
 * Converts a Julian Day Count to the Jewish Calendar.
 *
 * @param int
 * @param bool
 * @param int
 * @return string
 **/
function jdtojewish($juliandaycount, $hebrew, $fl) {}

/**
 * Converts Julian Day Count to a string containing the Julian
 * Calendar Date in the format of "month/day/year".
 *
 * @param int
 * @return string
 **/
function jdtojulian($julianday) {}

/**
 * This function will return a Unix timestamp corresponding to the
 * Julian Day given in jday or if
 * jday is not inside the Unix epoch
 * (Gregorian years between 1970 and 2037 or 2440588 =
 * jday = 2465342 ). The time returned is
 * localtime (and not GMT).
 *
 * @param int
 * @return int
 **/
function jdtounix($jday) {}

/**
 * Although this function can handle dates all the way back to the year 1
 * (3761 B.C.), such use may not be meaningful. The Jewish calendar has
 * been in use for several thousand years, but in the early days there was
 * no formula to determine the start of a month. A new month was started
 * when the new moon was first observed.
 *
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function jewishtojd($month, $day, $year) {}

/**
 * Valid Range for Julian Calendar 4713 B.C. to 9999 A.D.
 *
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function juliantojd($month, $day, $year) {}

/**
 * Return the Julian Day for a Unix timestamp
 * (seconds since 1.1.1970), or for the current day if no
 * timestamp is given.
 *
 * @param int
 * @return int
 **/
function unixtojd($timestamp) {}

/**
 * @param string
 * @return array
 **/
function classkit_import($filename) {}

/**
 * @param string
 * @param string
 * @param string
 * @param string
 * @param int
 * @return bool
 **/
function classkit_method_add($classname, $methodname, $args, $code, $flags) {}

/**
 * @param string
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function classkit_method_copy($dClass, $dMethod, $sClass, $sMethod) {}

/**
 * @param string
 * @param string
 * @param string
 * @param string
 * @param int
 * @return bool
 **/
function classkit_method_redefine($classname, $methodname, $args, $code, $flags) {}

/**
 * @param string
 * @param string
 * @return bool
 **/
function classkit_method_remove($classname, $methodname) {}

/**
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function classkit_method_rename($classname, $methodname, $newname) {}

/**
 * @param string
 * @param object
 * @param array
 * @return mixed
 **/
function call_user_method_array($method_name, $obj, $params) {}

/**
 * @param string
 * @param object
 * @param mixed
 * @return mixed
 **/
function call_user_method($method_name, $obj, $parameter) {}

/**
 * This function checks whether or not the given class has been defined.
 *
 * @param string
 * @param bool
 * @return bool
 **/
function class_exists($class_name, $autoload) {}

/**
 * Gets the class methods names.
 *
 * @param mixed
 * @return array
 **/
function get_class_methods($class_name) {}

/**
 * Get the default properties of the given class.
 *
 * @param string
 * @return array
 **/
function get_class_vars($class_name) {}

/**
 * Gets the name of the class of the given object.
 *
 * @param object
 * @return string
 **/
function get_class($object) {}

/**
 * Gets the declared classes.
 *
 * @return array
 **/
function get_declared_classes() {}

/**
 * Gets the declared interfaces.
 *
 * @return array
 **/
function get_declared_interfaces() {}

/**
 * Gets the accessible non-static properties of the given 
 * object according to scope.
 *
 * @param object
 * @return array
 **/
function get_object_vars($object) {}

/**
 * Retrieves the parent class name for object or class.
 *
 * @param mixed
 * @return string
 **/
function get_parent_class($object) {}

/**
 * Checks if the given interface has been defined.
 *
 * @param string
 * @param bool
 * @return bool
 **/
function interface_exists($interface_name, $autoload) {}

/**
 * Checks if the given object is of this class or has
 * this class as one of its parents.
 *
 * @param object
 * @param string
 * @return bool
 **/
function is_a($object, $class_name) {}

/**
 * Checks if the given object has the class
 * class_name as one of its parents.
 *
 * @param mixed
 * @param string
 * @return bool
 **/
function is_subclass_of($object, $class_name) {}

/**
 * Checks if the class method exists in the given
 * object.
 *
 * @param mixed
 * @param string
 * @return bool
 **/
function method_exists($object, $method_name) {}

/**
 * This function checks if the given property exists in
 * the specified class.
 *
 * @param mixed
 * @param string
 * @return bool
 **/
function property_exists($class, $property) {}

/**
 * Increases the components reference counter.
 *
 * @return void
 **/
function com_addref() {}

/**
 * Generates a Globally Unique Identifier (GUID).
 *
 * @return string
 **/
function com_create_guid() {}

/**
 * Instructs COM to sink events generated by
 * comobject into the PHP object
 * sinkobject.
 *
 * @param variant
 * @param object
 * @param mixed
 * @return bool
 **/
function com_event_sink($comobject, $sinkobject, $sinkinterface) {}

/**
 * com_get_active_object is similar to creating a new
 * instance of a object, except that it will
 * only return an object to your script if the object is already running.
 * OLE applications use something known as the Running Object Table to
 * allow well-known applications to be launched only once; this function
 * exposes the COM library function GetActiveObject() to get a handle on a
 * running instance.
 *
 * @param string
 * @param int
 * @return variant
 **/
function com_get_active_object($progid, $code_page) {}

/**
 * com_invoke invokes the method
 * named function_name of the COM
 * component referenced by com_object.
 * com_invoke returns on error,
 * returns the function_name's return
 * value on success. All the extra parameters
 * function_parameters are passed to
 * the method function_name.
 *
 * @param resource
 * @param string
 * @param mixed
 * @return mixed
 **/
function com_invoke($com_object, $function_name, $function_parameters) {}

/**
 * Checks to see if a COM object can be enumerated using the
 * Next() method hack.
 * See class for more details on these
 * methods.
 *
 * @param variant
 * @return bool
 **/
function com_isenum($com_module) {}

/**
 * Loads a type-library and registers its constants in the engine, as though
 * they were defined using define.
 *
 * @param string
 * @param bool
 * @return bool
 **/
function com_load_typelib($typelib_name, $case_insensitive) {}

/**
 * This function will sleep for up to timeoutms
 * milliseconds, or until a message arrives in the queue.
 *
 * @param int
 * @return bool
 **/
function com_message_pump($timeoutms) {}

/**
 * The purpose of this function is to help generate a skeleton class for use
 * as an event sink. You may also use it to generate a dump of any COM
 * object, provided that it supports enough of the introspection interfaces,
 * and that you know the name of the interface you want to display.
 *
 * @param object
 * @param string
 * @param bool
 * @return bool
 **/
function com_print_typeinfo($comobject, $dispinterface, $wantsink) {}

/**
 * Decreases the components reference counter.
 *
 * @return void
 **/
function com_release() {}

/**
 * Returns the absolute value of a variant.
 *
 * @param mixed
 * @return mixed
 **/
function variant_abs($val) {}

/**
 * Adds left to right using
 * the following rules (taken from the MSDN library), which correspond to
 * those of Visual Basic:
 * 
 * Variant Addition Rules
 * 
 * 
 * 
 * If
 * Then
 * 
 * 
 * 
 * 
 * Both expressions are of the string type
 * Concatenation
 * 
 * 
 * One expression is a string type and the other a
 * character
 * Addition
 * 
 * 
 * One expression is numeric and the other is a string
 * Addition
 * 
 * 
 * Both expressions are numeric
 * Addition
 * 
 * 
 * Either expression is NULL
 * NULL is returned
 * 
 * 
 * Both expressions are empty
 * Integer subtype is returned
 *
 * @param mixed
 * @param mixed
 * @return mixed
 **/
function variant_add($left, $right) {}

/**
 * Performs a bitwise AND operation.
 * Note that this is slightly different from a regular AND operation.
 *
 * @param mixed
 * @param mixed
 * @return mixed
 **/
function variant_and($left, $right) {}

/**
 * This function makes a copy of variant and then
 * performs a variant cast operation to force the copy to have the type
 * given by type.
 *
 * @param variant
 * @param int
 * @return variant
 **/
function variant_cast($variant, $type) {}

/**
 * Concatenates left with
 * right and returns the result.
 *
 * @param mixed
 * @param mixed
 * @return mixed
 **/
function variant_cat($left, $right) {}

/**
 * Compares left with right.
 *
 * @param mixed
 * @param mixed
 * @param int
 * @param int
 * @return int
 **/
function variant_cmp($left, $right, $lcid, $flags) {}

/**
 * Converts timestamp from a unix timestamp value
 * into a variant of type VT_DATE. This allows easier
 * interopability between the unix-ish parts of PHP and COM.
 *
 * @param int
 * @return variant
 **/
function variant_date_from_timestamp($timestamp) {}

/**
 * Converts variant from a VT_DATE
 * (or similar) value into a Unix timestamp. This allows easier
 * interopability between the Unix-ish parts of PHP and COM.
 *
 * @param variant
 * @return int
 **/
function variant_date_to_timestamp($variant) {}

/**
 * Divides left by right and
 * returns the result.
 *
 * @param mixed
 * @param mixed
 * @return mixed
 **/
function variant_div($left, $right) {}

/**
 * Performs a bitwise equivalence on two variants.
 *
 * @param mixed
 * @param mixed
 * @return mixed
 **/
function variant_eqv($left, $right) {}

/**
 * Gets the integer portion of a variant.
 *
 * @param mixed
 * @return mixed
 **/
function variant_fix($variant) {}

/**
 * Returns the type of a variant object.
 *
 * @param variant
 * @return int
 **/
function variant_get_type($variant) {}

/**
 * Converts left and right to
 * integer values, and then performs integer division.
 *
 * @param mixed
 * @param mixed
 * @return mixed
 **/
function variant_idiv($left, $right) {}

/**
 * Performs a bitwise implication operation.
 *
 * @param mixed
 * @param mixed
 * @return mixed
 **/
function variant_imp($left, $right) {}

/**
 * Gets the integer portion of a variant.
 *
 * @param mixed
 * @return mixed
 **/
function variant_int($variant) {}

/**
 * Divides left by right and
 * returns the remainder.
 *
 * @param mixed
 * @param mixed
 * @return mixed
 **/
function variant_mod($left, $right) {}

/**
 * Multiplies left by right.
 *
 * @param mixed
 * @param mixed
 * @return mixed
 **/
function variant_mul($left, $right) {}

/**
 * Performs logical negation of variant.
 *
 * @param mixed
 * @return mixed
 **/
function variant_neg($variant) {}

/**
 * Performs bitwise not negation on variant and
 * returns the result.
 *
 * @param mixed
 * @return mixed
 **/
function variant_not($variant) {}

/**
 * Performs a bitwise OR operation.
 * Note that this is slightly different from a regular OR operation.
 *
 * @param mixed
 * @param mixed
 * @return mixed
 **/
function variant_or($left, $right) {}

/**
 * Returns the result of left to the power of
 * right.
 *
 * @param mixed
 * @param mixed
 * @return mixed
 **/
function variant_pow($left, $right) {}

/**
 * Returns the value of variant rounded to
 * decimals decimal places.
 *
 * @param mixed
 * @param int
 * @return mixed
 **/
function variant_round($variant, $decimals) {}

/**
 * This function is similar to variant_cast except that
 * the variant is modified "in-place"; no new variant is created. The
 * parameters for this function have identical meaning to those of
 * variant_cast.
 *
 * @param variant
 * @param int
 * @return void
 **/
function variant_set_type($variant, $type) {}

/**
 * Converts value to a variant and assigns it to the
 * variant object; no new variant object is created,
 * and the old value of variant is freed/released.
 *
 * @param variant
 * @param mixed
 * @return void
 **/
function variant_set($variant, $value) {}

/**
 * Subtracts right from left.
 *
 * @param mixed
 * @param mixed
 * @return mixed
 **/
function variant_sub($left, $right) {}

/**
 * Performs a logical exclusion.
 *
 * @param mixed
 * @param mixed
 * @return mixed
 **/
function variant_xor($left, $right) {}

/**
 * Performs an obscure check with the given password on the specified
 * dictionary.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function crack_check($dictionary, $password) {}

/**
 * crack_closedict closes the specified
 * dictionary identifier.
 *
 * @param resource
 * @return bool
 **/
function crack_closedict($dictionary) {}

/**
 * crack_getlastmessage returns the message from the
 * last obscure check.
 *
 * @return string
 **/
function crack_getlastmessage() {}

/**
 * crack_opendict opens the specified CrackLib 
 * dictionary for use with
 * crack_check.
 *
 * @param string
 * @return resource
 **/
function crack_opendict($dictionary) {}

/**
 * Checks if all of the characters in the provided string,
 * text, are alphanumeric. In the standard
 * C locale letters are just [A-Za-z].
 *
 * @param string
 * @return bool
 **/
function ctype_alnum($text) {}

/**
 * Checks if all of the characters in the provided string,
 * text, are alphabetic.
 * In the standard C locale letters are just 
 * [A-Za-z] and ctype_alpha is 
 * equivalent to (ctype_upper($text) || ctype_lower($text))
 * if $text is just a single character, but other languages have letters that 
 * are considered neither upper nor lower case.
 *
 * @param string
 * @return bool
 **/
function ctype_alpha($text) {}

/**
 * Checks if all of the characters in the provided string,
 * text, are control characters.
 * Control characters are e.g. line feed, tab, escape.
 *
 * @param string
 * @return bool
 **/
function ctype_cntrl($text) {}

/**
 * Checks if all of the characters in the provided string,
 * text, are numerical.
 *
 * @param string
 * @return bool
 **/
function ctype_digit($text) {}

/**
 * Checks if all of the characters in the provided string,
 * text, creates visible output.
 *
 * @param string
 * @return bool
 **/
function ctype_graph($text) {}

/**
 * Checks if all of the characters in the provided string,
 * text, are lowercase letters.
 *
 * @param string
 * @return bool
 **/
function ctype_lower($text) {}

/**
 * Checks if all of the characters in the provided string,
 * text, are printable.
 *
 * @param string
 * @return bool
 **/
function ctype_print($text) {}

/**
 * Checks if all of the characters in the provided string,
 * text, are punctuation character.
 *
 * @param string
 * @return bool
 **/
function ctype_punct($text) {}

/**
 * Checks if all of the characters in the provided string,
 * text, creates whitespace.
 *
 * @param string
 * @return bool
 **/
function ctype_space($text) {}

/**
 * Checks if all of the characters in the provided string,
 * text, are uppercase characters.
 *
 * @param string
 * @return bool
 **/
function ctype_upper($text) {}

/**
 * Checks if all of the characters in the provided string,
 * text, are hexadecimal 'digits'.
 *
 * @param string
 * @return bool
 **/
function ctype_xdigit($text) {}

/**
 * Closes a cURL session and frees all resources. The cURL handle,
 * ch, is also deleted.
 *
 * @param resource
 * @return void
 **/
function curl_close($ch) {}

/**
 * Copies a cURL handle keeping the same preferences.
 *
 * @param resource
 * @return resource
 **/
function curl_copy_handle($ch) {}

/**
 * Returns the error number for the last cURL operation.
 *
 * @param resource
 * @return int
 **/
function curl_errno($ch) {}

/**
 * Returns a clear text error message for the last cURL operation.
 *
 * @param resource
 * @return string
 **/
function curl_error($ch) {}

/**
 * Execute the given cURL session.
 *
 * @param resource
 * @return mixed
 **/
function curl_exec($ch) {}

/**
 * Gets information about the last transfer,
 *
 * @param resource
 * @param int
 * @return mixed
 **/
function curl_getinfo($ch, $opt) {}

/**
 * Initializes a new session and return a cURL handle for use with the
 * curl_setopt, curl_exec,
 * and curl_close functions.
 *
 * @param string
 * @return resource
 **/
function curl_init($url) {}

/**
 * Adds the ch handle to the multi handle 
 * mh
 *
 * @param resource
 * @param resource
 * @return int
 **/
function curl_multi_add_handle($mh, $ch) {}

/**
 * Closes a set of cURL handles.
 *
 * @param resource
 * @return void
 **/
function curl_multi_close($mh) {}

/**
 * Processes each of the handles in the stack. This method can be called whether or not a handle
 * needs to read or write data.
 *
 * @param resource
 * @param int
 * @return int
 **/
function curl_multi_exec($mh, $still_running) {}

/**
 * If CURLOPT_RETURNTRANSFER is an option that is set for a specific handle, 
 * then this function will return the content of that cURL handle in the form
 * of a string.
 *
 * @param resource
 * @return string
 **/
function curl_multi_getcontent($ch) {}

/**
 * Ask the multi handle if there are any messages/informationals from the individual transfers. 
 * Messages may include informationals such as an error code from the transfer or just the fact 
 * that a transfer is completed.
 *
 * @param resource
 * @param int
 * @return array
 **/
function curl_multi_info_read($mh, $msgs_in_queue) {}

/**
 * Allows the processing of multiple cURL handles in parallel.
 *
 * @return resource
 **/
function curl_multi_init() {}

/**
 * Removes a given ch handle from the given mh
 * handle. When the ch handle has been removed, it is again perfectly 
 * legal to run curl_exec on this handle. Removing a handle while being 
 * used, will effectively halt all transfers in progress.
 *
 * @param resource
 * @param resource
 * @return int
 **/
function curl_multi_remove_handle($mh, $ch) {}

/**
 * Get all the sockets associated with the cURL extension, which can then be "selected".
 *
 * @param resource
 * @param float
 * @return int
 **/
function curl_multi_select($mh, $timeout) {}

/**
 * Sets multiple options for a cURL session. This function is
 * useful for setting a large amount of cURL options without repetitively
 * calling curl_setopt.
 *
 * @param resource
 * @param array
 * @return bool
 **/
function curl_setopt_array($ch, $options) {}

/**
 * Sets an option on the given cURL session handle.
 *
 * @param resource
 * @param int
 * @param mixed
 * @return bool
 **/
function curl_setopt($ch, $option, $value) {}

/**
 * Returns information about the cURL version.
 *
 * @param int
 * @return array
 **/
function curl_version($age) {}

/**
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param int
 * @param int
 * @param string
 * @param string
 * @return void
 **/
function cyrus_authenticate($connection, $mechlist, $service, $user, $minssf, $maxssf, $authname, $password) {}

/**
 * Binds callbacks to a Cyrus IMAP connection.
 *
 * @param resource
 * @param array
 * @return bool
 **/
function cyrus_bind($connection, $callbacks) {}

/**
 * Closes the connection to a Cyrus IMAP server.
 *
 * @param resource
 * @return bool
 **/
function cyrus_close($connection) {}

/**
 * Connects to a Cyrus IMAP server.
 *
 * @param string
 * @param string
 * @param int
 * @return resource
 **/
function cyrus_connect($host, $port, $flags) {}

/**
 * Sends a query to a Cyrus IMAP server.
 *
 * @param resource
 * @param string
 * @return array
 **/
function cyrus_query($connection, $query) {}

/**
 * @param resource
 * @param string
 * @return bool
 **/
function cyrus_unbind($connection, $trigger_name) {}

/**
 * Checks the validity of the date formed by the arguments. A date
 * is considered valid if each parameter is properly defined.
 *
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function checkdate($month, $day, $year) {}

/**
 * Adds the specified DateInterval object to the
 * specified DateTime object.
 *
 * @param DateTime
 * @param DateInterval
 * @return void
 **/
function date_add($object, $interval) {}

/**
 * @param string
 * @param DateTimeZone
 * @return DateTime
 **/
function date_create($time, $timezone) {}

/**
 * @param DateTime
 * @param int
 * @param int
 * @param int
 * @return void
 **/
function date_date_set($object, $year, $month, $day) {}

/**
 * In order of preference, this function returns the default timezone by:
 * 
 * 
 * 
 * Reading the timezone set using the
 * date_default_timezone_set function (if any)
 * 
 * 
 * 
 * 
 * Reading the TZ environment variable (if non empty)
 * 
 * 
 * 
 * 
 * Reading the value of the date.timezone ini option
 * (if set)
 * 
 * 
 * 
 * 
 * Querying the host operating system (if supported and allowed by the OS)
 *
 * @return string
 **/
function date_default_timezone_get() {}

/**
 * date_default_timezone_set sets the default timezone
 * used by all date/time functions.
 *
 * @param string
 * @return bool
 **/
function date_default_timezone_set($timezone_identifier) {}

/**
 * @param DateTime
 * @param string
 * @return string
 **/
function date_format($object, $format) {}

/**
 * @param DateTime
 * @param int
 * @param int
 * @param int
 * @return void
 **/
function date_isodate_set($object, $year, $week, $day) {}

/**
 * @param DateTime
 * @param string
 * @return void
 **/
function date_modify($object, $modify) {}

/**
 * @param DateTime
 * @return int
 **/
function date_offset_get($object) {}

/**
 * @param string
 * @return array
 **/
function date_parse($date) {}

/**
 * Subtracts the specified DateInterval object from the specified DateTime
 * object.
 *
 * @param DateTime
 * @param DateInterval
 * @return void
 **/
function date_sub($object, $interval) {}

/**
 * @param int
 * @param float
 * @param float
 * @return array
 **/
function date_sun_info($time, $latitude, $longitude) {}

/**
 * date_sunrise returns the sunrise time for a given
 * day (specified as a timestamp) and location.
 *
 * @param int
 * @param int
 * @param float
 * @param float
 * @param float
 * @param float
 * @return mixed
 **/
function date_sunrise($timestamp, $format, $latitude, $longitude, $zenith, $gmt_offset) {}

/**
 * date_sunset returns the sunset time for a given
 * day (specified as a timestamp) and location.
 *
 * @param int
 * @param int
 * @param float
 * @param float
 * @param float
 * @param float
 * @return mixed
 **/
function date_sunset($timestamp, $format, $latitude, $longitude, $zenith, $gmt_offset) {}

/**
 * @param DateTime
 * @param int
 * @param int
 * @param int
 * @return void
 **/
function date_time_set($object, $hour, $minute, $second) {}

/**
 * @param DateTime
 * @return DateTimeZone
 **/
function date_timezone_get($object) {}

/**
 * @param DateTime
 * @param DateTimeZone
 * @return void
 **/
function date_timezone_set($object, $timezone) {}

/**
 * Returns a string formatted according to the given format string using the
 * given integer timestamp or the current time
 * if no timestamp is given. In other words, timestamp
 * is optional and defaults to the value of time.
 *
 * @param string
 * @param int
 * @return string
 **/
function date($format, $timestamp) {}

/**
 * Returns an associative array containing the date
 * information of the timestamp, or the current
 * local time if no timestamp is given.
 *
 * @param int
 * @return array
 **/
function getdate($timestamp) {}

/**
 * This is an interface to gettimeofday(2). It returns an
 * associative array containing the data returned from the system
 * call.
 *
 * @param bool
 * @return mixed
 **/
function gettimeofday($return_float) {}

/**
 * Identical to the date function except that
 * the time returned is Greenwich Mean Time (GMT).
 *
 * @param string
 * @param int
 * @return string
 **/
function gmdate($format, $timestamp) {}

/**
 * Identical to mktime except the passed parameters represents a 
 * GMT date. gmmktime internally uses mktime
 * so only times valid in derived local time can be used.
 *
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function gmmktime($hour, $minute, $second, $month, $day, $year, $is_dst) {}

/**
 * Behaves the same as strftime except that the
 * time returned is Greenwich Mean Time (GMT). For example, when run
 * in Eastern Standard Time (GMT -0500), the first line below prints
 * "Dec 31 1998 20:00:00", while the second prints "Jan 01 1999
 * 01:00:00".
 *
 * @param string
 * @param int
 * @return string
 **/
function gmstrftime($format, $timestamp) {}

/**
 * Returns a number formatted according to the given format string using the
 * given integer timestamp or the current local time
 * if no timestamp is given. In other words, timestamp
 * is optional and defaults to the value of time.
 *
 * @param string
 * @param int
 * @return int
 **/
function idate($format, $timestamp) {}

/**
 * The localtime function returns an array
 * identical to that of the structure returned by the C function
 * call.
 *
 * @param int
 * @param bool
 * @return array
 **/
function localtime($timestamp, $is_associative) {}

/**
 * microtime returns the current Unix timestamp with
 * microseconds. This function is only available on operating systems that
 * support the gettimeofday() system call.
 *
 * @param bool
 * @return mixed
 **/
function microtime($get_as_float) {}

/**
 * Returns the Unix timestamp corresponding to the arguments
 * given. This timestamp is a long integer containing the number of
 * seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time
 * specified.
 *
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function mktime($hour, $minute, $second, $month, $day, $year, $is_dst) {}

/**
 * Format a local time/date according to locale settings. Month and weekday
 * names and other language dependent strings respect the current locale set
 * with setlocale.
 *
 * @param string
 * @param int
 * @return string
 **/
function strftime($format, $timestamp) {}

/**
 * strptime returns an array with the
 * date parsed, or on error.
 *
 * @param string
 * @param string
 * @return array
 **/
function strptime($date, $format) {}

/**
 * This function will use the TZ environment variable (if
 * available) to calculate the timestamp. Since PHP 5.1.0 there are easier
 * ways to define the timezone that is used across all date/time functions.
 * That process is explained in the
 * date_default_timezone_get function page.
 *
 * @param string
 * @param int
 * @return int
 **/
function strtotime($time, $now) {}

/**
 * Returns the current time measured in the number of seconds since
 * the Unix Epoch (January 1 1970 00:00:00 GMT).
 *
 * @return int
 **/
function time() {}

/**
 * @return array
 **/
function timezone_abbreviations_list() {}

/**
 * @return array
 **/
function timezone_identifiers_list() {}

/**
 * @param string
 * @param int
 * @param int
 * @return string
 **/
function timezone_name_from_abbr($abbr, $gmtOffset, $isdst) {}

/**
 * @param DateTimeZone
 * @return string
 **/
function timezone_name_get($object) {}

/**
 * This function returns the offset to GMT for the date/time specified in the
 * datetime parameter. The GMT offset is calculated
 * with the timezone information contained in the DateTime object being used.
 *
 * @param DateTimeZone
 * @param DateTime
 * @return int
 **/
function timezone_offset_get($object, $datetime) {}

/**
 * @param string
 * @return DateTimeZone
 **/
function timezone_open($timezone) {}

/**
 * @param DateTimeZone
 * @return array
 **/
function timezone_transitions_get($object) {}

/**
 * dba_close closes the established database and frees
 * all resources of the specified database handle.
 *
 * @param resource
 * @return void
 **/
function dba_close($handle) {}

/**
 * dba_delete deletes the specified entry from the database.
 *
 * @param string
 * @param resource
 * @return bool
 **/
function dba_delete($key, $handle) {}

/**
 * dba_exists checks whether the specified
 * key exists in the database.
 *
 * @param string
 * @param resource
 * @return bool
 **/
function dba_exists($key, $handle) {}

/**
 * dba_fetch fetches the data specified by
 * key from the database specified with
 * handle.
 *
 * @param string
 * @param resource
 * @return string
 **/
function dba_fetch($key, $handle) {}

/**
 * dba_firstkey returns the first key of the database
 * and resets the internal key pointer. This permits a linear search through
 * the whole database.
 *
 * @param resource
 * @return string
 **/
function dba_firstkey($handle) {}

/**
 * dba_handlers list all the handlers supported by this
 * extension.
 *
 * @param bool
 * @return array
 **/
function dba_handlers($full_info) {}

/**
 * dba_insert inserts the entry described with
 * key and value into the
 * database.
 *
 * @param string
 * @param string
 * @param resource
 * @return bool
 **/
function dba_insert($key, $value, $handle) {}

/**
 * dba_key_split splits a key (string representation)
 * into an array representation.
 *
 * @param mixed
 * @return mixed
 **/
function dba_key_split($key) {}

/**
 * dba_list list all open database files.
 *
 * @return array
 **/
function dba_list() {}

/**
 * dba_nextkey returns the next key of the database
 * and advances the internal key pointer.
 *
 * @param resource
 * @return string
 **/
function dba_nextkey($handle) {}

/**
 * dba_open establishes a database instance for
 * path with mode using
 * handler.
 *
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function dba_open($path, $mode, $handler) {}

/**
 * dba_optimize optimizes the underlying database.
 *
 * @param resource
 * @return bool
 **/
function dba_optimize($handle) {}

/**
 * dba_popen establishes a persistent database instance
 * for path with mode using
 * handler.
 *
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function dba_popen($path, $mode, $handler) {}

/**
 * dba_replace replaces or inserts the entry described
 * with key and value into the
 * database specified by handle.
 *
 * @param string
 * @param string
 * @param resource
 * @return bool
 **/
function dba_replace($key, $value, $handle) {}

/**
 * dba_sync synchronizes the database. This will probably 
 * trigger a physical write to the disk, if supported.
 *
 * @param resource
 * @return bool
 **/
function dba_sync($handle) {}

/**
 * Adds the given data to the database.
 *
 * @param int
 * @param array
 * @return bool
 **/
function dbase_add_record($dbase_identifier, $record) {}

/**
 * Closes the given database link identifier.
 *
 * @param int
 * @return bool
 **/
function dbase_close($dbase_identifier) {}

/**
 * dbase_create creates a dBase database with the given
 * definition.
 *
 * @param string
 * @param array
 * @return int
 **/
function dbase_create($filename, $fields) {}

/**
 * Marks the given record to be deleted from the database.
 *
 * @param int
 * @param int
 * @return bool
 **/
function dbase_delete_record($dbase_identifier, $record_number) {}

/**
 * Returns information on the column structure of the given database link
 * identifier.
 *
 * @param int
 * @return array
 **/
function dbase_get_header_info($dbase_identifier) {}

/**
 * Gets a record from a dBase database as an associative array.
 *
 * @param int
 * @param int
 * @return array
 **/
function dbase_get_record_with_names($dbase_identifier, $record_number) {}

/**
 * Gets a record from a database as an indexed array.
 *
 * @param int
 * @param int
 * @return array
 **/
function dbase_get_record($dbase_identifier, $record_number) {}

/**
 * Gets the number of fields (columns) in the specified database.
 *
 * @param int
 * @return int
 **/
function dbase_numfields($dbase_identifier) {}

/**
 * Gets the number of records (rows) in the specified database.
 *
 * @param int
 * @return int
 **/
function dbase_numrecords($dbase_identifier) {}

/**
 * dbase_open opens a dBase database with the given
 * access mode.
 *
 * @param string
 * @param int
 * @return int
 **/
function dbase_open($filename, $mode) {}

/**
 * Packs the specified database by permanently deleting all records marked
 * for deletion using dbase_delete_record.
 *
 * @param int
 * @return bool
 **/
function dbase_pack($dbase_identifier) {}

/**
 * Replaces the given record in the database with the given data.
 *
 * @param int
 * @param array
 * @param int
 * @return bool
 **/
function dbase_replace_record($dbase_identifier, $record, $record_number) {}

/**
 * Adds a tuple to a relation.
 *
 * @param resource
 * @param array
 * @return int
 **/
function dbplus_add($relation, $tuple) {}

/**
 * Executes an AQL query on the given
 * server and dbpath.
 *
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function dbplus_aql($query, $server, $dbpath) {}

/**
 * Changes the virtual current directory where relation files will be looked
 * for by dbplus_open.
 *
 * @param string
 * @return string
 **/
function dbplus_chdir($newdir) {}

/**
 * Closes a relation previously opened by dbplus_open.
 *
 * @param resource
 * @return mixed
 **/
function dbplus_close($relation) {}

/**
 * Reads the data for the current tuple for the given
 * relation.
 *
 * @param resource
 * @param array
 * @return int
 **/
function dbplus_curr($relation, $tuple) {}

/**
 * Returns a clear error string for the given error code.
 *
 * @param int
 * @return string
 **/
function dbplus_errcode($errno) {}

/**
 * Returns the error code returned by the last db++ operation.
 *
 * @return int
 **/
function dbplus_errno() {}

/**
 * Places a constraint on the given relation.
 *
 * @param resource
 * @param array
 * @param mixed
 * @return int
 **/
function dbplus_find($relation, $constraints, $tuple) {}

/**
 * Reads the data for the first tuple for the given
 * relation, makes it the current tuple and pass it
 * back as an associative array in tuple.
 *
 * @param resource
 * @param array
 * @return int
 **/
function dbplus_first($relation, $tuple) {}

/**
 * Writes all changes applied to relation since the
 * last flush to disk.
 *
 * @param resource
 * @return int
 **/
function dbplus_flush($relation) {}

/**
 * Frees all tuple locks held by this client.
 *
 * @return int
 **/
function dbplus_freealllocks() {}

/**
 * Releases a write lock on the given tuple previously
 * obtained by dbplus_getlock.
 *
 * @param resource
 * @param string
 * @return int
 **/
function dbplus_freelock($relation, $tuple) {}

/**
 * Frees all tuple locks held on the given relation.
 *
 * @param resource
 * @return int
 **/
function dbplus_freerlocks($relation) {}

/**
 * Requests a write lock on the specified tuple.
 *
 * @param resource
 * @param string
 * @return int
 **/
function dbplus_getlock($relation, $tuple) {}

/**
 * Obtains a number guaranteed to be unique for the given
 * relation and will pass it back in the variable
 * given as uniqueid.
 *
 * @param resource
 * @param int
 * @return int
 **/
function dbplus_getunique($relation, $uniqueid) {}

/**
 * @param resource
 * @param string
 * @param array
 * @return int
 **/
function dbplus_info($relation, $key, $result) {}

/**
 * Reads the data for the last tuple for the given
 * relation, makes it the current tuple and pass it
 * back as an associative array in tuple.
 *
 * @param resource
 * @param array
 * @return int
 **/
function dbplus_last($relation, $tuple) {}

/**
 * Requests a write lock on the given relation.
 *
 * @param resource
 * @return int
 **/
function dbplus_lockrel($relation) {}

/**
 * Reads the data for the next tuple for the given
 * relation, makes it the current tuple and will pass
 * it back as an associative array in tuple.
 *
 * @param resource
 * @param array
 * @return int
 **/
function dbplus_next($relation, $tuple) {}

/**
 * Opens the given relation file.
 *
 * @param string
 * @return resource
 **/
function dbplus_open($name) {}

/**
 * Reads the data for the previous tuple for the given
 * relation, makes it the current tuple and will pass
 * it back as an associative array in tuple.
 *
 * @param resource
 * @param array
 * @return int
 **/
function dbplus_prev($relation, $tuple) {}

/**
 * Changes access permissions as specified by mask,
 * user and group. The
 * values for these are operating system specific.
 *
 * @param resource
 * @param int
 * @param string
 * @param string
 * @return int
 **/
function dbplus_rchperm($relation, $mask, $user, $group) {}

/**
 * Creates a new relation. Any existing relation sharing the same
 * name will be overwritten if the relation is
 * currently not in use and overwrite is set to TRUE.
 *
 * @param string
 * @param mixed
 * @param bool
 * @return resource
 **/
function dbplus_rcreate($name, $domlist, $overwrite) {}

/**
 * dbplus_rcrtexact will create an exact but
 * empty copy of the given relation under a
 * new name.
 *
 * @param string
 * @param resource
 * @param bool
 * @return mixed
 **/
function dbplus_rcrtexact($name, $relation, $overwrite) {}

/**
 * dbplus_rcrtexact will create an empty copy
 * of the given relation under a new
 * name, but with default indices.
 *
 * @param string
 * @param resource
 * @param int
 * @return mixed
 **/
function dbplus_rcrtlike($name, $relation, $overwrite) {}

/**
 * dbplus_resolve will try to resolve the given
 * relation_name and find out internal server
 * id, real hostname and the database path on this host.
 *
 * @param string
 * @return array
 **/
function dbplus_resolve($relation_name) {}

/**
 * @param resource
 * @param array
 * @return int
 **/
function dbplus_restorepos($relation, $tuple) {}

/**
 * dbplus_rkeys will replace the current
 * primary key for relation with the
 * combination of domains specified by domlist.
 *
 * @param resource
 * @param mixed
 * @return mixed
 **/
function dbplus_rkeys($relation, $domlist) {}

/**
 * dbplus_ropen will open the relation
 * file locally for quick access without any
 * client/server overhead. Access is read only and only
 * dbplus_current and
 * dbplus_next may be applied to the returned
 * relation.
 *
 * @param string
 * @return resource
 **/
function dbplus_ropen($name) {}

/**
 * dbplus_rquery performs a local (raw) AQL
 * query using an AQL interpreter embedded into the db++ client
 * library. dbplus_rquery is faster than
 * dbplus_aql but will work on local data only.
 *
 * @param string
 * @param string
 * @return resource
 **/
function dbplus_rquery($query, $dbpath) {}

/**
 * dbplus_rrename will change the name of
 * relation to name.
 *
 * @param resource
 * @param string
 * @return int
 **/
function dbplus_rrename($relation, $name) {}

/**
 * dbplus_rsecindex will create a new secondary
 * index for relation with consists of the
 * domains specified by domlist and is of
 * type type
 *
 * @param resource
 * @param mixed
 * @param int
 * @return mixed
 **/
function dbplus_rsecindex($relation, $domlist, $type) {}

/**
 * dbplus_unlink will close and remove the
 * relation.
 *
 * @param resource
 * @return int
 **/
function dbplus_runlink($relation) {}

/**
 * dbplus_rzap will remove all tuples from
 * relation.
 *
 * @param resource
 * @return int
 **/
function dbplus_rzap($relation) {}

/**
 * @param resource
 * @return int
 **/
function dbplus_savepos($relation) {}

/**
 * @param resource
 * @param string
 * @return int
 **/
function dbplus_setindex($relation, $idx_name) {}

/**
 * @param resource
 * @param int
 * @return int
 **/
function dbplus_setindexbynumber($relation, $idx_number) {}

/**
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function dbplus_sql($query, $server, $dbpath) {}

/**
 * A db++ server will prepare a TCL interpreter for each client
 * connection. This interpreter will enable the server to execute
 * TCL code provided by the client as a sort of stored procedures to
 * improve the performance of database operations by avoiding
 * client/server data transfers and context switches.
 *
 * @param int
 * @param string
 * @return string
 **/
function dbplus_tcl($sid, $script) {}

/**
 * dbplus_tremove removes
 * tuple from relation
 * if it perfectly matches a tuple within the
 * relation. current, if given, will contain
 * the data of the new current tuple after calling
 * dbplus_tremove.
 *
 * @param resource
 * @param array
 * @param array
 * @return int
 **/
function dbplus_tremove($relation, $tuple, $current) {}

/**
 * @param resource
 * @return int
 **/
function dbplus_undo($relation) {}

/**
 * @param resource
 * @return int
 **/
function dbplus_undoprepare($relation) {}

/**
 * Release a write lock previously obtained by
 * dbplus_lockrel.
 *
 * @param resource
 * @return int
 **/
function dbplus_unlockrel($relation) {}

/**
 * Calling dbplus_unselect will remove a
 * constraint previously set by dbplus_find on
 * relation.
 *
 * @param resource
 * @return int
 **/
function dbplus_unselect($relation) {}

/**
 * dbplus_update replaces the old
 * tuple with the data from the new one, only if the
 * old completely matches a tuple within
 * relation.
 *
 * @param resource
 * @param array
 * @param array
 * @return int
 **/
function dbplus_update($relation, $old, $new) {}

/**
 * Request an exclusive lock on relation preventing
 * even read access from other clients.
 *
 * @param resource
 * @return int
 **/
function dbplus_xlockrel($relation) {}

/**
 * Releases an exclusive lock previously obtained by
 * dbplus_xlockrel.
 *
 * @param resource
 * @return int
 **/
function dbplus_xunlockrel($relation) {}

/**
 * @param object
 * @return int
 **/
function dbx_close($link_identifier) {}

/**
 * dbx_compare is a helper function for 
 * dbx_sort to ease the make and use of the custom 
 * sorting function.
 *
 * @param array
 * @param array
 * @param string
 * @param int
 * @return int
 **/
function dbx_compare($row_a, $row_b, $column_key, $flags) {}

/**
 * Opens a connection to a database.
 *
 * @param mixed
 * @param string
 * @param string
 * @param string
 * @param string
 * @param int
 * @return object
 **/
function dbx_connect($module, $host, $database, $username, $password, $persistent) {}

/**
 * dbx_error returns the last error message.
 *
 * @param object
 * @return string
 **/
function dbx_error($link_identifier) {}

/**
 * Escape the given string so that it can safely be used in an sql-statement.
 *
 * @param object
 * @param string
 * @return string
 **/
function dbx_escape_string($link_identifier, $text) {}

/**
 * dbx_fetch_row fetches rows from a result identifier
 * that had the DBX_RESULT_UNBUFFERED flag set.
 *
 * @param object
 * @return mixed
 **/
function dbx_fetch_row($result_identifier) {}

/**
 * Sends a query and fetch all results.
 *
 * @param object
 * @param string
 * @param int
 * @return mixed
 **/
function dbx_query($link_identifier, $sql_statement, $flags) {}

/**
 * Sort a result from a dbx_query call with a custom sort
 * function.
 *
 * @param object
 * @param string
 * @return bool
 **/
function dbx_sort($result, $user_compare_function) {}

/**
 * The function dio_close closes the file descriptor
 * fd.
 *
 * @param resource
 * @return void
 **/
function dio_close($fd) {}

/**
 * The dio_fcntl function performs the
 * operation specified by cmd on the file
 * descriptor fd. Some commands require
 * additional arguments args to be supplied.
 *
 * @param resource
 * @param int
 * @param mixed
 * @return mixed
 **/
function dio_fcntl($fd, $cmd, $args) {}

/**
 * dio_open opens a file and returns a new file
 * descriptor for it.
 *
 * @param string
 * @param int
 * @param int
 * @return resource
 **/
function dio_open($filename, $flags, $mode) {}

/**
 * The function dio_read reads and returns
 * len bytes from file with descriptor
 * fd.
 *
 * @param resource
 * @param int
 * @return string
 **/
function dio_read($fd, $len) {}

/**
 * The function dio_seek is used to change the
 * file position of the given file descriptor.
 *
 * @param resource
 * @param int
 * @param int
 * @return int
 **/
function dio_seek($fd, $pos, $whence) {}

/**
 * dio_stat returns information about the given file
 * descriptor.
 *
 * @param resource
 * @return array
 **/
function dio_stat($fd) {}

/**
 * dio_tcsetattr sets the terminal attributes and baud
 * rate of the open fd.
 *
 * @param resource
 * @param array
 * @return bool
 **/
function dio_tcsetattr($fd, $options) {}

/**
 * dio_truncate truncates a file to at most 
 * offset bytes in size.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function dio_truncate($fd, $offset) {}

/**
 * dio_write writes up to len 
 * bytes from data to file fd.
 *
 * @param resource
 * @param string
 * @param int
 * @return int
 **/
function dio_write($fd, $data, $len) {}

/**
 * Changes PHP's current directory to 
 * directory.
 *
 * @param string
 * @return bool
 **/
function chdir($directory) {}

/**
 * Changes the root directory of the current process to
 * directory.
 *
 * @param string
 * @return bool
 **/
function chroot($directory) {}

/**
 * Closes the directory stream indicated by
 * dir_handle. The stream must have previously
 * been opened by opendir.
 *
 * @param resource
 * @return void
 **/
function closedir($dir_handle) {}

/**
 * Gets the current working directory.
 *
 * @return string
 **/
function getcwd() {}

/**
 * Opens up a directory handle to be used in subsequent
 * closedir, readdir, and
 * rewinddir calls.
 *
 * @param string
 * @param resource
 * @return resource
 **/
function opendir($path, $context) {}

/**
 * Returns the filename of the next file from the directory. The
 * filenames are returned in the order in which they are stored by
 * the filesystem.
 *
 * @param resource
 * @return string
 **/
function readdir($dir_handle) {}

/**
 * Resets the directory stream indicated by
 * dir_handle to the beginning of the
 * directory.
 *
 * @param resource
 * @return void
 **/
function rewinddir($dir_handle) {}

/**
 * Returns an array of files and directories from the
 * directory.
 *
 * @param string
 * @param int
 * @param resource
 * @return array
 **/
function scandir($directory, $sorting_order, $context) {}

/**
 * This function takes the node node of class
 * SimpleXML and makes it into a
 * DOMElement node. This new object can then be used
 * as a native DOMElement node.
 *
 * @param SimpleXMLElement
 * @return DOMElement
 **/
function dom_import_simplexml($node) {}

/**
 * Creates a new Dom document from scratch and returns it.
 *
 * @param string
 * @return DomDocument
 **/
function domxml_new_doc($version) {}

/**
 * The function parses the XML document in the given file.
 *
 * @param string
 * @param int
 * @param array
 * @return DomDocument
 **/
function domxml_open_file($filename, $mode, $error) {}

/**
 * The function parses the XML document in the given string.
 *
 * @param string
 * @param int
 * @param array
 * @return DomDocument
 **/
function domxml_open_mem($str, $mode, $error) {}

/**
 * Gets the version of the XML library currently used.
 *
 * @return string
 **/
function domxml_version() {}

/**
 * The function parses the XML document in str and
 * returns a tree PHP objects as the parsed document.
 *
 * @param string
 * @return DomDocument
 **/
function domxml_xmltree($str) {}

/**
 * Creates a DomXsltStylesheet object from the given
 * XSL document.
 *
 * @param DomDocument
 * @return DomXsltStylesheet
 **/
function domxml_xslt_stylesheet_doc($xsl_doc) {}

/**
 * Creates a DomXsltStylesheet object from the given
 * XSL file.
 *
 * @param string
 * @return DomXsltStylesheet
 **/
function domxml_xslt_stylesheet_file($xsl_file) {}

/**
 * Creates a DomXsltStylesheet object from the given
 * XSL buffer.
 *
 * @param string
 * @return DomXsltStylesheet
 **/
function domxml_xslt_stylesheet($xsl_buf) {}

/**
 * Gets the XSLT library version.
 *
 * @return int
 **/
function domxml_xslt_version() {}

/**
 * xpath_eval_expression Example
 *
 * @param XPathContext
 * @param string
 * @param domnode
 * @return XPathObject
 **/
function xpath_eval_expression($xpath_context, $expression, $contextnode) {}

/**
 * The optional contextnode can be specified for doing relative XPath queries.
 *
 * @param XPathContext
 * @param string
 * @param domnode
 * @return XPathObject
 **/
function xpath_eval($xpath_context, $xpath_expression, $contextnode) {}

/**
 * Creates a new xpath context.
 *
 * @param domdocument
 * @return XPathContext
 **/
function xpath_new_context($dom_document) {}

/**
 * @param XPathContext
 * @param object
 * @return bool
 **/
function xpath_register_ns_auto($xpath_context, $context_node) {}

/**
 * @param XPathContext
 * @param string
 * @param string
 * @return bool
 **/
function xpath_register_ns($xpath_context, $prefix, $uri) {}

/**
 * @param XPathContext
 * @param string
 * @param domnode
 * @return int
 **/
function xptr_eval($xpath_context, $eval_str, $contextnode) {}

/**
 * @return XPathContext
 **/
function xptr_new_context() {}

/**
 * @param string
 * @param string
 * @param int
 * @return int
 **/
function dotnet_load($assembly_name, $datatype_name, $codepage) {}

/**
 * Enumerates the Enchant providers and tells you some rudimentary
 * information about them. The same info is provided through phpinfo().
 *
 * @param resource
 * @return array
 **/
function enchant_broker_describe($broker) {}

/**
 * Tells if a dictionary exists or not, using a non-empty tags
 *
 * @param resource
 * @param string
 * @return bool
 **/
function enchant_broker_dict_exists($broker, $tag) {}

/**
 * Free a dictionary resource.
 *
 * @param resource
 * @return bool
 **/
function enchant_broker_free_dict($dict) {}

/**
 * Free a broker resource with all its dictionaries.
 *
 * @param resource
 * @return bool
 **/
function enchant_broker_free($broker) {}

/**
 * Returns the last error which occurred in this broker.
 *
 * @param resource
 * @return string
 **/
function enchant_broker_get_error($broker) {}

/**
 * @return resource
 **/
function enchant_broker_init() {}

/**
 * Returns a list of available dictionaries with their details.
 *
 * @param resource
 * @return mixed
 **/
function enchant_broker_list_dicts($broker) {}

/**
 * create a new dictionary using tag, the non-empty language tag you
 * wish to request a dictionary for ("en_US", "de_DE", ...)
 *
 * @param resource
 * @param string
 * @return resource
 **/
function enchant_broker_request_dict($broker, $tag) {}

/**
 * creates a dictionary using a PWL file. A PWL file is personal word file one word per line.
 *
 * @param resource
 * @param string
 * @return resource
 **/
function enchant_broker_request_pwl_dict($broker, $filename) {}

/**
 * Declares a preference of dictionaries to use for the language
 * described/referred to by 'tag'. The ordering is a comma delimited
 * list of provider names. As a special exception, the "*" tag can
 * be used as a language tag to declare a default ordering for any
 * language that does not explicitly declare an ordering.
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function enchant_broker_set_ordering($broker, $tag, $ordering) {}

/**
 * Add a word to personal word list of the given dictionary.
 *
 * @param resource
 * @param string
 * @return void
 **/
function enchant_dict_add_to_personal($dict, $word) {}

/**
 * Add a word to the given dictionary. It will be added only for the
 * active spell-checking session.
 *
 * @param resource
 * @param string
 * @return void
 **/
function enchant_dict_add_to_session($dict, $word) {}

/**
 * If the word is correctly spelled return , otherwise return
 *
 * @param resource
 * @param string
 * @return bool
 **/
function enchant_dict_check($dict, $word) {}

/**
 * Returns the details of the dictionary.
 *
 * @param resource
 * @return mixed
 **/
function enchant_dict_describe($dict) {}

/**
 * Returns the last error of the current spelling-session
 *
 * @param resource
 * @return string
 **/
function enchant_dict_get_error($dict) {}

/**
 * Tells whether or not a word already exists in the current session.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function enchant_dict_is_in_session($dict, $word) {}

/**
 * If the word is correctly spelled return , otherwise return , if suggestions variable
 * is provided, fill it with spelling alternatives.
 *
 * @param resource
 * @param string
 * @param array
 * @return bool
 **/
function enchant_dict_quick_check($dict, $word, $suggestions) {}

/**
 * Add a correction for 'mis' using 'cor'.
 * Notes that you replaced @mis with @cor, so it's possibly more likely
 * that future occurrences of @mis will be replaced with @cor. So it might
 * bump @cor up in the suggestion list.
 *
 * @param resource
 * @param string
 * @param string
 * @return void
 **/
function enchant_dict_store_replacement($dict, $mis, $cor) {}

/**
 * @param resource
 * @param string
 * @return array
 **/
function enchant_dict_suggest($dict, $word) {}

/**
 * debug_backtrace generates a PHP backtrace.
 *
 * @param bool
 * @return array
 **/
function debug_backtrace($provide_object) {}

/**
 * debug_print_backtrace prints a PHP backtrace. It
 * prints the function calls, included/required files and
 * evaled stuff.
 *
 * @return void
 **/
function debug_print_backtrace() {}

/**
 * Gets information about the last error that occured.
 *
 * @return array
 **/
function error_get_last() {}

/**
 * Sends an error message to the web server's error log, a
 * TCP port or to a file.
 *
 * @param string
 * @param int
 * @param string
 * @param string
 * @return bool
 **/
function error_log($message, $message_type, $destination, $extra_headers) {}

/**
 * The error_reporting function sets the
 * error_reporting
 * directive at runtime. PHP has many levels of errors, using
 * this function sets that level for the duration (runtime) of
 * your script.
 *
 * @param int
 * @return int
 **/
function error_reporting($level) {}

/**
 * Used after changing the error handler function using
 * set_error_handler, to revert to the previous error
 * handler (which could be the built-in or a user defined function).
 *
 * @return bool
 **/
function restore_error_handler() {}

/**
 * Used after changing the exception handler function using
 * set_exception_handler, to revert to the previous
 * exception handler (which could be the built-in or a user defined
 * function).
 *
 * @return bool
 **/
function restore_exception_handler() {}

/**
 * Sets a user function (error_handler) to handle
 * errors in a script.
 *
 * @param callback
 * @param int
 * @return mixed
 **/
function set_error_handler($error_handler, $error_types) {}

/**
 * Sets the default exception handler if an exception is not caught within a
 * try/catch block. Execution will stop after the
 * exception_handler is called.
 *
 * @param callback
 * @return string
 **/
function set_exception_handler($exception_handler) {}

/**
 * Used to trigger a user error condition, it can be used by in conjunction
 * with the built-in error handler, or with a user defined function that has
 * been set as the new error handler
 * (set_error_handler).
 *
 * @param string
 * @param int
 * @return bool
 **/
function trigger_error($error_msg, $error_type) {}

/**
 * escapeshellarg adds single quotes around a string
 * and quotes/escapes any existing single quotes allowing you to pass a
 * string directly to a shell function and having it be treated as a single
 * safe argument. This function should be used to escape individual
 * arguments to shell functions coming from user input. The shell functions
 * include exec, system and the
 * backtick operator.
 *
 * @param string
 * @return string
 **/
function escapeshellarg($arg) {}

/**
 * escapeshellcmd escapes any characters in a
 * string that might be used to trick a shell command into executing
 * arbitrary commands. This function should be used to make sure
 * that any data coming from user input is escaped before this data
 * is passed to the exec or
 * system functions, or to the backtick
 * operator.
 *
 * @param string
 * @return string
 **/
function escapeshellcmd($command) {}

/**
 * exec executes the given
 * command.
 *
 * @param string
 * @param array
 * @param int
 * @return string
 **/
function exec($command, $output, $return_var) {}

/**
 * The passthru function is similar to the
 * exec function in that it executes a
 * command. This function
 * should be used in place of exec or
 * system when the output from the Unix command
 * is binary data which needs to be passed directly back to the
 * browser. A common use for this is to execute something like the
 * pbmplus utilities that can output an image stream directly. By
 * setting the Content-type to image/gif and
 * then calling a pbmplus program to output a gif, you can create
 * PHP scripts that output images directly.
 *
 * @param string
 * @param int
 * @return void
 **/
function passthru($command, $return_var) {}

/**
 * proc_close is similar to pclose
 * except that it only works on processes opened by
 * proc_open.
 * proc_close waits for the process to terminate, and
 * returns its exit code. If you have open pipes to that process, you
 * should fclose them prior to calling this function in
 * order to avoid a deadlock - the child process may not be able to exit
 * while the pipes are open.
 *
 * @param resource
 * @return int
 **/
function proc_close($process) {}

/**
 * proc_get_status fetches data about a
 * process opened using proc_open.
 *
 * @param resource
 * @return array
 **/
function proc_get_status($process) {}

/**
 * proc_nice changes the priority of the current
 * process by the amount specified in increment. A
 * positive increment will lower the priority of the
 * current process, whereas a negative increment
 * will raise the priority.
 *
 * @param int
 * @return bool
 **/
function proc_nice($increment) {}

/**
 * proc_open is similar to popen
 * but provides a much greater degree of control over the program execution.
 *
 * @param string
 * @param array
 * @param array
 * @param string
 * @param array
 * @param array
 * @return resource
 **/
function proc_open($cmd, $descriptorspec, $pipes, $cwd, $env, $other_options) {}

/**
 * Signals a process (created using
 * proc_open) that it should terminate.
 * proc_terminate returns immediately and does not wait
 * for the process to terminate.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function proc_terminate($process, $signal) {}

/**
 * This function is identical to the backtick operator.
 *
 * @param string
 * @return string
 **/
function shell_exec($cmd) {}

/**
 * system is just like the C version of the
 * function in that it executes the given
 * command and outputs the result.
 *
 * @param string
 * @param int
 * @return string
 **/
function system($command, $return_var) {}

/**
 * exif_imagetype reads the first bytes of an image and
 * checks its signature.
 *
 * @param string
 * @return int
 **/
function exif_imagetype($filename) {}

/**
 * exif_read_data reads the
 * EXIF headers from a JPEG or 
 * TIFF image file. This way you can read meta data 
 * generated by digital cameras.
 *
 * @param string
 * @param string
 * @param bool
 * @param bool
 * @return array
 **/
function exif_read_data($filename, $sections, $arrays, $thumbnail) {}

/**
 * @param string
 * @return string
 **/
function exif_tagname($index) {}

/**
 * exif_thumbnail reads the embedded thumbnail of a 
 * TIFF or JPEG image.
 *
 * @param string
 * @param int
 * @param int
 * @param int
 * @return string
 **/
function exif_thumbnail($filename, $width, $height, $imagetype) {}

/**
 * Waits until the output from a process matches one of the patterns,
 * a specified time period has passed, or an EOF is seen.
 *
 * @param resource
 * @param array
 * @param array
 * @return int
 **/
function expect_expectl($expect, $cases, $match) {}

/**
 * Execute command via Bourne shell, and open the PTY stream to the process.
 *
 * @param string
 * @return resource
 **/
function expect_popen($command) {}

/**
 * Terminates monitoring on a resource.
 *
 * @param resource
 * @param resource
 * @return bool
 **/
function fam_cancel_monitor($fam, $fam_monitor) {}

/**
 * Closes a connection to the FAM service.
 *
 * @param resource
 * @return void
 **/
function fam_close($fam) {}

/**
 * Requests monitoring for a collection of files within a directory.
 *
 * @param resource
 * @param string
 * @param int
 * @param string
 * @return resource
 **/
function fam_monitor_collection($fam, $dirname, $depth, $mask) {}

/**
 * Requests monitoring for a directory and all contained files.
 *
 * @param resource
 * @param string
 * @return resource
 **/
function fam_monitor_directory($fam, $dirname) {}

/**
 * Requests monitoring for a single file. A FAM event will be generated
 * whenever the file status changes (i.e. the result of function 
 * stat on that file).
 *
 * @param resource
 * @param string
 * @return resource
 **/
function fam_monitor_file($fam, $filename) {}

/**
 * Returns the next pending FAM event.
 *
 * @param resource
 * @return array
 **/
function fam_next_event($fam) {}

/**
 * Opens a connection to the FAM service daemon.
 *
 * @param string
 * @return resource
 **/
function fam_open($appname) {}

/**
 * Checks for pending FAM events.
 *
 * @param resource
 * @return int
 **/
function fam_pending($fam) {}

/**
 * Resumes monitoring of a resource previously suspended using
 * fam_suspend_monitor.
 *
 * @param resource
 * @param resource
 * @return bool
 **/
function fam_resume_monitor($fam, $fam_monitor) {}

/**
 * fam_suspend_monitor temporarily suspend monitoring
 * of a resource.
 *
 * @param resource
 * @param resource
 * @return bool
 **/
function fam_suspend_monitor($fam, $fam_monitor) {}

/**
 * fbsql_affected_rows returns the number
 * of rows affected by the last INSERT, UPDATE or DELETE query
 * associated with link_identifier.
 *
 * @param resource
 * @return int
 **/
function fbsql_affected_rows($link_identifier) {}

/**
 * Returns the current autocommit status.
 *
 * @param resource
 * @param bool
 * @return bool
 **/
function fbsql_autocommit($link_identifier, $OnOff) {}

/**
 * Returns the size of the given BLOB.
 *
 * @param string
 * @param resource
 * @return int
 **/
function fbsql_blob_size($blob_handle, $link_identifier) {}

/**
 * fbsql_change_user changes the logged in user of the
 * specified connection. If the new user and password authorization fails, 
 * the current connected user stays active.
 *
 * @param string
 * @param string
 * @param string
 * @param resource
 * @return bool
 **/
function fbsql_change_user($user, $password, $database, $link_identifier) {}

/**
 * Returns the size of the given CLOB.
 *
 * @param string
 * @param resource
 * @return int
 **/
function fbsql_clob_size($clob_handle, $link_identifier) {}

/**
 * Closes the connection to the FrontBase server that's associated with the
 * specified link identifier.
 *
 * @param resource
 * @return bool
 **/
function fbsql_close($link_identifier) {}

/**
 * Ends the current transaction by writing all inserts, updates and deletes
 * to the disk and unlocking all row and table locks held by the transaction.
 * This command is only needed if autocommit is set to false.
 *
 * @param resource
 * @return bool
 **/
function fbsql_commit($link_identifier) {}

/**
 * fbsql_connect establishes a connection to a
 * FrontBase server.
 *
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function fbsql_connect($hostname, $username, $password) {}

/**
 * Creates a BLOB from the given data.
 *
 * @param string
 * @param resource
 * @return string
 **/
function fbsql_create_blob($blob_data, $link_identifier) {}

/**
 * Creates a CLOB from the given data.
 *
 * @param string
 * @param resource
 * @return string
 **/
function fbsql_create_clob($clob_data, $link_identifier) {}

/**
 * Attempts to create a new database on the specied server.
 *
 * @param string
 * @param resource
 * @param string
 * @return bool
 **/
function fbsql_create_db($database_name, $link_identifier, $database_options) {}

/**
 * Moves the internal row pointer of the FrontBase result associated with the
 * specified result identifier to point to the specified row number.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function fbsql_data_seek($result, $row_number) {}

/**
 * Sets and retrieves the database password used by the connection. If a
 * database is protected by a database password, the user must call this
 * function before calling fbsql_select_db.
 *
 * @param resource
 * @param string
 * @return string
 **/
function fbsql_database_password($link_identifier, $database_password) {}

/**
 * Get or set the database name used with the connection.
 *
 * @param resource
 * @param string
 * @return string
 **/
function fbsql_database($link_identifier, $database) {}

/**
 * Selects a database and executes a query on it.
 *
 * @param string
 * @param string
 * @param resource
 * @return resource
 **/
function fbsql_db_query($database, $query, $link_identifier) {}

/**
 * Gets the current status of the specified database.
 *
 * @param string
 * @param resource
 * @return int
 **/
function fbsql_db_status($database_name, $link_identifier) {}

/**
 * fbsql_drop_db attempts to drop (remove) an entire
 * database from the server associated with the specified link identifier.
 *
 * @param string
 * @param resource
 * @return bool
 **/
function fbsql_drop_db($database_name, $link_identifier) {}

/**
 * Returns the numerical value of the error message from previous FrontBase
 * operation.
 *
 * @param resource
 * @return int
 **/
function fbsql_errno($link_identifier) {}

/**
 * Returns the error message from previous FrontBase operation.
 *
 * @param resource
 * @return string
 **/
function fbsql_error($link_identifier) {}

/**
 * fbsql_fetch_array is a combination of
 * fbsql_fetch_row and 
 * fbsql_fetch_assoc.
 *
 * @param resource
 * @param int
 * @return array
 **/
function fbsql_fetch_array($result, $result_type) {}

/**
 * Calling fbsql_fetch_assoc is equivalent to calling
 * fbsql_fetch_array with 
 * FBSQL_ASSOC as second parameter. It only returns an
 * associative array.
 *
 * @param resource
 * @return array
 **/
function fbsql_fetch_assoc($result) {}

/**
 * Used in order to obtain information about fields in a certain query result.
 *
 * @param resource
 * @param int
 * @return object
 **/
function fbsql_fetch_field($result, $field_offset) {}

/**
 * Stores the lengths of each result column in the last row returned by
 * fbsql_fetch_row, 
 * fbsql_fetch_array and
 * fbsql_fetch_object in an array.
 *
 * @param resource
 * @return array
 **/
function fbsql_fetch_lengths($result) {}

/**
 * fbsql_fetch_object is similar to
 * fbsql_fetch_array, with one difference - an
 * object is returned, instead of an array. Indirectly, that means
 * that you can only access the data by the field names, and not by
 * their offsets (numbers are illegal property names).
 *
 * @param resource
 * @return object
 **/
function fbsql_fetch_object($result) {}

/**
 * fbsql_fetch_row fetches one row of data from
 * the result associated with the specified result identifier.
 *
 * @param resource
 * @return array
 **/
function fbsql_fetch_row($result) {}

/**
 * Gets the flags associated with the specified field in a result.
 *
 * @param resource
 * @param int
 * @return string
 **/
function fbsql_field_flags($result, $field_offset) {}

/**
 * Returns the length of the specified field.
 *
 * @param resource
 * @param int
 * @return int
 **/
function fbsql_field_len($result, $field_offset) {}

/**
 * Returns the name of the specified field index.
 *
 * @param resource
 * @param int
 * @return string
 **/
function fbsql_field_name($result, $field_index) {}

/**
 * Seeks to the specified field offset. If the next call to
 * fbsql_fetch_field doesn't include a field
 * offset, the field offset specified in
 * fbsql_field_seek will be returned.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function fbsql_field_seek($result, $field_offset) {}

/**
 * Returns the name of the table that the specified field is in.
 *
 * @param resource
 * @param int
 * @return string
 **/
function fbsql_field_table($result, $field_offset) {}

/**
 * fbsql_field_type is similar to the
 * fbsql_field_name function, but the field type is
 * returned instead.
 *
 * @param resource
 * @param int
 * @return string
 **/
function fbsql_field_type($result, $field_offset) {}

/**
 * Frees all memory associated with the given result
 * identifier.
 *
 * @param resource
 * @return bool
 **/
function fbsql_free_result($result) {}

/**
 * @param resource
 * @return array
 **/
function fbsql_get_autostart_info($link_identifier) {}

/**
 * Gets or sets the host name used with a connection.
 *
 * @param resource
 * @param string
 * @return string
 **/
function fbsql_hostname($link_identifier, $host_name) {}

/**
 * Gets the id generated from the previous INSERT operation which created a
 * DEFAULT UNIQUE value.
 *
 * @param resource
 * @return int
 **/
function fbsql_insert_id($link_identifier) {}

/**
 * Return a result pointer containing the databases available from the
 * current fbsql daemon. Use the fbsql_tablename to
 * traverse this result pointer.
 *
 * @param resource
 * @return resource
 **/
function fbsql_list_dbs($link_identifier) {}

/**
 * Retrieves information about the given table.
 *
 * @param string
 * @param string
 * @param resource
 * @return resource
 **/
function fbsql_list_fields($database_name, $table_name, $link_identifier) {}

/**
 * Returns a result pointer describing the database.
 *
 * @param string
 * @param resource
 * @return resource
 **/
function fbsql_list_tables($database, $link_identifier) {}

/**
 * When sending more than one SQL statement to the server or
 * executing a stored procedure with multiple results will cause the
 * server to return multiple result sets. This function will test
 * for additional results available form the server. If an
 * additional result set exists it will free the existing result set
 * and prepare to fetch the words from the new result set.
 *
 * @param resource
 * @return bool
 **/
function fbsql_next_result($result) {}

/**
 * Returns the number of fields in the given result 
 * set.
 *
 * @param resource
 * @return int
 **/
function fbsql_num_fields($result) {}

/**
 * Gets the number of rows in the given result set.
 *
 * @param resource
 * @return int
 **/
function fbsql_num_rows($result) {}

/**
 * Get or set the user password used with a connection.
 *
 * @param resource
 * @param string
 * @return string
 **/
function fbsql_password($link_identifier, $password) {}

/**
 * Establishes a persistent connection to a FrontBase server.
 *
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function fbsql_pconnect($hostname, $username, $password) {}

/**
 * Sends a query to the currently active database on
 * the server.
 *
 * @param string
 * @param resource
 * @param int
 * @return resource
 **/
function fbsql_query($query, $link_identifier, $batch_size) {}

/**
 * Reads BLOB data from the database.
 *
 * @param string
 * @param resource
 * @return string
 **/
function fbsql_read_blob($blob_handle, $link_identifier) {}

/**
 * Reads CLOB data from the database.
 *
 * @param string
 * @param resource
 * @return string
 **/
function fbsql_read_clob($clob_handle, $link_identifier) {}

/**
 * Returns the contents of one cell from a FrontBase 
 * result set.
 *
 * @param resource
 * @param int
 * @param mixed
 * @return mixed
 **/
function fbsql_result($result, $row, $field) {}

/**
 * Ends the current transaction by rolling back all statements issued since
 * last commit.
 *
 * @param resource
 * @return bool
 **/
function fbsql_rollback($link_identifier) {}

/**
 * Gets the number of rows affected by the last statement.
 *
 * @param resource
 * @return int
 **/
function fbsql_rows_fetched($result) {}

/**
 * Sets the current active database on the given link identifier.
 *
 * @param string
 * @param resource
 * @return bool
 **/
function fbsql_select_db($database_name, $link_identifier) {}

/**
 * @param resource
 * @param int
 * @param int
 * @return void
 **/
function fbsql_set_characterset($link_identifier, $characterset, $in_out_both) {}

/**
 * Sets the mode for retrieving LOB data from the database.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function fbsql_set_lob_mode($result, $lob_mode) {}

/**
 * Changes the password for the given user.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function fbsql_set_password($link_identifier, $user, $password, $old_password) {}

/**
 * Sets the transaction locking and
 * isolation.
 *
 * @param resource
 * @param int
 * @param int
 * @return void
 **/
function fbsql_set_transaction($link_identifier, $locking, $isolation) {}

/**
 * Start a database on local or remote server.
 *
 * @param string
 * @param resource
 * @param string
 * @return bool
 **/
function fbsql_start_db($database_name, $link_identifier, $database_options) {}

/**
 * Stops a database on local or remote server.
 *
 * @param string
 * @param resource
 * @return bool
 **/
function fbsql_stop_db($database_name, $link_identifier) {}

/**
 * fbsql_table_name gets the name of the current table in
 * the given result set.
 *
 * @param resource
 * @param int
 * @return string
 **/
function fbsql_table_name($result, $index) {}

/**
 * Get or set the username used for the connection.
 *
 * @param resource
 * @param string
 * @return string
 **/
function fbsql_username($link_identifier, $username) {}

/**
 * Enables or disables FrontBase warnings.
 *
 * @param bool
 * @return bool
 **/
function fbsql_warnings($OnOff) {}

/**
 * Adds a script to the FDF, which Acrobat then adds to the doc-level scripts
 * of a document, once the FDF is imported into it.
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function fdf_add_doc_javascript($fdf_document, $script_name, $script_code) {}

/**
 * @param resource
 * @param int
 * @param string
 * @param string
 * @param int
 * @return bool
 **/
function fdf_add_template($fdf_document, $newpage, $filename, $template, $rename) {}

/**
 * Closes the FDF document.
 *
 * @param resource
 * @return void
 **/
function fdf_close($fdf_document) {}

/**
 * Creates a new FDF document.
 *
 * @return resource
 **/
function fdf_create() {}

/**
 * @param resource
 * @param callback
 * @param mixed
 * @return bool
 **/
function fdf_enum_values($fdf_document, $function, $userdata) {}

/**
 * Gets the error code set by the last FDF function call.
 *
 * @return int
 **/
function fdf_errno() {}

/**
 * Gets a textual description for the FDF error code given in
 * error_code.
 *
 * @param int
 * @return string
 **/
function fdf_error($error_code) {}

/**
 * Gets the appearance of a field (i.e. the value of
 * the /AP key) and stores it in a file.
 *
 * @param resource
 * @param string
 * @param int
 * @param string
 * @return bool
 **/
function fdf_get_ap($fdf_document, $field, $face, $filename) {}

/**
 * Extracts a file uploaded by means of the "file selection" field
 * fieldname and stores it under
 * savepath.
 *
 * @param resource
 * @param string
 * @param string
 * @return array
 **/
function fdf_get_attachment($fdf_document, $fieldname, $savepath) {}

/**
 * Gets the value of the /Encoding key.
 *
 * @param resource
 * @return string
 **/
function fdf_get_encoding($fdf_document) {}

/**
 * Gets the value of the /F key.
 *
 * @param resource
 * @return string
 **/
function fdf_get_file($fdf_document) {}

/**
 * @param resource
 * @param string
 * @param int
 * @return int
 **/
function fdf_get_flags($fdf_document, $fieldname, $whichflags) {}

/**
 * @param resource
 * @param string
 * @param int
 * @return mixed
 **/
function fdf_get_opt($fdf_document, $fieldname, $element) {}

/**
 * Gets the value of the /STATUS key.
 *
 * @param resource
 * @return string
 **/
function fdf_get_status($fdf_document) {}

/**
 * Gets the value for the requested field.
 *
 * @param resource
 * @param string
 * @param int
 * @return mixed
 **/
function fdf_get_value($fdf_document, $fieldname, $which) {}

/**
 * Return the FDF version for the given document, or the toolkit API version
 * number if no parameter is given.
 *
 * @param resource
 * @return string
 **/
function fdf_get_version($fdf_document) {}

/**
 * This is a convenience function to set appropriate HTTP headers for FDF
 * output. It sets the Content-type: to 
 * application/vnd.fdf.
 *
 * @return void
 **/
function fdf_header() {}

/**
 * Gets the name of the field after the given field. This name can be used
 * with several functions.
 *
 * @param resource
 * @param string
 * @return string
 **/
function fdf_next_field_name($fdf_document, $fieldname) {}

/**
 * Reads form data from a string.
 *
 * @param string
 * @return resource
 **/
function fdf_open_string($fdf_data) {}

/**
 * Opens a file with form data.
 *
 * @param string
 * @return resource
 **/
function fdf_open($filename) {}

/**
 * @param resource
 * @param string
 * @param int
 * @return bool
 **/
function fdf_remove_item($fdf_document, $fieldname, $item) {}

/**
 * Returns the FDF document as a string.
 *
 * @param resource
 * @return string
 **/
function fdf_save_string($fdf_document) {}

/**
 * Saves a FDF document.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function fdf_save($fdf_document, $filename) {}

/**
 * Sets the appearance of a field (i.e. the value of the 
 * /AP key).
 *
 * @param resource
 * @param string
 * @param int
 * @param string
 * @param int
 * @return bool
 **/
function fdf_set_ap($fdf_document, $field_name, $face, $filename, $page_number) {}

/**
 * Sets the character encoding for the FDF document.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function fdf_set_encoding($fdf_document, $encoding) {}

/**
 * Selects a different PDF document to display the form results in then the
 * form it originated from.
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function fdf_set_file($fdf_document, $url, $target_frame) {}

/**
 * Sets certain flags of the given field.
 *
 * @param resource
 * @param string
 * @param int
 * @param int
 * @return bool
 **/
function fdf_set_flags($fdf_document, $fieldname, $whichFlags, $newFlags) {}

/**
 * Sets a javascript action for the given field.
 *
 * @param resource
 * @param string
 * @param int
 * @param string
 * @return bool
 **/
function fdf_set_javascript_action($fdf_document, $fieldname, $trigger, $script) {}

/**
 * @param resource
 * @param string
 * @param bool
 * @return bool
 **/
function fdf_set_on_import_javascript($fdf_document, $script, $before_data_import) {}

/**
 * Sets options of the given field.
 *
 * @param resource
 * @param string
 * @param int
 * @param string
 * @param string
 * @return bool
 **/
function fdf_set_opt($fdf_document, $fieldname, $element, $str1, $str2) {}

/**
 * Sets the value of the /STATUS key. When a client
 * receives a FDF with a status set it will present the value in an alert
 * box.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function fdf_set_status($fdf_document, $status) {}

/**
 * Sets a submit form action for the given field.
 *
 * @param resource
 * @param string
 * @param int
 * @param string
 * @param int
 * @return bool
 **/
function fdf_set_submit_form_action($fdf_document, $fieldname, $trigger, $script, $flags) {}

/**
 * Sets the target frame to display a result PDF defined with 
 * fdf_save_file in.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function fdf_set_target_frame($fdf_document, $frame_name) {}

/**
 * Sets the value for the given field.
 *
 * @param resource
 * @param string
 * @param mixed
 * @param int
 * @return bool
 **/
function fdf_set_value($fdf_document, $fieldname, $value, $isName) {}

/**
 * Sets the FDF version for the given document.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function fdf_set_version($fdf_document, $version) {}

/**
 * This function is used to get information about binary data in a string.
 *
 * @param resource
 * @param string
 * @param int
 * @param resource
 * @return string
 **/
function finfo_buffer($finfo, $string, $options, $context) {}

/**
 * This function closes the resource opened by finfo_open.
 *
 * @param resource
 * @return bool
 **/
function finfo_close($finfo) {}

/**
 * This function is used to get information about a file.
 *
 * @param resource
 * @param string
 * @param int
 * @param resource
 * @return string
 **/
function finfo_file($finfo, $file_name, $options, $context) {}

/**
 * Procedural style
 *
 * @param int
 * @param string
 * @return resource
 **/
function finfo_open($options, $arg) {}

/**
 * This function sets various Fileinfo options. Options can be set also
 * directly in finfo_open or other Fileinfo functions.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function finfo_set_flags($finfo, $options) {}

/**
 * Returns the number of fields (columns) in the opened filePro
 * database.
 *
 * @return int
 **/
function filepro_fieldcount() {}

/**
 * Returns the name of the field corresponding to 
 * field_number.
 *
 * @param int
 * @return string
 **/
function filepro_fieldname($field_number) {}

/**
 * Returns the edit type of the field corresponding to field_number.
 *
 * @param int
 * @return string
 **/
function filepro_fieldtype($field_number) {}

/**
 * Returns the width of the field corresponding to field_number.
 *
 * @param int
 * @return int
 **/
function filepro_fieldwidth($field_number) {}

/**
 * Returns the data from the specified location in the database.
 *
 * @param int
 * @param int
 * @return string
 **/
function filepro_retrieve($row_number, $field_number) {}

/**
 * Returns the number of rows in the opened filePro database.
 *
 * @return int
 **/
function filepro_rowcount() {}

/**
 * This reads and verifies the map file, storing the field count
 * and info.
 *
 * @param string
 * @return bool
 **/
function filepro($directory) {}

/**
 * Given a string containing a path to a file, this function will return the
 * base name of the file.
 *
 * @param string
 * @param string
 * @return string
 **/
function basename($path, $suffix) {}

/**
 * Attempts to change the group of the file filename
 * to group.
 *
 * @param string
 * @param mixed
 * @return bool
 **/
function chgrp($filename, $group) {}

/**
 * Attempts to change the mode of the specified file to that given in
 * mode.
 *
 * @param string
 * @param int
 * @return bool
 **/
function chmod($filename, $mode) {}

/**
 * Attempts to change the owner of the file filename
 * to user user. Only the superuser may change the
 * owner of a file.
 *
 * @param string
 * @param mixed
 * @return bool
 **/
function chown($filename, $user) {}

/**
 * When you use stat, lstat, or
 * any of the other functions listed in the affected functions list (below),
 * PHP caches the information those functions return in order to provide
 * faster performance. However, in certain cases, you may want to clear the
 * cached information. For instance, if the same file is being checked
 * multiple times within a single script, and that file is in danger of
 * being removed or changed during that script's operation, you may elect to
 * clear the status cache. In these cases, you can use the
 * clearstatcache function to clear the information
 * that PHP caches about a file.
 *
 * @return void
 **/
function clearstatcache() {}

/**
 * Makes a copy of the file source to
 * dest.
 *
 * @param string
 * @param string
 * @param resource
 * @return bool
 **/
function copy($source, $dest, $context) {}

/**
 * This is a dummy manual entry to satisfy those people who are looking for
 * unlink or unset in the wrong
 * place.
 *
 * @return void
 **/
function delete() {}

/**
 * Given a string containing a path to a file, this function will return the
 * name of the directory.
 *
 * @param string
 * @return string
 **/
function dirname($path) {}

/**
 * Given a string containing a directory, this function will return the
 * number of bytes available on the corresponding filesystem or disk
 * partition.
 *
 * @param string
 * @return float
 **/
function disk_free_space($directory) {}

/**
 * Given a string containing a directory, this function will return the total
 * number of bytes on the corresponding filesystem or disk partition.
 *
 * @param string
 * @return float
 **/
function disk_total_space($directory) {}

/**
 * The file pointed to by handle is closed.
 *
 * @param resource
 * @return bool
 **/
function fclose($handle) {}

/**
 * Tests for end-of-file on a file pointer.
 *
 * @param resource
 * @return bool
 **/
function feof($handle) {}

/**
 * This function forces a write of all buffered output to the resource
 * pointed to by the file handle.
 *
 * @param resource
 * @return bool
 **/
function fflush($handle) {}

/**
 * Gets a character from the given file pointer.
 *
 * @param resource
 * @return string
 **/
function fgetc($handle) {}

/**
 * Similar to fgets except that
 * fgetcsv parses the line it reads for fields in
 * CSV format and returns an array containing the fields
 * read.
 *
 * @param resource
 * @param int
 * @param string
 * @param string
 * @param string
 * @return array
 **/
function fgetcsv($handle, $length, $delimiter, $enclosure, $escape) {}

/**
 * Gets a line from file pointer.
 *
 * @param resource
 * @param int
 * @return string
 **/
function fgets($handle, $length) {}

/**
 * Identical to fgets, except that
 * fgetss attempts to strip any HTML and PHP tags from
 * the text it reads.
 *
 * @param resource
 * @param int
 * @param string
 * @return string
 **/
function fgetss($handle, $length, $allowable_tags) {}

/**
 * Checks whether a file or directory exists.
 *
 * @param string
 * @return bool
 **/
function file_exists($filename) {}

/**
 * This function is similar to file, except that
 * file_get_contents returns the file in a 
 * string, starting at the specified offset 
 * up to maxlen bytes. On failure, 
 * file_get_contents will return .
 *
 * @param string
 * @param int
 * @param resource
 * @param int
 * @param int
 * @return string
 **/
function file_get_contents($filename, $flags, $context, $offset, $maxlen) {}

/**
 * This function is identical to calling fopen, 
 * fwrite and fclose successively
 * to write data to a file.
 *
 * @param string
 * @param mixed
 * @param int
 * @param resource
 * @return int
 **/
function file_put_contents($filename, $data, $flags, $context) {}

/**
 * Reads an entire file into an array.
 *
 * @param string
 * @param int
 * @param resource
 * @return array
 **/
function file($filename, $flags, $context) {}

/**
 * @param string
 * @return int
 **/
function fileatime($filename) {}

/**
 * Gets the inode change time of a file.
 *
 * @param string
 * @return int
 **/
function filectime($filename) {}

/**
 * Gets the file group. The group ID is returned in numerical format, use
 * posix_getgrgid to resolve it to a group name.
 *
 * @param string
 * @return int
 **/
function filegroup($filename) {}

/**
 * Gets the file inode.
 *
 * @param string
 * @return int
 **/
function fileinode($filename) {}

/**
 * This function returns the time when the data blocks of a file were being
 * written to, that is, the time when the content of the file was changed.
 *
 * @param string
 * @return int
 **/
function filemtime($filename) {}

/**
 * Gets the file owner.
 *
 * @param string
 * @return int
 **/
function fileowner($filename) {}

/**
 * Gets permissions for the given file.
 *
 * @param string
 * @return int
 **/
function fileperms($filename) {}

/**
 * Gets the size for the given file.
 *
 * @param string
 * @return int
 **/
function filesize($filename) {}

/**
 * Returns the type of the given file.
 *
 * @param string
 * @return string
 **/
function filetype($filename) {}

/**
 * flock allows you to perform a simple reader/writer
 * model which can be used on virtually every platform (including most Unix
 * derivatives and even Windows).
 *
 * @param resource
 * @param int
 * @param int
 * @return bool
 **/
function flock($handle, $operation, $wouldblock) {}

/**
 * fnmatch checks if the passed string would
 * match the given shell wildcard pattern.
 *
 * @param string
 * @param string
 * @param int
 * @return bool
 **/
function fnmatch($pattern, $string, $flags) {}

/**
 * fopen binds a named resource, specified by
 * filename, to a stream.
 *
 * @param string
 * @param string
 * @param bool
 * @param resource
 * @return resource
 **/
function fopen($filename, $mode, $use_include_path, $context) {}

/**
 * Reads to EOF on the given file pointer from the current position and
 * writes the results to the output buffer.
 *
 * @param resource
 * @return int
 **/
function fpassthru($handle) {}

/**
 * fputcsv formats a line (passed as a
 * fields array) as CSV and write it (terminated by a
 * newline) to the specified file handle.
 *
 * @param resource
 * @param array
 * @param string
 * @param string
 * @return int
 **/
function fputcsv($handle, $fields, $delimiter, $enclosure) {}

/**
 * fread reads up to
 * length bytes from the file pointer
 * referenced by handle. Reading stops as soon as one
 * of the following conditions is met:
 * 
 * 
 * 
 * length bytes have been read
 * 
 * 
 * 
 * 
 * EOF (end of file) is reached
 * 
 * 
 * 
 * 
 * a packet becomes available (for network streams)
 * 
 * 
 * 
 * 
 * 8192 bytes have been read (after opening userspace stream)
 *
 * @param resource
 * @param int
 * @return string
 **/
function fread($handle, $length) {}

/**
 * The function fscanf is similar to
 * sscanf, but it takes its input from a file
 * associated with handle and interprets the
 * input according to the specified format, which is
 * described in the documentation for sprintf.
 *
 * @param resource
 * @param string
 * @return mixed
 **/
function fscanf($handle, $format) {}

/**
 * Sets the file position indicator for the file referenced by
 * handle. The new position, measured in bytes
 * from the beginning of the file, is obtained by adding
 * offset to the position specified by
 * whence.
 *
 * @param resource
 * @param int
 * @param int
 * @return int
 **/
function fseek($handle, $offset, $whence) {}

/**
 * Gathers the statistics of the file opened by the file
 * pointer handle. This function is similar to the
 * stat function except that it operates
 * on an open file pointer instead of a filename.
 *
 * @param resource
 * @return array
 **/
function fstat($handle) {}

/**
 * Returns the position of the file pointer referenced by handle.
 *
 * @param resource
 * @return int
 **/
function ftell($handle) {}

/**
 * Takes the filepointer, handle, and truncates the file to
 * length, size.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function ftruncate($handle, $size) {}

/**
 * @param resource
 * @param string
 * @param int
 * @return int
 **/
function fwrite($handle, $string, $length) {}

/**
 * The glob function searches for all the pathnames
 * matching pattern according to the rules used by
 * the libc glob() function, which is similar to the rules used by common
 * shells.
 *
 * @param string
 * @param int
 * @return array
 **/
function glob($pattern, $flags) {}

/**
 * Tells whether the given filename is a directory.
 *
 * @param string
 * @return bool
 **/
function is_dir($filename) {}

/**
 * Tells whether the filename is executable.
 *
 * @param string
 * @return bool
 **/
function is_executable($filename) {}

/**
 * Tells whether the given file is a regular file.
 *
 * @param string
 * @return bool
 **/
function is_file($filename) {}

/**
 * Tells whether the given file is a symbolic link.
 *
 * @param string
 * @return bool
 **/
function is_link($filename) {}

/**
 * Tells whether the filename is readable.
 *
 * @param string
 * @return bool
 **/
function is_readable($filename) {}

/**
 * Returns if the file named by filename was
 * uploaded via HTTP POST. This is useful to help ensure that a
 * malicious user hasn't tried to trick the script into working on
 * files upon which it should not be working--for instance,
 * /etc/passwd.
 *
 * @param string
 * @return bool
 **/
function is_uploaded_file($filename) {}

/**
 * Returns if the filename exists and is
 * writable. The filename argument may be a directory name allowing you
 * to check if a directory is writable.
 *
 * @param string
 * @return bool
 **/
function is_writable($filename) {}

/**
 * Attempts to change the group of the symlink filename
 * to group.
 *
 * @param string
 * @param mixed
 * @return bool
 **/
function lchgrp($filename, $group) {}

/**
 * Attempts to change the owner of the symlink filename
 * to user user.
 *
 * @param string
 * @param mixed
 * @return bool
 **/
function lchown($filename, $user) {}

/**
 * link creates a hard link.
 *
 * @param string
 * @param string
 * @return bool
 **/
function link($target, $link) {}

/**
 * Gets information about a link.
 *
 * @param string
 * @return int
 **/
function linkinfo($path) {}

/**
 * Gathers the statistics of the file or symbolic link named by
 * filename.
 *
 * @param string
 * @return array
 **/
function lstat($filename) {}

/**
 * Attempts to create the directory specified by pathname.
 *
 * @param string
 * @param int
 * @param bool
 * @param resource
 * @return bool
 **/
function mkdir($pathname, $mode, $recursive, $context) {}

/**
 * This function checks to ensure that the file designated by
 * filename is a valid upload file (meaning
 * that it was uploaded via PHP's HTTP POST upload mechanism). If
 * the file is valid, it will be moved to the filename given by
 * destination.
 *
 * @param string
 * @param string
 * @return bool
 **/
function move_uploaded_file($filename, $destination) {}

/**
 * parse_ini_file loads in the
 * ini file specified in filename,
 * and returns the settings in it in an associative array.
 *
 * @param string
 * @param bool
 * @return array
 **/
function parse_ini_file($filename, $process_sections) {}

/**
 * pathinfo returns an associative array
 * containing information about path.
 *
 * @param string
 * @param int
 * @return mixed
 **/
function pathinfo($path, $options) {}

/**
 * Closes a file pointer to a pipe opened by popen.
 *
 * @param resource
 * @return int
 **/
function pclose($handle) {}

/**
 * Opens a pipe to a process executed by forking the command given
 * by command.
 *
 * @param string
 * @param string
 * @return resource
 **/
function popen($command, $mode) {}

/**
 * Reads a file and writes it to the output buffer.
 *
 * @param string
 * @param bool
 * @param resource
 * @return int
 **/
function readfile($filename, $use_include_path, $context) {}

/**
 * readlink does the same as the readlink C function.
 *
 * @param string
 * @return string
 **/
function readlink($path) {}

/**
 * realpath expands all symbolic links and
 * resolves references to '/./', '/../' and extra '/' characters in
 * the input path. and return the canonicalized
 * absolute pathname.
 *
 * @param string
 * @return string
 **/
function realpath($path) {}

/**
 * Attempts to rename oldname to
 * newname.
 *
 * @param string
 * @param string
 * @param resource
 * @return bool
 **/
function rename($oldname, $newname, $context) {}

/**
 * Sets the file position indicator for handle
 * to the beginning of the file stream.
 *
 * @param resource
 * @return bool
 **/
function rewind($handle) {}

/**
 * Attempts to remove the directory named by dirname.
 * The directory must be empty, and the relevant permissions must permit this.
 *
 * @param string
 * @param resource
 * @return bool
 **/
function rmdir($dirname, $context) {}

/**
 * Gathers the statistics of the file named by
 * filename. If filename is a
 * symbolic link, statistics are from the file itself, not the symlink.
 *
 * @param string
 * @return array
 **/
function stat($filename) {}

/**
 * symlink creates a symbolic link to the existing
 * target with the specified name
 * link.
 *
 * @param string
 * @param string
 * @return bool
 **/
function symlink($target, $link) {}

/**
 * Creates a file with a unique filename, with access permission set to 0600, in the specified directory.
 * If the directory does not exist, tempnam may
 * generate a file in the system's temporary directory, and return
 * the name of that.
 *
 * @param string
 * @param string
 * @return string
 **/
function tempnam($dir, $prefix) {}

/**
 * Creates a temporary file with a unique name in read-write (w+) mode and
 * returns a file handle .
 *
 * @return resource
 **/
function tmpfile() {}

/**
 * Attempts to set the access and modification times of the file named in the
 * filename parameter to the value given in
 * time. 
 * Note that the access time is always modified, regardless of the number
 * of parameters.
 *
 * @param string
 * @param int
 * @param int
 * @return bool
 **/
function touch($filename, $time, $atime) {}

/**
 * umask sets PHP's umask to
 * mask 0777 and returns the old
 * umask. When PHP is being used as a server module, the umask
 * is restored when each request is finished.
 *
 * @param int
 * @return int
 **/
function umask($mask) {}

/**
 * Deletes filename. Similar to the Unix C unlink()
 * function.
 *
 * @param string
 * @param resource
 * @return bool
 **/
function unlink($filename, $context) {}

/**
 * @param int
 * @param string
 * @return bool
 **/
function filter_has_var($type, $variable_name) {}

/**
 * @param string
 * @return int
 **/
function filter_id($filtername) {}

/**
 * This function is useful for retrieving many values without
 * repetitively calling filter_input.
 *
 * @param int
 * @param mixed
 * @return mixed
 **/
function filter_input_array($type, $definition) {}

/**
 * @param int
 * @param string
 * @param int
 * @param mixed
 * @return mixed
 **/
function filter_input($type, $variable_name, $filter, $options) {}

/**
 * @return array
 **/
function filter_list() {}

/**
 * This function is useful for retrieving many values without
 * repetitively calling filter_var.
 *
 * @param array
 * @param mixed
 * @return mixed
 **/
function filter_var_array($data, $definition) {}

/**
 * @param mixed
 * @param int
 * @param mixed
 * @return mixed
 **/
function filter_var($variable, $filter, $options) {}

/**
 * Converts a logical string to a visual one.
 *
 * @param string
 * @param string
 * @param int
 * @return string
 **/
function fribidi_log2vis($str, $direction, $charset) {}

/**
 * Sends an ALLO command to the remote FTP server to 
 * allocate space for a file to be uploaded.
 *
 * @param resource
 * @param int
 * @param string
 * @return bool
 **/
function ftp_alloc($ftp_stream, $filesize, $result) {}

/**
 * Changes to the parent directory.
 *
 * @param resource
 * @return bool
 **/
function ftp_cdup($ftp_stream) {}

/**
 * Changes the current directory to the specified one.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function ftp_chdir($ftp_stream, $directory) {}

/**
 * Sets the permissions on the specified remote file to 
 * mode.
 *
 * @param resource
 * @param int
 * @param string
 * @return int
 **/
function ftp_chmod($ftp_stream, $mode, $filename) {}

/**
 * ftp_close closes the given link identifier
 * and releases the resource.
 *
 * @param resource
 * @return bool
 **/
function ftp_close($ftp_stream) {}

/**
 * ftp_connect opens an FTP connection to the
 * specified host.
 *
 * @param string
 * @param int
 * @param int
 * @return resource
 **/
function ftp_connect($host, $port, $timeout) {}

/**
 * ftp_delete deletes the file specified by
 * path from the FTP server.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function ftp_delete($ftp_stream, $path) {}

/**
 * Sends a SITE EXEC command request to the FTP
 * server.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function ftp_exec($ftp_stream, $command) {}

/**
 * ftp_fget retrieves remote_file
 * from the FTP server, and writes it to the given file pointer.
 *
 * @param resource
 * @param resource
 * @param string
 * @param int
 * @param int
 * @return bool
 **/
function ftp_fget($ftp_stream, $handle, $remote_file, $mode, $resumepos) {}

/**
 * ftp_fput uploads the data from a file pointer
 * to a remote file on the FTP server.
 *
 * @param resource
 * @param string
 * @param resource
 * @param int
 * @param int
 * @return bool
 **/
function ftp_fput($ftp_stream, $remote_file, $handle, $mode, $startpos) {}

/**
 * This function returns the value for the requested 
 * option from the specified FTP connection.
 *
 * @param resource
 * @param int
 * @return mixed
 **/
function ftp_get_option($ftp_stream, $option) {}

/**
 * ftp_get retrieves a remote file from the FTP server,
 * and saves it into a local file.
 *
 * @param resource
 * @param string
 * @param string
 * @param int
 * @param int
 * @return bool
 **/
function ftp_get($ftp_stream, $local_file, $remote_file, $mode, $resumepos) {}

/**
 * Logs in to the given FTP stream.
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function ftp_login($ftp_stream, $username, $password) {}

/**
 * ftp_mdtm gets the last modified time for a remote
 * file.
 *
 * @param resource
 * @param string
 * @return int
 **/
function ftp_mdtm($ftp_stream, $remote_file) {}

/**
 * Creates the specified directory on the FTP server.
 *
 * @param resource
 * @param string
 * @return string
 **/
function ftp_mkdir($ftp_stream, $directory) {}

/**
 * Continues retrieving/sending a file non-blocking.
 *
 * @param resource
 * @return int
 **/
function ftp_nb_continue($ftp_stream) {}

/**
 * ftp_nb_fget retrieves a remote file from the FTP 
 * server.
 *
 * @param resource
 * @param resource
 * @param string
 * @param int
 * @param int
 * @return int
 **/
function ftp_nb_fget($ftp_stream, $handle, $remote_file, $mode, $resumepos) {}

/**
 * ftp_nb_fput uploads the data from a file pointer to
 * a remote file on the FTP server.
 *
 * @param resource
 * @param string
 * @param resource
 * @param int
 * @param int
 * @return int
 **/
function ftp_nb_fput($ftp_stream, $remote_file, $handle, $mode, $startpos) {}

/**
 * ftp_nb_get retrieves a remote file from the FTP server,
 * and saves it into a local file.
 *
 * @param resource
 * @param string
 * @param string
 * @param int
 * @param int
 * @return int
 **/
function ftp_nb_get($ftp_stream, $local_file, $remote_file, $mode, $resumepos) {}

/**
 * ftp_nb_put stores a local file on the FTP server.
 *
 * @param resource
 * @param string
 * @param string
 * @param int
 * @param int
 * @return int
 **/
function ftp_nb_put($ftp_stream, $remote_file, $local_file, $mode, $startpos) {}

/**
 * @param resource
 * @param string
 * @return array
 **/
function ftp_nlist($ftp_stream, $directory) {}

/**
 * ftp_pasv turns on or off passive mode. In
 * passive mode, data connections are initiated by the client,
 * rather than by the server.
 * It may be needed if the client is behind firewall.
 *
 * @param resource
 * @param bool
 * @return bool
 **/
function ftp_pasv($ftp_stream, $pasv) {}

/**
 * ftp_put stores a local file on the FTP server.
 *
 * @param resource
 * @param string
 * @param string
 * @param int
 * @param int
 * @return bool
 **/
function ftp_put($ftp_stream, $remote_file, $local_file, $mode, $startpos) {}

/**
 * @param resource
 * @return string
 **/
function ftp_pwd($ftp_stream) {}

/**
 * Sends an arbitrary command to the FTP server.
 *
 * @param resource
 * @param string
 * @return array
 **/
function ftp_raw($ftp_stream, $command) {}

/**
 * ftp_rawlist executes the FTP 
 * LIST command, and returns the result as an array.
 *
 * @param resource
 * @param string
 * @param bool
 * @return array
 **/
function ftp_rawlist($ftp_stream, $directory, $recursive) {}

/**
 * ftp_rename renames a file or a directory on the FTP
 * server.
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function ftp_rename($ftp_stream, $oldname, $newname) {}

/**
 * Removes the specified directory on the FTP server.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function ftp_rmdir($ftp_stream, $directory) {}

/**
 * This function controls various runtime options for the specified FTP 
 * stream.
 *
 * @param resource
 * @param int
 * @param mixed
 * @return bool
 **/
function ftp_set_option($ftp_stream, $option, $value) {}

/**
 * ftp_site sends the given SITE 
 * command to the FTP server.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function ftp_site($ftp_stream, $command) {}

/**
 * ftp_size returns the size of the given file in
 * bytes.
 *
 * @param resource
 * @param string
 * @return int
 **/
function ftp_size($ftp_stream, $remote_file) {}

/**
 * ftp_ssl_connect opens a SSL-FTP connection to the
 * specified host.
 *
 * @param string
 * @param int
 * @param int
 * @return resource
 **/
function ftp_ssl_connect($host, $port, $timeout) {}

/**
 * Returns the system type identifier of the remote FTP server.
 *
 * @param resource
 * @return string
 **/
function ftp_systype($ftp_stream) {}

/**
 * Call a user defined function with the parameters in
 * param_arr.
 *
 * @param callback
 * @param array
 * @return mixed
 **/
function call_user_func_array($function, $param_arr) {}

/**
 * Call a user defined function given by the function
 * parameter.
 *
 * @param callback
 * @param mixed
 * @return mixed
 **/
function call_user_func($function, $parameter) {}

/**
 * Creates an anonymous function from the parameters passed, and
 * returns a unique name for it.
 *
 * @param string
 * @param string
 * @return string
 **/
function create_function($args, $code) {}

/**
 * Gets the specified argument from a user-defined function's argument list.
 *
 * @param int
 * @return mixed
 **/
function func_get_arg($arg_num) {}

/**
 * Gets an array of the function's argument list.
 *
 * @return array
 **/
function func_get_args() {}

/**
 * Gets the number of arguments passed to the function.
 *
 * @return int
 **/
function func_num_args() {}

/**
 * Checks the list of defined functions, both built-in (internal) and
 * user-defined, for function_name.
 *
 * @param string
 * @return bool
 **/
function function_exists($function_name) {}

/**
 * Gets an array of all defined functions.
 *
 * @return array
 **/
function get_defined_functions() {}

/**
 * Multiple calls to register_shutdown_function can be
 * made, and each will be called in the same order as they were registered.
 * If you call exit within one registered shutdown
 * function, processing will stop completely and no other registered
 * shutdown functions will be called.
 *
 * @param callback
 * @param mixed
 * @return void
 **/
function register_shutdown_function($function, $parameter) {}

/**
 * @param callback
 * @param mixed
 * @return bool
 **/
function register_tick_function($function, $arg) {}

/**
 * @param string
 * @return void
 **/
function unregister_tick_function($function_name) {}

/**
 * The geoip_country_code_by_name function will return
 * the two letter country code corresponding to a hostname or an IP address.
 *
 * @param string
 * @return string
 **/
function geoip_country_code_by_name($hostname) {}

/**
 * The geoip_country_code3_by_name function will return the
 * three letter country code corresponding to a hostname or an IP address.
 *
 * @param string
 * @return string
 **/
function geoip_country_code3_by_name($hostname) {}

/**
 * The geoip_country_name_by_name function will return the
 * full country name corresponding to a hostname or an IP address.
 *
 * @param string
 * @return string
 **/
function geoip_country_name_by_name($hostname) {}

/**
 * The geoip_database_info function returns the corresponding
 * GeoIP Database version as it is defined inside the binary file.
 *
 * @param int
 * @return string
 **/
function geoip_database_info($database) {}

/**
 * The geoip_db_avail function returns if the corresponding
 * GeoIP Database is available and can be opened on disk.
 *
 * @param int
 * @return bool
 **/
function geoip_db_avail($database) {}

/**
 * The geoip_db_filename function returns the filename of
 * the corresponding GeoIP Database.
 *
 * @param int
 * @return string
 **/
function geoip_db_filename($database) {}

/**
 * The geoip_db_get_all_info function will return 
 * detailed informations as a multi-dimensional array about all the 
 * GeoIP database types.
 *
 * @return array
 **/
function geoip_db_get_all_info() {}

/**
 * The geoip_id_by_name function will return the country
 * and region corresponding to a hostname or an IP address.
 *
 * @param string
 * @return int
 **/
function geoip_id_by_name($hostname) {}

/**
 * The geoip_isp_by_name function will return the name of
 * the Internet Service Provider (ISP) that an IP is assigned to.
 *
 * @param string
 * @return string
 **/
function geoip_isp_by_name($hostname) {}

/**
 * The geoip_org_by_name function will return the name of
 * the organization that an IP is assigned to.
 *
 * @param string
 * @return string
 **/
function geoip_org_by_name($hostname) {}

/**
 * The geoip_record_by_name function will return the
 * record information corresponding to a hostname or an IP address.
 *
 * @param string
 * @return array
 **/
function geoip_record_by_name($hostname) {}

/**
 * The geoip_region_by_name function will return the country
 * and region corresponding to a hostname or an IP address.
 *
 * @param string
 * @return array
 **/
function geoip_region_by_name($hostname) {}

/**
 * With bind_textdomain_codeset, you can set in which
 * encoding will be messages from domain returned by
 * gettext and similar functions.
 *
 * @param string
 * @param string
 * @return string
 **/
function bind_textdomain_codeset($domain, $codeset) {}

/**
 * The bindtextdomain function sets the path
 * for a domain.
 *
 * @param string
 * @param string
 * @return string
 **/
function bindtextdomain($domain, $directory) {}

/**
 * This function allows you to override the current domain for a
 * single message lookup.
 *
 * @param string
 * @param string
 * @param int
 * @return string
 **/
function dcgettext($domain, $message, $category) {}

/**
 * This function allows you to override the current domain for a
 * single plural message lookup.
 *
 * @param string
 * @param string
 * @param string
 * @param int
 * @param int
 * @return string
 **/
function dcngettext($domain, $msgid1, $msgid2, $n, $category) {}

/**
 * The dgettext function allows you to override
 * the current domain for a single message lookup.
 *
 * @param string
 * @param string
 * @return string
 **/
function dgettext($domain, $message) {}

/**
 * The dngettext function allows you to override
 * the current domain for a single plural message lookup.
 *
 * @param string
 * @param string
 * @param string
 * @param int
 * @return string
 **/
function dngettext($domain, $msgid1, $msgid2, $n) {}

/**
 * Looks up a message in the current domain.
 *
 * @param string
 * @return string
 **/
function gettext($message) {}

/**
 * The plural version of gettext. Some languages 
 * have more than one form for plural messages dependent on the count.
 *
 * @param string
 * @param string
 * @param int
 * @return string
 **/
function ngettext($msgid1, $msgid2, $n) {}

/**
 * This function sets the domain to search within when calls are
 * made to gettext, usually the named after an
 * application.
 *
 * @param string
 * @return string
 **/
function textdomain($text_domain) {}

/**
 * Get the absolute value of a number.
 *
 * @param resource
 * @return resource
 **/
function gmp_abs($a) {}

/**
 * Add two numbers.
 *
 * @param resource
 * @param resource
 * @return resource
 **/
function gmp_add($a, $b) {}

/**
 * Calculates bitwise AND of two GMP numbers.
 *
 * @param resource
 * @param resource
 * @return resource
 **/
function gmp_and($a, $b) {}

/**
 * Clears (sets to 0) bit index in
 * a. The index starts at 0.
 *
 * @param resource
 * @param int
 * @return void
 **/
function gmp_clrbit($a, $index) {}

/**
 * Compares two numbers.
 *
 * @param resource
 * @param resource
 * @return int
 **/
function gmp_cmp($a, $b) {}

/**
 * Returns the one's complement of a.
 *
 * @param resource
 * @return resource
 **/
function gmp_com($a) {}

/**
 * Divides a by b and
 * returns the integer result.
 *
 * @param resource
 * @param resource
 * @param int
 * @return resource
 **/
function gmp_div_q($a, $b, $round) {}

/**
 * The function divides n by d.
 *
 * @param resource
 * @param resource
 * @param int
 * @return array
 **/
function gmp_div_qr($n, $d, $round) {}

/**
 * Calculates remainder of the integer division of
 * n by d. The
 * remainder has the sign of the n argument,
 * if not zero.
 *
 * @param resource
 * @param resource
 * @param int
 * @return resource
 **/
function gmp_div_r($n, $d, $round) {}

/**
 * Divides n by d,
 * using fast "exact division" algorithm. This function produces
 * correct results only when it is known in advance that
 * d divides n.
 *
 * @param resource
 * @param resource
 * @return resource
 **/
function gmp_divexact($n, $d) {}

/**
 * Calculates factorial (a!) of a.
 *
 * @param int
 * @return resource
 **/
function gmp_fact($a) {}

/**
 * Calculate greatest common divisor of a and
 * b. The result is always positive even if
 * either of, or both, input operands are negative.
 *
 * @param resource
 * @param resource
 * @return resource
 **/
function gmp_gcd($a, $b) {}

/**
 * Calculates g, s, and t, such that a*s + b*t = g =
 * gcd(a,b), where gcd is the greatest common divisor. Returns
 * an array with respective elements g, s and t.
 *
 * @param resource
 * @param resource
 * @return array
 **/
function gmp_gcdext($a, $b) {}

/**
 * Returns the hamming distance between a and
 * b. Both operands should be non-negative.
 *
 * @param resource
 * @param resource
 * @return int
 **/
function gmp_hamdist($a, $b) {}

/**
 * Creates a GMP number from an integer or string.
 *
 * @param mixed
 * @param int
 * @return resource
 **/
function gmp_init($number, $base) {}

/**
 * This function allows to convert GMP number to integer.
 *
 * @param resource
 * @return int
 **/
function gmp_intval($gmpnumber) {}

/**
 * Computes the inverse of a modulo
 * b.
 *
 * @param resource
 * @param resource
 * @return resource
 **/
function gmp_invert($a, $b) {}

/**
 * Computes
 * Jacobi symbol of a and
 * p. p should be odd
 * and must be positive.
 *
 * @param resource
 * @param resource
 * @return int
 **/
function gmp_jacobi($a, $p) {}

/**
 * Compute the
 * 
 * Legendre symbol of a and
 * p. p should be odd
 * and must be positive.
 *
 * @param resource
 * @param resource
 * @return int
 **/
function gmp_legendre($a, $p) {}

/**
 * Calculates n modulo
 * d. The result is always non-negative, the
 * sign of d is ignored.
 *
 * @param resource
 * @param resource
 * @return resource
 **/
function gmp_mod($n, $d) {}

/**
 * Multiplies a by b
 * and returns the result.
 *
 * @param resource
 * @param resource
 * @return resource
 **/
function gmp_mul($a, $b) {}

/**
 * Returns the negative value of a number.
 *
 * @param resource
 * @return resource
 **/
function gmp_neg($a) {}

/**
 * Find next prime number
 *
 * @param int
 * @return resource
 **/
function gmp_nextprime($a) {}

/**
 * Calculates bitwise inclusive OR of two GMP numbers.
 *
 * @param resource
 * @param resource
 * @return resource
 **/
function gmp_or($a, $b) {}

/**
 * Check if a number is a perfect square.
 *
 * @param resource
 * @return bool
 **/
function gmp_perfect_square($a) {}

/**
 * Get the population count.
 *
 * @param resource
 * @return int
 **/
function gmp_popcount($a) {}

/**
 * Raise base into power exp.
 *
 * @param resource
 * @param int
 * @return resource
 **/
function gmp_pow($base, $exp) {}

/**
 * Calculate (base raised into power
 * exp) modulo mod. If
 * exp is negative, result is undefined.
 *
 * @param resource
 * @param resource
 * @param resource
 * @return resource
 **/
function gmp_powm($base, $exp, $mod) {}

/**
 * The function uses Miller-Rabin's probabilistic test to check if a number is a prime.
 *
 * @param resource
 * @param int
 * @return int
 **/
function gmp_prob_prime($a, $reps) {}

/**
 * Generate a random number. The number will be between
 * zero and the number of bits per limb multiplied by
 * limiter. If limiter
 * is negative, negative numbers are generated.
 *
 * @param int
 * @return resource
 **/
function gmp_random($limiter) {}

/**
 * Scans a, starting with bit
 * start, towards more significant bits,
 * until the first clear bit is found.
 *
 * @param resource
 * @param int
 * @return int
 **/
function gmp_scan0($a, $start) {}

/**
 * Scans a, starting with bit
 * start, towards more significant bits,
 * until the first set bit is found.
 *
 * @param resource
 * @param int
 * @return int
 **/
function gmp_scan1($a, $start) {}

/**
 * Sets bit index in a.
 *
 * @param resource
 * @param int
 * @param bool
 * @return void
 **/
function gmp_setbit($a, $index, $set_clear) {}

/**
 * Checks the sign of a number.
 *
 * @param resource
 * @return int
 **/
function gmp_sign($a) {}

/**
 * Calculates square root of a.
 *
 * @param resource
 * @return resource
 **/
function gmp_sqrt($a) {}

/**
 * Calculate the square root of a number, with remainder.
 *
 * @param resource
 * @return array
 **/
function gmp_sqrtrem($a) {}

/**
 * Convert GMP number to string representation in base
 * base. The default base is 10.
 *
 * @param resource
 * @param int
 * @return string
 **/
function gmp_strval($gmpnumber, $base) {}

/**
 * Subtracts b from a
 * and returns the result.
 *
 * @param resource
 * @param resource
 * @return resource
 **/
function gmp_sub($a, $b) {}

/**
 * Tests if the specified bit is set.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function gmp_testbit($a, $index) {}

/**
 * Calculates bitwise exclusive OR (XOR) of two GMP numbers.
 *
 * @param resource
 * @param resource
 * @return resource
 **/
function gmp_xor($a, $b) {}

/**
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function gnupg_adddecryptkey($identifier, $fingerprint, $passphrase) {}

/**
 * @param resource
 * @param string
 * @return bool
 **/
function gnupg_addencryptkey($identifier, $fingerprint) {}

/**
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function gnupg_addsignkey($identifier, $fingerprint, $passphrase) {}

/**
 * @param resource
 * @return bool
 **/
function gnupg_cleardecryptkeys($identifier) {}

/**
 * @param resource
 * @return bool
 **/
function gnupg_clearencryptkeys($identifier) {}

/**
 * @param resource
 * @return bool
 **/
function gnupg_clearsignkeys($identifier) {}

/**
 * Decrypts the given text with the keys, which were set with gnupg_adddecryptkey before.
 *
 * @param resource
 * @param string
 * @return string
 **/
function gnupg_decrypt($identifier, $text) {}

/**
 * Decrypts and verifies a given text and returns information about the
 * signature.
 *
 * @param resource
 * @param string
 * @param string
 * @return array
 **/
function gnupg_decryptverify($identifier, $text, $plaintext) {}

/**
 * Encrypts the given plaintext with the keys, which
 * were set with gnupg_addencryptkey before and
 * returns the encrypted text.
 *
 * @param resource
 * @param string
 * @return string
 **/
function gnupg_encrypt($identifier, $plaintext) {}

/**
 * Encrypts and signs the given plaintext with the
 * keys, which were set with
 * gnupg_addsignkey and gnupg_addencryptkey before and
 * returns the encrypted and signed text.
 *
 * @param resource
 * @param string
 * @return string
 **/
function gnupg_encryptsign($identifier, $plaintext) {}

/**
 * Exports the key fingerprint.
 *
 * @param resource
 * @param string
 * @return string
 **/
function gnupg_export($identifier, $fingerprint) {}

/**
 * @param resource
 * @return string
 **/
function gnupg_geterror($identifier) {}

/**
 * @param resource
 * @return int
 **/
function gnupg_getprotocol($identifier) {}

/**
 * Imports the key keydata and returns an array with
 * information about the importprocess.
 *
 * @param resource
 * @param string
 * @return array
 **/
function gnupg_import($identifier, $keydata) {}

/**
 * @return resource
 **/
function gnupg_init() {}

/**
 * @param resource
 * @param string
 * @return array
 **/
function gnupg_keyinfo($identifier, $pattern) {}

/**
 * Toggle the armored output.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function gnupg_setarmor($identifier, $armor) {}

/**
 * Sets the mode for error_reporting.
 *
 * @param resource
 * @param int
 * @return void
 **/
function gnupg_seterrormode($identifier, $errormode) {}

/**
 * Sets the mode for signing.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function gnupg_setsignmode($identifier, $signmode) {}

/**
 * Signs the given plaintext with the keys, which were
 * set with gnupg_addsignkey before and
 * returns the signed text or the signature, depending on what was set with
 * gnupg_setsignmode.
 *
 * @param resource
 * @param string
 * @return string
 **/
function gnupg_sign($identifier, $plaintext) {}

/**
 * Verifies the given signed_text and returns information about the
 * signature.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @return array
 **/
function gnupg_verify($identifier, $signed_text, $signature, $plaintext) {}

/**
 * @return array
 **/
function hash_algos() {}

/**
 * @param resource
 * @return resource
 **/
function hash_copy($context) {}

/**
 * @param string
 * @param string
 * @param bool
 * @return string
 **/
function hash_file($algo, $filename, $raw_output) {}

/**
 * @param resource
 * @param bool
 * @return string
 **/
function hash_final($context, $raw_output) {}

/**
 * @param string
 * @param string
 * @param string
 * @param bool
 * @return string
 **/
function hash_hmac_file($algo, $filename, $key, $raw_output) {}

/**
 * @param string
 * @param string
 * @param string
 * @param bool
 * @return string
 **/
function hash_hmac($algo, $data, $key, $raw_output) {}

/**
 * @param string
 * @param int
 * @param string
 * @return resource
 **/
function hash_init($algo, $options, $key) {}

/**
 * @param resource
 * @param string
 * @param resource
 * @return bool
 **/
function hash_update_file($context, $filename, $context) {}

/**
 * @param resource
 * @param resource
 * @param int
 * @return int
 **/
function hash_update_stream($context, $handle, $length) {}

/**
 * @param resource
 * @param string
 * @return bool
 **/
function hash_update($context, $data) {}

/**
 * @param string
 * @param string
 * @param bool
 * @return string
 **/
function hash($algo, $data, $raw_output) {}

/**
 * Attempts to cache the sent entity by its ETag, either supplied or generated 
 * by the hash algorithm specified by the 
 * http.etag.mode.
 *
 * @param string
 * @return bool
 **/
function http_cache_etag($etag) {}

/**
 * Attempts to cache the sent entity by its last modification date.
 *
 * @param int
 * @return bool
 **/
function http_cache_last_modified($timestamp_or_expires) {}

/**
 * Decodes a string which is HTTP-chunked encoded.
 *
 * @param string
 * @return string
 **/
function http_chunked_decode($encoded) {}

/**
 * Compress data with gzip, zlib AKA deflate or raw deflate encoding.
 *
 * @param string
 * @param int
 * @return string
 **/
function http_deflate($data, $flags = 0) {}

/**
 * Decompress data compressed with either gzip, deflate AKA zlib or raw
 * deflate encoding.
 *
 * @param string
 * @return string
 **/
function http_inflate($data) {}

/**
 * Build a cookie string from an array/object like returned by http_parse_cookie.
 *
 * @param array
 * @return string
 **/
function http_build_cookie($cookie) {}

/**
 * Compose a valid HTTP date regarding RFC 1123
 * looking like: Wed, 22 Dec 2004 11:34:47 GMT.
 *
 * @param int
 * @return string
 **/
function http_date($timestamp) {}

/**
 * Create a stream to read the raw request body (e.g. POST or PUT data).
 *
 * @return resource
 **/
function http_get_request_body_stream() {}

/**
 * Get the raw request body (e.g. POST or PUT data).
 *
 * @return string
 **/
function http_get_request_body() {}

/**
 * Get a list of incoming HTTP headers.
 *
 * @return array
 **/
function http_get_request_headers() {}

/**
 * Matches the given ETag against the clients If-Match resp. 
 * If-None-Match HTTP headers.
 *
 * @param string
 * @param bool
 * @return bool
 **/
function http_match_etag($etag, $for_range = FALSE) {}

/**
 * Matches the given Unix timestamp against the clients If-Modified-Since
 * resp. If-Unmodified-Since HTTP headers.
 *
 * @param int
 * @param bool
 * @return bool
 **/
function http_match_modified($timestamp, $for_range = FALSE) {}

/**
 * Match an incoming HTTP header.
 *
 * @param string
 * @param string
 * @param bool
 * @return bool
 **/
function http_match_request_header($header, $value, $match_case = FALSE) {}

/**
 * Check for features that require external libraries.
 *
 * @param int
 * @return int
 **/
function http_support($feature = 0) {}

/**
 * This function negotiates the clients preferred charset based on its
 * Accept-Charset HTTP header. The qualifier is recognized and charsets 
 * without qualifier are rated highest.
 *
 * @param array
 * @param array
 * @return string
 **/
function http_negotiate_charset($supported, $result) {}

/**
 * This function negotiates the clients preferred content type based on its
 * Accept HTTP header. The qualifier is recognized and content types 
 * without qualifier are rated highest.
 *
 * @param array
 * @param array
 * @return string
 **/
function http_negotiate_content_type($supported, $result) {}

/**
 * This function negotiates the clients preferred language based on its
 * Accept-Language HTTP header. The qualifier is recognized and languages 
 * without qualifier are rated highest. The qualifier will be decreased by
 * 10% for partial matches (i.e. matching primary language).
 *
 * @param array
 * @param array
 * @return string
 **/
function http_negotiate_language($supported, $result) {}

/**
 * @param string
 * @param int
 * @return string
 **/
function ob_deflatehandler($data, $mode) {}

/**
 * @param string
 * @param int
 * @return string
 **/
function ob_etaghandler($data, $mode) {}

/**
 * @param string
 * @param int
 * @return string
 **/
function ob_inflatehandler($data, $mode) {}

/**
 * Parses HTTP cookies like sent in a response into a struct.
 *
 * @param string
 * @param int
 * @param array
 * @return object
 **/
function http_parse_cookie($cookie, $flags, $allowed_extras) {}

/**
 * Parses HTTP headers into an associative array.
 *
 * @param string
 * @return array
 **/
function http_parse_headers($header) {}

/**
 * Parses the HTTP message into a simple 
 * recursive object.
 *
 * @param string
 * @return object
 **/
function http_parse_message($message) {}

/**
 * Parse parameter list.
 *
 * @param string
 * @param int
 * @return object
 **/
function http_parse_params($param, $flags = HTTP_PARAMS_DEFAULT) {}

/**
 * Clean up (close) persistent handles, optionally identified with ident.
 *
 * @param string
 * @return string
 **/
function http_persistent_handles_clean($ident) {}

/**
 * List statistics about persistent handles usage.
 *
 * @return object
 **/
function http_persistent_handles_count() {}

/**
 * Query or define the ident of persistent handles.
 *
 * @param string
 * @return string
 **/
function http_persistent_handles_ident($ident) {}

/**
 * Performs an HTTP GET request on the supplied url.
 *
 * @param string
 * @param array
 * @param array
 * @return string
 **/
function http_get($url, $options, $info) {}

/**
 * Performs an HTTP HEAD request on the supplied url.
 *
 * @param string
 * @param array
 * @param array
 * @return string
 **/
function http_head($url, $options, $info) {}

/**
 * Performs an HTTP POST request on the supplied url.
 *
 * @param string
 * @param string
 * @param array
 * @param array
 * @return string
 **/
function http_post_data($url, $data, $options, $info) {}

/**
 * Performs an HTTP POST request on the supplied url.
 *
 * @param string
 * @param array
 * @param array
 * @param array
 * @param array
 * @return string
 **/
function http_post_fields($url, $data, $files, $options, $info) {}

/**
 * Performs an HTTP PUT request on the supplied url.
 *
 * @param string
 * @param string
 * @param array
 * @param array
 * @return string
 **/
function http_put_data($url, $data, $options, $info) {}

/**
 * Performs an HTTP PUT request on the supplied url.
 *
 * @param string
 * @param string
 * @param array
 * @param array
 * @return string
 **/
function http_put_file($url, $file, $options, $info) {}

/**
 * Performs an HTTP PUT request on the supplied url.
 *
 * @param string
 * @param resource
 * @param array
 * @param array
 * @return string
 **/
function http_put_stream($url, $stream, $options, $info) {}

/**
 * Generate x-www-form-urlencoded resp. form-data encoded request body.
 *
 * @param array
 * @param array
 * @return string
 **/
function http_request_body_encode($fields, $files) {}

/**
 * Check if a request method is registered (or available by default).
 *
 * @param mixed
 * @return int
 **/
function http_request_method_exists($method) {}

/**
 * Get the literal string representation of a standard or registered request method.
 *
 * @param int
 * @return string
 **/
function http_request_method_name($method) {}

/**
 * Register a custom request method.
 *
 * @param string
 * @return int
 **/
function http_request_method_register($method) {}

/**
 * Unregister a previously registered custom request method.
 *
 * @param mixed
 * @return bool
 **/
function http_request_method_unregister($method) {}

/**
 * Performs a custom HTTP request on the supplied url.
 *
 * @param int
 * @param string
 * @param string
 * @param array
 * @param array
 * @return string
 **/
function http_request($method, $url, $body, $options, $info) {}

/**
 * Redirect to the given url.
 *
 * @param string
 * @param array
 * @param bool
 * @param int
 * @return void
 **/
function http_redirect($url, $params, $session = FALSE, $status) {}

/**
 * Send the Content-Disposition.
 *
 * @param string
 * @param bool
 * @return bool
 **/
function http_send_content_disposition($filename, $inline = FALSE) {}

/**
 * Send the Content-Type of the sent entity.
 *
 * @param string
 * @return bool
 **/
function http_send_content_type($content_type = 'applicationxoctetstream') {}

/**
 * Sends raw data with support for (multiple) range requests.
 *
 * @param string
 * @return bool
 **/
function http_send_data($data) {}

/**
 * Sends a file with support for (multiple) range requests.
 *
 * @param string
 * @return bool
 **/
function http_send_file($file) {}

/**
 * Send a Last-Modified header with a valid HTTP date.
 *
 * @param int
 * @return bool
 **/
function http_send_last_modified($timestamp) {}

/**
 * Send HTTP status code.
 *
 * @param int
 * @return bool
 **/
function http_send_status($status) {}

/**
 * Sends an already opened stream with support for (multiple) range requests.
 *
 * @param resource
 * @return bool
 **/
function http_send_stream($stream) {}

/**
 * Sets the throttle delay and send buffer size.
 *
 * @param float
 * @param int
 * @return void
 **/
function http_throttle($sec, $bytes = 40960) {}

/**
 * Opponent to parse_str().
 *
 * @param array
 * @param string
 * @param string
 * @return string
 **/
function http_build_str($query, $prefix, $arg_separator) {}

/**
 * Build an URL.
 *
 * @param mixed
 * @param mixed
 * @param int
 * @param array
 * @return string
 **/
function http_build_url($url, $parts, $flags = HTTP_URL_REPLACE, $new_url) {}

/**
 * Converts an object_array into an object record.
 * Multiple attributes like 'Title' in different languages are treated
 * properly.
 *
 * @param array
 * @return string
 **/
function hw_array2objrec($object_array) {}

/**
 * @param int
 * @param int
 * @param array
 * @return bool
 **/
function hw_changeobject($link, $objid, $attributes) {}

/**
 * Returns the identifiers of the collection children.
 *
 * @param int
 * @param int
 * @return array
 **/
function hw_children($connection, $objectID) {}

/**
 * Returns the object records of the collection children.
 *
 * @param int
 * @param int
 * @return array
 **/
function hw_childrenobj($connection, $objectID) {}

/**
 * Closes down the connection to a Hyperwave server.
 *
 * @param int
 * @return bool
 **/
function hw_close($connection) {}

/**
 * Opens a connection to a Hyperwave server.
 * You can have multiple connections open at once.
 *
 * @param string
 * @param int
 * @param string
 * @param string
 * @return int
 **/
function hw_connect($host, $port, $username, $password) {}

/**
 * @param int
 * @return void
 **/
function hw_connection_info($link) {}

/**
 * Copies the objects with object ids as specified in the second
 * parameter to the collection
 * with the id destination id.
 *
 * @param int
 * @param array
 * @param int
 * @return int
 **/
function hw_cp($connection, $object_id_array, $destination_id) {}

/**
 * Deletes the object with the given object id in the second
 * parameter. It will delete all instances of the object.
 *
 * @param int
 * @param int
 * @return bool
 **/
function hw_deleteobject($connection, $object_to_delete) {}

/**
 * Returns an th object id of the document to which
 * anchorID belongs.
 *
 * @param int
 * @param int
 * @return int
 **/
function hw_docbyanchor($connection, $anchorID) {}

/**
 * Returns an th object record of the document to which
 * anchorID belongs.
 *
 * @param int
 * @param int
 * @return string
 **/
function hw_docbyanchorobj($connection, $anchorID) {}

/**
 * Returns the object record of the document.
 *
 * @param int
 * @return string
 **/
function hw_document_attributes($hw_document) {}

/**
 * Returns the BODY tag of the document. If the document is an HTML
 * document the BODY tag should be printed before the document.
 *
 * @param int
 * @param string
 * @return string
 **/
function hw_document_bodytag($hw_document, $prefix) {}

/**
 * Gets the content of the document.
 *
 * @param int
 * @return string
 **/
function hw_document_content($hw_document) {}

/**
 * Sets or replaces the content of the document. If the document is an HTML
 * document the content is everything after the BODY tag. Information
 * from the HEAD and BODY tag is in the stored in the object record.
 * If you provide this information in the content of the document too,
 * the Hyperwave server will change the object record accordingly when
 * the document is inserted. Probably not a very good idea.
 * If this functions fails the document will retain its old content.
 *
 * @param int
 * @param string
 * @return bool
 **/
function hw_document_setcontent($hw_document, $content) {}

/**
 * Gets the size of the document.
 *
 * @param int
 * @return int
 **/
function hw_document_size($hw_document) {}

/**
 * @param int
 * @param int
 * @param int
 * @return string
 **/
function hw_dummy($link, $id, $msgid) {}

/**
 * Uploads the text document to the server. The object record of the document
 * may not be modified while the document is edited.
 *
 * @param int
 * @param int
 * @return bool
 **/
function hw_edittext($connection, $hw_document) {}

/**
 * Returns the last error number, for the last command.
 *
 * @param int
 * @return int
 **/
function hw_error($connection) {}

/**
 * Returns a string containing the last error message related to the last
 * command.
 *
 * @param int
 * @return string
 **/
function hw_errormsg($connection) {}

/**
 * Frees the memory occupied by the Hyperwave document.
 *
 * @param int
 * @return bool
 **/
function hw_free_document($hw_document) {}

/**
 * Returns an array of object ids with anchors of the specified document.
 *
 * @param int
 * @param int
 * @return array
 **/
function hw_getanchors($connection, $objectID) {}

/**
 * Returns records with anchors of the document with object ID
 * objectID.
 *
 * @param int
 * @param int
 * @return array
 **/
function hw_getanchorsobj($connection, $objectID) {}

/**
 * Returns the object record for the object with ID
 * objectID.
 * It will also lock the object, so other users cannot access
 * it until it is unlocked.
 *
 * @param int
 * @param int
 * @return string
 **/
function hw_getandlock($connection, $objectID) {}

/**
 * Returns object ids. Each object ID belongs to a child collection of the
 * collection with ID objectID. The function will not
 * return child documents.
 *
 * @param int
 * @param int
 * @return array
 **/
function hw_getchildcoll($connection, $objectID) {}

/**
 * Returns object records. Each object records belongs to a child collection
 * of the collection with ID objectID. The function
 * will not return child documents.
 *
 * @param int
 * @param int
 * @return array
 **/
function hw_getchildcollobj($connection, $objectID) {}

/**
 * Returns array of object ids for child documents of a collection.
 *
 * @param int
 * @param int
 * @return array
 **/
function hw_getchilddoccoll($connection, $objectID) {}

/**
 * Returns an array of object records for child documents of a collection.
 *
 * @param int
 * @param int
 * @return array
 **/
function hw_getchilddoccollobj($connection, $objectID) {}

/**
 * Gets an object record.
 * If the second parameter is an array of integer the function will
 *
 * @param int
 * @param mixed
 * @param string
 * @return mixed
 **/
function hw_getobject($connection, $objectID, $query) {}

/**
 * Searches for objects on the whole server and returns an array of
 * object ids.
 *
 * @param int
 * @param string
 * @param int
 * @return array
 **/
function hw_getobjectbyquery($connection, $query, $max_hits) {}

/**
 * Searches for objects in collection with ID objectID
 * and returns an array of object ids.
 *
 * @param int
 * @param int
 * @param string
 * @param int
 * @return array
 **/
function hw_getobjectbyquerycoll($connection, $objectID, $query, $max_hits) {}

/**
 * Searches for objects in collection with ID objectID
 * and returns an array of object records.
 *
 * @param int
 * @param int
 * @param string
 * @param int
 * @return array
 **/
function hw_getobjectbyquerycollobj($connection, $objectID, $query, $max_hits) {}

/**
 * Searches for objects on the whole server and returns an array of
 * object records.
 *
 * @param int
 * @param string
 * @param int
 * @return array
 **/
function hw_getobjectbyqueryobj($connection, $query, $max_hits) {}

/**
 * Returns the object identifiers of the parents of an object.
 *
 * @param int
 * @param int
 * @return array
 **/
function hw_getparents($connection, $objectID) {}

/**
 * Returns object records and statistical information about the object
 * records. Each object record belongs to a parent of the object with ID
 * objectID.
 *
 * @param int
 * @param int
 * @return array
 **/
function hw_getparentsobj($connection, $objectID) {}

/**
 * @param int
 * @param int
 * @param int
 * @param int
 * @return string
 **/
function hw_getrellink($link, $rootid, $sourceid, $destid) {}

/**
 * Gets a remote document.
 *
 * @param int
 * @param int
 * @return int
 **/
function hw_getremote($connection, $objectID) {}

/**
 * Returns the children of a remote document. Children of a remote document
 * are remote documents itself. This makes sense if a database query has to
 * be narrowed and is explained in Hyperwave Programmers' Guide.
 *
 * @param int
 * @param string
 * @return mixed
 **/
function hw_getremotechildren($connection, $object_record) {}

/**
 * Gets the object records of all anchors pointing to the object with ID
 * objectID.
 *
 * @param int
 * @param int
 * @return array
 **/
function hw_getsrcbydestobj($connection, $objectID) {}

/**
 * Returns the document with object ID objectID. If
 * the document has anchors which can be inserted, they will be inserted
 * already.
 *
 * @param int
 * @param int
 * @param mixed
 * @return int
 **/
function hw_gettext($connection, $objectID, $rootIDprefix) {}

/**
 * Returns the username of the connection.
 *
 * @param int
 * @return string
 **/
function hw_getusername($connection) {}

/**
 * Identifies as user with username and
 * password. Identification is only valid for the
 * current session. I do not think this function will be needed very often.
 * In most cases it will be easier to identify with the opening of the
 * connection.
 *
 * @param int
 * @param string
 * @param string
 * @return string
 **/
function hw_identify($link, $username, $password) {}

/**
 * Checks whether a set of objects (documents or collections)
 * specified by the object_id_array is part of
 * the collections listed in collection_id_array.
 *
 * @param int
 * @param array
 * @param array
 * @param int
 * @return array
 **/
function hw_incollections($connection, $object_id_array, $collection_id_array, $return_collections) {}

/**
 * Returns information about the current connection.
 *
 * @param int
 * @return string
 **/
function hw_info($connection) {}

/**
 * Inserts a new collection with attributes as in
 * object_array into
 * collection with object ID objectID.
 *
 * @param int
 * @param int
 * @param array
 * @return int
 **/
function hw_inscoll($connection, $objectID, $object_array) {}

/**
 * Inserts a new document with attributes as in
 * object_record into acollection.
 *
 * @param resource
 * @param int
 * @param string
 * @param string
 * @return int
 **/
function hw_insdoc($connection, $parentID, $object_record, $text) {}

/**
 * @param int
 * @param array
 * @param array
 * @param array
 * @return bool
 **/
function hw_insertanchors($hwdoc, $anchorecs, $dest, $urlprefixes) {}

/**
 * Uploads a document into the given collection.
 *
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function hw_insertdocument($connection, $parent_id, $hw_document) {}

/**
 * Inserts an object into the server.
 *
 * @param int
 * @param string
 * @param string
 * @return int
 **/
function hw_insertobject($connection, $object_rec, $parameter) {}

/**
 * Maps a global object id on any hyperwave server, even those you did not
 * connect to with hw_connect, onto a virtual object id.
 *
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function hw_mapid($connection, $server_id, $object_id) {}

/**
 * This command allows to remove, add, or modify individual attributes
 * of an object record. The object is specified by the Object ID
 * object_to_change.
 * In order to modify an attribute one will have to remove
 * the old one and add a new one. hw_modifyobject
 * will always remove the attributes before it adds attributes unless
 * the value of the attribute to remove is not a string or array.
 *
 * @param int
 * @param int
 * @param array
 * @param array
 * @param int
 * @return bool
 **/
function hw_modifyobject($connection, $object_to_change, $remove, $add, $mode) {}

/**
 * Moves the specified objects from a collection to another.
 *
 * @param int
 * @param array
 * @param int
 * @param int
 * @return int
 **/
function hw_mv($connection, $object_id_array, $source_id, $destination_id) {}

/**
 * Returns a new Hyperwave document with the given document data and object
 * record.
 *
 * @param string
 * @param string
 * @param int
 * @return int
 **/
function hw_new_document($object_record, $document_data, $document_size) {}

/**
 * Converts an object_record into an object array.
 *
 * @param string
 * @param array
 * @return array
 **/
function hw_objrec2array($object_record, $format) {}

/**
 * Prints the document without the BODY tag.
 *
 * @param int
 * @return bool
 **/
function hw_output_document($hw_document) {}

/**
 * Opens a persistent connection to a Hyperwave server.
 * You can have multiple persistent connections open at once.
 *
 * @param string
 * @param int
 * @param string
 * @param string
 * @return int
 **/
function hw_pconnect($host, $port, $username, $password) {}

/**
 * Gets the Hyperwave document with the given object ID. If the document has
 * anchors which can be inserted, they will have been inserted already.
 *
 * @param int
 * @param int
 * @param array
 * @return int
 **/
function hw_pipedocument($connection, $objectID, $url_prefixes) {}

/**
 * Returns the object ID of the hyperroot collection. Currently this
 * is always 0. The child collection of the hyperroot is the root
 * collection of the connected server.
 *
 * @return int
 **/
function hw_root() {}

/**
 * @param int
 * @param int
 * @return int
 **/
function hw_setlinkroot($link, $rootid) {}

/**
 * @param int
 * @return string
 **/
function hw_stat($link) {}

/**
 * Unlocks a document, so other users regain access.
 *
 * @param int
 * @param int
 * @return bool
 **/
function hw_unlock($connection, $objectID) {}

/**
 * Gets the list of currently logged in users.
 *
 * @param int
 * @return array
 **/
function hw_who($connection) {}

/**
 * Creates a new instance of hw_api_attribute with the given name and value.
 *
 * @param string
 * @param string
 * @return HW_API_Attribute
 **/
function hw_api_attribute($name, $value) {}

/**
 * Opens a connection to the Hyperwave server on host
 * hostname. The protocol used is HGCSP.
 *
 * @param string
 * @param int
 * @return HW_API
 **/
function hwapi_hgcsp($hostname, $port) {}

/**
 * Creates a new content object from the string
 * content.
 *
 * @param string
 * @param string
 * @return HW_API_Content
 **/
function hw_api_content($content, $mimetype) {}

/**
 * Creates a new instance of the class hw_api_object.
 *
 * @param array
 * @return hw_api_object
 **/
function hw_api_object($parameter) {}

/**
 * This function returns the default Locale, which is used by PHP to localize
 * certain features. Please note that this isn't influenced by
 * setlocale or the system settings.
 *
 * @return string
 **/
function locale_get_default() {}

/**
 * Sets the default Locale for PHP programs. Please note that this has nothing
 * to do with setlocale nor with the system locale.
 *
 * @param string
 * @return bool
 **/
function locale_set_default($name) {}

/**
 * PHP 4 uses server,
 * dba_user_name and
 * dba_user_password instead of
 * service_handle parameter.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function ibase_add_user($service_handle, $user_name, $password, $first_name, $middle_name, $last_name) {}

/**
 * This function returns the number of rows that were affected by the
 * previous query (INSERT, UPDATE or DELETE) that was executed from within
 * the specified transaction context.
 *
 * @param resource
 * @return int
 **/
function ibase_affected_rows($link_identifier) {}

/**
 * @param resource
 * @param string
 * @param string
 * @param int
 * @param bool
 * @return mixed
 **/
function ibase_backup($service_handle, $source_db, $dest_file, $options, $verbose) {}

/**
 * ibase_blob_add adds data into a blob created with
 * ibase_blob_create.
 *
 * @param resource
 * @param string
 * @return void
 **/
function ibase_blob_add($blob_handle, $data) {}

/**
 * This function will discard a BLOB if it has not yet been closed by
 * ibase_blob_close.
 *
 * @param resource
 * @return bool
 **/
function ibase_blob_cancel($blob_handle) {}

/**
 * This function closes a BLOB that has either been opened for reading by
 * ibase_open_blob or has been opened for writing by
 * ibase_create_blob.
 *
 * @param resource
 * @return mixed
 **/
function ibase_blob_close($blob_handle) {}

/**
 * ibase_blob_create creates a new BLOB for filling with
 * data.
 *
 * @param resource
 * @return resource
 **/
function ibase_blob_create($link_identifier) {}

/**
 * This function opens a BLOB for reading and sends its contents directly to
 * standard output (the browser, in most cases).
 *
 * @param resource
 * @param string
 * @return bool
 **/
function ibase_blob_echo($link_identifier, $blob_id) {}

/**
 * This function returns at most len bytes from a BLOB
 * that has been opened for reading by ibase_blob_open.
 *
 * @param resource
 * @param int
 * @return string
 **/
function ibase_blob_get($blob_handle, $len) {}

/**
 * This function creates a BLOB, reads an entire file into it, closes it and
 * returns the assigned BLOB id.
 *
 * @param resource
 * @param resource
 * @return string
 **/
function ibase_blob_import($link_identifier, $file_handle) {}

/**
 * Returns the BLOB length and other useful information.
 *
 * @param resource
 * @param string
 * @return array
 **/
function ibase_blob_info($link_identifier, $blob_id) {}

/**
 * Opens an existing BLOB for reading.
 *
 * @param resource
 * @param string
 * @return resource
 **/
function ibase_blob_open($link_identifier, $blob_id) {}

/**
 * Closes the link to an InterBase database that's associated with
 * a connection id returned from ibase_connect.
 * Default transaction on link is committed, other transactions are
 * rolled back.
 *
 * @param resource
 * @return bool
 **/
function ibase_close($connection_id) {}

/**
 * Commits a transaction without closing it.
 *
 * @param resource
 * @return bool
 **/
function ibase_commit_ret($link_or_trans_identifier) {}

/**
 * Commits a transaction.
 *
 * @param resource
 * @return bool
 **/
function ibase_commit($link_or_trans_identifier) {}

/**
 * Establishes a connection to an InterBase server.
 *
 * @param string
 * @param string
 * @param string
 * @param string
 * @param int
 * @param int
 * @param string
 * @param int
 * @return resource
 **/
function ibase_connect($database, $username, $password, $charset, $buffers, $dialect, $role, $sync) {}

/**
 * @param resource
 * @param string
 * @param int
 * @param int
 * @return string
 **/
function ibase_db_info($service_handle, $db, $action, $argument) {}

/**
 * PHP 4 uses server,
 * dba_user_name and
 * dba_user_password instead of
 * service_handle parameter.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function ibase_delete_user($service_handle, $user_name) {}

/**
 * This functions drops a database that was opened by either ibase_connect
 * or ibase_pconnect. The database is closed and deleted from the server.
 *
 * @param resource
 * @return bool
 **/
function ibase_drop_db($connection) {}

/**
 * Returns the error code that resulted from the most recent InterBase function
 * call.
 *
 * @return int
 **/
function ibase_errcode() {}

/**
 * @return string
 **/
function ibase_errmsg() {}

/**
 * Execute a query prepared by ibase_prepare.
 *
 * @param resource
 * @param mixed
 * @return resource
 **/
function ibase_execute($query, $bind_arg) {}

/**
 * Fetch a result row from a query as an associative array.
 *
 * @param resource
 * @param int
 * @return array
 **/
function ibase_fetch_assoc($result, $fetch_flag) {}

/**
 * Fetches a row as a pseudo-object from a given result identifier.
 *
 * @param resource
 * @param int
 * @return object
 **/
function ibase_fetch_object($result_id, $fetch_flag) {}

/**
 * ibase_fetch_row fetches one row of data from the
 * given result set.
 *
 * @param resource
 * @param int
 * @return array
 **/
function ibase_fetch_row($result_identifier, $fetch_flag) {}

/**
 * Returns an array with information about a field after a select
 * query has been run.
 *
 * @param resource
 * @param int
 * @return array
 **/
function ibase_field_info($result, $field_number) {}

/**
 * This function causes the registered event handler specified by
 * event to be cancelled. The callback function will
 * no longer be called for the events it was registered to handle.
 *
 * @param resource
 * @return bool
 **/
function ibase_free_event_handler($event) {}

/**
 * Frees a prepared query.
 *
 * @param resource
 * @return bool
 **/
function ibase_free_query($query) {}

/**
 * Frees a result set.
 *
 * @param resource
 * @return bool
 **/
function ibase_free_result($result_identifier) {}

/**
 * @param string
 * @param int
 * @param resource
 * @return mixed
 **/
function ibase_gen_id($generator, $increment, $link_identifier) {}

/**
 * @param resource
 * @param string
 * @param int
 * @param int
 * @return bool
 **/
function ibase_maintain_db($service_handle, $db, $action, $argument) {}

/**
 * PHP 4 uses server,
 * dba_user_name and
 * dba_user_password instead of
 * service_handle parameter.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function ibase_modify_user($service_handle, $user_name, $password, $first_name, $middle_name, $last_name) {}

/**
 * This function assigns a name to a result set. This name can be used later in
 * UPDATE|DELETE ... WHERE CURRENT OF name statements.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function ibase_name_result($result, $name) {}

/**
 * Get the number of fields in a result set.
 *
 * @param resource
 * @return int
 **/
function ibase_num_fields($result_id) {}

/**
 * This function returns the number of parameters in the prepared query specified
 * by query. This is the number of binding arguments that
 * must be present when calling ibase_execute.
 *
 * @param resource
 * @return int
 **/
function ibase_num_params($query) {}

/**
 * Returns an array with information about a parameter after a
 * query has been prepared.
 *
 * @param resource
 * @param int
 * @return array
 **/
function ibase_param_info($query, $param_number) {}

/**
 * Opens a persistent connection to an InterBase database.
 *
 * @param string
 * @param string
 * @param string
 * @param string
 * @param int
 * @param int
 * @param string
 * @param int
 * @return resource
 **/
function ibase_pconnect($database, $username, $password, $charset, $buffers, $dialect, $role, $sync) {}

/**
 * @param string
 * @return resource
 **/
function ibase_prepare($query) {}

/**
 * @param resource
 * @param string
 * @param int
 * @return resource
 **/
function ibase_query($link_identifier, $query, $bind_args) {}

/**
 * @param resource
 * @param string
 * @param string
 * @param int
 * @param bool
 * @return mixed
 **/
function ibase_restore($service_handle, $source_file, $dest_db, $options, $verbose) {}

/**
 * Rolls back a transaction without closing it.
 *
 * @param resource
 * @return bool
 **/
function ibase_rollback_ret($link_or_trans_identifier) {}

/**
 * Rolls back a transaction.
 *
 * @param resource
 * @return bool
 **/
function ibase_rollback($link_or_trans_identifier) {}

/**
 * @param resource
 * @param int
 * @return string
 **/
function ibase_server_info($service_handle, $action) {}

/**
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function ibase_service_attach($host, $dba_username, $dba_password) {}

/**
 * @param resource
 * @return bool
 **/
function ibase_service_detach($service_handle) {}

/**
 * This function registers a PHP user function as event handler for the
 * specified events.
 *
 * @param callback
 * @param string
 * @param string
 * @return resource
 **/
function ibase_set_event_handler($event_handler, $event_name1, $event_name2) {}

/**
 * Sets the format of timestamp, date or time type columns returned from
 * queries.
 *
 * @param string
 * @param int
 * @return bool
 **/
function ibase_timefmt($format, $columntype) {}

/**
 * Begins a transaction.
 *
 * @param int
 * @param resource
 * @return resource
 **/
function ibase_trans($trans_args, $link_identifier) {}

/**
 * This function suspends execution of the script until one of the specified events
 * is posted by the database. The name of the event that was posted is returned. This
 * function accepts up to 15 event arguments.
 *
 * @param string
 * @param string
 * @return string
 **/
function ibase_wait_event($event_name1, $event_name2) {}

/**
 * Sets or gets the AUTOCOMMIT behavior of the specified connection resource.
 *
 * @param resource
 * @param bool
 * @return mixed
 **/
function db2_autocommit($connection, $value) {}

/**
 * Binds a PHP variable to an SQL statement parameter in a statement resource
 * returned by db2_prepare. This function gives you more
 * control over the parameter type, data type, precision, and scale for the
 * parameter than simply passing the variable as part of the optional input
 * array to db2_execute.
 *
 * @param resource
 * @param int
 * @param string
 * @param int
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function db2_bind_param($stmt, $parameternumber, $variablename, $parametertype, $datatype, $precision, $scale) {}

/**
 * This function returns an object with read-only properties that return
 * information about the DB2 database client. The following table lists
 * the DB2 client properties:
 * 
 * DB2 client properties
 * 
 * 
 * 
 * Property name
 * Return type
 * Description
 * 
 * 
 * 
 * 
 * APPL_CODEPAGE
 * int
 * The application code page.
 * 
 * 
 * CONN_CODEPAGE
 * int
 * The code page for the current connection.
 * 
 * 
 * DATA_SOURCE_NAME
 * string
 * The data source name (DSN) used to create the current connection
 * to the database.
 * 
 * 
 * DRIVER_NAME
 * string
 * The name of the library that implements the DB2 Call
 * Level Interface (CLI) specification.
 * 
 * 
 * DRIVER_ODBC_VER
 * string
 * The version of ODBC that the DB2 client supports. This returns a
 * string "MM.mm" where MM is the major version and
 * mm is the minor version. The DB2 client always
 * returns "03.51".
 * 
 * 
 * 
 * DRIVER_VER
 * string
 * The version of the client, in the form of a string "MM.mm.uuuu" where
 * MM is the major version, 
 * mm is the minor version,
 * and uuuu is the update. For example, "08.02.0001"
 * represents major version 8, minor version 2, update 1.
 * 
 * 
 * 
 * ODBC_SQL_CONFORMANCE
 * string
 * 
 * The level of ODBC SQL grammar supported by the client:
 * 
 * 
 * MINIMUM
 * 
 * 
 * Supports the minimum ODBC SQL grammar.
 * 
 * 
 * 
 * 
 * CORE
 * 
 * 
 * Supports the core ODBC SQL grammar.
 * 
 * 
 * 
 * 
 * EXTENDED
 * 
 * 
 * Supports extended ODBC SQL grammar.
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * ODBC_VER
 * string
 * The version of ODBC that the ODBC driver manager supports. This
 * returns a string "MM.mm.rrrr" where MM is the major
 * version, mm is the minor version, and
 * rrrr is the release. The DB2 client always returns
 * "03.01.0000".
 *
 * @param resource
 * @return object
 **/
function db2_client_info($connection) {}

/**
 * This function closes a DB2 client connection created with
 * db2_connect and returns the corresponding
 * resources to the database server.
 *
 * @param resource
 * @return bool
 **/
function db2_close($connection) {}

/**
 * Returns a result set listing the columns and associated privileges for a
 * table.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function db2_column_privileges($connection, $qualifier, $schema, $tablename, $columnname) {}

/**
 * Returns a result set listing the columns and associated metadata for a
 * table.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function db2_columns($connection, $qualifier, $schema, $tablename, $columnname) {}

/**
 * Commits an in-progress transaction on the specified connection resource and
 * begins a new transaction. PHP applications normally default to AUTOCOMMIT
 * mode, so db2_commit is not necessary unless AUTOCOMMIT
 * has been turned off for the connection resource.
 *
 * @param resource
 * @return bool
 **/
function db2_commit($connection) {}

/**
 * db2_conn_error returns an SQLSTATE value representing
 * the reason the last attempt to connect to a database failed. As
 * db2_connect returns in the event of a failed
 * connection attempt, you do not pass any parameters to
 * db2_conn_error to retrieve the SQLSTATE value.
 *
 * @param resource
 * @return string
 **/
function db2_conn_error($connection) {}

/**
 * db2_conn_errormsg returns an error message and SQLCODE
 * value representing the reason the last database connection attempt failed.
 * As db2_connect returns in the event of a failed
 * connection attempt, do not pass any parameters to
 * db2_conn_errormsg to retrieve the associated error
 * message and SQLCODE value.
 *
 * @param resource
 * @return string
 **/
function db2_conn_errormsg($connection) {}

/**
 * Creates a new connection to an IBM DB2 Universal Database, IBM Cloudscape,
 * or Apache Derby database.
 *
 * @param string
 * @param string
 * @param string
 * @param array
 * @return resource
 **/
function db2_connect($database, $username, $password, $options) {}

/**
 * Returns the cursor type used by a statement resource. Use this to determine
 * if you are working with a forward-only cursor or scrollable cursor.
 *
 * @param resource
 * @return int
 **/
function db2_cursor_type($stmt) {}

/**
 * Prepends backslashes to special characters in the string argument.
 *
 * @param string
 * @return string
 **/
function db2_escape_string($string_literal) {}

/**
 * Executes an SQL statement directly.
 *
 * @param resource
 * @param string
 * @param array
 * @return resource
 **/
function db2_exec($connection, $statement, $options) {}

/**
 * db2_execute executes an SQL statement that was
 * prepared by db2_prepare.
 *
 * @param resource
 * @param array
 * @return bool
 **/
function db2_execute($stmt, $parameters) {}

/**
 * Returns an array, indexed by column position, representing a row in a result
 * set. The columns are 0-indexed.
 *
 * @param resource
 * @param int
 * @return array
 **/
function db2_fetch_array($stmt, $row_number) {}

/**
 * Returns an array, indexed by column name, representing a row in a result
 * set.
 *
 * @param resource
 * @param int
 * @return array
 **/
function db2_fetch_assoc($stmt, $row_number) {}

/**
 * Returns an array, indexed by both column name and position, representing a
 * row in a result set. Note that the row returned by
 * db2_fetch_both requires more memory than the
 * single-indexed arrays returned by db2_fetch_assoc or
 * db2_fetch_array.
 *
 * @param resource
 * @param int
 * @return array
 **/
function db2_fetch_both($stmt, $row_number) {}

/**
 * Returns an object in which each property represents a column returned in
 * the row fetched from a result set.
 *
 * @param resource
 * @param int
 * @return object
 **/
function db2_fetch_object($stmt, $row_number) {}

/**
 * Use db2_fetch_row to iterate through a result set, or
 * to point to a specific row in a result set if you requested a scrollable
 * cursor.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function db2_fetch_row($stmt, $row_number) {}

/**
 * Returns the maximum number of bytes required to display a column in a
 * result set.
 *
 * @param resource
 * @param mixed
 * @return int
 **/
function db2_field_display_size($stmt, $column) {}

/**
 * Returns the name of the specified column in the result set.
 *
 * @param resource
 * @param mixed
 * @return string
 **/
function db2_field_name($stmt, $column) {}

/**
 * Returns the position of the named column in a result set.
 *
 * @param resource
 * @param mixed
 * @return int
 **/
function db2_field_num($stmt, $column) {}

/**
 * Returns the precision of the indicated column in a result set.
 *
 * @param resource
 * @param mixed
 * @return int
 **/
function db2_field_precision($stmt, $column) {}

/**
 * Returns the scale of the indicated column in a result set.
 *
 * @param resource
 * @param mixed
 * @return int
 **/
function db2_field_scale($stmt, $column) {}

/**
 * Returns the data type of the indicated column in a result set.
 *
 * @param resource
 * @param mixed
 * @return string
 **/
function db2_field_type($stmt, $column) {}

/**
 * Returns the width of the current value of the indicated column in a result
 * set. This is the maximum width of the column for a fixed-length data type,
 * or the actual width of the column for a variable-length data type.
 *
 * @param resource
 * @param mixed
 * @return int
 **/
function db2_field_width($stmt, $column) {}

/**
 * Returns a result set listing the foreign keys for a table.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function db2_foreign_keys($connection, $qualifier, $schema, $tablename) {}

/**
 * Frees the system and database resources that are associated with a result
 * set. These resources are freed implicitly when a script finishes, but you
 * can call db2_free_result to explicitly free the result
 * set resources before the end of the script.
 *
 * @param resource
 * @return bool
 **/
function db2_free_result($stmt) {}

/**
 * Frees the system and database resources that are associated with a statement
 * resource. These resources are freed implicitly when a script finishes, but
 * you can call db2_free_stmt to explicitly free the
 * statement resources before the end of the script.
 *
 * @param resource
 * @return bool
 **/
function db2_free_stmt($stmt) {}

/**
 * Retrieves the value of a specified option value for a statement resource 
 * or a connection resource.
 *
 * @param resource
 * @param string
 * @return string
 **/
function db2_get_option($resource, $option) {}

/**
 * Use db2_lob_read to iterate through a specified column of 
 * a result set and retrieve a user defined size of LOB data.
 *
 * @param resource
 * @param int
 * @param int
 * @return string
 **/
function db2_lob_read($stmt, $colnum, $length) {}

/**
 * A stored procedure can return zero or more result sets. While you handle
 * the first result set in exactly the same way you would handle the results
 * returned by a simple SELECT statement, to fetch the second and subsequent
 * result sets from a stored procedure you must call the
 * db2_next_result function and return the result to a
 * uniquely named PHP variable.
 *
 * @param resource
 * @return resource
 **/
function db2_next_result($stmt) {}

/**
 * Returns the number of fields contained in a result set. This is most useful
 * for handling the result sets returned by dynamically generated queries, or
 * for result sets returned by stored procedures, where your application cannot
 * otherwise know how to retrieve and use the results.
 *
 * @param resource
 * @return int
 **/
function db2_num_fields($stmt) {}

/**
 * Returns the number of rows deleted, inserted, or updated by an SQL
 * statement.
 *
 * @param resource
 * @return int
 **/
function db2_num_rows($stmt) {}

/**
 * Returns a persistent connection to an IBM DB2 Universal Database, IBM
 * Cloudscape, or Apache Derby database. For more information on persistent
 * connections, refer to .
 *
 * @param string
 * @param string
 * @param string
 * @param array
 * @return resource
 **/
function db2_pconnect($database, $username, $password, $options) {}

/**
 * db2_prepare creates a prepared SQL statement which can
 * include 0 or more parameter markers (? characters)
 * representing parameters for input, output, or input/output. You can pass
 * parameters to the prepared statement using
 * db2_bind_param, or for input values only, as an array
 * passed to db2_execute.
 *
 * @param resource
 * @param string
 * @param array
 * @return resource
 **/
function db2_prepare($connection, $statement, $options) {}

/**
 * Returns a result set listing the primary keys for a table.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function db2_primary_keys($connection, $qualifier, $schema, $tablename) {}

/**
 * Returns a result set listing the parameters for one or more stored
 * procedures.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function db2_procedure_columns($connection, $qualifier, $schema, $procedure, $parameter) {}

/**
 * Returns a result set listing the stored procedures registered in a
 * database.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function db2_procedures($connection, $qualifier, $schema, $procedure) {}

/**
 * Use db2_result to return the value of a specified
 * column in the current row of a result set. You must call
 * db2_fetch_row before calling
 * db2_result to set the location of the result set
 * pointer.
 *
 * @param resource
 * @param mixed
 * @return mixed
 **/
function db2_result($stmt, $column) {}

/**
 * Rolls back an in-progress transaction on the specified connection resource and
 * begins a new transaction. PHP applications normally default to AUTOCOMMIT
 * mode, so db2_rollback normally has no effect unless
 * AUTOCOMMIT has been turned off for the connection resource.
 *
 * @param resource
 * @return bool
 **/
function db2_rollback($connection) {}

/**
 * This function returns an object with read-only properties that return
 * information about the IBM DB2, Cloudscape, or Apache Derby database server.
 * The following table lists the database server properties:
 * 
 * Database server properties
 * 
 * 
 * 
 * Property name
 * Return type
 * Description
 * 
 * 
 * 
 * 
 * DBMS_NAME
 * string
 * The name of the database server to which you are
 * connected. For DB2 servers this is a combination of
 * DB2 followed by the operating system on which
 * the database server is running.
 * 
 * 
 * DBMS_VER
 * string
 * The version of the database server, in the form of a string
 * "MM.mm.uuuu" where MM is the major version, 
 * mm is the minor version,
 * and uuuu is the update. For example, "08.02.0001"
 * represents major version 8, minor version 2, update 1.
 * 
 * 
 * 
 * DB_CODEPAGE
 * int
 * The code page of the database to which you are connected.
 * 
 * 
 * DB_NAME
 * string
 * The name of the database to which you are connected.
 * 
 * 
 * DFT_ISOLATION
 * string
 * 
 * The default transaction isolation level supported by the
 * server:
 * 
 * 
 * UR
 * 
 * 
 * Uncommitted read: changes are immediately visible by all
 * concurrent transactions.
 * 
 * 
 * 
 * 
 * CS
 * 
 * 
 * Cursor stability: a row read by one transaction can be altered and
 * committed by a second concurrent transaction.
 * 
 * 
 * 
 * 
 * RS
 * 
 * 
 * Read stability: a transaction can add or remove rows matching a
 * search condition or a pending transaction.
 * 
 * 
 * 
 * 
 * RR
 * 
 * 
 * Repeatable read: data affected by pending transaction is not
 * available to other transactions.
 * 
 * 
 * 
 * 
 * NC
 * 
 * 
 * No commit: any changes are visible at the end of a successful
 * operation. Explicit commits and rollbacks are not allowed.
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * IDENTIFIER_QUOTE_CHAR
 * string
 * The character used to delimit an identifier.
 * 
 * 
 * INST_NAME
 * string
 * The instance on the database server that contains the
 * database.
 * 
 * 
 * ISOLATION_OPTION
 * array
 * An array of the isolation options supported by the
 * database server. The isolation options are described in
 * the DFT_ISOLATION property.
 * 
 * 
 * KEYWORDS
 * array
 * An array of the keywords reserved by the database
 * server.
 * 
 * 
 * LIKE_ESCAPE_CLAUSE
 * bool
 * if the database server supports the
 * use of % and _ wildcard
 * characters. if the database server does not
 * support these wildcard characters.
 * 
 * 
 * MAX_COL_NAME_LEN
 * int
 * Maximum length of a column name supported by the database
 * server, expressed in bytes.
 * 
 * 
 * MAX_IDENTIFIER_LEN
 * int
 * Maximum length of an SQL identifier supported by the database
 * server, expressed in characters.
 * 
 * 
 * MAX_INDEX_SIZE
 * int
 * Maximum size of columns combined in an index supported by the
 * database server, expressed in bytes.
 * 
 * 
 * MAX_PROC_NAME_LEN
 * int
 * Maximum length of a procedure name supported by the database
 * server, expressed in bytes.
 * 
 * 
 * MAX_ROW_SIZE
 * int
 * Maximum length of a row in a base table supported by the
 * database server, expressed in bytes.
 * 
 * 
 * MAX_SCHEMA_NAME_LEN
 * int
 * Maximum length of a schema name supported by the database
 * server, expressed in bytes.
 * 
 * 
 * MAX_STATEMENT_LEN
 * int
 * Maximum length of an SQL statement supported by the database
 * server, expressed in bytes.
 * 
 * 
 * MAX_TABLE_NAME_LEN
 * int
 * Maximum length of a table name supported by the database
 * server, expressed in bytes.
 * 
 * 
 * NON_NULLABLE_COLUMNS
 * bool
 * if the database server supports columns that can be
 * defined as NOT NULL, if the database server does not support
 * columns defined as NOT NULL.
 * 
 * 
 * PROCEDURES
 * bool
 * if the database server supports the use of the CALL
 * statement to call stored procedures, if the database
 * server does not support the CALL statement.
 * 
 * 
 * SPECIAL_CHARS
 * string
 * A string containing all of the characters other than
 * a-Z, 0-9, and underscore that can be used in an identifier name.
 * 
 * 
 * SQL_CONFORMANCE
 * string
 * 
 * The level of conformance to the ANSI/ISO SQL-92 specification
 * offered by the database server:
 * 
 * 
 * ENTRY
 * 
 * 
 * Entry-level SQL-92 compliance.
 * 
 * 
 * 
 * 
 * FIPS127
 * 
 * 
 * FIPS-127-2 transitional compliance.
 * 
 * 
 * 
 * 
 * FULL
 * 
 * 
 * Full level SQL-92 compliance.
 * 
 * 
 * 
 * 
 * INTERMEDIATE
 * 
 * 
 * Intermediate level SQL-92 compliance.
 *
 * @param resource
 * @return object
 **/
function db2_server_info($connection) {}

/**
 * Sets options for a statement resource or a connection resource. You
 * cannot set options for result set resources.
 *
 * @param resource
 * @param array
 * @param int
 * @return bool
 **/
function db2_set_option($resource, $options, $type) {}

/**
 * Returns a result set listing the unique row identifier columns for a table.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param int
 * @return resource
 **/
function db2_special_columns($connection, $qualifier, $schema, $table_name, $scope) {}

/**
 * Returns a result set listing the index and statistics for a table.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param bool
 * @return resource
 **/
function db2_statistics($connection, $qualifier, $schema, $tablename, $unique) {}

/**
 * Returns a string containing the SQLSTATE value returned by an SQL statement.
 *
 * @param resource
 * @return string
 **/
function db2_stmt_error($stmt) {}

/**
 * Returns a string containing the last SQL statement error message.
 *
 * @param resource
 * @return string
 **/
function db2_stmt_errormsg($stmt) {}

/**
 * Returns a result set listing the tables and associated privileges in a
 * database.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function db2_table_privileges($connection, $qualifier, $schema, $table_name) {}

/**
 * Returns a result set listing the tables and associated metadata in a
 * database.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function db2_tables($connection, $qualifier, $schema, $tablename, $tabletype) {}

/**
 * Retrieve internal configuration variables of iconv extension.
 *
 * @param string
 * @return mixed
 **/
function iconv_get_encoding($type) {}

/**
 * Returns an associative array that holds a whole set of
 * MIME header fields specified by
 * encoded_headers on success, or 
 * if an error occurs during the decoding.
 *
 * @param string
 * @param int
 * @param string
 * @return array
 **/
function iconv_mime_decode_headers($encoded_headers, $mode, $charset) {}

/**
 * Decodes a MIME header field.
 *
 * @param string
 * @param int
 * @param string
 * @return string
 **/
function iconv_mime_decode($encoded_header, $mode, $charset) {}

/**
 * Composes and returns a string that represents a valid MIME
 * header field, which looks like the following:
 * 
 * 
 * 
 * In the above example, "Subject" is the field name and the portion that
 * begins with "=?ISO-8859-1?..." is the field value.
 *
 * @param string
 * @param string
 * @param array
 * @return string
 **/
function iconv_mime_encode($field_name, $field_value, $preferences) {}

/**
 * Changes the value of the internal configuration variable specified by
 * type to charset.
 *
 * @param string
 * @param string
 * @return bool
 **/
function iconv_set_encoding($type, $charset) {}

/**
 * In contrast to strlen,
 * iconv_strlen counts the occurrences of characters
 * in the given byte sequence str on the basis of
 * the specified character set, the result of which is not necessarily
 * identical to the length of the string in byte.
 *
 * @param string
 * @param string
 * @return int
 **/
function iconv_strlen($str, $charset) {}

/**
 * Finds position of first occurrence of a needle within a haystack.
 *
 * @param string
 * @param string
 * @param int
 * @param string
 * @return int
 **/
function iconv_strpos($haystack, $needle, $offset, $charset) {}

/**
 * In contrast to strpos, the return value of
 * iconv_strrpos is the number of characters that
 * appear before the needle, rather than the offset in bytes to the
 * position where the needle has been found.
 *
 * @param string
 * @param string
 * @param string
 * @return int
 **/
function iconv_strrpos($haystack, $needle, $charset) {}

/**
 * Cuts a portion of str specified by the 
 * offset and length parameters.
 *
 * @param string
 * @param int
 * @return string
 **/
function iconv_substr($str, $offset) {}

/**
 * Performs a character set conversion on the string
 * str from in_charset
 * to out_charset.
 *
 * @param string
 * @param string
 * @param string
 * @return string
 **/
function iconv($in_charset, $out_charset, $str) {}

/**
 * Converts the string encoded in internal_encoding to
 * output_encoding.
 *
 * @param string
 * @param int
 * @return string
 **/
function ob_iconv_handler($contents, $status) {}

/**
 * id3_get_frame_long_name returns the long name for an
 * ID3v2 frame.
 *
 * @param string
 * @return string
 **/
function id3_get_frame_long_name($frameId) {}

/**
 * id3_get_frame_short_name returns the short name for an
 * ID3v2 frame.
 *
 * @param string
 * @return string
 **/
function id3_get_frame_short_name($frameId) {}

/**
 * id3_get_genre_id returns the id for a genre.
 *
 * @param string
 * @return int
 **/
function id3_get_genre_id($genre) {}

/**
 * id3_get_genre_list returns an array containing all
 * possible genres that may be stored in an ID3 tag. This list has been created
 * by Eric Kemp and later extended by WinAmp.
 *
 * @return array
 **/
function id3_get_genre_list() {}

/**
 * id3_get_genre_name returns the name for a genre id.
 *
 * @param int
 * @return string
 **/
function id3_get_genre_name($genre_id) {}

/**
 * id3_get_tag is used to get all information stored
 * in the id3 tag of the specified file.
 *
 * @param string
 * @param int
 * @return array
 **/
function id3_get_tag($filename, $version) {}

/**
 * id3_get_version retrieves the version(s) of the 
 * ID3 tag(s) in the MP3 file.
 *
 * @param string
 * @return int
 **/
function id3_get_version($filename) {}

/**
 * id3_remove_tag is used to remove the information stored
 * of an ID3 tag.
 *
 * @param string
 * @param int
 * @return bool
 **/
function id3_remove_tag($filename, $version) {}

/**
 * id3_set_tag is used to change the information stored
 * of an ID3 tag. If no tag has been present, it will be added to the file.
 *
 * @param string
 * @param array
 * @param int
 * @return bool
 **/
function id3_set_tag($filename, $tag, $version) {}

/**
 * Returns the number of rows affected by a query associated with
 * result_id.
 *
 * @param resource
 * @return int
 **/
function ifx_affected_rows($result_id) {}

/**
 * Set the default blob mode for all select queries.
 *
 * @param int
 * @return bool
 **/
function ifx_blobinfile_mode($mode) {}

/**
 * Sets the default byte mode for all select-queries.
 *
 * @param int
 * @return bool
 **/
function ifx_byteasvarchar($mode) {}

/**
 * ifx_close closes the link to an Informix
 * database that's associated with the specified link identifier.
 *
 * @param resource
 * @return bool
 **/
function ifx_close($link_identifier) {}

/**
 * ifx_connect establishes a connection to an Informix
 * server.
 *
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function ifx_connect($database, $userid, $password) {}

/**
 * Duplicates the given blob object.
 *
 * @param int
 * @return int
 **/
function ifx_copy_blob($bid) {}

/**
 * Creates a blob object.
 *
 * @param int
 * @param int
 * @param string
 * @return int
 **/
function ifx_create_blob($type, $mode, $param) {}

/**
 * Creates an char object.
 *
 * @param string
 * @return int
 **/
function ifx_create_char($param) {}

/**
 * Executes a previously prepared query or opens a cursor for it.
 *
 * @param resource
 * @return bool
 **/
function ifx_do($result_id) {}

/**
 * Returns in a string one character describing the general results of a
 * statement and both SQLSTATE and SQLCODE associated with the most recent
 * SQL statement executed.
 *
 * @param resource
 * @return string
 **/
function ifx_error($link_identifier) {}

/**
 * Returns the Informix error message associated with the most recent
 * Informix error.
 *
 * @param int
 * @return string
 **/
function ifx_errormsg($errorcode) {}

/**
 * Fetches one row of data from the result associated with the specified
 * result identifier.
 *
 * @param resource
 * @param mixed
 * @return array
 **/
function ifx_fetch_row($result_id, $position) {}

/**
 * Returns the Informix SQL fieldproperties of every field in the
 * query as an associative array. Properties are encoded as:
 * "SQLTYPE;length;precision;scale;ISNULLABLE" where SQLTYPE = the
 * Informix type like "SQLVCHAR" etc. and ISNULLABLE = "Y" or "N".
 *
 * @param resource
 * @return array
 **/
function ifx_fieldproperties($result_id) {}

/**
 * Returns an associative array with fieldnames as key and the SQL
 * fieldtypes as data for the query associated with
 * result_id.
 *
 * @param resource
 * @return array
 **/
function ifx_fieldtypes($result_id) {}

/**
 * Deletes the blobobject for the given blob object-id.
 *
 * @param int
 * @return bool
 **/
function ifx_free_blob($bid) {}

/**
 * Deletes the charobject for the given char object-id.
 *
 * @param int
 * @return bool
 **/
function ifx_free_char($bid) {}

/**
 * Releases resources for the query associated with
 * result_id.
 *
 * @param resource
 * @return bool
 **/
function ifx_free_result($result_id) {}

/**
 * Returns the content of the blob object.
 *
 * @param int
 * @return string
 **/
function ifx_get_blob($bid) {}

/**
 * Returns the content of the char object.
 *
 * @param int
 * @return string
 **/
function ifx_get_char($bid) {}

/**
 * Returns a pseudo-row with sqlca.sqlerrd[0] ... sqlca.sqlerrd[5] after the
 * query associated with result_id.
 *
 * @param resource
 * @return array
 **/
function ifx_getsqlca($result_id) {}

/**
 * Formats and prints all rows of the result_id query
 * into a HTML table.
 *
 * @param resource
 * @param string
 * @return int
 **/
function ifx_htmltbl_result($result_id, $html_table_options) {}

/**
 * Sets the default return value of a NULL-value on a fetch row.
 *
 * @param int
 * @return bool
 **/
function ifx_nullformat($mode) {}

/**
 * After preparing or executing a query, this call gives you the
 * number of columns in the query.
 *
 * @param resource
 * @return int
 **/
function ifx_num_fields($result_id) {}

/**
 * Gives the number of rows fetched so far for a query with
 * result_id after a
 * ifx_query or ifx_do
 * query.
 *
 * @param resource
 * @return int
 **/
function ifx_num_rows($result_id) {}

/**
 * ifx_pconnect acts very much like
 * ifx_connect with two major differences.
 *
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function ifx_pconnect($database, $userid, $password) {}

/**
 * Prepares a query for later use with
 * ifx_do.
 *
 * @param string
 * @param resource
 * @param int
 * @param mixed
 * @return resource
 **/
function ifx_prepare($query, $link_identifier, $cursor_def, $blobidarray) {}

/**
 * Sends a query to the currently active database on
 * the server that's associated with the specified link identifier.
 *
 * @param string
 * @param resource
 * @param int
 * @param mixed
 * @return resource
 **/
function ifx_query($query, $link_identifier, $cursor_type, $blobidarray) {}

/**
 * Sets the default text mode for all select-queries.
 *
 * @param int
 * @return bool
 **/
function ifx_textasvarchar($mode) {}

/**
 * Updates the content of the blob object for the given blob object
 * bid.
 *
 * @param int
 * @param string
 * @return bool
 **/
function ifx_update_blob($bid, $content) {}

/**
 * Updates the content of the char object for the given char object
 * bid.
 *
 * @param int
 * @param string
 * @return bool
 **/
function ifx_update_char($bid, $content) {}

/**
 * Deletes the slob object on the given slob object-id
 * bid.
 *
 * @param int
 * @return bool
 **/
function ifxus_close_slob($bid) {}

/**
 * Creates an slob object and opens it.
 *
 * @param int
 * @return int
 **/
function ifxus_create_slob($mode) {}

/**
 * Deletes the slob object.
 *
 * @param int
 * @return bool
 **/
function ifxus_free_slob($bid) {}

/**
 * Opens an slob object. bid should be an
 * existing slob id.
 *
 * @param int
 * @param int
 * @return int
 **/
function ifxus_open_slob($bid, $mode) {}

/**
 * Reads nbytes of the slob object.
 *
 * @param int
 * @param int
 * @return string
 **/
function ifxus_read_slob($bid, $nbytes) {}

/**
 * Sets the current file or seek position of an open slob object.
 *
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function ifxus_seek_slob($bid, $mode, $offset) {}

/**
 * Returns the current file or seek position of an open slob object
 *
 * @param int
 * @return int
 **/
function ifxus_tell_slob($bid) {}

/**
 * Writes a string into the slob object.
 *
 * @param int
 * @param string
 * @return int
 **/
function ifxus_write_slob($bid, $content) {}

/**
 * @param string
 * @param string
 * @param string
 * @param int
 * @param string
 * @param int
 * @param int
 * @return int
 **/
function iis_add_server($path, $comment, $server_ip, $port, $host_name, $rights, $start_server) {}

/**
 * @param int
 * @param string
 * @return int
 **/
function iis_get_dir_security($server_instance, $virtual_path) {}

/**
 * @param int
 * @param string
 * @param string
 * @return string
 **/
function iis_get_script_map($server_instance, $virtual_path, $script_extension) {}

/**
 * @param string
 * @return int
 **/
function iis_get_server_by_comment($comment) {}

/**
 * Each virtual server in IIS is associated with an instance number.
 * iis_get_server_by_path finds the instance number
 * from the actual path to the root directory.
 *
 * @param string
 * @return int
 **/
function iis_get_server_by_path($path) {}

/**
 * @param int
 * @param string
 * @return int
 **/
function iis_get_server_rights($server_instance, $virtual_path) {}

/**
 * @param string
 * @return int
 **/
function iis_get_service_state($service_id) {}

/**
 * @param int
 * @return int
 **/
function iis_remove_server($server_instance) {}

/**
 * @param int
 * @param string
 * @param string
 * @return int
 **/
function iis_set_app_settings($server_instance, $virtual_path, $application_scope) {}

/**
 * @param int
 * @param string
 * @param int
 * @return int
 **/
function iis_set_dir_security($server_instance, $virtual_path, $directory_flags) {}

/**
 * @param int
 * @param string
 * @param string
 * @param string
 * @param int
 * @return int
 **/
function iis_set_script_map($server_instance, $virtual_path, $script_extension, $engine_path, $allow_scripting) {}

/**
 * @param int
 * @param string
 * @param int
 * @return int
 **/
function iis_set_server_rights($server_instance, $virtual_path, $directory_flags) {}

/**
 * @param int
 * @return int
 **/
function iis_start_server($server_instance) {}

/**
 * @param string
 * @return int
 **/
function iis_start_service($service_id) {}

/**
 * @param int
 * @return int
 **/
function iis_stop_server($server_instance) {}

/**
 * @param string
 * @return int
 **/
function iis_stop_service($service_id) {}

/**
 * Gets information about the version and capabilities of the installed GD
 * library.
 *
 * @return array
 **/
function gd_info() {}

/**
 * The getimagesize function will determine the
 * size of any given image file and return the dimensions along with
 * the file type and a height/width text string to be used inside a
 * normal HTML IMG tag and the
 * correspondant HTTP content type.
 *
 * @param string
 * @param array
 * @return array
 **/
function getimagesize($filename, $imageinfo) {}

/**
 * Returns the extension for the given IMAGETYPE_XXX
 * constant.
 *
 * @param int
 * @param bool
 * @return string
 **/
function image_type_to_extension($imagetype, $include_dot) {}

/**
 * The image_type_to_mime_type function will determine
 * the Mime-Type for an IMAGETYPE constant.
 *
 * @param int
 * @return string
 **/
function image_type_to_mime_type($imagetype) {}

/**
 * image2wbmp outputs or save a WBMP
 * version of the given image.
 *
 * @param resource
 * @param string
 * @param int
 * @return bool
 **/
function image2wbmp($image, $filename, $threshold) {}

/**
 * imagealphablending allows for two different
 * modes of drawing on truecolor images. In blending mode, the
 * alpha channel component of the color supplied to all drawing function,
 * such as imagesetpixel determines how much of the
 * underlying color should be allowed to shine through. As a result, gd
 * automatically blends the existing color at that point with the drawing color,
 * and stores the result in the image. The resulting pixel is opaque. In
 * non-blending mode, the drawing color is copied literally with its alpha channel
 * information, replacing the destination pixel. Blending mode is not available
 * when drawing on palette images.
 *
 * @param resource
 * @param bool
 * @return bool
 **/
function imagealphablending($image, $blendmode) {}

/**
 * Activate the fast drawing antialiased methods for lines and wired polygons.
 * It does not support alpha components. It works using a direct blend
 * operation. It works only with truecolor images.
 *
 * @param resource
 * @param bool
 * @return bool
 **/
function imageantialias($image, $enabled) {}

/**
 * imagearc draws an arc of circle centered at the given
 * coordinates.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function imagearc($image, $cx, $cy, $width, $height, $start, $end, $color) {}

/**
 * imagechar draws the first character of
 * c in the image identified by
 * image with its upper-left at
 * x,y (top left is 0,
 * 0) with the color color.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param string
 * @param int
 * @return bool
 **/
function imagechar($image, $font, $x, $y, $c, $color) {}

/**
 * Draws the character c vertically at the specified
 * coordinate on the given image.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param string
 * @param int
 * @return bool
 **/
function imagecharup($image, $font, $x, $y, $c, $color) {}

/**
 * Returns a color identifier representing the color composed of the given
 * RGB components.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function imagecolorallocate($image, $red, $green, $blue) {}

/**
 * imagecolorallocatealpha behaves identically to
 * imagecolorallocate with the addition of the transparency
 * parameter alpha.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function imagecolorallocatealpha($image, $red, $green, $blue, $alpha) {}

/**
 * Returns the index of the color of the pixel at the
 * specified location in the image specified by image.
 *
 * @param resource
 * @param int
 * @param int
 * @return int
 **/
function imagecolorat($image, $x, $y) {}

/**
 * Returns the index of the color in the palette of the image which
 * is "closest" to the specified RGB value.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function imagecolorclosest($image, $red, $green, $blue) {}

/**
 * Returns the index of the color in the palette of the image which
 * is "closest" to the specified RGB value and 
 * alpha level.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function imagecolorclosestalpha($image, $red, $green, $blue, $alpha) {}

/**
 * Get the index of the color which has the hue, 
 * white and blacknessnearest the given color.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function imagecolorclosesthwb($image, $red, $green, $blue) {}

/**
 * De-allocates a color previously allocated with 
 * imagecolorallocate or
 * imagecolorallocatealpha.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function imagecolordeallocate($image, $color) {}

/**
 * Returns the index of the specified color in the palette of the
 * image.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function imagecolorexact($image, $red, $green, $blue) {}

/**
 * Returns the index of the specified color+alpha in the palette of the
 * image.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function imagecolorexactalpha($image, $red, $green, $blue, $alpha) {}

/**
 * Makes the colors of the palette version of an image more closely match the true color version.
 *
 * @param resource
 * @param resource
 * @return bool
 **/
function imagecolormatch($image1, $image2) {}

/**
 * This function is guaranteed to return a color index for a
 * requested color, either the exact color or the closest possible
 * alternative.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function imagecolorresolve($image, $red, $green, $blue) {}

/**
 * This function is guaranteed to return a color index for a
 * requested color, either the exact color or the closest possible
 * alternative.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function imagecolorresolvealpha($image, $red, $green, $blue, $alpha) {}

/**
 * This sets the specified index in the palette to the specified
 * color. This is useful for creating flood-fill-like effects in
 * palleted images without the overhead of performing the actual
 * flood-fill.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @return void
 **/
function imagecolorset($image, $index, $red, $green, $blue) {}

/**
 * Gets the color for a specified index.
 *
 * @param resource
 * @param int
 * @return array
 **/
function imagecolorsforindex($image, $index) {}

/**
 * Returns the number of colors in an image palette.
 *
 * @param resource
 * @return int
 **/
function imagecolorstotal($image) {}

/**
 * Sets the transparent color in the given image.
 *
 * @param resource
 * @param int
 * @return int
 **/
function imagecolortransparent($image, $color) {}

/**
 * Applies a convolution matrix on the image, using the given coefficient and
 * offset.
 *
 * @param resource
 * @param array
 * @param float
 * @param float
 * @return bool
 **/
function imageconvolution($image, $matrix, $div, $offset) {}

/**
 * Copy a part of src_im onto
 * dst_im starting at the x,y coordinates
 * src_x, src_y with
 * a width of src_w and a height of
 * src_h. The portion defined will be copied
 * onto the x,y coordinates, dst_x and
 * dst_y.
 *
 * @param resource
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function imagecopy($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h) {}

/**
 * Copy a part of src_im onto
 * dst_im starting at the x,y coordinates
 * src_x, src_y with
 * a width of src_w and a height of
 * src_h. The portion defined will be copied
 * onto the x,y coordinates, dst_x and
 * dst_y.
 *
 * @param resource
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function imagecopymerge($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h, $pct) {}

/**
 * imagecopymergegray copy a part of src_im onto
 * dst_im starting at the x,y coordinates
 * src_x, src_y with
 * a width of src_w and a height of
 * src_h. The portion defined will be copied
 * onto the x,y coordinates, dst_x and
 * dst_y.
 *
 * @param resource
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function imagecopymergegray($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h, $pct) {}

/**
 * imagecopyresampled copies a rectangular
 * portion of one image to another image, smoothly interpolating pixel
 * values so that, in particular, reducing the size of an image still
 * retains a great deal of clarity.
 *
 * @param resource
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function imagecopyresampled($dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h) {}

/**
 * imagecopyresized copies a rectangular
 * portion of one image to another image.
 * dst_image is the destination image,
 * src_image is the source image identifier.
 *
 * @param resource
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function imagecopyresized($dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h) {}

/**
 * imagecreate returns an image identifier
 * representing a blank image of specified size.
 *
 * @param int
 * @param int
 * @return resource
 **/
function imagecreate($width, $height) {}

/**
 * Create a new image from GD file or URL.
 *
 * @param string
 * @return resource
 **/
function imagecreatefromgd($filename) {}

/**
 * Create a new image from GD2 file or URL.
 *
 * @param string
 * @return resource
 **/
function imagecreatefromgd2($filename) {}

/**
 * Create a new image from a given part of GD2 file or URL.
 *
 * @param string
 * @param int
 * @param int
 * @param int
 * @param int
 * @return resource
 **/
function imagecreatefromgd2part($filename, $srcX, $srcY, $width, $height) {}

/**
 * imagecreatefromgif returns an image identifier
 * representing the image obtained from the given filename.
 *
 * @param string
 * @return resource
 **/
function imagecreatefromgif($filename) {}

/**
 * imagecreatefromjpeg returns an image identifier
 * representing the image obtained from the given filename.
 *
 * @param string
 * @return resource
 **/
function imagecreatefromjpeg($filename) {}

/**
 * imagecreatefrompng returns an image identifier
 * representing the image obtained from the given filename.
 *
 * @param string
 * @return resource
 **/
function imagecreatefrompng($filename) {}

/**
 * imagecreatefromstring returns an image identifier
 * representing the image obtained from the given data
 * These types will be automatically detected if your build of PHP supports 
 * them: JPEG, PNG, GIF, WBMP, and GD2.
 *
 * @param string
 * @return resource
 **/
function imagecreatefromstring($data) {}

/**
 * imagecreatefromwbmp returns an image identifier
 * representing the image obtained from the given filename.
 *
 * @param string
 * @return resource
 **/
function imagecreatefromwbmp($filename) {}

/**
 * imagecreatefromxbm returns an image identifier
 * representing the image obtained from the given filename.
 *
 * @param string
 * @return resource
 **/
function imagecreatefromxbm($filename) {}

/**
 * imagecreatefromxpm returns an image identifier
 * representing the image obtained from the given filename.
 *
 * @param string
 * @return resource
 **/
function imagecreatefromxpm($filename) {}

/**
 * imagecreatetruecolor returns an image identifier
 * representing a black image of the specified size.
 *
 * @param int
 * @param int
 * @return resource
 **/
function imagecreatetruecolor($width, $height) {}

/**
 * This function is deprecated. Use combination of
 * imagesetstyle and imageline
 * instead.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function imagedashedline($image, $x1, $y1, $x2, $y2, $color) {}

/**
 * imagedestroy frees any memory associated
 * with image image.
 *
 * @param resource
 * @return bool
 **/
function imagedestroy($image) {}

/**
 * Draws an ellipse centered at the specified coordinates.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function imageellipse($image, $cx, $cy, $width, $height, $color) {}

/**
 * Performs a flood fill starting at the given coordinate (top left is 0, 0)
 * with the given color in the
 * image.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function imagefill($image, $x, $y, $color) {}

/**
 * Draws a partial arc centered at the specified coordinate in the
 * given image.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function imagefilledarc($image, $cx, $cy, $width, $height, $start, $end, $color, $style) {}

/**
 * Draws an ellipse centered at the specified coordinate on the given
 * image.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function imagefilledellipse($image, $cx, $cy, $width, $height, $color) {}

/**
 * imagefilledpolygon creates a filled polygon
 * in the given image.
 *
 * @param resource
 * @param array
 * @param int
 * @param int
 * @return bool
 **/
function imagefilledpolygon($image, $points, $num_points, $color) {}

/**
 * Creates a rectangle filled with color in the given
 * image starting at point 1 and ending at point 2.
 * 0, 0 is the top left corner of the image.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function imagefilledrectangle($image, $x1, $y1, $x2, $y2, $color) {}

/**
 * imagefilltoborder performs a flood fill
 * whose border color is defined by border.
 * The starting point for the fill is x,
 * y (top left is 0, 0) and the region is
 * filled with color color.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function imagefilltoborder($image, $x, $y, $border, $color) {}

/**
 * imagefilter applies the given filter
 * filtertype on the image.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function imagefilter($image, $filtertype, $arg1, $arg2, $arg3, $arg4) {}

/**
 * Returns the pixel height of a character in the specified font.
 *
 * @param int
 * @return int
 **/
function imagefontheight($font) {}

/**
 * Returns the pixel width of a character in font.
 *
 * @param int
 * @return int
 **/
function imagefontwidth($font) {}

/**
 * This function calculates and returns the bounding box in pixels
 * for a FreeType text.
 *
 * @param float
 * @param float
 * @param string
 * @param string
 * @param array
 * @return array
 **/
function imageftbbox($size, $angle, $fontfile, $text, $extrainfo) {}

/**
 * @param resource
 * @param float
 * @param float
 * @param int
 * @param int
 * @param int
 * @param string
 * @param string
 * @param array
 * @return array
 **/
function imagefttext($image, $size, $angle, $x, $y, $color, $fontfile, $text, $extrainfo) {}

/**
 * Applies gamma correction to the given gd image 
 * given an input and an output gamma.
 *
 * @param resource
 * @param float
 * @param float
 * @return bool
 **/
function imagegammacorrect($image, $inputgamma, $outputgamma) {}

/**
 * Outputs a GD image to the given filename.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function imagegd($image, $filename) {}

/**
 * Outputs a GD2 image to the given filename.
 *
 * @param resource
 * @param string
 * @param int
 * @param int
 * @return bool
 **/
function imagegd2($image, $filename, $chunk_size, $type) {}

/**
 * imagegif creates the GIF
 * file in filename from the image image. The
 * image argument is the return from the
 * imagecreate or imagecreatefrom*
 * function.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function imagegif($image, $filename) {}

/**
 * Grabs a screenshot of the whole screen.
 *
 * @return resource
 **/
function imagegrabscreen() {}

/**
 * Grabs a window or its client area using a windows handle (HWND property in COM instance)
 *
 * @param int
 * @param int
 * @return resource
 **/
function imagegrabwindow($window, $client_area) {}

/**
 * imageinterlace turns the interlace bit on or off.
 *
 * @param resource
 * @param int
 * @return int
 **/
function imageinterlace($image, $interlace) {}

/**
 * imageistruecolor finds whether the image
 * image is a truecolor image.
 *
 * @param resource
 * @return bool
 **/
function imageistruecolor($image) {}

/**
 * imagejpeg creates a JPEG file from
 * the given image.
 *
 * @param resource
 * @param string
 * @param int
 * @return bool
 **/
function imagejpeg($image, $filename, $quality) {}

/**
 * Set the alpha blending flag to use the bundled libgd layering effects.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function imagelayereffect($image, $effect) {}

/**
 * Draws a line between the two given points.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function imageline($image, $x1, $y1, $x2, $y2, $color) {}

/**
 * imageloadfont loads a user-defined bitmap and returns
 * its identifier.
 *
 * @param string
 * @return int
 **/
function imageloadfont($file) {}

/**
 * imagepalettecopy copies the palette from the
 * source image to the 
 * destination image.
 *
 * @param resource
 * @param resource
 * @return void
 **/
function imagepalettecopy($destination, $source) {}

/**
 * Outputs or saves a PNG image from the given 
 * image.
 *
 * @param resource
 * @param string
 * @param int
 * @param int
 * @return bool
 **/
function imagepng($image, $filename, $quality, $filters) {}

/**
 * imagepolygon creates a polygon in the given
 * image.
 *
 * @param resource
 * @param array
 * @param int
 * @param int
 * @return bool
 **/
function imagepolygon($image, $points, $num_points, $color) {}

/**
 * Gives the bounding box of a text rectangle using PostScript Type1 fonts.
 *
 * @param string
 * @param resource
 * @param int
 * @return array
 **/
function imagepsbbox($text, $font, $size) {}

/**
 * Loads a character encoding vector from a file and changes the fonts 
 * encoding vector to it. As a PostScript fonts default vector lacks most of
 * the character positions above 127, you'll definitely want to change this
 * if you use an other language than English.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function imagepsencodefont($font_index, $encodingfile) {}

/**
 * Extend or condense a font (font_index), if
 * the value of the extend parameter is less
 * than one you will be condensing the font.
 *
 * @param int
 * @param float
 * @return bool
 **/
function imagepsextendfont($font_index, $extend) {}

/**
 * imagepsfreefont frees memory used by a PostScript
 * Type 1 font.
 *
 * @param resource
 * @return bool
 **/
function imagepsfreefont($font_index) {}

/**
 * Load a PostScript Type 1 font from the given 
 * filename.
 *
 * @param string
 * @return resource
 **/
function imagepsloadfont($filename) {}

/**
 * Slant a given font given.
 *
 * @param resource
 * @param float
 * @return bool
 **/
function imagepsslantfont($font_index, $slant) {}

/**
 * Draws a text on an image using PostScript Type1 fonts.
 *
 * @param resource
 * @param string
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param float
 * @param int
 * @return array
 **/
function imagepstext($image, $text, $font_index, $size, $foreground, $background, $x, $y, $space, $tightness, $angle, $antialias_steps) {}

/**
 * imagerectangle creates a rectangle starting at
 * the specified coordinates.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function imagerectangle($image, $x1, $y1, $x2, $y2, $color) {}

/**
 * Rotates the image image using the given
 * angle in degrees.
 *
 * @param resource
 * @param float
 * @param int
 * @param int
 * @return resource
 **/
function imagerotate($image, $angle, $bgd_color, $ignore_transparent) {}

/**
 * imagesavealpha sets the flag to attempt to save
 * full alpha channel information (as opposed to single-color transparency)
 * when saving PNG images.
 *
 * @param resource
 * @param bool
 * @return bool
 **/
function imagesavealpha($image, $saveflag) {}

/**
 * imagesetbrush sets the brush image to be
 * used by all line drawing functions (such as imageline
 * and imagepolygon) when drawing with the special
 * colors IMG_COLOR_BRUSHED or
 * IMG_COLOR_STYLEDBRUSHED.
 *
 * @param resource
 * @param resource
 * @return bool
 **/
function imagesetbrush($image, $brush) {}

/**
 * imagesetpixel draws a pixel at the specified
 * coordinate.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function imagesetpixel($image, $x, $y, $color) {}

/**
 * imagesetstyle sets the style to be used by all
 * line drawing functions (such as imageline
 * and imagepolygon) when drawing with the special
 * color IMG_COLOR_STYLED or lines of images with color
 * IMG_COLOR_STYLEDBRUSHED.
 *
 * @param resource
 * @param array
 * @return bool
 **/
function imagesetstyle($image, $style) {}

/**
 * imagesetthickness sets the thickness of the lines
 * drawn when drawing rectangles, polygons, ellipses etc. etc. to
 * thickness pixels.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function imagesetthickness($image, $thickness) {}

/**
 * imagesettile sets the tile image to be
 * used by all region filling functions (such as imagefill
 * and imagefilledpolygon) when filling with the special
 * color IMG_COLOR_TILED.
 *
 * @param resource
 * @param resource
 * @return bool
 **/
function imagesettile($image, $tile) {}

/**
 * Draws a string at the given coordinates.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param string
 * @param int
 * @return bool
 **/
function imagestring($image, $font, $x, $y, $string, $color) {}

/**
 * Draws a string vertically at the given
 * coordinates.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param string
 * @param int
 * @return bool
 **/
function imagestringup($image, $font, $x, $y, $string, $color) {}

/**
 * Returns the width of the given image resource.
 *
 * @param resource
 * @return int
 **/
function imagesx($image) {}

/**
 * Returns the height of the given image resource.
 *
 * @param resource
 * @return int
 **/
function imagesy($image) {}

/**
 * imagetruecolortopalette converts a truecolor image
 * to a palette image. The code for this function was originally drawn from
 * the Independent JPEG Group library code, which is excellent. The code
 * has been modified to preserve as much alpha channel information as
 * possible in the resulting palette, in addition to preserving colors as
 * well as possible. This does not work as well as might be hoped. It is
 * usually best to simply produce a truecolor output image instead, which
 * guarantees the highest output quality.
 *
 * @param resource
 * @param bool
 * @param int
 * @return bool
 **/
function imagetruecolortopalette($image, $dither, $ncolors) {}

/**
 * This function calculates and returns the bounding box in pixels
 * for a TrueType text.
 *
 * @param float
 * @param float
 * @param string
 * @param string
 * @return array
 **/
function imagettfbbox($size, $angle, $fontfile, $text) {}

/**
 * Writes the given text into the image using TrueType
 * fonts.
 *
 * @param resource
 * @param float
 * @param float
 * @param int
 * @param int
 * @param int
 * @param string
 * @param string
 * @return array
 **/
function imagettftext($image, $size, $angle, $x, $y, $color, $fontfile, $text) {}

/**
 * Returns the image types supported by the current PHP installation.
 *
 * @return int
 **/
function imagetypes() {}

/**
 * imagewbmp outputs or save a WBMP
 * version of the given image.
 *
 * @param resource
 * @param string
 * @param int
 * @return bool
 **/
function imagewbmp($image, $filename, $foreground) {}

/**
 * Outputs or save an XBM version of the given 
 * image.
 *
 * @param resource
 * @param string
 * @param int
 * @return bool
 **/
function imagexbm($image, $filename, $foreground) {}

/**
 * @param string
 * @param string
 * @param int
 * @return mixed
 **/
function iptcembed($iptcdata, $jpeg_file_name, $spool) {}

/**
 * Parses an IPTC block into its single tags.
 *
 * @param string
 * @return array
 **/
function iptcparse($iptcblock) {}

/**
 * Converts a JPEG file into a WBMP file.
 *
 * @param string
 * @param string
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function jpeg2wbmp($jpegname, $wbmpname, $dest_height, $dest_width, $threshold) {}

/**
 * Converts a PNG file into a WBMP file.
 *
 * @param string
 * @param string
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function png2wbmp($pngname, $wbmpname, $dest_height, $dest_width, $threshold) {}

/**
 * Convert an 8bit string to a quoted-printable string (according to
 * RFC2045, section 6.7).
 *
 * @param string
 * @return string
 **/
function imap_8bit($string) {}

/**
 * Returns all of the IMAP alert messages generated since the last
 * imap_alerts call, or the beginning of the page.
 *
 * @return array
 **/
function imap_alerts() {}

/**
 * Appends a string message to the specified mailbox.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function imap_append($imap_stream, $mailbox, $message, $options) {}

/**
 * Decodes the given BASE-64 encoded text.
 *
 * @param string
 * @return string
 **/
function imap_base64($text) {}

/**
 * Convert an 8bit string to a base64 string according to RFC2045, Section 6.8.
 *
 * @param string
 * @return string
 **/
function imap_binary($string) {}

/**
 * imap_body returns the body of the message,
 * numbered msg_number in the current
 * mailbox.
 *
 * @param resource
 * @param int
 * @param int
 * @return string
 **/
function imap_body($imap_stream, $msg_number, $options) {}

/**
 * Read the structure of a specified body section of a specific message.
 *
 * @param resource
 * @param int
 * @param string
 * @return object
 **/
function imap_bodystruct($imap_stream, $msg_number, $section) {}

/**
 * Checks information about the current mailbox.
 *
 * @param resource
 * @return object
 **/
function imap_check($imap_stream) {}

/**
 * This function causes a store to delete the specified
 * flag to the flags set for the
 * messages in the specified sequence.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function imap_clearflag_full($imap_stream, $sequence, $flag, $options) {}

/**
 * Closes the imap stream.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function imap_close($imap_stream, $flag) {}

/**
 * Creates a new mailbox specified by mailbox.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function imap_createmailbox($imap_stream, $mailbox) {}

/**
 * Marks messages listed in msg_number for deletion.
 * Messages marked for deletion will stay in the mailbox until either
 * imap_expunge is called or
 * imap_close is called with the optional parameter
 * CL_EXPUNGE.
 *
 * @param resource
 * @param int
 * @param int
 * @return bool
 **/
function imap_delete($imap_stream, $msg_number, $options) {}

/**
 * Deletes the specified mailbox.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function imap_deletemailbox($imap_stream, $mailbox) {}

/**
 * Gets all of the IMAP errors (if any) that have occurred during this page
 * request or since the error stack was reset.
 *
 * @return array
 **/
function imap_errors() {}

/**
 * Deletes all the messages marked for deletion by 
 * imap_delete, imap_mail_move, or
 * imap_setflag_full.
 *
 * @param resource
 * @return bool
 **/
function imap_expunge($imap_stream) {}

/**
 * This function fetches mail headers for the given
 * sequence and returns an overview of their
 * contents.
 *
 * @param resource
 * @param string
 * @param int
 * @return array
 **/
function imap_fetch_overview($imap_stream, $sequence, $options) {}

/**
 * Fetch of a particular section of the body of the specified messages. 
 * Body parts are not decoded by this function.
 *
 * @param resource
 * @param int
 * @param string
 * @param int
 * @return string
 **/
function imap_fetchbody($imap_stream, $msg_number, $part_number, $options) {}

/**
 * This function causes a fetch of the complete, unfiltered RFC2822 format header of the specified
 * message.
 *
 * @param resource
 * @param int
 * @param int
 * @return string
 **/
function imap_fetchheader($imap_stream, $msg_number, $options) {}

/**
 * Fetches all the structured information for a given message.
 *
 * @param resource
 * @param int
 * @param int
 * @return object
 **/
function imap_fetchstructure($imap_stream, $msg_number, $options) {}

/**
 * Retrieve the quota level settings, and usage statics per mailbox.
 *
 * @param resource
 * @param string
 * @return array
 **/
function imap_get_quota($imap_stream, $quota_root) {}

/**
 * Retrieve the quota settings per user. The limit value represents the total
 * amount of space allowed for this user's total mailbox usage. The usage
 * value represents the user's current total mailbox capacity.
 *
 * @param resource
 * @param string
 * @return array
 **/
function imap_get_quotaroot($imap_stream, $quota_root) {}

/**
 * Gets the ACL for a given mailbox.
 *
 * @param resource
 * @param string
 * @return array
 **/
function imap_getacl($imap_stream, $mailbox) {}

/**
 * Gets information on the mailboxes.
 *
 * @param resource
 * @param string
 * @param string
 * @return array
 **/
function imap_getmailboxes($imap_stream, $ref, $pattern) {}

/**
 * Gets information on the subscribeds mailboxes.
 *
 * @param resource
 * @param string
 * @param string
 * @return array
 **/
function imap_getsubscribed($imap_stream, $ref, $pattern) {}

/**
 * Gets information about the given message number by reading its headers.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param string
 * @return object
 **/
function imap_headerinfo($imap_stream, $msg_number, $fromlength, $subjectlength, $defaulthost) {}

/**
 * Returns headers for all messages in a mailbox.
 *
 * @param resource
 * @return array
 **/
function imap_headers($imap_stream) {}

/**
 * Gets the full text of the last IMAP error message that occurred on the
 * current page. The error stack is untouched; calling 
 * imap_last_error subsequently, with no intervening
 * errors, will return the same error.
 *
 * @return string
 **/
function imap_last_error() {}

/**
 * Read the list of mailboxes.
 *
 * @param resource
 * @param string
 * @param string
 * @return array
 **/
function imap_list($imap_stream, $ref, $pattern) {}

/**
 * Returns an array containing the names of the mailboxes that have
 * content in the text of the mailbox.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @return array
 **/
function imap_listscan($imap_stream, $ref, $pattern, $content) {}

/**
 * Gets an array of all the mailboxes that you have subscribed.
 *
 * @param resource
 * @param string
 * @param string
 * @return array
 **/
function imap_lsub($imap_stream, $ref, $pattern) {}

/**
 * Create a MIME message based on the given envelope
 * and body sections.
 *
 * @param array
 * @param array
 * @return string
 **/
function imap_mail_compose($envelope, $body) {}

/**
 * Copies mail messages specified by msglist
 * to specified mailbox.
 *
 * @param resource
 * @param string
 * @param string
 * @param int
 * @return bool
 **/
function imap_mail_copy($imap_stream, $msglist, $mailbox, $options) {}

/**
 * Moves mail messages specified by msglist to the
 * specified mailbox.
 *
 * @param resource
 * @param string
 * @param string
 * @param int
 * @return bool
 **/
function imap_mail_move($imap_stream, $msglist, $mailbox, $options) {}

/**
 * This function allows sending of emails with correct handling of
 * Cc and Bcc receivers.
 *
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function imap_mail($to, $subject, $message, $additional_headers, $cc, $bcc, $rpath) {}

/**
 * Checks the current mailbox status on the server. It is similar to
 * imap_status, but will additionally sum up the size of
 * all messages in the mailbox, which will take some additional time to 
 * execute.
 *
 * @param resource
 * @return object
 **/
function imap_mailboxmsginfo($imap_stream) {}

/**
 * Decodes MIME message header extensions that are non ASCII text (see RFC2047).
 *
 * @param string
 * @return array
 **/
function imap_mime_header_decode($text) {}

/**
 * Returns the message sequence number for the given 
 * uid.
 *
 * @param resource
 * @param int
 * @return int
 **/
function imap_msgno($imap_stream, $uid) {}

/**
 * Gets the number of messages in the current mailbox.
 *
 * @param resource
 * @return int
 **/
function imap_num_msg($imap_stream) {}

/**
 * Gets the number of recent messages in the current mailbox.
 *
 * @param resource
 * @return int
 **/
function imap_num_recent($imap_stream) {}

/**
 * Opens an IMAP stream to a mailbox.
 *
 * @param string
 * @param string
 * @param string
 * @param int
 * @param int
 * @return resource
 **/
function imap_open($mailbox, $username, $password, $options, $n_retries) {}

/**
 * imap_ping pings the stream to see if it's still
 * active. It may discover new mail; this is the preferred method for a
 * periodic "new mail check" as well as a "keep alive" for servers which
 * have inactivity timeout.
 *
 * @param resource
 * @return bool
 **/
function imap_ping($imap_stream) {}

/**
 * Convert a quoted-printable string to an 8 bit string according to RFC2045, section 6.7.
 *
 * @param string
 * @return string
 **/
function imap_qprint($string) {}

/**
 * This function renames on old mailbox to new mailbox (see
 * imap_open for the format of
 * mbox names).
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function imap_renamemailbox($imap_stream, $old_mbox, $new_mbox) {}

/**
 * Reopens the specified stream to a new mailbox on an
 * IMAP or NNTP server.
 *
 * @param resource
 * @param string
 * @param int
 * @param int
 * @return bool
 **/
function imap_reopen($imap_stream, $mailbox, $options, $n_retries) {}

/**
 * Parses the address string as defined in RFC2822 and for each address.
 *
 * @param string
 * @param string
 * @return array
 **/
function imap_rfc822_parse_adrlist($address, $default_host) {}

/**
 * Gets an object of various header elements, similar to 
 * imap_header.
 *
 * @param string
 * @param string
 * @return object
 **/
function imap_rfc822_parse_headers($headers, $defaulthost) {}

/**
 * Returns a properly formatted email address as defined in RFC2822 given the needed information.
 *
 * @param string
 * @param string
 * @param string
 * @return string
 **/
function imap_rfc822_write_address($mailbox, $host, $personal) {}

/**
 * Saves a part or the whole body of the specified message.
 *
 * @param resource
 * @param mixed
 * @param int
 * @param string
 * @param int
 * @return bool
 **/
function imap_savebody($imap_stream, $file, $msg_number, $part_number, $options) {}

/**
 * This function performs a search on the mailbox currently opened
 * in the given imap stream.
 *
 * @param resource
 * @param string
 * @param int
 * @param string
 * @return array
 **/
function imap_search($imap_stream, $criteria, $options, $charset) {}

/**
 * Sets an upper limit quota on a per mailbox basis.
 *
 * @param resource
 * @param string
 * @param int
 * @return bool
 **/
function imap_set_quota($imap_stream, $quota_root, $quota_limit) {}

/**
 * Sets the ACL for a giving mailbox.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function imap_setacl($imap_stream, $mailbox, $id, $rights) {}

/**
 * Causes a store to add the specified flag to the
 * flags set for the messages in the specified 
 * sequence.
 *
 * @param resource
 * @param string
 * @param string
 * @param int
 * @return bool
 **/
function imap_setflag_full($imap_stream, $sequence, $flag, $options) {}

/**
 * Gets and sorts message numbers by the given parameters.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param string
 * @param string
 * @return array
 **/
function imap_sort($imap_stream, $criteria, $reverse, $options, $search_criteria, $charset) {}

/**
 * Gets status information about the given mailbox.
 *
 * @param resource
 * @param string
 * @param int
 * @return object
 **/
function imap_status($imap_stream, $mailbox, $options) {}

/**
 * Subscribe to a new mailbox.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function imap_subscribe($imap_stream, $mailbox) {}

/**
 * Gets a tree of a threaded message.
 *
 * @param resource
 * @param int
 * @return array
 **/
function imap_thread($imap_stream, $options) {}

/**
 * Sets or fetchs the imap timeout.
 *
 * @param int
 * @param int
 * @return mixed
 **/
function imap_timeout($timeout_type, $timeout) {}

/**
 * This function returns the UID for the given message sequence
 * number. An UID is a unique identifier that will not change over
 * time while a message sequence number may change whenever the
 * content of the mailbox changes.
 *
 * @param resource
 * @param int
 * @return int
 **/
function imap_uid($imap_stream, $msg_number) {}

/**
 * Removes the deletion flag for a specified message, which is set by
 * imap_delete or imap_mail_move.
 *
 * @param resource
 * @param int
 * @param int
 * @return bool
 **/
function imap_undelete($imap_stream, $msg_number, $flags) {}

/**
 * Unsubscribe from the specified mailbox.
 *
 * @param string
 * @param string
 * @return bool
 **/
function imap_unsubscribe($imap_stream, $mailbox) {}

/**
 * Decodes modified UTF-7 text into ISO-8859-1 string.
 *
 * @param string
 * @return string
 **/
function imap_utf7_decode($text) {}

/**
 * Converts data to modified UTF-7 text.
 *
 * @param string
 * @return string
 **/
function imap_utf7_encode($data) {}

/**
 * Converts the given mime_encoded_text to
 * UTF-8.
 *
 * @param string
 * @return string
 **/
function imap_utf8($mime_encoded_text) {}

/**
 * Get the inclued data.
 *
 * @return array
 **/
function inclued_get_data() {}

/**
 * Set the various assert control options or just query
 * their current settings.
 *
 * @param int
 * @param mixed
 * @return mixed
 **/
function assert_options($what, $value) {}

/**
 * assert will check the given
 * assertion and take appropriate action if
 * its result is .
 *
 * @param mixed
 * @return bool
 **/
function assert($assertion) {}

/**
 * Loads the PHP extension given by the parameter
 * library.
 *
 * @param string
 * @return int
 **/
function dl($library) {}

/**
 * Finds out whether the extension is loaded.
 *
 * @param string
 * @return bool
 **/
function extension_loaded($name) {}

/**
 * Gets the value of a PHP configuration option.
 *
 * @param string
 * @return string
 **/
function get_cfg_var($option) {}

/**
 * @return string
 **/
function get_current_user() {}

/**
 * Returns the names and values of all the constants currently defined.
 * This includes those created by extensions as well as those created with
 * the define function.
 *
 * @param mixed
 * @return array
 **/
function get_defined_constants($categorize) {}

/**
 * This function returns the names of all the functions defined in
 * the module indicated by module_name.
 *
 * @param string
 * @return array
 **/
function get_extension_funcs($module_name) {}

/**
 * @return string
 **/
function get_include_path() {}

/**
 * Gets the names of all files that have been included using
 * include, include_once,
 * require or require_once.
 *
 * @return array
 **/
function get_included_files() {}

/**
 * This function returns the names of all the modules compiled and
 * loaded in the PHP interpreter.
 *
 * @param bool
 * @return array
 **/
function get_loaded_extensions($zend_extensions) {}

/**
 * Returns the current configuration setting of magic_quotes_gpc
 *
 * @return int
 **/
function get_magic_quotes_gpc() {}

/**
 * @return int
 **/
function get_magic_quotes_runtime() {}

/**
 * Gets the value of an environment variable.
 *
 * @param string
 * @return string
 **/
function getenv($varname) {}

/**
 * Gets the time of the last modification of the current page.
 *
 * @return int
 **/
function getlastmod() {}

/**
 * @return int
 **/
function getmygid() {}

/**
 * Gets the inode of the current script.
 *
 * @return int
 **/
function getmyinode() {}

/**
 * Gets the current PHP process ID.
 *
 * @return int
 **/
function getmypid() {}

/**
 * @return int
 **/
function getmyuid() {}

/**
 * Parses options passed to the script.
 *
 * @param string
 * @param array
 * @return array
 **/
function getopt($options, $longopts) {}

/**
 * This is an interface to getrusage(2). It gets data returned from the
 * system call.
 *
 * @param int
 * @return array
 **/
function getrusage($who) {}

/**
 * Returns all the registered configuration options.
 *
 * @param string
 * @param bool
 * @return array
 **/
function ini_get_all($extension, $details) {}

/**
 * Returns the value of the configuration option on success.
 *
 * @param string
 * @return string
 **/
function ini_get($varname) {}

/**
 * Restores a given configuration option to its original value.
 *
 * @param string
 * @return void
 **/
function ini_restore($varname) {}

/**
 * Sets the value of the given configuration option. The configuration option
 * will keep this new value during the script's execution, and will be restored
 * at the script's ending.
 *
 * @param string
 * @param string
 * @return string
 **/
function ini_set($varname, $newvalue) {}

/**
 * Returns the peak of memory, in bytes, that's been allocated to your PHP
 * script.
 *
 * @param bool
 * @return int
 **/
function memory_get_peak_usage($real_usage) {}

/**
 * Returns the amount of memory, in bytes, that's currently being
 * allocated to your PHP script.
 *
 * @param bool
 * @return int
 **/
function memory_get_usage($real_usage) {}

/**
 * Check if a file is loaded, and retrieve its path.
 *
 * @return string
 **/
function php_ini_loaded_file() {}

/**
 * php_ini_scanned_files returns a comma-separated
 * list of configuration files parsed after . These files are
 * found in a directory defined by the
 * --with-config-file-scan-dir option
 * which is set during compilation.
 *
 * @return string
 **/
function php_ini_scanned_files() {}

/**
 * This function returns the ID which can be used to display the PHP logo
 * using the built-in image.
 * Logo is displayed only if expose_php
 * is On.
 *
 * @return string
 **/
function php_logo_guid() {}

/**
 * @return string
 **/
function php_sapi_name() {}

/**
 * php_uname returns a description of the operating
 * system PHP is running on. For the name of just the operating system,
 * consider using the PHP_OS constant, but be
 * reminded this constant will contain the operating system PHP was
 * built on.
 *
 * @param string
 * @return string
 **/
function php_uname($mode) {}

/**
 * This function prints out the credits listing the PHP developers,
 * modules, etc. It generates the appropriate HTML codes to insert
 * the information in a page.
 *
 * @param int
 * @return bool
 **/
function phpcredits($flag) {}

/**
 * Outputs a large amount of information about the current state of PHP. 
 * This includes information about PHP compilation options and extensions,
 * the PHP version, server information and environment (if compiled as a
 * module), the PHP environment, OS version information, paths, master and
 * local values of configuration options, HTTP headers, and the PHP License.
 *
 * @param int
 * @return bool
 **/
function phpinfo($what) {}

/**
 * Returns a string containing the version of the currently running PHP
 * parser or extension.
 *
 * @param string
 * @return string
 **/
function phpversion($extension) {}

/**
 * Adds setting to the server environment. The
 * environment variable will only exist for the duration of the current
 * request. At the end of the request the environment is restored to its
 * original state.
 *
 * @param string
 * @return bool
 **/
function putenv($setting) {}

/**
 * @return void
 **/
function restore_include_path() {}

/**
 * Sets the include_path
 * configuration option for the duration of the script.
 *
 * @param string
 * @return string
 **/
function set_include_path($new_include_path) {}

/**
 * Set the current active configuration setting of magic_quotes_runtime.
 *
 * @param int
 * @return bool
 **/
function set_magic_quotes_runtime($new_setting) {}

/**
 * Set the number of seconds a script is allowed to run. If this is reached,
 * the script returns a fatal error. The default limit is 30 seconds or, if
 * it exists, the max_execution_time value defined in the
 * .
 *
 * @param int
 * @return void
 **/
function set_time_limit($seconds) {}

/**
 * Returns the path of the directory PHP stores temporary files in by
 * default.
 *
 * @return string
 **/
function sys_get_temp_dir() {}

/**
 * version_compare compares two "PHP-standardized"
 * version number strings. This is useful if you would like to write programs
 * working only on some versions of PHP.
 *
 * @param string
 * @param string
 * @param string
 * @return mixed
 **/
function version_compare($version1, $version2, $operator) {}

/**
 * This function returns the ID which can be used to display the Zend logo
 * using the built-in image.
 *
 * @return string
 **/
function zend_logo_guid() {}

/**
 * This function returns an unique identifier for the current thread.
 *
 * @return int
 **/
function zend_thread_id() {}

/**
 * Returns a string containing the version of the currently running
 * Zend Engine.
 *
 * @return string
 **/
function zend_version() {}

/**
 * ingres_autocommit is called before opening a
 * transaction (before the first call to
 * ingres_query or just after a call to
 * ingres_rollback or
 * ingres_commit) to switch the
 * "autocommit" mode of the server on or off (when the script begins
 * the autocommit mode is off).
 *
 * @param resource
 * @return bool
 **/
function ingres_autocommit($link) {}

/**
 * ingres_close closes the connection to
 * the Ingres server that's associated with the specified link.
 *
 * @param resource
 * @return bool
 **/
function ingres_close($link) {}

/**
 * ingres_commit commits the currently open
 * transaction, making all changes made to the database permanent.
 *
 * @param resource
 * @return bool
 **/
function ingres_commit($link) {}

/**
 * ingres_connect opens a connection with the
 * given Ingres database.
 *
 * @param string
 * @param string
 * @param string
 * @param array
 * @return resource
 **/
function ingres_connect($database, $username, $password, $options) {}

/**
 * Returns an string containing the active cursor name. If no cursor is
 * active then NULL is returned.
 *
 * @param resource
 * @return string
 **/
function ingres_cursor($link) {}

/**
 * Returns an integer containing the last error number. If no error was
 * reported 0 is returned.
 *
 * @param resource
 * @return int
 **/
function ingres_errno($link) {}

/**
 * Returns a string containing the last error, or NULL if no error has
 * occurred.
 *
 * @param resource
 * @return string
 **/
function ingres_error($link) {}

/**
 * Returns a string containing the last SQLSTATE, or NULL if no error has
 * occurred.
 *
 * @param resource
 * @return string
 **/
function ingres_errsqlstate($link) {}

/**
 * This function is an extended version of
 * ingres_fetch_row. In addition to storing
 * the data in the numeric indices of the result array, it also
 * stores the data in associative indices, using the field names as
 * keys.
 *
 * @param int
 * @param resource
 * @return array
 **/
function ingres_fetch_array($result_type, $link) {}

/**
 * This function is similar to
 * ingres_fetch_array, with one difference - an
 * object is returned, instead of an array. Indirectly, that means
 * that you can only access the data by the field names, and not by
 * their offsets (numbers are illegal property names).
 *
 * @param int
 * @param resource
 * @return object
 **/
function ingres_fetch_object($result_type, $link) {}

/**
 * ingres_fetch_row returns an array that
 * corresponds to the fetched row, or if there are no more
 * rows. Each result column is stored in an array offset, starting
 * at offset 1.
 *
 * @param resource
 * @return array
 **/
function ingres_fetch_row($link) {}

/**
 * ingres_field_length returns the length of a
 * field. This is the number of bytes used by the server to store
 * the field. For detailed information, see the Ingres/OpenAPI User
 * Guide - Appendix C.
 *
 * @param int
 * @param resource
 * @return int
 **/
function ingres_field_length($index, $link) {}

/**
 * ingres_field_name returns the name of a field
 * in a query result.
 *
 * @param int
 * @param resource
 * @return string
 **/
function ingres_field_name($index, $link) {}

/**
 * Test if a field is nullable.
 *
 * @param int
 * @param resource
 * @return bool
 **/
function ingres_field_nullable($index, $link) {}

/**
 * ingres_field_precision returns the precision
 * of a field. This value is used only for decimal, float and money
 * SQL data types. For detailed information, see the Ingres/OpenAPI
 * User Guide - Appendix C.
 *
 * @param int
 * @param resource
 * @return int
 **/
function ingres_field_precision($index, $link) {}

/**
 * ingres_field_scale returns the scale of a
 * field. This value is used only for the decimal SQL data
 * type. For detailed information, see the Ingres/OpenAPI User Guide
 * - Appendix C.
 *
 * @param int
 * @param resource
 * @return int
 **/
function ingres_field_scale($index, $link) {}

/**
 * Get the type of a field in a query result.
 *
 * @param int
 * @param resource
 * @return string
 **/
function ingres_field_type($index, $link) {}

/**
 * ingres_num_fields returns the number of
 * fields in the results returned by the Ingres server after a call
 * to ingres_query
 *
 * @param resource
 * @return int
 **/
function ingres_num_fields($link) {}

/**
 * This function is mainly meant to get the number of rows
 * modified in the database. If this function is called before
 * using ingres_fetch_array,
 * ingres_fetch_object or
 * ingres_fetch_row the server will delete
 * the result's data and the script won't be able to get them.
 *
 * @param resource
 * @return int
 **/
function ingres_num_rows($link) {}

/**
 * Open a persistent connection to an Ingres II database.
 *
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function ingres_pconnect($database, $username, $password) {}

/**
 * ingres_query sends the given
 * query to the Ingres server.
 *
 * @param string
 * @param resource
 * @return bool
 **/
function ingres_query($query, $link) {}

/**
 * ingres_rollback rolls back the currently
 * open transaction, actually canceling all changes made to the
 * database during the transaction.
 *
 * @param resource
 * @return bool
 **/
function ingres_rollback($link) {}

/**
 * Procedural style
 *
 * @param string
 * @param int
 * @param int
 * @param int
 * @param int
 * @return string
 **/
function grapheme_extract($haystack, $size, $extract_type, $start, $next) {}

/**
 * Procedural style
 *
 * @param string
 * @param string
 * @param int
 * @return int
 **/
function grapheme_stripos($haystack, $needle, $offset) {}

/**
 * Procedural style
 *
 * @param string
 * @param string
 * @param boolean
 * @return string
 **/
function grapheme_stristr($haystack, $needle, $before_needle) {}

/**
 * Procedural style
 *
 * @param string
 * @return int
 **/
function grapheme_strlen($input) {}

/**
 * Procedural style
 *
 * @param string
 * @param string
 * @param int
 * @return int
 **/
function grapheme_strpos($haystack, $needle, $offset) {}

/**
 * Procedural style
 *
 * @param string
 * @param string
 * @param int
 * @return int
 **/
function grapheme_strripos($haystack, $needle, $offset) {}

/**
 * Procedural style
 *
 * @param string
 * @param string
 * @param int
 * @return int
 **/
function grapheme_strrpos($haystack, $needle, $offset) {}

/**
 * Procedural style
 *
 * @param string
 * @param string
 * @param boolean
 * @return string
 **/
function grapheme_strstr($haystack, $needle, $before_needle) {}

/**
 * Procedural style
 *
 * @param string
 * @param int
 * @param int
 * @return int
 **/
function grapheme_substr($string, $start, $length) {}

/**
 * Return ICU error code name.
 *
 * @param integer
 * @return string
 **/
function intl_error_name($error_code) {}

/**
 * Useful to handle errors occured in static methods when there's no object to
 * get error code from.
 *
 * @return integer
 **/
function intl_get_error_code() {}

/**
 * Get error message from last internationalization function called.
 *
 * @return string
 **/
function intl_get_error_message() {}

/**
 * @param integer
 * @return bool
 **/
function intl_is_failure($error_code) {}

/**
 * Clears last Java exception.
 *
 * @return void
 **/
function java_last_exception_clear() {}

/**
 * Gets last Java exception.
 *
 * @return object
 **/
function java_last_exception_get() {}

/**
 * Takes a JSON encoded string and converts it into a PHP variable.
 *
 * @param string
 * @param bool
 * @return mixed
 **/
function json_decode($json, $assoc) {}

/**
 * Returns a string containing the JSON representation of 
 * value.
 *
 * @param mixed
 * @return string
 **/
function json_encode($value) {}

/**
 * kadm5_chpass_principal sets the new password
 * password for the principal.
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function kadm5_chpass_principal($handle, $principal, $password) {}

/**
 * Creates a principal with the given
 * password.
 *
 * @param resource
 * @param string
 * @param string
 * @param array
 * @return bool
 **/
function kadm5_create_principal($handle, $principal, $password, $options) {}

/**
 * Removes the principal from the Kerberos database.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function kadm5_delete_principal($handle, $principal) {}

/**
 * Closes the connection to the admin server and releases all related
 * resources.
 *
 * @param resource
 * @return bool
 **/
function kadm5_destroy($handle) {}

/**
 * Flush all changes to the Kerberos database, leaving the connection to the
 * Kerberos admin server open.
 *
 * @param resource
 * @return bool
 **/
function kadm5_flush($handle) {}

/**
 * Gets an array containing the policies's names.
 *
 * @param resource
 * @return array
 **/
function kadm5_get_policies($handle) {}

/**
 * Gets the principal's entries from the Kerberos database.
 *
 * @param resource
 * @param string
 * @return array
 **/
function kadm5_get_principal($handle, $principal) {}

/**
 * kadm5_get_principals returns an array containing the
 * principals's names.
 *
 * @param resource
 * @return array
 **/
function kadm5_get_principals($handle) {}

/**
 * Opens a connection with the KADM5 library using the
 * principal and the given
 * password to obtain initial credentials from the
 * admin_server.
 *
 * @param string
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function kadm5_init_with_password($admin_server, $realm, $principal, $password) {}

/**
 * Modifies a principal according to the given
 * options.
 *
 * @param resource
 * @param string
 * @param array
 * @return bool
 **/
function kadm5_modify_principal($handle, $principal, $options) {}

/**
 * Translate ISO-8859 characters to t61
 * characters.
 *
 * @param string
 * @return string
 **/
function ldap_8859_to_t61($value) {}

/**
 * Add entries in the LDAP directory.
 *
 * @param resource
 * @param string
 * @param array
 * @return bool
 **/
function ldap_add($link_identifier, $dn, $entry) {}

/**
 * Binds to the LDAP directory with specified RDN and password.
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function ldap_bind($link_identifier, $bind_rdn, $bind_password) {}

/**
 * Compare value of attribute
 * with value of same attribute in an LDAP directory entry.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @return mixed
 **/
function ldap_compare($link_identifier, $dn, $attribute, $value) {}

/**
 * Establishes a connection to a LDAP server on a specified
 * hostname and port.
 *
 * @param string
 * @param int
 * @return resource
 **/
function ldap_connect($hostname, $port) {}

/**
 * Returns the number of entries stored in the result of previous search
 * operations.
 *
 * @param resource
 * @param resource
 * @return int
 **/
function ldap_count_entries($link_identifier, $result_identifier) {}

/**
 * Deletes a particular entry in LDAP directory.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function ldap_delete($link_identifier, $dn) {}

/**
 * Turns the specified dn, into a more user-friendly
 * form, stripping off type names.
 *
 * @param string
 * @return string
 **/
function ldap_dn2ufn($dn) {}

/**
 * Returns the string error message explaining the error number
 * errno. While LDAP errno numbers are standardized,
 * different libraries return different or even localized textual error
 * messages. Never check for a specific error message text, but always use an
 * error number to check.
 *
 * @param int
 * @return string
 **/
function ldap_err2str($errno) {}

/**
 * Returns the standardized error number returned by the last LDAP command.
 * This number can be converted into a textual error message using
 * ldap_err2str.
 *
 * @param resource
 * @return int
 **/
function ldap_errno($link_identifier) {}

/**
 * Returns the string error message explaining the error generated by the
 * last LDAP command for the given link_identifier.
 * While LDAP errno numbers are standardized, different libraries return
 * different or even localized textual error messages. Never check for a
 * specific error message text, but always use an error number to check.
 *
 * @param resource
 * @return string
 **/
function ldap_error($link_identifier) {}

/**
 * Splits the DN returned by ldap_get_dn and breaks it
 * up into its component parts. Each part is known as Relative Distinguished
 * Name, or RDN.
 *
 * @param string
 * @param int
 * @return array
 **/
function ldap_explode_dn($dn, $with_attrib) {}

/**
 * Gets the first attribute in the given entry. Remaining attributes are
 * retrieved by calling ldap_next_attribute successively.
 *
 * @param resource
 * @param resource
 * @return string
 **/
function ldap_first_attribute($link_identifier, $result_entry_identifier) {}

/**
 * Returns the entry identifier for first entry in the result. This entry
 * identifier is then supplied to ldap_next_entry
 * routine to get successive entries from the result.
 *
 * @param resource
 * @param resource
 * @return resource
 **/
function ldap_first_entry($link_identifier, $result_identifier) {}

/**
 * @param resource
 * @param resource
 * @return resource
 **/
function ldap_first_reference($link, $result) {}

/**
 * Frees up the memory allocated internally to store the result. All result
 * memory will be automatically freed when the script terminates.
 *
 * @param resource
 * @return bool
 **/
function ldap_free_result($result_identifier) {}

/**
 * Reads attributes and values from an entry in the search result.
 *
 * @param resource
 * @param resource
 * @return array
 **/
function ldap_get_attributes($link_identifier, $result_entry_identifier) {}

/**
 * Finds out the DN of an entry in the result.
 *
 * @param resource
 * @param resource
 * @return string
 **/
function ldap_get_dn($link_identifier, $result_entry_identifier) {}

/**
 * Reads multiple entries from the given result, and then reading the
 * attributes and multiple values.
 *
 * @param resource
 * @param resource
 * @return array
 **/
function ldap_get_entries($link_identifier, $result_identifier) {}

/**
 * Sets retval to the value of the specified option.
 *
 * @param resource
 * @param int
 * @param mixed
 * @return bool
 **/
function ldap_get_option($link_identifier, $option, $retval) {}

/**
 * Reads all the values of the attribute in the entry in the result.
 *
 * @param resource
 * @param resource
 * @param string
 * @return array
 **/
function ldap_get_values_len($link_identifier, $result_entry_identifier, $attribute) {}

/**
 * Reads all the values of the attribute in the entry in the result.
 *
 * @param resource
 * @param resource
 * @param string
 * @return array
 **/
function ldap_get_values($link_identifier, $result_entry_identifier, $attribute) {}

/**
 * Performs the search for a specified filter on the
 * directory with the scope LDAP_SCOPE_ONELEVEL.
 *
 * @param resource
 * @param string
 * @param string
 * @param array
 * @param int
 * @param int
 * @param int
 * @param int
 * @return resource
 **/
function ldap_list($link_identifier, $base_dn, $filter, $attributes, $attrsonly, $sizelimit, $timelimit, $deref) {}

/**
 * Adds one or more attributes to the specified dn.
 * It performs the modification at the attribute level as opposed to the
 * object level. Object-level additions are done by the
 * ldap_add function.
 *
 * @param resource
 * @param string
 * @param array
 * @return bool
 **/
function ldap_mod_add($link_identifier, $dn, $entry) {}

/**
 * Removes one or more attributes from the specified dn.
 * It performs the modification at the attribute level as opposed to the object
 * level. Object-level deletions are done by the 
 * ldap_delete function.
 *
 * @param resource
 * @param string
 * @param array
 * @return bool
 **/
function ldap_mod_del($link_identifier, $dn, $entry) {}

/**
 * Replaces one or more attributes from the specified dn.
 * It performs the modification at the attribute level as opposed to the object
 * level. Object-level modifications are done by the 
 * ldap_modify function.
 *
 * @param resource
 * @param string
 * @param array
 * @return bool
 **/
function ldap_mod_replace($link_identifier, $dn, $entry) {}

/**
 * Modify the existing entries in the LDAP directory. The structure of the
 * entry is same as in ldap_add.
 *
 * @param resource
 * @param string
 * @param array
 * @return bool
 **/
function ldap_modify($link_identifier, $dn, $entry) {}

/**
 * Retrieves the attributes in an entry. The first call to
 * ldap_next_attribute is made with the
 * result_entry_identifier returned from
 * ldap_first_attribute.
 *
 * @param resource
 * @param resource
 * @return string
 **/
function ldap_next_attribute($link_identifier, $result_entry_identifier) {}

/**
 * Retrieve the entries stored in the result. Successive calls to the
 * ldap_next_entry return entries one by one till there
 * are no more entries. The first call to ldap_next_entry
 * is made after the call to ldap_first_entry with the
 * result_entry_identifier as returned from the
 * ldap_first_entry.
 *
 * @param resource
 * @param resource
 * @return resource
 **/
function ldap_next_entry($link_identifier, $result_entry_identifier) {}

/**
 * @param resource
 * @param resource
 * @return resource
 **/
function ldap_next_reference($link, $entry) {}

/**
 * @param resource
 * @param resource
 * @param array
 * @return bool
 **/
function ldap_parse_reference($link, $entry, $referrals) {}

/**
 * @param resource
 * @param resource
 * @param int
 * @param string
 * @param string
 * @param array
 * @return bool
 **/
function ldap_parse_result($link, $result, $errcode, $matcheddn, $errmsg, $referrals) {}

/**
 * Performs the search for a specified filter on the
 * directory with the scope LDAP_SCOPE_BASE. So it is
 * equivalent to reading an entry from the directory.
 *
 * @param resource
 * @param string
 * @param string
 * @param array
 * @param int
 * @param int
 * @param int
 * @param int
 * @return resource
 **/
function ldap_read($link_identifier, $base_dn, $filter, $attributes, $attrsonly, $sizelimit, $timelimit, $deref) {}

/**
 * The entry specified by dn is renamed/moved.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param bool
 * @return bool
 **/
function ldap_rename($link_identifier, $dn, $newrdn, $newparent, $deleteoldrdn) {}

/**
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function ldap_sasl_bind($link, $binddn, $password, $sasl_mech, $sasl_realm, $sasl_authz_id, $props) {}

/**
 * Performs the search for a specified filter on the directory with the scope
 * of LDAP_SCOPE_SUBTREE. This is equivalent to searching
 * the entire directory.
 *
 * @param resource
 * @param string
 * @param string
 * @param array
 * @param int
 * @param int
 * @param int
 * @param int
 * @return resource
 **/
function ldap_search($link_identifier, $base_dn, $filter, $attributes, $attrsonly, $sizelimit, $timelimit, $deref) {}

/**
 * Sets the value of the specified option to be newval.
 *
 * @param resource
 * @param int
 * @param mixed
 * @return bool
 **/
function ldap_set_option($link_identifier, $option, $newval) {}

/**
 * @param resource
 * @param callback
 * @return bool
 **/
function ldap_set_rebind_proc($link, $callback) {}

/**
 * @param resource
 * @param resource
 * @param string
 * @return bool
 **/
function ldap_sort($link, $result, $sortfilter) {}

/**
 * @param resource
 * @return bool
 **/
function ldap_start_tls($link) {}

/**
 * @param string
 * @return string
 **/
function ldap_t61_to_8859($value) {}

/**
 * Unbinds from the LDAP directory.
 *
 * @param resource
 * @return bool
 **/
function ldap_unbind($link_identifier) {}

/**
 * libxml_clear_errors clears the libxml error buffer.
 *
 * @return void
 **/
function libxml_clear_errors() {}

/**
 * Retrieve array of errors.
 *
 * @return array
 **/
function libxml_get_errors() {}

/**
 * Retrieve last error from libxml.
 *
 * @return LibXMLError
 **/
function libxml_get_last_error() {}

/**
 * Sets the streams context for the next libxml document load or write.
 *
 * @param resource
 * @return void
 **/
function libxml_set_streams_context($streams_context) {}

/**
 * libxml_use_internal_errors allows you to disable
 * standard libxml errors and enable user error handling.
 *
 * @param bool
 * @return bool
 **/
function libxml_use_internal_errors($use_errors) {}

/**
 * lzf_compress compresses the given
 * data string using LZF encoding.
 *
 * @param string
 * @return string
 **/
function lzf_compress($data) {}

/**
 * lzf_compress decompresses the given
 * data string containing lzf encoded data.
 *
 * @param string
 * @return string
 **/
function lzf_decompress($data) {}

/**
 * Determines what was LZF extension optimized for during compilation.
 *
 * @return int
 **/
function lzf_optimized_for() {}

/**
 * @param string
 * @return int
 **/
function ezmlm_hash($addr) {}

/**
 * Sends an email.
 *
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function mail($to, $subject, $message, $additional_headers, $additional_parameters) {}

/**
 * Figures out the best way of encoding the content read from the given file
 * pointer.
 *
 * @param resource
 * @return string
 **/
function mailparse_determine_best_xfer_encoding($fp) {}

/**
 * Create a MIME mail resource.
 *
 * @return resource
 **/
function mailparse_msg_create() {}

/**
 * Extracts/decodes a message section from the supplied filename.
 *
 * @param resource
 * @param mixed
 * @param callback
 * @return string
 **/
function mailparse_msg_extract_part_file($mimemail, $filename, $callbackfunc) {}

/**
 * @param resource
 * @param string
 * @param callback
 * @return void
 **/
function mailparse_msg_extract_part($mimemail, $msgbody, $callbackfunc) {}

/**
 * @param resource
 * @param string
 * @param callback
 * @return string
 **/
function mailparse_msg_extract_whole_part_file($mimemail, $filename, $callbackfunc) {}

/**
 * Frees a MIME resource.
 *
 * @param resource
 * @return bool
 **/
function mailparse_msg_free($mimemail) {}

/**
 * @param resource
 * @return array
 **/
function mailparse_msg_get_part_data($mimemail) {}

/**
 * @param resource
 * @param string
 * @return resource
 **/
function mailparse_msg_get_part($mimemail, $mimesection) {}

/**
 * @param resource
 * @return array
 **/
function mailparse_msg_get_structure($mimemail) {}

/**
 * Parses a file.
 * This is the optimal way of parsing a mail file that you have on disk.
 *
 * @param string
 * @return resource
 **/
function mailparse_msg_parse_file($filename) {}

/**
 * Incrementally parse data into the supplied mime mail resource.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function mailparse_msg_parse($mimemail, $data) {}

/**
 * Parses a RFC 822 compliant recipient
 * list, such as that found in the To: header.
 *
 * @param string
 * @return array
 **/
function mailparse_rfc822_parse_addresses($addresses) {}

/**
 * Streams data from the source file pointer, apply 
 * encoding and write to the destination file pointer.
 *
 * @param resource
 * @param resource
 * @param string
 * @return bool
 **/
function mailparse_stream_encode($sourcefp, $destfp, $encoding) {}

/**
 * Scans the data from the given file pointer and extract each embedded
 * uuencoded file into a temporary file.
 *
 * @param resource
 * @return array
 **/
function mailparse_uudecode_all($fp) {}

/**
 * Returns the arc cosine of arg in radians.
 * acos is the complementary function of
 * cos, which means that
 * a==cos(acos(a)) for every value of a that is within
 * acos' range.
 *
 * @param float
 * @return float
 **/
function acos($arg) {}

/**
 * Returns the absolute value of number.
 *
 * @param mixed
 * @return number
 **/
function abs($number) {}

/**
 * Returns the inverse hyperbolic cosine of
 * arg, i.e. the value whose
 * hyperbolic cosine is arg.
 *
 * @param float
 * @return float
 **/
function acosh($arg) {}

/**
 * Returns the arc sine of arg in radians.
 * asin is the complementary function of
 * sin, which means that
 * a==sin(asin(a)) for every value of a that is within
 * asin's range.
 *
 * @param float
 * @return float
 **/
function asin($arg) {}

/**
 * Returns the inverse hyperbolic sine of
 * arg, i.e. the value whose
 * hyperbolic sine is arg.
 *
 * @param float
 * @return float
 **/
function asinh($arg) {}

/**
 * Returns the arc tangent of arg in radians.
 * atan is the complementary function of
 * tan, which means that
 * a==tan(atan(a)) for every value of a that is within
 * atan's range.
 *
 * @param float
 * @return float
 **/
function atan($arg) {}

/**
 * @param float
 * @param float
 * @return float
 **/
function atan2($y, $x) {}

/**
 * Returns the inverse hyperbolic tangent of
 * arg, i.e. the value whose
 * hyperbolic tangent is arg.
 *
 * @param float
 * @return float
 **/
function atanh($arg) {}

/**
 * Returns a string containing number
 * represented in base tobase. The base in
 * which number is given is specified in
 * frombase. Both
 * frombase and tobase
 * have to be between 2 and 36, inclusive. Digits in numbers with a
 * base higher than 10 will be represented with the letters a-z,
 * with a meaning 10, b meaning 11 and z meaning 35.
 *
 * @param string
 * @param int
 * @param int
 * @return string
 **/
function base_convert($number, $frombase, $tobase) {}

/**
 * Returns the decimal equivalent of the binary number represented by
 * the binary_string argument.
 *
 * @param string
 * @return number
 **/
function bindec($binary_string) {}

/**
 * @param float
 * @return float
 **/
function ceil($value) {}

/**
 * cos returns the cosine of the arg
 * parameter. The arg parameter is in radians.
 *
 * @param float
 * @return float
 **/
function cos($arg) {}

/**
 * Returns the hyperbolic cosine of arg,
 * defined as (exp(arg) + exp(-arg))/2.
 *
 * @param float
 * @return float
 **/
function cosh($arg) {}

/**
 * Returns a string containing a binary representation of the given
 * number argument. The largest number that can be converted is
 * 4294967295 in decimal resulting to a string of 32 1's.
 *
 * @param int
 * @return string
 **/
function decbin($number) {}

/**
 * Returns a string containing a hexadecimal representation of the
 * given number argument. The largest number that can
 * be converted is 4294967295 in decimal resulting to "ffffffff".
 *
 * @param int
 * @return string
 **/
function dechex($number) {}

/**
 * Returns a string containing an octal representation of the given
 * number argument. The largest number that can be converted is
 * 4294967295 in decimal resulting to "37777777777".
 *
 * @param int
 * @return string
 **/
function decoct($number) {}

/**
 * This function converts number from degrees
 * to the radian equivalent.
 *
 * @param float
 * @return float
 **/
function deg2rad($number) {}

/**
 * Returns e raised to the power of arg.
 *
 * @param float
 * @return float
 **/
function exp($arg) {}

/**
 * expm1 returns the equivalent to
 * 'exp(arg) - 1' computed in a way that is
 * accurate even if the value of arg is near zero,
 * a case where 'exp (arg) - 1' would be
 * inaccurate due to subtraction of two numbers that are nearly equal.
 *
 * @param float
 * @return float
 **/
function expm1($arg) {}

/**
 * @param float
 * @return float
 **/
function floor($value) {}

/**
 * Returns the floating point remainder of dividing the dividend
 * (x) by the divisor (y).
 * The reminder (r) is defined as: x = i * y + r, for 
 * some integer i. If y is
 * non-zero, r has the same sign as
 * x and a magnitude less than the magnitude of
 * y.
 *
 * @param float
 * @param float
 * @return float
 **/
function fmod($x, $y) {}

/**
 * @return int
 **/
function getrandmax() {}

/**
 * Returns the decimal equivalent of the hexadecimal number
 * represented by the hex_string argument.
 * hexdec converts a hexadecimal string to a
 * decimal number.
 *
 * @param string
 * @return number
 **/
function hexdec($hex_string) {}

/**
 * hypot returns the length of the hypotenuse of a
 * right-angle triangle with sides of length x and
 * y, or the distance of the point
 * (x, y) from the origin.
 * This is equivalent to sqrt(x*x + y*y).
 *
 * @param float
 * @param float
 * @return float
 **/
function hypot($x, $y) {}

/**
 * Checks whether val is a legal finite
 * on this platform.
 *
 * @param float
 * @return bool
 **/
function is_finite($val) {}

/**
 * Returns if val is infinite (positive or 
 * negative), like the result of log(0) or any value too 
 * big to fit into a float on this platform.
 *
 * @param float
 * @return bool
 **/
function is_infinite($val) {}

/**
 * Checks whether val is 'not a number', 
 * like the result of acos(1.01).
 *
 * @param float
 * @return bool
 **/
function is_nan($val) {}

/**
 * lcg_value returns a pseudo random number in
 * the range of (0, 1). The function combines two CGs with periods
 * of 2^31 - 85 and 2^31 - 249. The period of this function is equal
 * to the product of both primes.
 *
 * @return float
 **/
function lcg_value() {}

/**
 * If the optional base parameter is specified, 
 * log returns logbase
 * arg, otherwise log 
 * returns the natural logarithm of arg.
 *
 * @param float
 * @param float
 * @return float
 **/
function log($arg, $base) {}

/**
 * Returns the base-10 logarithm of arg.
 *
 * @param float
 * @return float
 **/
function log10($arg) {}

/**
 * log1p returns log(1 +
 * number) computed in a way that is accurante even
 * when the value of number is close to zero.
 * log might only return log(1) in this case
 * due to lack of precision.
 *
 * @param float
 * @return float
 **/
function log1p($number) {}

/**
 * @param array
 * @return mixed
 **/
function max($values) {}

/**
 * If the first and only parameter is an array, min
 * returns the lowest value in that array. If at least two parameters are 
 * provided, min returns the smallest of these values.
 *
 * @param array
 * @return mixed
 **/
function min($values) {}

/**
 * @return int
 **/
function mt_getrandmax() {}

/**
 * @return int
 **/
function mt_rand() {}

/**
 * Seeds the random number generator with
 * seed or with a random value
 * if no seed is given.
 *
 * @param int
 * @return void
 **/
function mt_srand($seed) {}

/**
 * Returns the decimal equivalent of the octal number
 * represented by the octal_string argument.
 *
 * @param string
 * @return number
 **/
function octdec($octal_string) {}

/**
 * @return float
 **/
function pi() {}

/**
 * Returns base raised to the power of
 * exp.
 *
 * @param number
 * @param number
 * @return number
 **/
function pow($base, $exp) {}

/**
 * This function converts number from radian
 * to degrees.
 *
 * @param float
 * @return float
 **/
function rad2deg($number) {}

/**
 * @return int
 **/
function rand() {}

/**
 * Returns the rounded value of val to
 * specified precision
 * (number of digits after the decimal point).
 * precision can also be negative or zero (default).
 *
 * @param float
 * @param int
 * @return float
 **/
function round($val, $precision) {}

/**
 * sin returns the sine of the arg
 * parameter. The arg parameter is in radians.
 *
 * @param float
 * @return float
 **/
function sin($arg) {}

/**
 * Returns the hyperbolic sine of arg,
 * defined as (exp(arg) - exp(-arg))/2.
 *
 * @param float
 * @return float
 **/
function sinh($arg) {}

/**
 * Returns the square root of arg.
 *
 * @param float
 * @return float
 **/
function sqrt($arg) {}

/**
 * Seeds the random number generator with seed
 * or with a random value if no seed is given.
 *
 * @param int
 * @return void
 **/
function srand($seed) {}

/**
 * tan returns the tangent of the arg
 * parameter. The arg parameter is in radians.
 *
 * @param float
 * @return float
 **/
function tan($arg) {}

/**
 * Returns the hyperbolic tangent of arg,
 * defined as sinh(arg)/cosh(arg).
 *
 * @param float
 * @return float
 **/
function tanh($arg) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return int
 **/
function maxdb_affected_rows($link) {}

/**
 * Procedural style:
 *
 * @param resource
 * @param bool
 * @return bool
 **/
function maxdb_autocommit($link, $mode) {}

/**
 * Procedural style:
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function maxdb_change_user($link, $user, $password, $database) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return string
 **/
function maxdb_character_set_name($link) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return bool
 **/
function maxdb_close($link) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return bool
 **/
function maxdb_commit($link) {}

/**
 * The maxdb_connect_errno function will return the last error code number
 * for last call to maxdb_connect.
 * If no errors have occured, this function will return zero.
 *
 * @return int
 **/
function maxdb_connect_errno() {}

/**
 * The maxdb_connect_error function is identical to the corresponding
 * maxdb_connect_errno function in every way, except instead of returning
 * an integer error code the maxdb_connect_error function will return
 * a string representation of the last error to occur for the last
 * maxdb_connect call.
 * If no error has occured, this function will return an empty string.
 *
 * @return string
 **/
function maxdb_connect_error() {}

/**
 * Procedural style
 *
 * @param string
 * @param string
 * @param string
 * @param string
 * @param int
 * @param string
 * @return resource
 **/
function maxdb_connect($host, $username, $passwd, $dbname, $port, $socket) {}

/**
 * Procedural style:
 *
 * @param resource
 * @param int
 * @return bool
 **/
function maxdb_data_seek($result, $offset) {}

/**
 * The maxdb_debug can be used to trace the SQLDBC communication. The following
 * strings can be used as a parameter to maxdb_debug:
 *
 * @param string
 * @return void
 **/
function maxdb_debug($debug) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return bool
 **/
function maxdb_disable_reads_from_master($link) {}

/**
 * @param resource
 * @return bool
 **/
function maxdb_disable_rpl_parse($link) {}

/**
 * @param resource
 * @return bool
 **/
function maxdb_dump_debug_info($link) {}

/**
 * @param string
 * @return resource
 **/
function maxdb_embedded_connect($dbname) {}

/**
 * @param resource
 * @return bool
 **/
function maxdb_enable_reads_from_master($link) {}

/**
 * @param resource
 * @return bool
 **/
function maxdb_enable_rpl_parse($link) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return int
 **/
function maxdb_errno($link) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return string
 **/
function maxdb_error($link) {}

/**
 * Procedural style:
 *
 * @param resource
 * @param int
 * @return mixed
 **/
function maxdb_fetch_array($result, $resulttype) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return array
 **/
function maxdb_fetch_assoc($result) {}

/**
 * Procedural style:
 *
 * @param resource
 * @param int
 * @return mixed
 **/
function maxdb_fetch_field_direct($result, $fieldnr) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return mixed
 **/
function maxdb_fetch_field($result) {}

/**
 * Procedural Style:
 *
 * @param resource
 * @return mixed
 **/
function maxdb_fetch_fields($result) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return array
 **/
function maxdb_fetch_lengths($result) {}

/**
 * Procedural style:
 *
 * @param object
 * @return object
 **/
function maxdb_fetch_object($result) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return mixed
 **/
function maxdb_fetch_row($result) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return int
 **/
function maxdb_field_count($link) {}

/**
 * Procedural style:
 *
 * @param resource
 * @param int
 * @return bool
 **/
function maxdb_field_seek($result, $fieldnr) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return int
 **/
function maxdb_field_tell($result) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return void
 **/
function maxdb_free_result($result) {}

/**
 * The maxdb_get_client_info function is used to
 * return a string representing the client version being used in the
 * MaxDB extension.
 *
 * @return string
 **/
function maxdb_get_client_info() {}

/**
 * Returns client version number as an integer.
 *
 * @return int
 **/
function maxdb_get_client_version() {}

/**
 * Procdural style:
 *
 * @param resource
 * @return string
 **/
function maxdb_get_host_info($link) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return int
 **/
function maxdb_get_proto_info($link) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return string
 **/
function maxdb_get_server_info($link) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return int
 **/
function maxdb_get_server_version($link) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return string
 **/
function maxdb_info($link) {}

/**
 * Allocates or initializes a MaxDB resource suitable for
 * maxdb_options and maxdb_real_connect.
 *
 * @return resource
 **/
function maxdb_init() {}

/**
 * Procedural style:
 *
 * @param resource
 * @return mixed
 **/
function maxdb_insert_id($link) {}

/**
 * Procedural style:
 *
 * @param resource
 * @param int
 * @return bool
 **/
function maxdb_kill($link, $processid) {}

/**
 * @param resource
 * @param string
 * @return bool
 **/
function maxdb_master_query($link, $query) {}

/**
 * maxdb_more_results indicates if one or more result sets
 * are available from a previous call to maxdb_multi_query.
 *
 * @param resource
 * @return bool
 **/
function maxdb_more_results($link) {}

/**
 * Procedural style:
 *
 * @param resource
 * @param string
 * @return bool
 **/
function maxdb_multi_query($link, $query) {}

/**
 * Since multiple queries are not yet supported, maxdb_next_result
 * returns always .
 *
 * @param resource
 * @return bool
 **/
function maxdb_next_result($link) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return int
 **/
function maxdb_num_fields($result) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return int
 **/
function maxdb_num_rows($result) {}

/**
 * Procedural style:
 *
 * @param resource
 * @param int
 * @param mixed
 * @return bool
 **/
function maxdb_options($link, $option, $value) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return bool
 **/
function maxdb_ping($link) {}

/**
 * Procedure style:
 *
 * @param resource
 * @param string
 * @return resource
 **/
function maxdb_prepare($link, $query) {}

/**
 * Procedural style:
 *
 * @param resource
 * @param string
 * @param int
 * @return mixed
 **/
function maxdb_query($link, $query, $resultmode) {}

/**
 * Procedural style
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param string
 * @param int
 * @param string
 * @return bool
 **/
function maxdb_real_connect($link, $hostname, $username, $passwd, $dbname, $port, $socket) {}

/**
 * Procedural style:
 *
 * @param resource
 * @param string
 * @return string
 **/
function maxdb_real_escape_string($link, $escapestr) {}

/**
 * Procedural style
 *
 * @param resource
 * @param string
 * @return bool
 **/
function maxdb_real_query($link, $query) {}

/**
 * @param int
 * @return bool
 **/
function maxdb_report($flags) {}

/**
 * Rollbacks the current transaction for the database specified by the
 * link parameter.
 *
 * @param resource
 * @return bool
 **/
function maxdb_rollback($link) {}

/**
 * @param resource
 * @return int
 **/
function maxdb_rpl_parse_enabled($link) {}

/**
 * @param resource
 * @return bool
 **/
function maxdb_rpl_probe($link) {}

/**
 * Object oriented style (method)
 *
 * @param resource
 * @return int
 **/
function maxdb_rpl_query_type($link) {}

/**
 * The maxdb_select_db function selects the default
 * database (specified by the dbname parameter) to be
 * used when performing queries against the database connection
 * represented by the link parameter.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function maxdb_select_db($link, $dbname) {}

/**
 * Object oriented style (method)
 *
 * @param resource
 * @param string
 * @return bool
 **/
function maxdb_send_query($link, $query) {}

/**
 * @return void
 **/
function maxdb_server_end() {}

/**
 * @param array
 * @param array
 * @return bool
 **/
function maxdb_server_init($server, $groups) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return string
 **/
function maxdb_sqlstate($link) {}

/**
 * Procedural style:
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function maxdb_ssl_set($link, $key, $cert, $ca, $capath, $cipher) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return string
 **/
function maxdb_stat($link) {}

/**
 * Procedural style :
 *
 * @param resource
 * @return int
 **/
function maxdb_stmt_affected_rows($stmt) {}

/**
 * Procedural style:
 *
 * @param resource
 * @param string
 * @param mixed
 * @return bool
 **/
function maxdb_stmt_bind_param($stmt, $types, $var1) {}

/**
 * Procedural style:
 *
 * @param resource
 * @param mixed
 * @return bool
 **/
function maxdb_stmt_bind_result($stmt, $var1) {}

/**
 * Procedural style:
 *
 * @param resource
 * @param int
 * @return bool
 **/
function maxdb_stmt_close_long_data($stmt, $param_nr) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return bool
 **/
function maxdb_stmt_close($stmt) {}

/**
 * Procedural style:
 *
 * @param resource
 * @param int
 * @return bool
 **/
function maxdb_stmt_data_seek($statement, $offset) {}

/**
 * Procedural style :
 *
 * @param resource
 * @return int
 **/
function maxdb_stmt_errno($stmt) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return string
 **/
function maxdb_stmt_error($stmt) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return bool
 **/
function maxdb_stmt_execute($stmt) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return bool
 **/
function maxdb_stmt_fetch($stmt) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return void
 **/
function maxdb_stmt_free_result($stmt) {}

/**
 * Procedural style :
 *
 * @param resource
 * @return resource
 **/
function maxdb_stmt_init($link) {}

/**
 * Procedural style :
 *
 * @param resource
 * @return int
 **/
function maxdb_stmt_num_rows($stmt) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return int
 **/
function maxdb_stmt_param_count($stmt) {}

/**
 * Procedure style:
 *
 * @param resource
 * @param string
 * @return bool
 **/
function maxdb_stmt_prepare($stmt, $query) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return bool
 **/
function maxdb_stmt_reset($stmt) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return resource
 **/
function maxdb_stmt_result_metadata($stmt) {}

/**
 * Procedural style:
 *
 * @param resource
 * @param int
 * @param string
 * @return bool
 **/
function maxdb_stmt_send_long_data($stmt, $param_nr, $data) {}

/**
 * Returns a string containing the SQLSTATE error code
 * for the most recently invoked prepared statement function that can succeed or fail.
 * The error code consists of five characters. '00000' means no error.
 * The values are specified by ANSI SQL and ODBC.
 *
 * @param resource
 * @return string
 **/
function maxdb_stmt_sqlstate($stmt) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return bool
 **/
function maxdb_stmt_store_result($stmt) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return resource
 **/
function maxdb_store_result($link) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return int
 **/
function maxdb_thread_id($link) {}

/**
 * Procedural style:
 *
 * @return bool
 **/
function maxdb_thread_safe() {}

/**
 * Procedural style:
 *
 * @param resource
 * @return resource
 **/
function maxdb_use_result($link) {}

/**
 * Procedural style:
 *
 * @param resource
 * @return int
 **/
function maxdb_warning_count($link) {}

/**
 * Checks if the specified byte stream is valid for the specified encoding.
 * It is useful to prevent so-called "Invalid Encoding Attack".
 *
 * @param string
 * @param string
 * @return bool
 **/
function mb_check_encoding($var, $encoding) {}

/**
 * Performs case folding on a string, converted in the way specified by
 * mode.
 *
 * @param string
 * @param int
 * @param string
 * @return string
 **/
function mb_convert_case($str, $mode, $encoding) {}

/**
 * Converts the character encoding of string str
 * to to_encoding
 * from optionally from_encoding.
 *
 * @param string
 * @param string
 * @param mixed
 * @return string
 **/
function mb_convert_encoding($str, $to_encoding, $from_encoding) {}

/**
 * Performs a "han-kaku" - "zen-kaku" conversion for string str. 
 * This function is only useful for Japanese.
 *
 * @param string
 * @param string
 * @param string
 * @return string
 **/
function mb_convert_kana($str, $option, $encoding) {}

/**
 * Converts 
 * character encoding of variables vars in
 * encoding from_encoding to encoding 
 * to_encoding.
 *
 * @param string
 * @param mixed
 * @param mixed
 * @return string
 **/
function mb_convert_variables($to_encoding, $from_encoding, $vars) {}

/**
 * Decodes encoded-word string str in MIME header.
 *
 * @param string
 * @return string
 **/
function mb_decode_mimeheader($str) {}

/**
 * Convert numeric string reference of string
 * str in a specified block to character.
 *
 * @param string
 * @param array
 * @param string
 * @return string
 **/
function mb_decode_numericentity($str, $convmap, $encoding) {}

/**
 * Detects character encoding in string str.
 *
 * @param string
 * @param mixed
 * @param bool
 * @return string
 **/
function mb_detect_encoding($str, $encoding_list, $strict) {}

/**
 * Sets the automatic character
 * encoding detection order to encoding_list.
 *
 * @param mixed
 * @return mixed
 **/
function mb_detect_order($encoding_list) {}

/**
 * Encodes a given string
 * str by the MIME header encoding scheme.
 *
 * @param string
 * @param string
 * @param string
 * @param string
 * @param int
 * @return string
 **/
function mb_encode_mimeheader($str, $charset, $transfer_encoding, $linefeed, $indent) {}

/**
 * Converts
 * specified character codes in string str
 * from HTML numeric character reference to character code.
 *
 * @param string
 * @param array
 * @param string
 * @return string
 **/
function mb_encode_numericentity($str, $convmap, $encoding) {}

/**
 * A regular expression match for a multibyte string
 *
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function mb_ereg_match($pattern, $string, $option) {}

/**
 * @param string
 * @param string
 * @param string
 * @param string
 * @return string
 **/
function mb_ereg_replace($pattern, $replacement, $string, $option) {}

/**
 * @return int
 **/
function mb_ereg_search_getpos() {}

/**
 * @return array
 **/
function mb_ereg_search_getregs() {}

/**
 * mb_ereg_search_init sets
 * string and pattern
 * for a multibyte regular expression. These values are used for
 * mb_ereg_search,
 * mb_ereg_search_pos, and
 * mb_ereg_search_regs.
 *
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function mb_ereg_search_init($string, $pattern, $option) {}

/**
 * Returns position and length of a matched part of the multibyte regular expression 
 * for a predefined multibyte string
 *
 * @param string
 * @param string
 * @return array
 **/
function mb_ereg_search_pos($pattern, $option) {}

/**
 * Returns the matched part of a multibyte regular expression.
 *
 * @param string
 * @param string
 * @return array
 **/
function mb_ereg_search_regs($pattern, $option) {}

/**
 * @param int
 * @return bool
 **/
function mb_ereg_search_setpos($position) {}

/**
 * Performs a multibyte regular expression match for a predefined multibyte string.
 *
 * @param string
 * @param string
 * @return bool
 **/
function mb_ereg_search($pattern, $option) {}

/**
 * @param string
 * @param string
 * @param array
 * @return int
 **/
function mb_ereg($pattern, $string, $regs) {}

/**
 * @param string
 * @param string
 * @param string
 * @param string
 * @return string
 **/
function mb_eregi_replace($pattern, $replace, $string, $option) {}

/**
 * @param string
 * @param string
 * @param array
 * @return int
 **/
function mb_eregi($pattern, $string, $regs) {}

/**
 * @param string
 * @return mixed
 **/
function mb_get_info($type) {}

/**
 * @param string
 * @return mixed
 **/
function mb_http_input($type) {}

/**
 * Set/Get the HTTP output character encoding.
 * Output after this function is converted to encoding.
 *
 * @param string
 * @return mixed
 **/
function mb_http_output($encoding) {}

/**
 * Set/Get the internal character encoding
 *
 * @param string
 * @return mixed
 **/
function mb_internal_encoding($encoding) {}

/**
 * Set/Get the current language.
 *
 * @param string
 * @return mixed
 **/
function mb_language($language) {}

/**
 * Returns an array containing all supported encodings.
 *
 * @return array
 **/
function mb_list_encodings() {}

/**
 * mb_output_handler is
 * ob_start callback
 * function. mb_output_handler converts
 * characters in the output buffer from internal character encoding to
 * HTTP output character encoding.
 *
 * @param string
 * @param int
 * @return string
 **/
function mb_output_handler($contents, $status) {}

/**
 * Parses GET/POST/COOKIE data and
 * sets global variables. Since PHP does not provide raw POST/COOKIE
 * data, it can only be used for GET data for now. It parses URL
 * encoded data, detects encoding, converts coding to internal
 * encoding and set values to the result array or
 * global variables.
 *
 * @param string
 * @param array
 * @return bool
 **/
function mb_parse_str($encoded_string, $result) {}

/**
 * Get a MIME charset string for a specific encoding.
 *
 * @param string
 * @return string
 **/
function mb_preferred_mime_name($encoding) {}

/**
 * Returns the current encoding for a multibyte regex as a string.
 *
 * @param string
 * @return mixed
 **/
function mb_regex_encoding($encoding) {}

/**
 * @param string
 * @return string
 **/
function mb_regex_set_options($options) {}

/**
 * Sends email. Headers and messages are converted and encoded according
 * to the mb_language setting. It's a wrapper function
 * for mail, so see also mail for details.
 *
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function mb_send_mail($to, $subject, $message, $additional_headers, $additional_parameter) {}

/**
 * @param string
 * @param string
 * @param int
 * @return array
 **/
function mb_split($pattern, $string, $limit) {}

/**
 * mb_strcut performs equivalent operation as
 * mb_substr with different method. If
 * start position is multi-byte character's
 * second byte or larger, it starts from first byte of multi-byte
 * character.
 *
 * @param string
 * @param int
 * @param int
 * @param string
 * @return string
 **/
function mb_strcut($str, $start, $length, $encoding) {}

/**
 * Truncates string str to specified width.
 *
 * @param string
 * @param int
 * @param int
 * @param string
 * @param string
 * @return string
 **/
function mb_strimwidth($str, $start, $width, $trimmarker, $encoding) {}

/**
 * mb_stripos returns the numeric position of
 * the first occurrence of needle in the
 * haystack string.
 * Unlike mb_strpos, 
 * mb_stripos is case-insensitive.
 * If needle is not found, it returns .
 *
 * @param string
 * @param string
 * @param int
 * @param string
 * @return int
 **/
function mb_stripos($haystack, $needle, $offset, $encoding) {}

/**
 * mb_stristr finds the first occurrence of
 * needle in haystack
 * and returns the portion of haystack.
 * Unlike mb_strstr, 
 * mb_stristr is case-insensitive.
 * If needle is not found, it returns .
 *
 * @param string
 * @param string
 * @param bool
 * @param string
 * @return string
 **/
function mb_stristr($haystack, $needle, $part, $encoding) {}

/**
 * Gets the length of a string.
 *
 * @param string
 * @param string
 * @return int
 **/
function mb_strlen($str, $encoding) {}

/**
 * Finds position of the first occurrence of a string in a string.
 *
 * @param string
 * @param string
 * @param int
 * @param string
 * @return int
 **/
function mb_strpos($haystack, $needle, $offset, $encoding) {}

/**
 * mb_strrchr finds the last occurrence of
 * needle in haystack
 * and returns the portion of haystack.
 * If needle is not found, it returns .
 *
 * @param string
 * @param string
 * @param bool
 * @param string
 * @return string
 **/
function mb_strrchr($haystack, $needle, $part, $encoding) {}

/**
 * mb_strrichr finds the last occurrence of
 * needle in haystack
 * and returns the portion of haystack. Unlike
 * mb_strrchr, mb_strrichr is
 * case-insensitive.
 * If needle is not found, it returns .
 *
 * @param string
 * @param string
 * @param bool
 * @param string
 * @return string
 **/
function mb_strrichr($haystack, $needle, $part, $encoding) {}

/**
 * mb_strripos performs multi-byte safe
 * strripos operation based on
 * number of characters. needle position is
 * counted from the beginning of
 * haystack. First character's position is
 * 0. Second character position is 1. 
 * Unlike mb_strrpos,
 * mb_strripos is case-insensitive.
 *
 * @param string
 * @param string
 * @param int
 * @param string
 * @return int
 **/
function mb_strripos($haystack, $needle, $offset, $encoding) {}

/**
 * Performs a multibyte safe
 * strrpos operation based on the 
 * number of characters. needle position is
 * counted from the beginning of
 * haystack. First character's position is
 * 0. Second character position is 1.
 *
 * @param string
 * @param string
 * @param int
 * @param string
 * @return int
 **/
function mb_strrpos($haystack, $needle, $offset, $encoding) {}

/**
 * mb_strstr finds the first occurrence of
 * needle in haystack
 * and returns the portion of haystack.
 * If needle is not found, it returns .
 *
 * @param string
 * @param string
 * @param bool
 * @param string
 * @return string
 **/
function mb_strstr($haystack, $needle, $part, $encoding) {}

/**
 * Returns str
 * with all alphabetic characters converted to lowercase.
 *
 * @param string
 * @param string
 * @return string
 **/
function mb_strtolower($str, $encoding) {}

/**
 * Returns str
 * with all alphabetic characters converted to uppercase.
 *
 * @param string
 * @param string
 * @return string
 **/
function mb_strtoupper($str, $encoding) {}

/**
 * Returns the width of string str.
 *
 * @param string
 * @param string
 * @return int
 **/
function mb_strwidth($str, $encoding) {}

/**
 * Specifies a substitution character when input character encoding is invalid
 * or character code does not exist in output character
 * encoding. Invalid characters may be substituted (no output),
 * string or integer value (Unicode character code value).
 *
 * @param mixed
 * @return mixed
 **/
function mb_substitute_character($substrchar) {}

/**
 * Counts the number of times the
 * needle substring occurs in the
 * haystack string.
 *
 * @param string
 * @param string
 * @param string
 * @return int
 **/
function mb_substr_count($haystack, $needle, $encoding) {}

/**
 * Performs a multi-byte safe
 * substr operation based on
 * number of characters. Position is
 * counted from the beginning of
 * str. First character's position is
 * 0. Second character position is 1, and so on.
 *
 * @param string
 * @param int
 * @param int
 * @param string
 * @return string
 **/
function mb_substr($str, $start, $length, $encoding) {}

/**
 * The first prototype is when linked against libmcrypt 2.2.x, the
 * second when linked against libmcrypt 2.4.x or higher. The
 * mode should be either
 * MCRYPT_ENCRYPT or
 * MCRYPT_DECRYPT.
 *
 * @param int
 * @param string
 * @param string
 * @param int
 * @param string
 * @return string
 **/
function mcrypt_cbc($cipher, $key, $data, $mode, $iv) {}

/**
 * The first prototype is when linked against libmcrypt 2.2.x, the
 * second when linked against libmcrypt 2.4.x or higher. The
 * mode should be either
 * MCRYPT_ENCRYPT or
 * MCRYPT_DECRYPT.
 *
 * @param int
 * @param string
 * @param string
 * @param int
 * @param string
 * @return string
 **/
function mcrypt_cfb($cipher, $key, $data, $mode, $iv) {}

/**
 * mcrypt_create_iv is used to create an IV.
 *
 * @param int
 * @param int
 * @return string
 **/
function mcrypt_create_iv($size, $source) {}

/**
 * Decrypts the data and returns the unencrypted data.
 *
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string
 * @return string
 **/
function mcrypt_decrypt($cipher, $key, $data, $mode, $iv) {}

/**
 * The first prototype is when linked against libmcrypt 2.2.x, the
 * second when linked against libmcrypt 2.4.x or higher. The
 * mode should be either
 * MCRYPT_ENCRYPT or
 * MCRYPT_DECRYPT.
 *
 * @param int
 * @param string
 * @param string
 * @param int
 * @return string
 **/
function mcrypt_ecb($cipher, $key, $data, $mode) {}

/**
 * This function returns the name of the algorithm.
 *
 * @param resource
 * @return string
 **/
function mcrypt_enc_get_algorithms_name($td) {}

/**
 * Gets the blocksize of the opened algorithm.
 *
 * @param resource
 * @return int
 **/
function mcrypt_enc_get_block_size($td) {}

/**
 * This function returns the size of the IV of the algorithm specified by the
 * encryption descriptor in bytes. An IV is used in cbc, cfb and ofb modes,
 * and in some algorithms in stream mode.
 *
 * @param resource
 * @return int
 **/
function mcrypt_enc_get_iv_size($td) {}

/**
 * Gets the maximum supported key size of the algorithm in bytes.
 *
 * @param resource
 * @return int
 **/
function mcrypt_enc_get_key_size($td) {}

/**
 * This function returns the name of the mode.
 *
 * @param resource
 * @return string
 **/
function mcrypt_enc_get_modes_name($td) {}

/**
 * Returns an array with the key sizes supported by the algorithm
 * specified by the encryption descriptor. If it returns an empty
 * array then all key sizes between 1 and
 * mcrypt_enc_get_key_size are supported by the
 * algorithm.
 *
 * @param resource
 * @return array
 **/
function mcrypt_enc_get_supported_key_sizes($td) {}

/**
 * Tells whether the algorithm of the opened mode works on blocks (e.g.
 * for stream, and for cbc, cfb, ofb)..
 *
 * @param resource
 * @return bool
 **/
function mcrypt_enc_is_block_algorithm_mode($td) {}

/**
 * Tells whether the algorithm of the opened mode is a block algorithm.
 *
 * @param resource
 * @return bool
 **/
function mcrypt_enc_is_block_algorithm($td) {}

/**
 * Tells whether the opened mode outputs blocks (e.g. for cbc and ecb,
 * and for cfb and stream).
 *
 * @param resource
 * @return bool
 **/
function mcrypt_enc_is_block_mode($td) {}

/**
 * This function runs the self test on the algorithm specified by the
 * descriptor td.
 *
 * @param resource
 * @return int
 **/
function mcrypt_enc_self_test($td) {}

/**
 * mcrypt_encrypt encrypts the data
 * and returns the encrypted data.
 *
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string
 * @return string
 **/
function mcrypt_encrypt($cipher, $key, $data, $mode, $iv) {}

/**
 * This function terminates encryption specified by the encryption
 * descriptor (td). It clears all buffers, but does
 * not close the module. You need to call
 * mcrypt_module_close yourself. (But PHP does this for
 * you at the end of the script.) Returns on error, or on
 * success.
 *
 * @param resource
 * @return bool
 **/
function mcrypt_generic_deinit($td) {}

/**
 * This function is deprecated, use
 * mcrypt_generic_deinit instead. It can cause
 * crashes when used with mcrypt_module_close due to
 * multiple buffer frees.
 *
 * @param resource
 * @return bool
 **/
function mcrypt_generic_end($td) {}

/**
 * You need to call this function before every call to
 * mcrypt_generic or
 * mdecrypt_generic.
 *
 * @param resource
 * @param string
 * @param string
 * @return int
 **/
function mcrypt_generic_init($td, $key, $iv) {}

/**
 * This function encrypts data. The data is padded with "\0"
 * to make sure the length of the data is n * blocksize. This
 * function returns the encrypted data. Note that the length
 * of the returned string can in fact be longer then the input,
 * due to the padding of the data.
 *
 * @param resource
 * @param string
 * @return string
 **/
function mcrypt_generic($td, $data) {}

/**
 * The first prototype is when linked against libmcrypt 2.2.x, the
 * second when linked against libmcrypt 2.4.x or 2.5.x.
 *
 * @param int
 * @return int
 **/
function mcrypt_get_block_size($cipher) {}

/**
 * mcrypt_get_cipher_name is used to get the
 * name of the specified cipher.
 *
 * @param int
 * @return string
 **/
function mcrypt_get_cipher_name($cipher) {}

/**
 * mcrypt_get_iv_size returns the size of
 * the Initialisation Vector (IV) in bytes. On error the function
 * returns . If the IV is ignored in the specified cipher/mode
 * combination zero is returned.
 *
 * @param string
 * @param string
 * @return int
 **/
function mcrypt_get_iv_size($cipher, $mode) {}

/**
 * The first prototype is when linked against libmcrypt 2.2.x, the
 * second when linked against libmcrypt 2.4.x or 2.5.x.
 *
 * @param int
 * @return int
 **/
function mcrypt_get_key_size($cipher) {}

/**
 * mcrypt_list_algorithms is used to get an
 * array of all supported algorithms in the lib_dir parameter.
 *
 * @param string
 * @return array
 **/
function mcrypt_list_algorithms($lib_dir) {}

/**
 * mcrypt_list_modes is used to get an
 * array of all supported modes in the
 * lib_dir.
 *
 * @param string
 * @return array
 **/
function mcrypt_list_modes($lib_dir) {}

/**
 * Closes the specified encryption handle.
 *
 * @param resource
 * @return bool
 **/
function mcrypt_module_close($td) {}

/**
 * Gets the blocksize of the specified algorithm.
 *
 * @param string
 * @param string
 * @return int
 **/
function mcrypt_module_get_algo_block_size($algorithm, $lib_dir) {}

/**
 * Gets the maximum supported keysize of the opened mode.
 *
 * @param string
 * @param string
 * @return int
 **/
function mcrypt_module_get_algo_key_size($algorithm, $lib_dir) {}

/**
 * Returns an array with the key sizes supported by the specified algorithm.
 * If it returns an empty array then all key sizes between 1 and
 * mcrypt_module_get_algo_key_size are supported by the
 * algorithm. The optional lib_dir parameter can
 * contain the location where the mode module is on the system.
 *
 * @param string
 * @param string
 * @return array
 **/
function mcrypt_module_get_supported_key_sizes($algorithm, $lib_dir) {}

/**
 * This function returns if the mode is for use with block
 * algorithms, otherwise it returns . (e.g. for stream, and
 * for cbc, cfb, ofb). The optional lib_dir
 * parameter can contain the location where the mode module is on the
 * system.
 *
 * @param string
 * @param string
 * @return bool
 **/
function mcrypt_module_is_block_algorithm_mode($mode, $lib_dir) {}

/**
 * This function returns if the specified algorithm is a block
 * algorithm, or is it is a stream algorithm. The optional
 * lib_dir parameter can contain the location where
 * the algorithm module is on the system.
 *
 * @param string
 * @param string
 * @return bool
 **/
function mcrypt_module_is_block_algorithm($algorithm, $lib_dir) {}

/**
 * This function returns if the mode outputs blocks of bytes or
 * if it outputs just bytes. (e.g. for cbc and ecb, and
 * for cfb and stream). The optional lib_dir
 * parameter can contain the location where the mode module is on the
 * system.
 *
 * @param string
 * @param string
 * @return bool
 **/
function mcrypt_module_is_block_mode($mode, $lib_dir) {}

/**
 * This function opens the module of the algorithm and the mode to be used.
 * The name of the algorithm is specified in algorithm, e.g. "twofish" or is
 * one of the MCRYPT_ciphername constants. The module is closed by calling
 * mcrypt_module_close. Normally it returns an
 * encryption descriptor, or on error.
 *
 * @param string
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function mcrypt_module_open($algorithm, $algorithm_directory, $mode, $mode_directory) {}

/**
 * This function runs the self test on the algorithm specified. The
 * optional lib_dir parameter can contain the
 * location of where the algorithm module is on the system.
 *
 * @param string
 * @param string
 * @return bool
 **/
function mcrypt_module_self_test($algorithm, $lib_dir) {}

/**
 * The first prototype is when linked against libmcrypt 2.2.x, the
 * second when linked against libmcrypt 2.4.x or higher. The
 * mode should be either
 * MCRYPT_ENCRYPT or
 * MCRYPT_DECRYPT.
 *
 * @param int
 * @param string
 * @param string
 * @param int
 * @param string
 * @return string
 **/
function mcrypt_ofb($cipher, $key, $data, $mode, $iv) {}

/**
 * This function decrypts data. Note that the length of the returned string
 * can in fact be longer then the unencrypted string, due to the padding of
 * the data.
 *
 * @param resource
 * @param string
 * @return string
 **/
function mdecrypt_generic($td, $data) {}

/**
 * @param resource
 * @param int
 * @return int
 **/
function m_checkstatus($conn, $identifier) {}

/**
 * @param resource
 * @param int
 * @return int
 **/
function m_completeauthorizations($conn, $array) {}

/**
 * @param resource
 * @return int
 **/
function m_connect($conn) {}

/**
 * @param resource
 * @return string
 **/
function m_connectionerror($conn) {}

/**
 * @param resource
 * @param int
 * @return bool
 **/
function m_deletetrans($conn, $identifier) {}

/**
 * @param resource
 * @return bool
 **/
function m_destroyconn($conn) {}

/**
 * @return void
 **/
function m_destroyengine() {}

/**
 * @param resource
 * @param int
 * @param string
 * @param int
 * @return string
 **/
function m_getcell($conn, $identifier, $column, $row) {}

/**
 * @param resource
 * @param int
 * @param int
 * @param int
 * @return string
 **/
function m_getcellbynum($conn, $identifier, $column, $row) {}

/**
 * @param resource
 * @param int
 * @return string
 **/
function m_getcommadelimited($conn, $identifier) {}

/**
 * @param resource
 * @param int
 * @param int
 * @return string
 **/
function m_getheader($conn, $identifier, $column_num) {}

/**
 * @return resource
 **/
function m_initconn() {}

/**
 * @param string
 * @return int
 **/
function m_initengine($location) {}

/**
 * @param resource
 * @param int
 * @return int
 **/
function m_iscommadelimited($conn, $identifier) {}

/**
 * @param resource
 * @param int
 * @return bool
 **/
function m_maxconntimeout($conn, $secs) {}

/**
 * @param resource
 * @return int
 **/
function m_monitor($conn) {}

/**
 * @param resource
 * @param int
 * @return int
 **/
function m_numcolumns($conn, $identifier) {}

/**
 * @param resource
 * @param int
 * @return int
 **/
function m_numrows($conn, $identifier) {}

/**
 * @param resource
 * @param int
 * @return int
 **/
function m_parsecommadelimited($conn, $identifier) {}

/**
 * @param resource
 * @param int
 * @return array
 **/
function m_responsekeys($conn, $identifier) {}

/**
 * @param resource
 * @param int
 * @param string
 * @return string
 **/
function m_responseparam($conn, $identifier, $key) {}

/**
 * @param resource
 * @param int
 * @return int
 **/
function m_returnstatus($conn, $identifier) {}

/**
 * @param resource
 * @param int
 * @return int
 **/
function m_setblocking($conn, $tf) {}

/**
 * @param resource
 * @param string
 * @return int
 **/
function m_setdropfile($conn, $directory) {}

/**
 * @param resource
 * @param string
 * @param int
 * @return int
 **/
function m_setip($conn, $host, $port) {}

/**
 * @param resource
 * @param string
 * @return int
 **/
function m_setssl_cafile($conn, $cafile) {}

/**
 * @param resource
 * @param string
 * @param string
 * @return int
 **/
function m_setssl_files($conn, $sslkeyfile, $sslcertfile) {}

/**
 * @param resource
 * @param string
 * @param int
 * @return int
 **/
function m_setssl($conn, $host, $port) {}

/**
 * @param resource
 * @param int
 * @return int
 **/
function m_settimeout($conn, $seconds) {}

/**
 * @param string
 * @return string
 **/
function m_sslcert_gen_hash($filename) {}

/**
 * @param resource
 * @return int
 **/
function m_transactionssent($conn) {}

/**
 * @param resource
 * @return int
 **/
function m_transinqueue($conn) {}

/**
 * @param resource
 * @param int
 * @param string
 * @param string
 * @return int
 **/
function m_transkeyval($conn, $identifier, $key, $value) {}

/**
 * @param resource
 * @return int
 **/
function m_transnew($conn) {}

/**
 * @param resource
 * @param int
 * @return int
 **/
function m_transsend($conn, $identifier) {}

/**
 * @param int
 * @return int
 **/
function m_uwait($microsecs) {}

/**
 * @param resource
 * @param int
 * @return int
 **/
function m_validateidentifier($conn, $tf) {}

/**
 * @param resource
 * @param int
 * @return bool
 **/
function m_verifyconnection($conn, $tf) {}

/**
 * @param resource
 * @param int
 * @return bool
 **/
function m_verifysslcert($conn, $tf) {}

/**
 * memcache_debug turns on debug output if parameter
 * on_off is equal to and turns off if it's
 * .
 * 
 * 
 * memcache_debug is accessible only if PHP was built
 * with --enable-debug option and always returns in this case.
 * Otherwise, this function has no effect and always returns .
 *
 * @param bool
 * @return bool
 **/
function memcache_debug($on_off) {}

/**
 * Gets the highest available hash id.
 *
 * @return int
 **/
function mhash_count() {}

/**
 * Gets the size of a block of the specified hash.
 *
 * @param int
 * @return int
 **/
function mhash_get_block_size($hash) {}

/**
 * Gets the name of the specified hash.
 *
 * @param int
 * @return string
 **/
function mhash_get_hash_name($hash) {}

/**
 * Generates a key according to the hash given a user
 * provided password.
 *
 * @param int
 * @param string
 * @param string
 * @param int
 * @return string
 **/
function mhash_keygen_s2k($hash, $password, $salt, $bytes) {}

/**
 * mhash applies a hash function specified by
 * hash to the data.
 *
 * @param int
 * @param string
 * @param string
 * @return string
 **/
function mhash($hash, $data, $key) {}

/**
 * Returns the MIME content type for a file as determined by using
 * information from the magic.mime file.
 *
 * @param string
 * @return string
 **/
function mime_content_type($filename) {}

/**
 * @param string
 * @return int
 **/
function ming_keypress($char) {}

/**
 * Sets the threshold error for drawing cubic beziers.
 *
 * @param int
 * @return void
 **/
function ming_setcubicthreshold($threshold) {}

/**
 * Sets the scale of the output SWF. Inside the SWF file, coordinates are
 * measured in TWIPS, rather than PIXELS. There are 20 TWIPS in 1 pixel.
 *
 * @param int
 * @return void
 **/
function ming_setscale($scale) {}

/**
 * Sets the SWF output compression level.
 *
 * @param int
 * @return void
 **/
function ming_setswfcompression($level) {}

/**
 * @param int
 * @return void
 **/
function ming_useconstants($use) {}

/**
 * Sets the SWF version to be used in the movie. This affect the bahaviour
 * of Action Script.
 *
 * @param int
 * @return void
 **/
function ming_useswfversion($version) {}

/**
 * Checks whether the client disconnected.
 *
 * @return int
 **/
function connection_aborted() {}

/**
 * Gets the connection status bitfield.
 *
 * @return int
 **/
function connection_status() {}

/**
 * Determines whether the script timed out.
 *
 * @return int
 **/
function connection_timeout() {}

/**
 * @param string
 * @return mixed
 **/
function constant($name) {}

/**
 * Defines a named constant at runtime.
 *
 * @param string
 * @param mixed
 * @param bool
 * @return bool
 **/
function define($name, $value, $case_insensitive) {}

/**
 * Checks whether the given constant exists and is defined.
 *
 * @param string
 * @return bool
 **/
function defined($name) {}

/**
 * Attempts to determine the capabilities of the user's browser, by looking
 * up the browser's information in the browscap.ini
 * file.
 *
 * @param string
 * @param bool
 * @return mixed
 **/
function get_browser($user_agent, $return_array) {}

/**
 * Prints out or returns a syntax highlighted version of the code contained
 * in filename using the colors defined in the
 * built-in syntax highlighter for PHP.
 *
 * @param string
 * @param bool
 * @return mixed
 **/
function highlight_file($filename, $return) {}

/**
 * @param string
 * @param bool
 * @return mixed
 **/
function highlight_string($str, $return) {}

/**
 * Sets whether a client disconnect should cause a script to be aborted.
 *
 * @param bool
 * @return int
 **/
function ignore_user_abort($setting) {}

/**
 * Pack given arguments into binary string according to
 * format.
 *
 * @param string
 * @param mixed
 * @return string
 **/
function pack($format, $args) {}

/**
 * Performs a syntax (lint) check on the specified 
 * filename testing for scripting errors.
 *
 * @param string
 * @param string
 * @return bool
 **/
function php_check_syntax($filename, $error_message) {}

/**
 * Returns the PHP source code in filename with
 * PHP comments and whitespace removed. This may be useful for determining the
 * amount of actual code in your scripts compared with the amount of comments.
 * This is similar to using php -w from the
 * commandline.
 *
 * @param string
 * @return string
 **/
function php_strip_whitespace($filename) {}

/**
 * @param int
 * @return int
 **/
function sleep($seconds) {}

/**
 * Returns three samples representing the average system load
 * (the number of processes in the system run queue) over the last 1, 5 and 15
 * minutes, respectively.
 *
 * @return array
 **/
function sys_getloadavg() {}

/**
 * Delays program execution for the given number of
 * seconds and nanoseconds.
 *
 * @param int
 * @param int
 * @return mixed
 **/
function time_nanosleep($seconds, $nanoseconds) {}

/**
 * Makes the script sleep until the specified
 * timestamp.
 *
 * @param float
 * @return bool
 **/
function time_sleep_until($timestamp) {}

/**
 * Gets a prefixed unique identifier based on the current time in
 * microseconds.
 *
 * @param string
 * @param bool
 * @return string
 **/
function uniqid($prefix, $more_entropy) {}

/**
 * Unpacks from a binary string into an array according to the given
 * format.
 *
 * @param string
 * @param string
 * @return array
 **/
function unpack($format, $data) {}

/**
 * Delays program execution for the given number of micro seconds.
 *
 * @param int
 * @return void
 **/
function usleep($micro_seconds) {}

/**
 * udm_add_search_limit adds search restrictions.
 *
 * @param resource
 * @param int
 * @param string
 * @return bool
 **/
function udm_add_search_limit($agent, $var, $val) {}

/**
 * udm_alloc_agent_array will create an agent
 * with multiple database connections.
 *
 * @param array
 * @return resource
 **/
function udm_alloc_agent_array($databases) {}

/**
 * Allocate a mnoGoSearch session.
 *
 * @param string
 * @param string
 * @return resource
 **/
function udm_alloc_agent($dbaddr, $dbmode) {}

/**
 * Gets the mnoGoSearch API version.
 *
 * @return int
 **/
function udm_api_version() {}

/**
 * Gets all the categories on the same level with the current one.
 *
 * @param resource
 * @param string
 * @return array
 **/
function udm_cat_list($agent, $category) {}

/**
 * Returns an array describing the path in the categories tree from the tree
 * root to the current one, specified by category.
 *
 * @param resource
 * @param string
 * @return array
 **/
function udm_cat_path($agent, $category) {}

/**
 * @param resource
 * @param string
 * @return bool
 **/
function udm_check_charset($agent, $charset) {}

/**
 * @param resource
 * @param int
 * @param string
 * @return int
 **/
function udm_check_stored($agent, $link, $doc_id) {}

/**
 * udm_clear_search_limits resets defined search
 * limitations.
 *
 * @param resource
 * @return bool
 **/
function udm_clear_search_limits($agent) {}

/**
 * @param resource
 * @param int
 * @return int
 **/
function udm_close_stored($agent, $link) {}

/**
 * @param resource
 * @param string
 * @return int
 **/
function udm_crc32($agent, $str) {}

/**
 * Receiving numeric agent error code.
 *
 * @param resource
 * @return int
 **/
function udm_errno($agent) {}

/**
 * Gets the agent error message.
 *
 * @param resource
 * @return string
 **/
function udm_error($agent) {}

/**
 * Performs a search.
 *
 * @param resource
 * @param string
 * @return resource
 **/
function udm_find($agent, $query) {}

/**
 * Freeing up memory allocated for agent session.
 *
 * @param resource
 * @return int
 **/
function udm_free_agent($agent) {}

/**
 * Frees the memory allocated for ispell data.
 *
 * @param int
 * @return bool
 **/
function udm_free_ispell_data($agent) {}

/**
 * Freeing up memory allocated for results.
 *
 * @param resource
 * @return bool
 **/
function udm_free_res($res) {}

/**
 * udm_get_doc_count returns the number of documents in
 * the database.
 *
 * @param resource
 * @return int
 **/
function udm_get_doc_count($agent) {}

/**
 * Fetch a mnoGoSearch result field.
 *
 * @param resource
 * @param int
 * @param int
 * @return string
 **/
function udm_get_res_field($res, $row, $field) {}

/**
 * Gets the mnoGoSearch result parameters.
 *
 * @param resource
 * @param int
 * @return string
 **/
function udm_get_res_param($res, $param) {}

/**
 * udm_hash32 will take a string
 * str and return a quite unique 32-bit hash
 * number from it.
 *
 * @param resource
 * @param string
 * @return int
 **/
function udm_hash32($agent, $str) {}

/**
 * udm_load_ispell_data loads ispell data.
 *
 * @param resource
 * @param int
 * @param string
 * @param string
 * @param int
 * @return bool
 **/
function udm_load_ispell_data($agent, $var, $val1, $val2, $flag) {}

/**
 * @param resource
 * @param string
 * @return int
 **/
function udm_open_stored($agent, $storedaddr) {}

/**
 * Defines mnoGoSearch session parameters.
 *
 * @param resource
 * @param int
 * @param string
 * @return bool
 **/
function udm_set_agent_param($agent, $var, $val) {}

/**
 * The
 * mqseries_back
 * (MQBACK) call indicates to the queue manager that all the message gets and
 * puts that have occurred since the last syncpoint are to be backed out.
 * Messages put as part of a unit of work are deleted; messages retrieved as
 * part of a unit of work are reinstated on the queue.
 *
 * @param resource
 * @param resource
 * @param resource
 **/
function mqseries_back($hconn, $compCode, $reason) {}

/**
 * The
 * mqseries_begin
 * (MQBEGIN) call begins a unit of work that is coordinated by the queue
 * manager, and that may involve external resource managers.
 *
 * @param resource
 * @param array
 * @param resource
 * @param resource
 **/
function mqseries_begin($hconn, $beginOptions, $compCode, $reason) {}

/**
 * The
 * mqseries_close
 * (MQCLOSE) call relinquishes access to an object, and is the inverse of the
 * mqseries_open
 * (MQOPEN) call.
 *
 * @param resource
 * @param resource
 * @param resource
 * @param resource
 **/
function mqseries_close($hconn, $hobj, $compCode, $reason) {}

/**
 * The
 * mqseries_cmit
 * (MQCMIT) call indicates to the queue manager that the application has reached
 * a syncpoint, and that all of the message gets and puts that have occurred
 * since the last syncpoint are to be made permanent. Messages put as part of a
 * unit of work are made available to other applications; messages retrieved as
 * part of a unit of work are deleted.
 *
 * @param resource
 * @param resource
 * @param resource
 **/
function mqseries_cmit($hconn, $compCode, $reason) {}

/**
 * The
 * mqseries_conn
 * (MQCONN) call connects an application program to a queue manager. It provides
 * a queue manager connection handle, which is used by the application on
 * subsequent message queuing calls.
 *
 * @param string
 * @param resource
 * @param resource
 * @param resource
 **/
function mqseries_conn($qManagerName, $hconn, $compCode, $reason) {}

/**
 * The
 * mqseries_connx
 * (MQCONNX) call connects an application program to a queue manager. It
 * provides a queue manager connection handle, which is used by the application
 * on subsequent MQ calls.
 *
 * @param string
 * @param array
 * @param resource
 * @param resource
 * @param resource
 **/
function mqseries_connx($qManagerName, $connOptions, $hconn, $compCode, $reason) {}

/**
 * The
 * mqseries_disc
 * (MQDISC) call breaks the connection between the queue manager and the
 * application program, and is the inverse of the
 * mqseries_conn
 * (MQCONN) or
 * mqseries_connx
 * (MQCONNX) call.
 *
 * @param resource
 * @param resource
 * @param resource
 **/
function mqseries_disc($hconn, $compCode, $reason) {}

/**
 * The
 * mqseries_get
 * (MQGET) call retrieves a message from a local queue that has been opened
 * using the
 * mqseries_open
 * (MQOPEN) call
 *
 * @param resource
 * @param resource
 * @param array
 * @param array
 * @param int
 * @param string
 * @param int
 * @param resource
 * @param resource
 **/
function mqseries_get($hConn, $hObj, $md, $gmo, $bufferLength, $msg, $data_length, $compCode, $reason) {}

/**
 * The
 * mqseries_inq
 * (MQINQ) call returns an array of integers and a set of character strings
 * containing the attributes of an object.
 *
 * @param resource
 * @param resource
 * @param int
 * @param array
 * @param int
 * @param resource
 * @param int
 * @param resource
 * @param resource
 * @param resource
 **/
function mqseries_inq($hconn, $hobj, $selectorCount, $selectors, $intAttrCount, $intAttr, $charAttrLength, $charAttr, $compCode, $reason) {}

/**
 * The
 * mqseries_open
 * (MQOPEN) call establishes access to an object.
 *
 * @param resource
 * @param array
 * @param int
 * @param resource
 * @param resource
 * @param resource
 **/
function mqseries_open($hconn, $objDesc, $option, $hobj, $compCode, $reason) {}

/**
 * The
 * mqseries_put
 * (MQPUT) call puts a message on a queue or distribution list. The queue or
 * distribution list must already be open.
 *
 * @param resource
 * @param resource
 * @param array
 * @param array
 * @param string
 * @param resource
 * @param resource
 **/
function mqseries_put($hConn, $hObj, $md, $pmo, $message, $compCode, $reason) {}

/**
 * The
 * mqseries_put1
 * (MQPUT1) call puts one message on a queue. The queue need not be open.
 *
 * @param resource
 * @param resource
 * @param resource
 * @param resource
 * @param string
 * @param resource
 * @param resource
 **/
function mqseries_put1($hconn, $objDesc, $msgDesc, $pmo, $buffer, $compCode, $reason) {}

/**
 * The mqseries_set
 * (MQSET) call is used to change the attributes of an object represented by a
 * handle. The object must be a queue.
 *
 * @param resource
 * @param resource
 * @param resource
 **/
function mqseries_set($hconn, $compCode, $reason) {}

/**
 * mqseries_strerror
 * returns the message that correspond to the reason result code.
 *
 * @param int
 * @return string
 **/
function mqseries_strerror($reason) {}

/**
 * @param string
 * @param string
 * @return bool
 **/
function msession_connect($host, $port) {}

/**
 * @return int
 **/
function msession_count() {}

/**
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function msession_create($session, $classname, $data) {}

/**
 * @param string
 * @return bool
 **/
function msession_destroy($name) {}

/**
 * @return void
 **/
function msession_disconnect() {}

/**
 * @param string
 * @param string
 * @return array
 **/
function msession_find($name, $value) {}

/**
 * @param string
 * @return array
 **/
function msession_get_array($session) {}

/**
 * @param string
 * @return string
 **/
function msession_get_data($session) {}

/**
 * @param string
 * @param string
 * @param string
 * @return string
 **/
function msession_get($session, $name, $value) {}

/**
 * @param string
 * @param string
 * @return string
 **/
function msession_inc($session, $name) {}

/**
 * @return array
 **/
function msession_list() {}

/**
 * Used for searching sessions with common attributes.
 *
 * @param string
 * @return array
 **/
function msession_listvar($name) {}

/**
 * @param string
 * @return int
 **/
function msession_lock($name) {}

/**
 * @param string
 * @param string
 * @param string
 * @return string
 **/
function msession_plugin($session, $val, $param) {}

/**
 * @param int
 * @return string
 **/
function msession_randstr($param) {}

/**
 * @param string
 * @param array
 * @return void
 **/
function msession_set_array($session, $tuples) {}

/**
 * @param string
 * @param string
 * @return bool
 **/
function msession_set_data($session, $value) {}

/**
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function msession_set($session, $name, $value) {}

/**
 * @param string
 * @param int
 * @return int
 **/
function msession_timeout($session, $param) {}

/**
 * @param int
 * @param string
 * @param string
 * @return string
 **/
function msession_uniq($param, $classname, $data) {}

/**
 * @param string
 * @param int
 * @return int
 **/
function msession_unlock($session, $key) {}

/**
 * Returns number of affected rows by the last SELECT, UPDATE or DELETE
 * query associated with result.
 *
 * @param resource
 * @return int
 **/
function msql_affected_rows($result) {}

/**
 * msql_close closes the non-persistent connection to 
 * the mSQL server that's associated with the specified link identifier.
 *
 * @param resource
 * @return bool
 **/
function msql_close($link_identifier) {}

/**
 * msql_connect establishes a connection to a mSQL 
 * server.
 *
 * @param string
 * @return resource
 **/
function msql_connect($hostname) {}

/**
 * msql_create_db attempts to create a new database on 
 * the mSQL server.
 *
 * @param string
 * @param resource
 * @return bool
 **/
function msql_create_db($database_name, $link_identifier) {}

/**
 * msql_data_seek moves the internal row
 * pointer of the mSQL result associated with the specified query
 * identifier to point to the specified row number. The next call
 * to msql_fetch_row would return that
 * row.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function msql_data_seek($result, $row_number) {}

/**
 * msql_db_query selects a database and executes a query
 * on it.
 *
 * @param string
 * @param string
 * @param resource
 * @return resource
 **/
function msql_db_query($database, $query, $link_identifier) {}

/**
 * msql_drop_db attempts to drop (remove) a database
 * from the mSQL server.
 *
 * @param string
 * @param resource
 * @return bool
 **/
function msql_drop_db($database_name, $link_identifier) {}

/**
 * msql_error returns the last issued error by the mSQL
 * server. Note that only the last error message is accessible with 
 * msql_error.
 *
 * @return string
 **/
function msql_error() {}

/**
 * msql_fetch_array is an extended version of
 * msql_fetch_row. In addition to storing the
 * data in the numeric indices of the result array, it also stores
 * the data in associative indices, using the field names as keys.
 *
 * @param resource
 * @param int
 * @return array
 **/
function msql_fetch_array($result, $result_type) {}

/**
 * msql_fetch_field can be used in order to obtain 
 * information about fields in a certain query result.
 *
 * @param resource
 * @param int
 * @return object
 **/
function msql_fetch_field($result, $field_offset) {}

/**
 * msql_fetch_object is similar to
 * msql_fetch_array, with one difference - an
 * object is returned, instead of an array. Indirectly, that means
 * that you can only access the data by the field names, and not by
 * their offsets (numbers are illegal property names).
 *
 * @param resource
 * @return object
 **/
function msql_fetch_object($result) {}

/**
 * msql_fetch_row fetches one row of data from
 * the result associated with the specified query identifier. The
 * row is returned as an array. Each result column is stored in an
 * array offset, starting at offset 0.
 *
 * @param resource
 * @return array
 **/
function msql_fetch_row($result) {}

/**
 * msql_field_flags returns the field flags of
 * the specified field.
 *
 * @param resource
 * @param int
 * @return string
 **/
function msql_field_flags($result, $field_offset) {}

/**
 * msql_field_len returns the length of the specified 
 * field.
 *
 * @param resource
 * @param int
 * @return int
 **/
function msql_field_len($result, $field_offset) {}

/**
 * msql_field_name gets the name of the specified field
 * index.
 *
 * @param resource
 * @param int
 * @return string
 **/
function msql_field_name($result, $field_offset) {}

/**
 * Seeks to the specified field offset. If the next call to
 * msql_fetch_field won't include a field offset, this 
 * field would be returned.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function msql_field_seek($result, $field_offset) {}

/**
 * Returns the name of the table that the specified field is in.
 *
 * @param resource
 * @param int
 * @return int
 **/
function msql_field_table($result, $field_offset) {}

/**
 * msql_field_type gets the type of the specified field
 * index.
 *
 * @param resource
 * @param int
 * @return string
 **/
function msql_field_type($result, $field_offset) {}

/**
 * msql_free_result frees the memory associated
 * with query_identifier. When PHP completes a
 * request, this memory is freed automatically, so you only need to
 * call this function when you want to make sure you don't use too
 * much memory while the script is running.
 *
 * @param resource
 * @return bool
 **/
function msql_free_result($result) {}

/**
 * msql_list_tables lists the databases available on the
 * specified link_identifier.
 *
 * @param resource
 * @return resource
 **/
function msql_list_dbs($link_identifier) {}

/**
 * msql_list_fields returns information about the given table.
 *
 * @param string
 * @param string
 * @param resource
 * @return resource
 **/
function msql_list_fields($database, $tablename, $link_identifier) {}

/**
 * msql_list_tables lists the tables on the specified
 * database.
 *
 * @param string
 * @param resource
 * @return resource
 **/
function msql_list_tables($database, $link_identifier) {}

/**
 * msql_num_fields returns the number of fields
 * in a result set.
 *
 * @param resource
 * @return int
 **/
function msql_num_fields($result) {}

/**
 * msql_num_rows returns the number of rows in
 * a result set.
 *
 * @param resource
 * @return int
 **/
function msql_num_rows($query_identifier) {}

/**
 * msql_pconnect acts very much like
 * msql_connect with two major differences.
 *
 * @param string
 * @return resource
 **/
function msql_pconnect($hostname) {}

/**
 * msql_query sends a query to the currently active 
 * database on the server that's associated with the specified link 
 * identifier.
 *
 * @param string
 * @param resource
 * @return resource
 **/
function msql_query($query, $link_identifier) {}

/**
 * msql_result returns the contents of one cell from a 
 * mSQL result set.
 *
 * @param resource
 * @param int
 * @param mixed
 * @return string
 **/
function msql_result($result, $row, $field) {}

/**
 * msql_select_db sets the current active database on 
 * the server that's associated with the specified
 * link_identifier.
 *
 * @param string
 * @param resource
 * @return bool
 **/
function msql_select_db($database_name, $link_identifier) {}

/**
 * Binds a parameter to a stored procedure or a remote stored procedure.
 *
 * @param resource
 * @param string
 * @param mixed
 * @param int
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function mssql_bind($stmt, $param_name, $var, $type, $is_output, $is_null, $maxlen) {}

/**
 * Closes the link to a MS SQL Server database that's associated with the
 * specified link identifier. If the link identifier isn't specified, the
 * last opened link is assumed.
 *
 * @param resource
 * @return bool
 **/
function mssql_close($link_identifier) {}

/**
 * mssql_connect establishes a connection to a
 * MS SQL server. The servername argument has to be a valid
 * servername that is defined in the 'interfaces' file.
 *
 * @param string
 * @param string
 * @param string
 * @param bool
 * @return resource
 **/
function mssql_connect($servername, $username, $password, $new_link) {}

/**
 * mssql_data_seek moves the internal row
 * pointer of the MS SQL result associated with the specified result
 * identifier to point to the specified row number, first row being
 * number 0. The next call to mssql_fetch_row
 * would return that row.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function mssql_data_seek($result_identifier, $row_number) {}

/**
 * Executes a stored procedure on a MS SQL server database
 *
 * @param resource
 * @param bool
 * @return mixed
 **/
function mssql_execute($stmt, $skip_results) {}

/**
 * mssql_fetch_array is an extended version of
 * mssql_fetch_row. In addition to storing the
 * data in the numeric indices of the result array, it also stores
 * the data in associative indices, using the field names as keys.
 *
 * @param resource
 * @param int
 * @return array
 **/
function mssql_fetch_array($result, $result_type) {}

/**
 * Returns an associative array that corresponds to the fetched row and moves
 * the internal data pointer ahead. mssql_fetch_assoc is
 * equivalent to calling mssql_fetch_array with
 * MSSQL_ASSOC for the optional second parameter.
 *
 * @param resource
 * @return array
 **/
function mssql_fetch_assoc($result_id) {}

/**
 * Returns the next batch of records
 *
 * @param resource
 * @return int
 **/
function mssql_fetch_batch($result) {}

/**
 * mssql_fetch_field can be used in order to
 * obtain information about fields in a certain query result.
 *
 * @param resource
 * @param int
 * @return object
 **/
function mssql_fetch_field($result, $field_offset) {}

/**
 * mssql_fetch_object is similar to
 * mssql_fetch_array, with one difference - an
 * object is returned, instead of an array. Indirectly, that means
 * that you can only access the data by the field names, and not by
 * their offsets (numbers are illegal property names).
 *
 * @param resource
 * @return object
 **/
function mssql_fetch_object($result) {}

/**
 * mssql_fetch_row fetches one row of data from
 * the result associated with the specified result identifier. The
 * row is returned as an array. Each result column is stored in an
 * array offset, starting at offset 0.
 *
 * @param resource
 * @return array
 **/
function mssql_fetch_row($result) {}

/**
 * Returns the length of field no. offset in 
 * result.
 *
 * @param resource
 * @param int
 * @return int
 **/
function mssql_field_length($result, $offset) {}

/**
 * Returns the name of field no. offset in 
 * result.
 *
 * @param resource
 * @param int
 * @return string
 **/
function mssql_field_name($result, $offset) {}

/**
 * Seeks to the specified field offset. If the next call to
 * mssql_fetch_field won't include a field
 * offset, this field would be returned.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function mssql_field_seek($result, $field_offset) {}

/**
 * Returns the type of field no. offset in 
 * result.
 *
 * @param resource
 * @param int
 * @return string
 **/
function mssql_field_type($result, $offset) {}

/**
 * mssql_free_result only needs to be called
 * if you are worried about using too much memory while your script
 * is running. All result memory will automatically be freed when
 * the script ends. You may call mssql_free_result
 * with the result identifier as an argument and the associated
 * result memory will be freed.
 *
 * @param resource
 * @return bool
 **/
function mssql_free_result($result) {}

/**
 * mssql_free_statement only needs to be called
 * if you are worried about using too much memory while your script
 * is running. All statement memory will automatically be freed when
 * the script ends. You may call mssql_free_statement
 * with the statement identifier as an argument and the associated
 * statement memory will be freed.
 *
 * @param resource
 * @return bool
 **/
function mssql_free_statement($stmt) {}

/**
 * @return string
 **/
function mssql_get_last_message() {}

/**
 * @param string
 * @param int
 * @return string
 **/
function mssql_guid_string($binary, $short_format) {}

/**
 * Initializes a stored procedure or a remote stored procedure.
 *
 * @param string
 * @param resource
 * @return resource
 **/
function mssql_init($sp_name, $link_identifier) {}

/**
 * @param int
 * @return void
 **/
function mssql_min_error_severity($severity) {}

/**
 * @param int
 * @return void
 **/
function mssql_min_message_severity($severity) {}

/**
 * When sending more than one SQL statement to the server or
 * executing a stored procedure with multiple results, it will cause
 * the server to return multiple result sets. This function will
 * test for additional results available form the server. If an
 * additional result set exists it will free the existing result set
 * and prepare to fetch the rows from the new result set.
 *
 * @param resource
 * @return bool
 **/
function mssql_next_result($result_id) {}

/**
 * mssql_num_fields returns the number of
 * fields in a result set.
 *
 * @param resource
 * @return int
 **/
function mssql_num_fields($result) {}

/**
 * mssql_num_rows returns the number of rows in
 * a result set.
 *
 * @param resource
 * @return int
 **/
function mssql_num_rows($result) {}

/**
 * mssql_pconnect acts very much like
 * mssql_connect with two major differences.
 *
 * @param string
 * @param string
 * @param string
 * @param bool
 * @return resource
 **/
function mssql_pconnect($servername, $username, $password, $new_link) {}

/**
 * mssql_query sends a query to the currently active
 * database on the server that's associated with the specified link
 * identifier.
 *
 * @param string
 * @param resource
 * @param int
 * @return mixed
 **/
function mssql_query($query, $link_identifier, $batch_size) {}

/**
 * mssql_result returns the contents of one cell from a
 * MS SQL result set.
 *
 * @param resource
 * @param int
 * @param mixed
 * @return string
 **/
function mssql_result($result, $row, $field) {}

/**
 * @param resource
 * @return int
 **/
function mssql_rows_affected($link_identifier) {}

/**
 * mssql_select_db sets the current active
 * database on the server that's associated with the specified link
 * identifier.
 *
 * @param string
 * @param resource
 * @return bool
 **/
function mssql_select_db($database_name, $link_identifier) {}

/**
 * Get the number of affected rows by the last INSERT, UPDATE, REPLACE 
 * or DELETE query associated with link_identifier.
 *
 * @param resource
 * @return int
 **/
function mysql_affected_rows($link_identifier) {}

/**
 * mysql_change_user changes the logged in user
 * of the current active connection, or the connection given by the
 * optional link_identifier parameter. If a
 * database is specified, this will be the current database after
 * the user has been changed. If the new user and password
 * authorization fails, the current connected user stays active.
 *
 * @param string
 * @param string
 * @param string
 * @param resource
 * @return int
 **/
function mysql_change_user($user, $password, $database, $link_identifier) {}

/**
 * Retrieves the character_set variable from MySQL.
 *
 * @param resource
 * @return string
 **/
function mysql_client_encoding($link_identifier) {}

/**
 * mysql_close closes the non-persistent connection to 
 * the MySQL server that's associated with the specified link identifier. If 
 * link_identifier isn't specified, the last opened 
 * link is used.
 *
 * @param resource
 * @return bool
 **/
function mysql_close($link_identifier) {}

/**
 * Opens or reuses a connection to a MySQL server.
 *
 * @param string
 * @param string
 * @param string
 * @param bool
 * @param int
 * @return resource
 **/
function mysql_connect($server, $username, $password, $new_link, $client_flags) {}

/**
 * mysql_create_db attempts to create a new
 * database on the server associated with the specified link
 * identifier.
 *
 * @param string
 * @param resource
 * @return bool
 **/
function mysql_create_db($database_name, $link_identifier) {}

/**
 * mysql_data_seek moves the internal row
 * pointer of the MySQL result associated with the specified result
 * identifier to point to the specified row number. The next call
 * to a MySQL fetch function, such as mysql_fetch_assoc,
 * would return that row.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function mysql_data_seek($result, $row_number) {}

/**
 * Retrieve the database name from a call to 
 * mysql_list_dbs.
 *
 * @param resource
 * @param int
 * @param mixed
 * @return string
 **/
function mysql_db_name($result, $row, $field) {}

/**
 * mysql_db_query selects a database, and executes a 
 * query on it.
 *
 * @param string
 * @param string
 * @param resource
 * @return resource
 **/
function mysql_db_query($database, $query, $link_identifier) {}

/**
 * mysql_drop_db attempts to drop (remove) an
 * entire database from the server associated with the specified
 * link identifier. This function is deprecated, it is preferable to use 
 * mysql_query to issue a sql 
 * DROP DATABASE statement instead.
 *
 * @param string
 * @param resource
 * @return bool
 **/
function mysql_drop_db($database_name, $link_identifier) {}

/**
 * Returns the error number from the last MySQL function.
 *
 * @param resource
 * @return int
 **/
function mysql_errno($link_identifier) {}

/**
 * Returns the error text from the last MySQL function.
 * Errors coming back from the MySQL database backend no longer
 * issue warnings. Instead, use mysql_error to
 * retrieve the error text. Note that this function only returns the
 * error text from the most recently executed MySQL function (not
 * including mysql_error and
 * mysql_errno), so if you want to use it, make
 * sure you check the value before calling another MySQL function.
 *
 * @param resource
 * @return string
 **/
function mysql_error($link_identifier) {}

/**
 * This function will escape the unescaped_string,
 * so that it is safe to place it in a mysql_query.
 * This function is deprecated.
 *
 * @param string
 * @return string
 **/
function mysql_escape_string($unescaped_string) {}

/**
 * Returns an array that corresponds to the fetched row
 * and moves the internal data pointer ahead.
 *
 * @param resource
 * @param int
 * @return array
 **/
function mysql_fetch_array($result, $result_type) {}

/**
 * Returns an associative array that corresponds to the fetched row
 * and moves the internal data pointer ahead.
 * mysql_fetch_assoc is equivalent to calling
 * mysql_fetch_array with MYSQL_ASSOC for the
 * optional second parameter. It only returns an associative array.
 *
 * @param resource
 * @return array
 **/
function mysql_fetch_assoc($result) {}

/**
 * Returns an object containing field information. This function can be used 
 * to obtain information about fields in the provided query result.
 *
 * @param resource
 * @param int
 * @return object
 **/
function mysql_fetch_field($result, $field_offset) {}

/**
 * Returns an array that corresponds to the lengths of each field
 * in the last row fetched by MySQL.
 *
 * @param resource
 * @return array
 **/
function mysql_fetch_lengths($result) {}

/**
 * Returns an object with properties that correspond to the fetched row
 * and moves the internal data pointer ahead.
 *
 * @param resource
 * @param string
 * @param array
 * @return object
 **/
function mysql_fetch_object($result, $class_name, $params) {}

/**
 * Returns a numerical array that corresponds to the fetched row
 * and moves the internal data pointer ahead.
 *
 * @param resource
 * @return array
 **/
function mysql_fetch_row($result) {}

/**
 * mysql_field_flags returns the field flags of
 * the specified field. The flags are reported as a single word
 * per flag separated by a single space, so that you can split the
 * returned value using explode.
 *
 * @param resource
 * @param int
 * @return string
 **/
function mysql_field_flags($result, $field_offset) {}

/**
 * mysql_field_len returns the length of the
 * specified field.
 *
 * @param resource
 * @param int
 * @return int
 **/
function mysql_field_len($result, $field_offset) {}

/**
 * mysql_field_name returns the name of the
 * specified field index.
 *
 * @param resource
 * @param int
 * @return string
 **/
function mysql_field_name($result, $field_offset) {}

/**
 * Seeks to the specified field offset. If the next call to
 * mysql_fetch_field doesn't include a field
 * offset, the field offset specified in
 * mysql_field_seek will be returned.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function mysql_field_seek($result, $field_offset) {}

/**
 * Returns the name of the table that the specified field is in.
 *
 * @param resource
 * @param int
 * @return string
 **/
function mysql_field_table($result, $field_offset) {}

/**
 * mysql_field_type is similar to the
 * mysql_field_name function. The arguments are
 * identical, but the field type is returned instead.
 *
 * @param resource
 * @param int
 * @return string
 **/
function mysql_field_type($result, $field_offset) {}

/**
 * mysql_free_result will free all memory
 * associated with the result identifier result.
 *
 * @param resource
 * @return bool
 **/
function mysql_free_result($result) {}

/**
 * mysql_get_client_info returns a string that
 * represents the client library version.
 *
 * @return string
 **/
function mysql_get_client_info() {}

/**
 * Describes the type of connection in use for the connection, including the 
 * server host name.
 *
 * @param resource
 * @return string
 **/
function mysql_get_host_info($link_identifier) {}

/**
 * Retrieves the MySQL protocol.
 *
 * @param resource
 * @return int
 **/
function mysql_get_proto_info($link_identifier) {}

/**
 * Retrieves the MySQL server version.
 *
 * @param resource
 * @return string
 **/
function mysql_get_server_info($link_identifier) {}

/**
 * Returns detailed information about the last query.
 *
 * @param resource
 * @return string
 **/
function mysql_info($link_identifier) {}

/**
 * Retrieves the ID generated for an AUTO_INCREMENT column by the previous 
 * INSERT query.
 *
 * @param resource
 * @return int
 **/
function mysql_insert_id($link_identifier) {}

/**
 * Returns a result pointer containing the databases available from the 
 * current mysql daemon.
 *
 * @param resource
 * @return resource
 **/
function mysql_list_dbs($link_identifier) {}

/**
 * Retrieves information about the given table name.
 *
 * @param string
 * @param string
 * @param resource
 * @return resource
 **/
function mysql_list_fields($database_name, $table_name, $link_identifier) {}

/**
 * Retrieves the current MySQL server threads.
 *
 * @param resource
 * @return resource
 **/
function mysql_list_processes($link_identifier) {}

/**
 * Retrieves a list of table names from a MySQL database.
 *
 * @param string
 * @param resource
 * @return resource
 **/
function mysql_list_tables($database, $link_identifier) {}

/**
 * Retrieves the number of fields from a query.
 *
 * @param resource
 * @return int
 **/
function mysql_num_fields($result) {}

/**
 * Retrieves the number of rows from a result set. This command is only valid 
 * for statements like SELECT or SHOW that return an actual result set. 
 * To retrieve the number of rows affected by a INSERT, UPDATE, REPLACE or 
 * DELETE query, use mysql_affected_rows.
 *
 * @param resource
 * @return int
 **/
function mysql_num_rows($result) {}

/**
 * Establishes a persistent connection to a MySQL server.
 *
 * @param string
 * @param string
 * @param string
 * @param int
 * @return resource
 **/
function mysql_pconnect($server, $username, $password, $client_flags) {}

/**
 * Checks whether or not the connection to
 * the server is working. If it has gone down, an automatic reconnection is
 * attempted. This function can be used by scripts that remain idle for a
 * long while, to check whether or not the server has closed the connection
 * and reconnect if necessary.
 *
 * @param resource
 * @return bool
 **/
function mysql_ping($link_identifier) {}

/**
 * mysql_query sends an unique query (multiple queries
 * are not supported) to the currently
 * active database on the server that's associated with the
 * specified link_identifier.
 *
 * @param string
 * @param resource
 * @return resource
 **/
function mysql_query($query, $link_identifier) {}

/**
 * Escapes special characters in the unescaped_string, 
 * taking into account the current character set of the connection so that it 
 * is safe to place it in a mysql_query. If binary data 
 * is to be inserted, this function must be used.
 *
 * @param string
 * @param resource
 * @return string
 **/
function mysql_real_escape_string($unescaped_string, $link_identifier) {}

/**
 * Retrieves the contents of one cell from a MySQL result set.
 *
 * @param resource
 * @param int
 * @param mixed
 * @return string
 **/
function mysql_result($result, $row, $field) {}

/**
 * Sets the current active database on the server that's associated with the 
 * specified link identifier. Every subsequent call to 
 * mysql_query will be made on the active database.
 *
 * @param string
 * @param resource
 * @return bool
 **/
function mysql_select_db($database_name, $link_identifier) {}

/**
 * Sets the default character set for the current connection.
 *
 * @param string
 * @param resource
 * @return bool
 **/
function mysql_set_charset($charset, $link_identifier) {}

/**
 * mysql_stat returns the current server status.
 *
 * @param resource
 * @return string
 **/
function mysql_stat($link_identifier) {}

/**
 * Retrieves the table name from a result.
 *
 * @param resource
 * @param int
 * @return string
 **/
function mysql_tablename($result, $i) {}

/**
 * Retrieves the current thread ID. If the connection is lost, and a reconnect 
 * with mysql_ping is executed, the thread ID will 
 * change. This means only retrieve the thread ID when needed.
 *
 * @param resource
 * @return int
 **/
function mysql_thread_id($link_identifier) {}

/**
 * mysql_unbuffered_query sends a SQL query
 * query to MySQL, without fetching and
 * buffering the result rows automatically, as
 * mysql_query does. On the one hand, this
 * saves a considerable amount of memory with SQL queries that
 * produce large result sets. On the other hand, you can start
 * working on the result set immediately after the first row has
 * been retrieved: you don't have to wait until the complete SQL
 * query has been performed. When using multiple DB-connects, you
 * have to specify the optional parameter
 * link_identifier.
 *
 * @param string
 * @param resource
 * @return resource
 **/
function mysql_unbuffered_query($query, $link_identifier) {}

/**
 * Procedural style:
 *
 * @param mysqli
 * @return bool
 **/
function mysqli_disable_reads_from_master($link) {}

/**
 * @param mysqli
 * @return bool
 **/
function mysqli_disable_rpl_parse($link) {}

/**
 * @param mysqli
 * @return bool
 **/
function mysqli_enable_reads_from_master($link) {}

/**
 * @param mysqli
 * @return bool
 **/
function mysqli_enable_rpl_parse($link) {}

/**
 * @param mysqli
 * @param string
 * @return bool
 **/
function mysqli_master_query($link, $query) {}

/**
 * mysqli_report is a powerful function to improve your queries
 * and code during development and testing phase. Depending on the flags it reports
 * errors from mysqli function calls or queries which don't use an index (or use a bad
 * index).
 *
 * @param int
 * @return bool
 **/
function mysqli_report($flags) {}

/**
 * @param mysqli
 * @return int
 **/
function mysqli_rpl_parse_enabled($link) {}

/**
 * @param mysqli
 * @return bool
 **/
function mysqli_rpl_probe($link) {}

/**
 * Procedural style:
 *
 * @param mysqli
 * @param string
 * @return int
 **/
function mysqli_rpl_query_type($link, $query) {}

/**
 * Procedural style:
 *
 * @param mysqli
 * @param string
 * @return bool
 **/
function mysqli_send_query($link, $query) {}

/**
 * @param mysqli
 * @param string
 * @return bool
 **/
function mysqli_slave_query($link, $query) {}

/**
 * Object oriented style (property):
 *
 * @param mysqli
 * @return int
 **/
function mysqli_affected_rows($link) {}

/**
 * Returns the last error code number from the last call to 
 * mysqli_connect.
 *
 * @return int
 **/
function mysqli_connect_errno() {}

/**
 * Returns the last error message string from the last call to 
 * mysqli_connect.
 *
 * @return string
 **/
function mysqli_connect_error() {}

/**
 * Object oriented style (constructor):
 *
 * @param string
 * @param string
 * @param string
 * @param string
 * @param int
 * @param string
 * @return mysqli
 **/
function mysqli_connect($host, $username, $passwd, $dbname, $port, $socket) {}

/**
 * Object oriented style (property):
 *
 * @param mysqli
 * @return int
 **/
function mysqli_errno($link) {}

/**
 * Object oriented style (property):
 *
 * @param mysqli
 * @return string
 **/
function mysqli_error($link) {}

/**
 * Object oriented style (property):
 *
 * @param mysqli
 * @return int
 **/
function mysqli_field_count($link) {}

/**
 * Object oriented style (property):
 *
 * @param mysqli
 * @return string
 **/
function mysqli_get_host_info($link) {}

/**
 * Object oriented style (property):
 *
 * @param mysqli
 * @return int
 **/
function mysqli_get_proto_info($link) {}

/**
 * Object oriented style (property):
 *
 * @param mysqli
 * @return string
 **/
function mysqli_get_server_info($link) {}

/**
 * Object oriented style (property):
 *
 * @param mysqli
 * @return int
 **/
function mysqli_get_server_version($link) {}

/**
 * Object oriented style (property)
 *
 * @param mysqli
 * @return string
 **/
function mysqli_info($link) {}

/**
 * Object oriented style (method):
 *
 * @return mysqli
 **/
function init() {}

/**
 * Object oriented style (property):
 *
 * @param mysqli
 * @return int
 **/
function mysqli_insert_id($link) {}

/**
 * Object oriented style (method)
 *
 * @param string
 * @return mysqli_stmt
 **/
function prepare($query) {}

/**
 * Object oriented style (method):
 *
 * @param string
 * @return bool
 **/
function real_query($query) {}

/**
 * Deactivates a LOAD DATA INFILE LOCAL handler previously
 * set with mysqli_set_local_infile_handler.
 *
 * @param mysqli
 * @return void
 **/
function mysqli_set_local_infile_default($link) {}

/**
 * Object oriented style (method)
 *
 * @param mysqli
 * @param callback
 * @return bool
 **/
function mysqli_set_local_infile_handler($link, $read_func) {}

/**
 * Object oriented style (property):
 *
 * @param mysqli
 * @return string
 **/
function mysqli_sqlstate($link) {}

/**
 * Object oriented style (property):
 *
 * @param mysqli
 * @return mysqli_stmt
 **/
function mysqli_stmt_init($link) {}

/**
 * Object oriented style (method):
 *
 * @return mysqli_result
 **/
function store_result() {}

/**
 * Object oriented style (property):
 *
 * @param mysqli
 * @return int
 **/
function mysqli_thread_id($link) {}

/**
 * Procedural style:
 *
 * @return bool
 **/
function mysqli_thread_safe() {}

/**
 * Object oriented style (method):
 *
 * @return mysqli_result
 **/
function use_result() {}

/**
 * Object oriented style (property):
 *
 * @param mysqli
 * @return int
 **/
function mysqli_warning_count($link) {}

/**
 * Object oriented style (property):
 *
 * @param mysqli_result
 * @return int
 **/
function mysqli_field_tell($result) {}

/**
 * Object oriented style (property):
 *
 * @param mysqli_result
 * @return int
 **/
function mysqli_num_fields($result) {}

/**
 * Object oriented style (property):
 *
 * @param mysqli_result
 * @return array
 **/
function mysqli_fetch_lengths($result) {}

/**
 * Object oriented style (property):
 *
 * @param mysqli_result
 * @return int
 **/
function mysqli_num_rows($result) {}

/**
 * Object oriented style (property):
 *
 * @param mysqli_stmt
 * @return int
 **/
function mysqli_stmt_affected_rows($stmt) {}

/**
 * @param mysqli_stmt
 * @param int
 * @return int
 **/
function mysqli_stmt_attr_get($stmt, $attr) {}

/**
 * @param mysqli_stmt
 * @param int
 * @param int
 * @return bool
 **/
function mysqli_stmt_attr_set($stmt, $attr, $mode) {}

/**
 * Object oriented style (property):
 *
 * @param mysqli_stmt
 * @return int
 **/
function mysqli_stmt_errno($stmt) {}

/**
 * Object oriented style (property):
 *
 * @param mysqli_stmt
 * @return string
 **/
function mysqli_stmt_error($stmt) {}

/**
 * @param mysqli_stmt
 * @return int
 **/
function mysqli_stmt_field_count($stmt) {}

/**
 * @param mysqli_stmt
 * @return mixed
 **/
function mysqli_stmt_insert_id($stmt) {}

/**
 * Object oriented style (property):
 *
 * @param mysqli_stmt
 * @return int
 **/
function mysqli_stmt_num_rows($stmt) {}

/**
 * Object oriented style (property):
 *
 * @param mysqli_stmt
 * @return int
 **/
function mysqli_stmt_param_count($stmt) {}

/**
 * Object oriented style (property):
 *
 * @param mysqli_stmt
 * @return string
 **/
function mysqli_stmt_sqlstate($stmt) {}

/**
 * @param int
 * @return int
 **/
function ncurses_addch($ch) {}

/**
 * @param string
 * @param int
 * @return int
 **/
function ncurses_addchnstr($s, $n) {}

/**
 * @param string
 * @return int
 **/
function ncurses_addchstr($s) {}

/**
 * @param string
 * @param int
 * @return int
 **/
function ncurses_addnstr($s, $n) {}

/**
 * @param string
 * @return int
 **/
function ncurses_addstr($text) {}

/**
 * @param int
 * @param int
 * @return int
 **/
function ncurses_assume_default_colors($fg, $bg) {}

/**
 * @param int
 * @return int
 **/
function ncurses_attroff($attributes) {}

/**
 * @param int
 * @return int
 **/
function ncurses_attron($attributes) {}

/**
 * @param int
 * @return int
 **/
function ncurses_attrset($attributes) {}

/**
 * @return int
 **/
function ncurses_baudrate() {}

/**
 * ncurses_beep sends an audible alert (bell)
 * and if its not possible flashes the screen.
 *
 * @return int
 **/
function ncurses_beep() {}

/**
 * @param int
 * @return int
 **/
function ncurses_bkgd($attrchar) {}

/**
 * @param int
 * @return void
 **/
function ncurses_bkgdset($attrchar) {}

/**
 * Draws the specified lines and corners around the main window.
 *
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function ncurses_border($left, $right, $top, $bottom, $tl_corner, $tr_corner, $bl_corner, $br_corner) {}

/**
 * @param resource
 * @return int
 **/
function ncurses_bottom_panel($panel) {}

/**
 * Tells whether the terminal has color capabilities and whether the
 * programmer can change the colors.
 *
 * @return bool
 **/
function ncurses_can_change_color() {}

/**
 * Disables line buffering and character processing (interrupt and flow
 * control characters are unaffected), making characters typed by the user
 * immediately available to the program.
 *
 * @return bool
 **/
function ncurses_cbreak() {}

/**
 * Clears the screen completely without setting blanks.
 *
 * @return bool
 **/
function ncurses_clear() {}

/**
 * Erases all lines from cursor to end of screen and creates blanks. Blanks
 * created by ncurses_clrtobot have the current 
 * background rendition.
 *
 * @return bool
 **/
function ncurses_clrtobot() {}

/**
 * Erases the current line from cursor position to the end. Blanks created by
 * ncurses_clrtoeol have the current background
 * rendition.
 *
 * @return bool
 **/
function ncurses_clrtoeol() {}

/**
 * @param int
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function ncurses_color_content($color, $r, $g, $b) {}

/**
 * @param int
 * @return int
 **/
function ncurses_color_set($pair) {}

/**
 * @param int
 * @return int
 **/
function ncurses_curs_set($visibility) {}

/**
 * Saves the current terminal modes for program (in curses) for use by
 * ncurses_reset_prog_mode.
 *
 * @return bool
 **/
function ncurses_def_prog_mode() {}

/**
 * Saves the current terminal modes for shell (not in curses) for use by
 * ncurses_reset_shell_mode.
 *
 * @return bool
 **/
function ncurses_def_shell_mode() {}

/**
 * @param string
 * @param int
 * @return int
 **/
function ncurses_define_key($definition, $keycode) {}

/**
 * @param resource
 * @return bool
 **/
function ncurses_del_panel($panel) {}

/**
 * @param int
 * @return int
 **/
function ncurses_delay_output($milliseconds) {}

/**
 * Deletes the character under the cursor. All characters to the right of the
 * cursor on the same line are moved to the left one position and the last 
 * character on the line is filled with a blank. The cursor position does not
 * change.
 *
 * @return bool
 **/
function ncurses_delch() {}

/**
 * Deletes the current line under cursorposition. All lines below the current
 * line are moved up one line. The bottom line of window is cleared. Cursor
 * position does not change.
 *
 * @return bool
 **/
function ncurses_deleteln() {}

/**
 * @param resource
 * @return bool
 **/
function ncurses_delwin($window) {}

/**
 * Compares the virtual screen to the physical screen and updates the
 * physical screen. This way is more effective than using multiple refresh
 * calls.
 *
 * @return bool
 **/
function ncurses_doupdate() {}

/**
 * Enables echo mode. All characters typed by user are echoed by
 * ncurses_getch.
 *
 * @return bool
 **/
function ncurses_echo() {}

/**
 * @param int
 * @return int
 **/
function ncurses_echochar($character) {}

/**
 * @return int
 **/
function ncurses_end() {}

/**
 * Fills the terminal screen with blanks.
 *
 * @return bool
 **/
function ncurses_erase() {}

/**
 * Returns the current erase character.
 *
 * @return string
 **/
function ncurses_erasechar() {}

/**
 * @return void
 **/
function ncurses_filter() {}

/**
 * Flashes the screen, and if its not possible, sends an audible alert
 * (bell).
 *
 * @return bool
 **/
function ncurses_flash() {}

/**
 * Throws away any typeahead that has been typed and has not yet been read by
 * your program.
 *
 * @return bool
 **/
function ncurses_flushinp() {}

/**
 * @return int
 **/
function ncurses_getch() {}

/**
 * Gets the horizontal and vertical size of the given 
 * window into the given variables.
 *
 * @param resource
 * @param int
 * @param int
 * @return void
 **/
function ncurses_getmaxyx($window, $y, $x) {}

/**
 * ncurses_getmouse reads mouse event out of
 * queue.
 *
 * @param array
 * @return bool
 **/
function ncurses_getmouse($mevent) {}

/**
 * @param resource
 * @param int
 * @param int
 * @return void
 **/
function ncurses_getyx($window, $y, $x) {}

/**
 * @param int
 * @return int
 **/
function ncurses_halfdelay($tenth) {}

/**
 * Checks whether the terminal has color capacities.
 *
 * @return bool
 **/
function ncurses_has_colors() {}

/**
 * Checks whether the terminal has insert and delete capabilities.
 *
 * @return bool
 **/
function ncurses_has_ic() {}

/**
 * Checks whether the terminal has insert- and delete-line-capabilities.
 *
 * @return bool
 **/
function ncurses_has_il() {}

/**
 * @param int
 * @return int
 **/
function ncurses_has_key($keycode) {}

/**
 * @param resource
 * @return int
 **/
function ncurses_hide_panel($panel) {}

/**
 * @param int
 * @param int
 * @return int
 **/
function ncurses_hline($charattr, $n) {}

/**
 * Returns the character from the current position.
 *
 * @return string
 **/
function ncurses_inch() {}

/**
 * @param int
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function ncurses_init_color($color, $r, $g, $b) {}

/**
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function ncurses_init_pair($pair, $fg, $bg) {}

/**
 * Initializes the ncurses interface and must be used before any other
 * ncurses function call.
 *
 * @return void
 **/
function ncurses_init() {}

/**
 * @param int
 * @return int
 **/
function ncurses_insch($character) {}

/**
 * @param int
 * @return int
 **/
function ncurses_insdelln($count) {}

/**
 * Inserts a new line above the current line. The bottom line will be lost.
 *
 * @return int
 **/
function ncurses_insertln() {}

/**
 * @param string
 * @return int
 **/
function ncurses_insstr($text) {}

/**
 * Reads a string from the terminal screen and returns the number of
 * characters read from the current character position until end of line.
 *
 * @param string
 * @return int
 **/
function ncurses_instr($buffer) {}

/**
 * Checks if ncurses is in endwin mode.
 *
 * @return bool
 **/
function ncurses_isendwin() {}

/**
 * @param int
 * @param bool
 * @return int
 **/
function ncurses_keyok($keycode, $enable) {}

/**
 * @param resource
 * @param bool
 * @return int
 **/
function ncurses_keypad($window, $bf) {}

/**
 * Returns the current line kill character.
 *
 * @return string
 **/
function ncurses_killchar() {}

/**
 * Returns a verbose description of the terminal.
 *
 * @return string
 **/
function ncurses_longname() {}

/**
 * @param resource
 * @param bool
 * @return int
 **/
function ncurses_meta($window, $_8bit) {}

/**
 * @param int
 * @param int
 * @param bool
 * @return bool
 **/
function ncurses_mouse_trafo($y, $x, $toscreen) {}

/**
 * @param int
 * @return int
 **/
function ncurses_mouseinterval($milliseconds) {}

/**
 * Sets mouse events to be reported. By default no mouse events will be
 * reported.
 *
 * @param int
 * @param int
 * @return int
 **/
function ncurses_mousemask($newmask, $oldmask) {}

/**
 * @param resource
 * @param int
 * @param int
 * @return int
 **/
function ncurses_move_panel($panel, $startx, $starty) {}

/**
 * @param int
 * @param int
 * @return int
 **/
function ncurses_move($y, $x) {}

/**
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function ncurses_mvaddch($y, $x, $c) {}

/**
 * @param int
 * @param int
 * @param string
 * @param int
 * @return int
 **/
function ncurses_mvaddchnstr($y, $x, $s, $n) {}

/**
 * @param int
 * @param int
 * @param string
 * @return int
 **/
function ncurses_mvaddchstr($y, $x, $s) {}

/**
 * @param int
 * @param int
 * @param string
 * @param int
 * @return int
 **/
function ncurses_mvaddnstr($y, $x, $s, $n) {}

/**
 * @param int
 * @param int
 * @param string
 * @return int
 **/
function ncurses_mvaddstr($y, $x, $s) {}

/**
 * @param int
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function ncurses_mvcur($old_y, $old_x, $new_y, $new_x) {}

/**
 * @param int
 * @param int
 * @return int
 **/
function ncurses_mvdelch($y, $x) {}

/**
 * @param int
 * @param int
 * @return int
 **/
function ncurses_mvgetch($y, $x) {}

/**
 * @param int
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function ncurses_mvhline($y, $x, $attrchar, $n) {}

/**
 * @param int
 * @param int
 * @return int
 **/
function ncurses_mvinch($y, $x) {}

/**
 * @param int
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function ncurses_mvvline($y, $x, $attrchar, $n) {}

/**
 * @param resource
 * @param int
 * @param int
 * @param string
 * @return int
 **/
function ncurses_mvwaddstr($window, $y, $x, $text) {}

/**
 * @param int
 * @return int
 **/
function ncurses_napms($milliseconds) {}

/**
 * @param resource
 * @return resource
 **/
function ncurses_new_panel($window) {}

/**
 * @param int
 * @param int
 * @return resource
 **/
function ncurses_newpad($rows, $cols) {}

/**
 * Creates a new window to draw elements in.
 *
 * @param int
 * @param int
 * @param int
 * @param int
 * @return resource
 **/
function ncurses_newwin($rows, $cols, $y, $x) {}

/**
 * @return bool
 **/
function ncurses_nl() {}

/**
 * Returns terminal to normal (cooked) mode. Initially the terminal may or
 * may not in cbreak mode as the mode is inherited. Therefore a program 
 * should call ncurses_cbreak and
 * ncurses_nocbreak explicitly.
 *
 * @return bool
 **/
function ncurses_nocbreak() {}

/**
 * Prevents echoing of user typed characters.
 *
 * @return bool
 **/
function ncurses_noecho() {}

/**
 * @return bool
 **/
function ncurses_nonl() {}

/**
 * @return void
 **/
function ncurses_noqiflush() {}

/**
 * Switches the terminal out of raw mode. Raw mode is similar to cbreak mode,
 * in that characters typed are immediately passed through to the user 
 * program. The differences that are that in raw mode, the interrupt, quit,
 * suspend and flow control characters are all passed through uninterpreted,
 * instead of generating a signal.
 *
 * @return bool
 **/
function ncurses_noraw() {}

/**
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function ncurses_pair_content($pair, $f, $b) {}

/**
 * @param resource
 * @return resource
 **/
function ncurses_panel_above($panel) {}

/**
 * @param resource
 * @return resource
 **/
function ncurses_panel_below($panel) {}

/**
 * @param resource
 * @return resource
 **/
function ncurses_panel_window($panel) {}

/**
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function ncurses_pnoutrefresh($pad, $pminrow, $pmincol, $sminrow, $smincol, $smaxrow, $smaxcol) {}

/**
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function ncurses_prefresh($pad, $pminrow, $pmincol, $sminrow, $smincol, $smaxrow, $smaxcol) {}

/**
 * @param string
 * @return int
 **/
function ncurses_putp($text) {}

/**
 * @return void
 **/
function ncurses_qiflush() {}

/**
 * Places the terminal in raw mode. Raw mode is similar to cbreak mode, in
 * that characters typed are immediately passed through to the user program.
 * The differences that are that in raw mode, the interrupt, quit, suspend 
 * and flow control characters are all passed through uninterpreted, instead
 * of generating a signal.
 *
 * @return bool
 **/
function ncurses_raw() {}

/**
 * @param int
 * @return int
 **/
function ncurses_refresh($ch) {}

/**
 * @param resource
 * @param resource
 * @return int
 **/
function ncurses_replace_panel($panel, $window) {}

/**
 * @return int
 **/
function ncurses_reset_prog_mode() {}

/**
 * @return int
 **/
function ncurses_reset_shell_mode() {}

/**
 * Restores the terminal state, which was previously saved by calling
 * ncurses_savetty.
 *
 * @return bool
 **/
function ncurses_resetty() {}

/**
 * Saves the current terminal state. The saved terminal state can be restored
 * with ncurses_resetty.
 *
 * @return bool
 **/
function ncurses_savetty() {}

/**
 * @param string
 * @return int
 **/
function ncurses_scr_dump($filename) {}

/**
 * @param string
 * @return int
 **/
function ncurses_scr_init($filename) {}

/**
 * @param string
 * @return int
 **/
function ncurses_scr_restore($filename) {}

/**
 * @param string
 * @return int
 **/
function ncurses_scr_set($filename) {}

/**
 * @param int
 * @return int
 **/
function ncurses_scrl($count) {}

/**
 * @param resource
 * @return int
 **/
function ncurses_show_panel($panel) {}

/**
 * Returns the current soft label key attribute.
 *
 * @return int
 **/
function ncurses_slk_attr() {}

/**
 * @param int
 * @return int
 **/
function ncurses_slk_attroff($intarg) {}

/**
 * @param int
 * @return int
 **/
function ncurses_slk_attron($intarg) {}

/**
 * @param int
 * @return int
 **/
function ncurses_slk_attrset($intarg) {}

/**
 * The function ncurses_slk_clear clears soft
 * label keys from screen.
 *
 * @return bool
 **/
function ncurses_slk_clear() {}

/**
 * @param int
 * @return int
 **/
function ncurses_slk_color($intarg) {}

/**
 * Initializes soft label key functions
 *
 * @param int
 * @return bool
 **/
function ncurses_slk_init($format) {}

/**
 * @return bool
 **/
function ncurses_slk_noutrefresh() {}

/**
 * Copies soft label keys from virtual screen to physical screen.
 *
 * @return int
 **/
function ncurses_slk_refresh() {}

/**
 * Restores the soft label keys after ncurses_slk_clear
 * has been performed.
 *
 * @return int
 **/
function ncurses_slk_restore() {}

/**
 * @param int
 * @param string
 * @param int
 * @return bool
 **/
function ncurses_slk_set($labelnr, $label, $format) {}

/**
 * Forces all the soft labels to be output the next time a
 * ncurses_slk_noutrefresh is performed.
 *
 * @return int
 **/
function ncurses_slk_touch() {}

/**
 * @return int
 **/
function ncurses_standend() {}

/**
 * @return int
 **/
function ncurses_standout() {}

/**
 * @return int
 **/
function ncurses_start_color() {}

/**
 * @return bool
 **/
function ncurses_termattrs() {}

/**
 * Returns terminals shortname.
 *
 * @return string
 **/
function ncurses_termname() {}

/**
 * @param int
 * @return void
 **/
function ncurses_timeout($millisec) {}

/**
 * @param resource
 * @return int
 **/
function ncurses_top_panel($panel) {}

/**
 * @param int
 * @return int
 **/
function ncurses_typeahead($fd) {}

/**
 * @param int
 * @return int
 **/
function ncurses_ungetch($keycode) {}

/**
 * Pushes a KEY_MOUSE event onto the unput queue and associates with this
 * event the given state sata and screen-relative character cell coordinates,
 * specified in mevent.
 *
 * @param array
 * @return bool
 **/
function ncurses_ungetmouse($mevent) {}

/**
 * @param bool
 * @return void
 **/
function ncurses_use_env($flag) {}

/**
 * @return void
 **/
function ncurses_update_panels() {}

/**
 * @return bool
 **/
function ncurses_use_default_colors() {}

/**
 * @param bool
 * @return int
 **/
function ncurses_use_extended_names($flag) {}

/**
 * @param int
 * @return int
 **/
function ncurses_vidattr($intarg) {}

/**
 * @param int
 * @param int
 * @return int
 **/
function ncurses_vline($charattr, $n) {}

/**
 * @param resource
 * @param int
 * @return int
 **/
function ncurses_waddch($window, $ch) {}

/**
 * @param resource
 * @param string
 * @param int
 * @return int
 **/
function ncurses_waddstr($window, $str, $n) {}

/**
 * @param resource
 * @param int
 * @return int
 **/
function ncurses_wattroff($window, $attrs) {}

/**
 * @param resource
 * @param int
 * @return int
 **/
function ncurses_wattron($window, $attrs) {}

/**
 * @param resource
 * @param int
 * @return int
 **/
function ncurses_wattrset($window, $attrs) {}

/**
 * Draws the specified lines and corners around the passed 
 * window.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function ncurses_wborder($window, $left, $right, $top, $bottom, $tl_corner, $tr_corner, $bl_corner, $br_corner) {}

/**
 * @param resource
 * @return int
 **/
function ncurses_wclear($window) {}

/**
 * @param resource
 * @param int
 * @return int
 **/
function ncurses_wcolor_set($window, $color_pair) {}

/**
 * @param resource
 * @return int
 **/
function ncurses_werase($window) {}

/**
 * @param resource
 * @return int
 **/
function ncurses_wgetch($window) {}

/**
 * @param resource
 * @param int
 * @param int
 * @return int
 **/
function ncurses_whline($window, $charattr, $n) {}

/**
 * @param resource
 * @param int
 * @param int
 * @param bool
 * @return bool
 **/
function ncurses_wmouse_trafo($window, $y, $x, $toscreen) {}

/**
 * @param resource
 * @param int
 * @param int
 * @return int
 **/
function ncurses_wmove($window, $y, $x) {}

/**
 * @param resource
 * @return int
 **/
function ncurses_wnoutrefresh($window) {}

/**
 * @param resource
 * @return int
 **/
function ncurses_wrefresh($window) {}

/**
 * @param resource
 * @return int
 **/
function ncurses_wstandend($window) {}

/**
 * @param resource
 * @return int
 **/
function ncurses_wstandout($window) {}

/**
 * @param resource
 * @param int
 * @param int
 * @return int
 **/
function ncurses_wvline($window, $charattr, $n) {}

/**
 * gopher_parsedir parses a gopher formatted directory
 * entry into an associative array.
 *
 * @param string
 * @return array
 **/
function gopher_parsedir($dirent) {}

/**
 * Searches DNS for records of type type
 * corresponding to host.
 *
 * @param string
 * @param string
 * @return bool
 **/
function checkdnsrr($host, $type) {}

/**
 * closelog closes the descriptor being used to write to
 * the system logger. The use of closelog is optional.
 *
 * @return bool
 **/
function closelog() {}

/**
 * Initializes all constants used in the syslog functions.
 *
 * @return void
 **/
function define_syslog_variables() {}

/**
 * Fetch DNS Resource Records associated with the given
 * hostname.
 *
 * @param string
 * @param int
 * @return array
 **/
function dns_get_record($hostname, $type) {}

/**
 * Initiates a socket connection to the resource specified by
 * hostname.
 *
 * @param string
 * @param int
 * @param int
 * @param string
 * @param float
 * @return resource
 **/
function fsockopen($hostname, $port, $errno, $errstr, $timeout) {}

/**
 * Returns the host name of the Internet host specified by
 * ip_address.
 *
 * @param string
 * @return string
 **/
function gethostbyaddr($ip_address) {}

/**
 * Returns the IP address of the Internet host specified by
 * hostname.
 *
 * @param string
 * @return string
 **/
function gethostbyname($hostname) {}

/**
 * Returns a list of IP addresses to which the Internet host
 * specified by hostname resolves.
 *
 * @param string
 * @return array
 **/
function gethostbynamel($hostname) {}

/**
 * Searches DNS for MX records corresponding to 
 * hostname.
 *
 * @param string
 * @param array
 * @param array
 * @return bool
 **/
function getmxrr($hostname, $mxhosts, $weight) {}

/**
 * getprotobyname returns the protocol number
 * associated with the protocol name as per
 * /etc/protocols.
 *
 * @param string
 * @return int
 **/
function getprotobyname($name) {}

/**
 * getprotobynumber returns the protocol name
 * associated with protocol number as per
 * /etc/protocols.
 *
 * @param int
 * @return string
 **/
function getprotobynumber($number) {}

/**
 * getservbyname returns the Internet port
 * which corresponds to service for the
 * specified protocol as per
 * /etc/services.
 *
 * @param string
 * @param string
 * @return int
 **/
function getservbyname($service, $protocol) {}

/**
 * getservbyport returns the Internet service
 * associated with port for the specified
 * protocol as per /etc/services.
 *
 * @param int
 * @param string
 * @return string
 **/
function getservbyport($port, $protocol) {}

/**
 * header is used to send a raw HTTP
 * header. See the HTTP/1.1 specification
 * for more information on HTTP headers.
 *
 * @param string
 * @param bool
 * @param int
 * @return void
 **/
function header($string, $replace, $http_response_code) {}

/**
 * headers_list will return a list of headers to be sent
 * to the browser / client. To determine whether or not these headers have
 * been sent yet, use headers_sent.
 *
 * @return array
 **/
function headers_list() {}

/**
 * Checks if or where headers have been sent.
 *
 * @param string
 * @param int
 * @return bool
 **/
function headers_sent($file, $line) {}

/**
 * @param string
 * @return string
 **/
function inet_ntop($in_addr) {}

/**
 * This function converts a human readable IPv4 or IPv6 address (if PHP
 * was built with IPv6 support enabled) into an address family appropriate
 * 32bit or 128bit binary structure.
 *
 * @param string
 * @return string
 **/
function inet_pton($address) {}

/**
 * The function ip2long generates an IPv4 Internet
 * network address from its Internet standard format (dotted string)
 * representation.
 *
 * @param string
 * @return int
 **/
function ip2long($ip_address) {}

/**
 * The function long2ip generates an Internet address
 * in dotted format (i.e.: aaa.bbb.ccc.ddd) from the proper address
 * representation.
 *
 * @param int
 * @return string
 **/
function long2ip($proper_address) {}

/**
 * openlog opens a connection to the system
 * logger for a program.
 *
 * @param string
 * @param int
 * @param int
 * @return bool
 **/
function openlog($ident, $option, $facility) {}

/**
 * This function behaves exactly as fsockopen with the
 * difference that the connection is not closed after the script finishes.
 * It is the persistent version of fsockopen.
 *
 * @param string
 * @param int
 * @param int
 * @param string
 * @param float
 * @return resource
 **/
function pfsockopen($hostname, $port, $errno, $errstr, $timeout) {}

/**
 * setcookie defines a cookie to be sent along with the
 * rest of the HTTP headers. Like other headers, cookies must be sent
 * before any output from your script (this is a
 * protocol restriction). This requires that you place calls to this function
 * prior to any output, including html and
 * head tags as well as any whitespace.
 *
 * @param string
 * @param string
 * @param int
 * @param string
 * @param string
 * @param bool
 * @param bool
 * @return bool
 **/
function setcookie($name, $value, $expire, $path, $domain, $secure, $httponly) {}

/**
 * setrawcookie is exactly the same as
 * setcookie except that the cookie value will not be
 * automatically urlencoded when sent to the browser.
 *
 * @param string
 * @param string
 * @param int
 * @param string
 * @param string
 * @param bool
 * @param bool
 * @return bool
 **/
function setrawcookie($name, $value, $expire, $path, $domain, $secure, $httponly) {}

/**
 * syslog generates a log message that will be
 * distributed by the system logger.
 *
 * @param int
 * @param string
 * @return bool
 **/
function syslog($priority, $message) {}

/**
 * This function sends a beep to the terminal.
 *
 * @return void
 **/
function newt_bell() {}

/**
 * This function returns a grid containing the buttons created.
 *
 * @param array
 * @return resource
 **/
function newt_button_bar($buttons) {}

/**
 * Creates a new button.
 *
 * @param int
 * @param int
 * @param string
 * @return resource
 **/
function newt_button($left, $top, $text) {}

/**
 * Open a centered window of the specified size.
 *
 * @param int
 * @param int
 * @param string
 * @return int
 **/
function newt_centered_window($width, $height, $title) {}

/**
 * This function returns the character in the sequence which indicates the current value
 * of the checkbox.
 *
 * @param resource
 * @return string
 **/
function newt_checkbox_get_value($checkbox) {}

/**
 * This function allows to set various flags on checkbox resource.
 *
 * @param resource
 * @param int
 * @param int
 * @return void
 **/
function newt_checkbox_set_flags($checkbox, $flags, $sense) {}

/**
 * This function allows to set the current value of the checkbox resource.
 *
 * @param resource
 * @param string
 * @return void
 **/
function newt_checkbox_set_value($checkbox, $value) {}

/**
 * This function allows to add new item to the checkbox tree.
 *
 * @param resource
 * @param string
 * @param mixed
 * @param int
 * @param int
 * @return void
 **/
function newt_checkbox_tree_add_item($checkboxtree, $text, $data, $flags, $index) {}

/**
 * Finds an item in the checkbox tree by item's data.
 *
 * @param resource
 * @param mixed
 * @return array
 **/
function newt_checkbox_tree_find_item($checkboxtree, $data) {}

/**
 * This method returns checkbox tree selected tem.
 *
 * @param resource
 * @return mixed
 **/
function newt_checkbox_tree_get_current($checkboxtree) {}

/**
 * @param resource
 * @param mixed
 * @return string
 **/
function newt_checkbox_tree_get_entry_value($checkboxtree, $data) {}

/**
 * @param resource
 * @param string
 * @return array
 **/
function newt_checkbox_tree_get_multi_selection($checkboxtree, $seqnum) {}

/**
 * @param resource
 * @return array
 **/
function newt_checkbox_tree_get_selection($checkboxtree) {}

/**
 * @param int
 * @param int
 * @param int
 * @param string
 * @param int
 * @return resource
 **/
function newt_checkbox_tree_multi($left, $top, $height, $seq, $flags) {}

/**
 * @param resource
 * @param mixed
 * @return void
 **/
function newt_checkbox_tree_set_current($checkboxtree, $data) {}

/**
 * @param resource
 * @param mixed
 * @param string
 * @return void
 **/
function newt_checkbox_tree_set_entry_value($checkboxtree, $data, $value) {}

/**
 * @param resource
 * @param mixed
 * @param string
 * @return void
 **/
function newt_checkbox_tree_set_entry($checkboxtree, $data, $text) {}

/**
 * @param resource
 * @param int
 * @return void
 **/
function newt_checkbox_tree_set_width($checkbox_tree, $width) {}

/**
 * @param int
 * @param int
 * @param int
 * @param int
 * @return resource
 **/
function newt_checkbox_tree($left, $top, $height, $flags) {}

/**
 * @param int
 * @param int
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function newt_checkbox($left, $top, $text, $def_value, $seq) {}

/**
 * Discards the contents of the terminal's input buffer without waiting for
 * additional input.
 *
 * @return void
 **/
function newt_clear_key_buffer() {}

/**
 * @return void
 **/
function newt_cls() {}

/**
 * @param int
 * @param int
 * @param string
 * @return resource
 **/
function newt_compact_button($left, $top, $text) {}

/**
 * @param resource
 * @param mixed
 * @param mixed
 * @return void
 **/
function newt_component_add_callback($component, $func_name, $data) {}

/**
 * @param resource
 * @param bool
 * @return void
 **/
function newt_component_takes_focus($component, $takes_focus) {}

/**
 * @param int
 * @param int
 * @return resource
 **/
function newt_create_grid($cols, $rows) {}

/**
 * @return void
 **/
function newt_cursor_off() {}

/**
 * @return void
 **/
function newt_cursor_on() {}

/**
 * @param int
 * @return void
 **/
function newt_delay($microseconds) {}

/**
 * @param resource
 * @return void
 **/
function newt_draw_form($form) {}

/**
 * Displays the string text at the position indicated.
 *
 * @param int
 * @param int
 * @param string
 * @return void
 **/
function newt_draw_root_text($left, $top, $text) {}

/**
 * @param resource
 * @return string
 **/
function newt_entry_get_value($entry) {}

/**
 * @param resource
 * @param callback
 * @param mixed
 * @return void
 **/
function newt_entry_set_filter($entry, $filter, $data) {}

/**
 * @param resource
 * @param int
 * @param int
 * @return void
 **/
function newt_entry_set_flags($entry, $flags, $sense) {}

/**
 * @param resource
 * @param string
 * @param bool
 * @return void
 **/
function newt_entry_set($entry, $value, $cursor_at_end) {}

/**
 * @param int
 * @param int
 * @param int
 * @param string
 * @param int
 * @return resource
 **/
function newt_entry($left, $top, $width, $init_value, $flags) {}

/**
 * Uninitializes newt interface. This function be called, when program is ready
 * to exit.
 *
 * @return int
 **/
function newt_finished() {}

/**
 * Adds a single component to the form.
 *
 * @param resource
 * @param resource
 * @return void
 **/
function newt_form_add_component($form, $component) {}

/**
 * Adds several components to the form.
 *
 * @param resource
 * @param array
 * @return void
 **/
function newt_form_add_components($form, $components) {}

/**
 * @param resource
 * @param int
 * @return void
 **/
function newt_form_add_hot_key($form, $key) {}

/**
 * This function frees the memory resources used by the form and all of the
 * components which have been added to the form (including those components
 * which are on subforms). Once a form has been destroyed, none of the form's
 * components can be used.
 *
 * @param resource
 * @return void
 **/
function newt_form_destroy($form) {}

/**
 * @param resource
 * @return resource
 **/
function newt_form_get_current($form) {}

/**
 * This function runs the form passed to it.
 *
 * @param resource
 * @param array
 * @return void
 **/
function newt_form_run($form, $exit_struct) {}

/**
 * @param resource
 * @param int
 * @return void
 **/
function newt_form_set_background($from, $background) {}

/**
 * @param resource
 * @param int
 * @return void
 **/
function newt_form_set_height($form, $height) {}

/**
 * @param resource
 * @return void
 **/
function newt_form_set_size($form) {}

/**
 * @param resource
 * @param int
 * @return void
 **/
function newt_form_set_timer($form, $milliseconds) {}

/**
 * @param resource
 * @param int
 * @return void
 **/
function newt_form_set_width($form, $width) {}

/**
 * @param resource
 * @param resource
 * @param int
 * @return void
 **/
function newt_form_watch_fd($form, $stream, $flags) {}

/**
 * Create a new form.
 *
 * @param resource
 * @param string
 * @param int
 * @return resource
 **/
function newt_form($vert_bar, $help, $flags) {}

/**
 * Fills in the passed references with the current size of the terminal.
 *
 * @param int
 * @param int
 * @return void
 **/
function newt_get_screen_size($cols, $rows) {}

/**
 * @param resource
 * @param resource
 * @param bool
 * @return void
 **/
function newt_grid_add_components_to_form($grid, $form, $recurse) {}

/**
 * @param resource
 * @param resource
 * @param resource
 * @return resource
 **/
function newt_grid_basic_window($text, $middle, $buttons) {}

/**
 * @param resource
 * @param bool
 * @return void
 **/
function newt_grid_free($grid, $recurse) {}

/**
 * @param resouce
 * @param int
 * @param int
 * @return void
 **/
function newt_grid_get_size($grid, $width, $height) {}

/**
 * @param int
 * @param resource
 * @return resource
 **/
function newt_grid_h_close_stacked($element1_type, $element1) {}

/**
 * @param int
 * @param resource
 * @return resource
 **/
function newt_grid_h_stacked($element1_type, $element1) {}

/**
 * @param resource
 * @param int
 * @param int
 * @return void
 **/
function newt_grid_place($grid, $left, $top) {}

/**
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return void
 **/
function newt_grid_set_field($grid, $col, $row, $type, $val, $pad_left, $pad_top, $pad_right, $pad_bottom, $anchor, $flags) {}

/**
 * @param resource
 * @param resource
 * @param resource
 * @return resource
 **/
function newt_grid_simple_window($text, $middle, $buttons) {}

/**
 * @param int
 * @param resource
 * @return resource
 **/
function newt_grid_v_close_stacked($element1_type, $element1) {}

/**
 * @param int
 * @param resource
 * @return resource
 **/
function newt_grid_v_stacked($element1_type, $element1) {}

/**
 * @param resource
 * @param string
 * @param int
 * @param int
 * @return void
 **/
function newt_grid_wrapped_window_at($grid, $title, $left, $top) {}

/**
 * @param resource
 * @param string
 * @return void
 **/
function newt_grid_wrapped_window($grid, $title) {}

/**
 * Initializes the newt interface. This function must be called before any other newt function.
 *
 * @return int
 **/
function newt_init() {}

/**
 * @param resource
 * @param string
 * @return void
 **/
function newt_label_set_text($label, $text) {}

/**
 * @param int
 * @param int
 * @param string
 * @return resource
 **/
function newt_label($left, $top, $text) {}

/**
 * @param resource
 * @param string
 * @param mixed
 * @return void
 **/
function newt_listbox_append_entry($listbox, $text, $data) {}

/**
 * @param resource
 * @return void
 **/
function newt_listbox_clear_selection($listbox) {}

/**
 * @param resource
 * @return void
 **/
function newt_listbox_clear($listobx) {}

/**
 * @param resource
 * @param mixed
 * @return void
 **/
function newt_listbox_delete_entry($listbox, $key) {}

/**
 * @param resource
 * @return string
 **/
function newt_listbox_get_current($listbox) {}

/**
 * @param resource
 * @return array
 **/
function newt_listbox_get_selection($listbox) {}

/**
 * @param resource
 * @param string
 * @param mixed
 * @param mixed
 * @return void
 **/
function newt_listbox_insert_entry($listbox, $text, $data, $key) {}

/**
 * @param resource
 * @return int
 **/
function newt_listbox_item_count($listbox) {}

/**
 * @param resource
 * @param mixed
 * @param int
 * @return void
 **/
function newt_listbox_select_item($listbox, $key, $sense) {}

/**
 * @param resource
 * @param mixed
 * @return void
 **/
function newt_listbox_set_current_by_key($listbox, $key) {}

/**
 * @param resource
 * @param int
 * @return void
 **/
function newt_listbox_set_current($listbox, $num) {}

/**
 * @param resource
 * @param int
 * @param mixed
 * @return void
 **/
function newt_listbox_set_data($listbox, $num, $data) {}

/**
 * @param resource
 * @param int
 * @param string
 * @return void
 **/
function newt_listbox_set_entry($listbox, $num, $text) {}

/**
 * @param resource
 * @param int
 * @return void
 **/
function newt_listbox_set_width($listbox, $width) {}

/**
 * @param int
 * @param int
 * @param int
 * @param int
 * @return resource
 **/
function newt_listbox($left, $top, $height, $flags) {}

/**
 * @param resource
 * @return mixed
 **/
function newt_listitem_get_data($item) {}

/**
 * @param resource
 * @param string
 * @return void
 **/
function newt_listitem_set($item, $text) {}

/**
 * @param int
 * @param int
 * @param string
 * @param bool
 * @param resouce
 * @param mixed
 * @param int
 * @return resource
 **/
function newt_listitem($left, $top, $text, $is_default, $prev_item, $data, $flags) {}

/**
 * Open a window of the specified size and position.
 *
 * @param int
 * @param int
 * @param int
 * @param int
 * @param string
 * @return int
 **/
function newt_open_window($left, $top, $width, $height, $title) {}

/**
 * Replaces the current help line with the one from the stack.
 *
 * @return void
 **/
function newt_pop_help_line() {}

/**
 * Removes the top window from the display, and redraws the display areas
 * which the window overwrote.
 *
 * @return void
 **/
function newt_pop_window() {}

/**
 * Saves the current help line on a stack, and displays the new line.
 *
 * @param string
 * @return void
 **/
function newt_push_help_line($text) {}

/**
 * @param resource
 * @return resource
 **/
function newt_radio_get_current($set_member) {}

/**
 * @param int
 * @param int
 * @param string
 * @param bool
 * @param resource
 * @return resource
 **/
function newt_radiobutton($left, $top, $text, $is_default, $prev_button) {}

/**
 * @return void
 **/
function newt_redraw_help_line() {}

/**
 * @param string
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return string
 **/
function newt_reflow_text($text, $width, $flex_down, $flex_up, $actual_width, $actual_height) {}

/**
 * To increase performance, newt only updates the display when it needs to,
 * not when the program tells it to write to the terminal. Applications can
 * force newt to immediately update modified portions of the screen by calling
 * this function.
 *
 * @return void
 **/
function newt_refresh() {}

/**
 * @param bool
 * @return void
 **/
function newt_resize_screen($redraw) {}

/**
 * Resume using the newt interface after calling
 * newt_suspend.
 *
 * @return void
 **/
function newt_resume() {}

/**
 * This function runs the form passed to it.
 *
 * @param resource
 * @return resource
 **/
function newt_run_form($form) {}

/**
 * @param resource
 * @param int
 * @return void
 **/
function newt_scale_set($scale, $amount) {}

/**
 * @param int
 * @param int
 * @param int
 * @param int
 * @return resource
 **/
function newt_scale($left, $top, $width, $full_value) {}

/**
 * @param resource
 * @param int
 * @param int
 * @return void
 **/
function newt_scrollbar_set($scrollbar, $where, $total) {}

/**
 * @param mixed
 * @return void
 **/
function newt_set_help_callback($function) {}

/**
 * Set a callback function which gets invoked when user presses the suspend
 * key (normally ^Z). If no suspend callback is registered, the suspend
 * keystroke is ignored.
 *
 * @param callback
 * @param mixed
 * @return void
 **/
function newt_set_suspend_callback($function, $data) {}

/**
 * Tells newt to return the terminal to its initial state. Once this is
 * done, the application can suspend itself (by sending itself a SIGTSTP, fork
 * a child program, or do whatever else it likes).
 *
 * @return void
 **/
function newt_suspend() {}

/**
 * @param resource
 * @return int
 **/
function newt_textbox_get_num_lines($textbox) {}

/**
 * @param int
 * @param int
 * @param char
 * @param int
 * @param int
 * @param int
 * @param int
 * @return resource
 **/
function newt_textbox_reflowed($left, $top, $text, $width, $flex_down, $flex_up, $flags) {}

/**
 * @param resource
 * @param int
 * @return void
 **/
function newt_textbox_set_height($textbox, $height) {}

/**
 * @param resource
 * @param string
 * @return void
 **/
function newt_textbox_set_text($textbox, $text) {}

/**
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return resource
 **/
function newt_textbox($left, $top, $width, $height, $flags) {}

/**
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return resource
 **/
function newt_vertical_scrollbar($left, $top, $height, $normal_colorset, $thumb_colorset) {}

/**
 * This function doesn't return until a key has been pressed. The keystroke
 * is then ignored. If a key is already in the terminal's buffer, this
 * function discards a keystroke and returns immediately.
 *
 * @return void
 **/
function newt_wait_for_key() {}

/**
 * @param string
 * @param string
 * @param string
 * @param string
 * @param mixed
 * @return int
 **/
function newt_win_choice($title, $button1_text, $button2_text, $format, $args) {}

/**
 * @param string
 * @param string
 * @param int
 * @param int
 * @param int
 * @param int
 * @param array
 * @param string
 * @return int
 **/
function newt_win_entries($title, $text, $suggested_width, $flex_down, $flex_up, $data_width, $items, $button1) {}

/**
 * @param string
 * @param string
 * @param int
 * @param int
 * @param int
 * @param int
 * @param array
 * @param int
 * @param string
 * @return int
 **/
function newt_win_menu($title, $text, $suggestedWidth, $flexDown, $flexUp, $maxListHeight, $items, $listItem, $button1) {}

/**
 * @param string
 * @param string
 * @param string
 * @param mixed
 * @return void
 **/
function newt_win_message($title, $button_text, $format, $args) {}

/**
 * @param string
 * @param string
 * @param string
 * @param array
 * @return void
 **/
function newt_win_messagev($title, $button_text, $format, $args) {}

/**
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string
 * @param mixed
 * @return int
 **/
function newt_win_ternary($title, $button1_text, $button2_text, $button3_text, $format, $args) {}

/**
 * @param string
 * @param string
 * @param string
 * @return void
 **/
function yp_all($domain, $map, $callback) {}

/**
 * Returns all map entries.
 *
 * @param string
 * @param string
 * @return array
 **/
function yp_cat($domain, $map) {}

/**
 * Returns the error message associated with the given error code.
 * Useful to indicate what exactly went wrong.
 *
 * @param int
 * @return string
 **/
function yp_err_string($errorcode) {}

/**
 * Returns the error code of the previous operation.
 *
 * @return int
 **/
function yp_errno() {}

/**
 * Gets the first key-value pair from the named map
 * in the named domain.
 *
 * @param string
 * @param string
 * @return array
 **/
function yp_first($domain, $map) {}

/**
 * Returns the default domain of the node. Can be used as the domain
 * parameter for successive NIS calls.
 *
 * @return string
 **/
function yp_get_default_domain() {}

/**
 * Returns the machine name of the master NIS server for a
 * map.
 *
 * @param string
 * @param string
 * @return string
 **/
function yp_master($domain, $map) {}

/**
 * Returns the value associated with the passed key
 * out of the specified map.
 *
 * @param string
 * @param string
 * @param string
 * @return string
 **/
function yp_match($domain, $map, $key) {}

/**
 * Returns the next key-value pair in the named map
 * after the specified key.
 *
 * @param string
 * @param string
 * @param string
 * @return array
 **/
function yp_next($domain, $map, $key) {}

/**
 * Gets the order number for a map.
 *
 * @param string
 * @param string
 * @return int
 **/
function yp_order($domain, $map) {}

/**
 * @param string
 * @param string
 * @param int
 * @return array
 **/
function notes_body($server, $mailbox, $msg_number) {}

/**
 * @param string
 * @param string
 * @return bool
 **/
function notes_copy_db($from_database_name, $to_database_name) {}

/**
 * @param string
 * @return bool
 **/
function notes_create_db($database_name) {}

/**
 * @param string
 * @param string
 * @return bool
 **/
function notes_create_note($database_name, $form_name) {}

/**
 * @param string
 * @return bool
 **/
function notes_drop_db($database_name) {}

/**
 * @param string
 * @param string
 * @param string
 * @return int
 **/
function notes_find_note($database_name, $name, $type) {}

/**
 * @param string
 * @param string
 * @param int
 * @return object
 **/
function notes_header_info($server, $mailbox, $msg_number) {}

/**
 * @param string
 * @return bool
 **/
function notes_list_msgs($db) {}

/**
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function notes_mark_read($database_name, $user_name, $note_id) {}

/**
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function notes_mark_unread($database_name, $user_name, $note_id) {}

/**
 * @param string
 * @param string
 * @return bool
 **/
function notes_nav_create($database_name, $name) {}

/**
 * @param string
 * @param string
 * @return array
 **/
function notes_search($database_name, $keywords) {}

/**
 * @param string
 * @param string
 * @return array
 **/
function notes_unread($database_name, $user_name) {}

/**
 * @param string
 * @return float
 **/
function notes_version($database_name) {}

/**
 * nsapi_request_headers gets all the HTTP headers in
 * the current request. This is only supported when PHP runs as a 
 * NSAPI module.
 *
 * @return array
 **/
function nsapi_request_headers() {}

/**
 * Gets all the NSAPI response headers.
 *
 * @return array
 **/
function nsapi_response_headers() {}

/**
 * nsapi_virtual is an NSAPI-specific function which
 * is equivalent to !--#include virtual...-- in SSI
 * (.shtml files). It does an NSAPI sub-request.
 * It is useful for including CGI scripts or .shtml files, or anything
 * else that you'd parse through webserver.
 *
 * @param string
 * @return bool
 **/
function nsapi_virtual($uri) {}

/**
 * Gets the aggregation information for the given
 * object.
 *
 * @param object
 * @return array
 **/
function aggregate_info($object) {}

/**
 * Aggregates methods from a class to an existing object using a list of
 * method names.
 *
 * @param object
 * @param string
 * @param array
 * @param bool
 * @return void
 **/
function aggregate_methods_by_list($object, $class_name, $methods_list, $exclude) {}

/**
 * Aggregates methods from a class to an existing object using a regular
 * expression to match method names.
 *
 * @param object
 * @param string
 * @param string
 * @param bool
 * @return void
 **/
function aggregate_methods_by_regexp($object, $class_name, $regexp, $exclude) {}

/**
 * Aggregates all methods defined in a class to an existing object, except
 * for the class constructor, or methods whose names start with an underscore
 * character (_) which are considered private to the aggregated class.
 *
 * @param object
 * @param string
 * @return void
 **/
function aggregate_methods($object, $class_name) {}

/**
 * Aggregates properties from a class to an existing object using a list of
 * property names.
 *
 * @param object
 * @param string
 * @param array
 * @param bool
 * @return void
 **/
function aggregate_properties_by_list($object, $class_name, $properties_list, $exclude) {}

/**
 * Aggregates properties from a class to an existing object using a regular
 * expression to match their names.
 *
 * @param object
 * @param string
 * @param string
 * @param bool
 * @return void
 **/
function aggregate_properties_by_regexp($object, $class_name, $regexp, $exclude) {}

/**
 * Aggregates all properties defined in a class to an existing object, except
 * for properties whose names start with an underscore character (_) which
 * are considered private to the aggregated class.
 *
 * @param object
 * @param string
 * @return void
 **/
function aggregate_properties($object, $class_name) {}

/**
 * Aggregates methods and properties defined in a class to an existing
 * object. Methods and properties with names starting with an underscore
 * character (_) are considered private to the aggregated class and are not
 * used, constructors are also excluded from the aggregation procedure.
 *
 * @param object
 * @param string
 * @return void
 **/
function aggregate($object, $class_name) {}

/**
 * Removes the methods and properties from classes that were aggregated to
 * an object.
 *
 * @param object
 * @param string
 * @return void
 **/
function deaggregate($object, $class_name) {}

/**
 * Binds the PHP array var_array to the Oracle
 * placeholder name, which points to Oracle PL/SQL
 * array. Whether it will be used for input or output will be determined at
 * run-time.
 *
 * @param resource
 * @param string
 * @param array
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function oci_bind_array_by_name($statement, $name, $var_array, $max_table_length, $max_item_length, $type) {}

/**
 * Binds the PHP variable variable to the Oracle
 * placeholder ph_name. Whether it will be used for
 * input or output will be determined at run-time and the necessary
 * storage space will be allocated.
 *
 * @param resource
 * @param string
 * @param mixed
 * @param int
 * @param int
 * @return bool
 **/
function oci_bind_by_name($statement, $ph_name, $variable, $maxlength, $type) {}

/**
 * Invalidates a cursor, freeing all associated resources and cancels the
 * ability to read from it.
 *
 * @param resource
 * @return bool
 **/
function oci_cancel($statement) {}

/**
 * Closes the Oracle connection.
 *
 * @param resource
 * @return bool
 **/
function oci_close($connection) {}

/**
 * Commits all outstanding statements for the active transaction on the
 * Oracle connection.
 *
 * @param resource
 * @return bool
 **/
function oci_commit($connection) {}

/**
 * Returns a connection identifier needed for most other OCI calls.
 *
 * @param string
 * @param string
 * @param string
 * @param string
 * @param int
 * @return resource
 **/
function oci_connect($username, $password, $db, $charset, $session_mode) {}

/**
 * Defines PHP variables for fetches of SQL-Columns.
 *
 * @param resource
 * @param string
 * @param mixed
 * @param int
 * @return bool
 **/
function oci_define_by_name($statement, $column_name, $variable, $type) {}

/**
 * Returns the last error found.
 *
 * @param resource
 * @return array
 **/
function oci_error($source) {}

/**
 * Executes a previously parsed statement.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function oci_execute($statement, $mode) {}

/**
 * Fetches all the rows from a result into a user-defined array.
 *
 * @param resource
 * @param array
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function oci_fetch_all($statement, $output, $skip, $maxrows, $flags) {}

/**
 * Returns an array, which corresponds to the next result row.
 *
 * @param resource
 * @param int
 * @return array
 **/
function oci_fetch_array($statement, $mode) {}

/**
 * Returns the next row from the result data as an associative array.
 *
 * @param resource
 * @return array
 **/
function oci_fetch_assoc($statement) {}

/**
 * Returns the next row from the result data as an object.
 *
 * @param resource
 * @return object
 **/
function oci_fetch_object($statement) {}

/**
 * Returns the next row from the result data as an indexed array.
 *
 * @param resource
 * @return array
 **/
function oci_fetch_row($statement) {}

/**
 * Fetches the next row (for SELECT statements) into the internal
 * result-buffer.
 *
 * @param resource
 * @return bool
 **/
function oci_fetch($statement) {}

/**
 * Checks if the given field from the 
 * statement is .
 *
 * @param resource
 * @param mixed
 * @return bool
 **/
function oci_field_is_null($statement, $field) {}

/**
 * Returns the name of the field.
 *
 * @param resource
 * @param int
 * @return string
 **/
function oci_field_name($statement, $field) {}

/**
 * Returns precision of the field.
 *
 * @param resource
 * @param int
 * @return int
 **/
function oci_field_precision($statement, $field) {}

/**
 * Returns the scale of the column with field index.
 *
 * @param resource
 * @param int
 * @return int
 **/
function oci_field_scale($statement, $field) {}

/**
 * Returns the size of a field.
 *
 * @param resource
 * @param mixed
 * @return int
 **/
function oci_field_size($statement, $field) {}

/**
 * Returns Oracle's raw data type of the field.
 *
 * @param resource
 * @param int
 * @return int
 **/
function oci_field_type_raw($statement, $field) {}

/**
 * Returns a field's data type.
 *
 * @param resource
 * @param int
 * @return mixed
 **/
function oci_field_type($statement, $field) {}

/**
 * Frees resources associated with Oracle's cursor or statement, which was
 * received from as a result of oci_parse or obtained
 * from Oracle.
 *
 * @param resource
 * @return bool
 **/
function oci_free_statement($statement) {}

/**
 * Enables or disables internal debug output.
 *
 * @param bool
 * @return void
 **/
function oci_internal_debug($onoff) {}

/**
 * Copies a large object or a part of a large object to another large object.
 * Old LOB-recipient data will be overwritten.
 *
 * @param OCI-Lob
 * @param OCI-Lob
 * @param int
 * @return bool
 **/
function oci_lob_copy($lob_to, $lob_from, $length) {}

/**
 * Compares two LOB/FILE locators.
 *
 * @param OCI-Lob
 * @param OCI-Lob
 * @return bool
 **/
function oci_lob_is_equal($lob1, $lob2) {}

/**
 * Allocates a new collection object.
 *
 * @param resource
 * @param string
 * @param string
 * @return OCI-Collection
 **/
function oci_new_collection($connection, $tdo, $schema) {}

/**
 * Establishes a new connection to an Oracle server and logs on.
 *
 * @param string
 * @param string
 * @param string
 * @param string
 * @param int
 * @return resource
 **/
function oci_new_connect($username, $password, $db, $charset, $session_mode) {}

/**
 * Allocates a new statement handle on the specified connection.
 *
 * @param resource
 * @return resource
 **/
function oci_new_cursor($connection) {}

/**
 * Allocates resources to hold descriptor or LOB locator.
 *
 * @param resource
 * @param int
 * @return OCI-Lob
 **/
function oci_new_descriptor($connection, $type) {}

/**
 * Gets the number of columns in the given statement.
 *
 * @param resource
 * @return int
 **/
function oci_num_fields($statement) {}

/**
 * Gets the number of rows affected during statement execution.
 *
 * @param resource
 * @return int
 **/
function oci_num_rows($statement) {}

/**
 * Prepares the queryusing
 * connection and returns the statement identifier,
 * which can be used with oci_bind_by_name, 
 * oci_execute and other functions.
 *
 * @param resource
 * @param string
 * @return resource
 **/
function oci_parse($connection, $query) {}

/**
 * Changes password for user with username.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function oci_password_change($connection, $username, $old_password, $new_password) {}

/**
 * Creates a persistent connection to an Oracle server and logs on.
 *
 * @param string
 * @param string
 * @param string
 * @param string
 * @param int
 * @return resource
 **/
function oci_pconnect($username, $password, $db, $charset, $session_mode) {}

/**
 * Returns the data from field in the current row,
 * fetched by oci_fetch.
 *
 * @param resource
 * @param mixed
 * @return mixed
 **/
function oci_result($statement, $field) {}

/**
 * Rolls back all outstanding statements for the Oracle 
 * connection.
 *
 * @param resource
 * @return bool
 **/
function oci_rollback($connection) {}

/**
 * Returns a string with version information of the Oracle server, which uses
 * the provided connection.
 *
 * @param resource
 * @return string
 **/
function oci_server_version($connection) {}

/**
 * Sets the number of rows to be prefetched after successful call to
 * oci_execute.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function oci_set_prefetch($statement, $rows) {}

/**
 * Returns the type of the provided OCI statement.
 *
 * @param resource
 * @return string
 **/
function oci_statement_type($statement) {}

/**
 * This function is deprecated. Recommended alternatives:
 * oci_fetch_array, oci_fetch_object,
 * oci_fetch_assoc and
 * oci_fetch_row.
 *
 * @param resource
 * @param array
 * @param int
 * @return int
 **/
function ocifetchinto($statement, $result, $mode) {}

/**
 * @return resource
 **/
function openal_buffer_create() {}

/**
 * @param resource
 * @param int
 * @param string
 * @param int
 * @return bool
 **/
function openal_buffer_data($buffer, $format, $data, $freq) {}

/**
 * @param resource
 * @return bool
 **/
function openal_buffer_destroy($buffer) {}

/**
 * @param resource
 * @param int
 * @return int
 **/
function openal_buffer_get($buffer, $property) {}

/**
 * @param resource
 * @param string
 * @return bool
 **/
function openal_buffer_loadwav($buffer, $wavfile) {}

/**
 * @param resource
 * @return resource
 **/
function openal_context_create($device) {}

/**
 * @param resource
 * @return bool
 **/
function openal_context_current($context) {}

/**
 * @param resource
 * @return bool
 **/
function openal_context_destroy($context) {}

/**
 * @param resource
 * @return bool
 **/
function openal_context_process($context) {}

/**
 * @param resource
 * @return bool
 **/
function openal_context_suspend($context) {}

/**
 * @param resource
 * @return bool
 **/
function openal_device_close($device) {}

/**
 * @param string
 * @return resource
 **/
function openal_device_open($device_desc) {}

/**
 * @param int
 * @return mixed
 **/
function openal_listener_get($property) {}

/**
 * @param int
 * @param mixed
 * @return bool
 **/
function openal_listener_set($property, $setting) {}

/**
 * @return resource
 **/
function openal_source_create() {}

/**
 * @param resource
 * @return bool
 **/
function openal_source_destroy($source) {}

/**
 * @param resource
 * @param int
 * @return mixed
 **/
function openal_source_get($source, $property) {}

/**
 * @param resource
 * @return bool
 **/
function openal_source_pause($source) {}

/**
 * @param resource
 * @return bool
 **/
function openal_source_play($source) {}

/**
 * @param resource
 * @return bool
 **/
function openal_source_rewind($source) {}

/**
 * @param resource
 * @param int
 * @param mixed
 * @return bool
 **/
function openal_source_set($source, $property, $setting) {}

/**
 * @param resource
 * @return bool
 **/
function openal_source_stop($source) {}

/**
 * @param resource
 * @param int
 * @param int
 * @return resource
 **/
function openal_stream($source, $format, $rate) {}

/**
 * openssl_csr_export_to_file takes the Certificate
 * Signing Request represented by csr and saves it
 * as ascii-armoured text into the file named by outfilename.
 *
 * @param resource
 * @param string
 * @param bool
 * @return bool
 **/
function openssl_csr_export_to_file($csr, $outfilename, $notext) {}

/**
 * openssl_csr_export takes the Certificate Signing
 * Request represented by csr and stores it as
 * ascii-armoured text into out, which is passed by
 * reference.
 *
 * @param resource
 * @param string
 * @param bool
 * @return bool
 **/
function openssl_csr_export($csr, $out, $notext) {}

/**
 * @param mixed
 * @param bool
 * @return resource
 **/
function openssl_csr_get_public_key($csr, $use_shortnames) {}

/**
 * @param mixed
 * @param bool
 * @return array
 **/
function openssl_csr_get_subject($csr, $use_shortnames) {}

/**
 * openssl_csr_new generates a new CSR (Certificate Signing Request)
 * based on the information provided by dn, which represents the
 * Distinguished Name to be used in the certificate.
 *
 * @param array
 * @param resource
 * @param array
 * @param array
 * @return mixed
 **/
function openssl_csr_new($dn, $privkey, $configargs, $extraattribs) {}

/**
 * openssl_csr_sign generates an x509 certificate
 * resource from the given CSR.
 *
 * @param mixed
 * @param mixed
 * @param mixed
 * @param int
 * @param array
 * @param int
 * @return resource
 **/
function openssl_csr_sign($csr, $cacert, $priv_key, $days, $configargs, $serial) {}

/**
 * openssl_error_string returns the last error from the
 * openSSL library. Error messages are stacked, so this function should be
 * called multiple times to collect all of the information.
 *
 * @return string
 **/
function openssl_error_string() {}

/**
 * openssl_free_key frees the key associated with
 * the specified key_identifier from memory.
 *
 * @param resource
 * @return void
 **/
function openssl_free_key($key_identifier) {}

/**
 * openssl_open opens (decrypts)
 * sealed_data using the private key associated with
 * the key identifier priv_key_id and the envelope key
 * env_key, and fills
 * open_data with the decrypted data.
 * The envelope key is generated when the
 * data are sealed and can only be used by one specific private key. See
 * openssl_seal for more information.
 *
 * @param string
 * @param string
 * @param string
 * @param mixed
 * @return bool
 **/
function openssl_open($sealed_data, $open_data, $env_key, $priv_key_id) {}

/**
 * openssl_pkcs12_export_to_file stores
 * x509 into a file named by
 * filename in a PKCS#12 file format.
 *
 * @param mixed
 * @param string
 * @param mixed
 * @param string
 * @param array
 * @return bool
 **/
function openssl_pkcs12_export_to_file($x509, $filename, $priv_key, $pass, $args) {}

/**
 * openssl_pkcs12_export stores
 * x509 into a string named by
 * out in a PKCS#12 file format.
 *
 * @param mixed
 * @param string
 * @param mixed
 * @param string
 * @param array
 * @return bool
 **/
function openssl_pkcs12_export($x509, $out, $priv_key, $pass, $args) {}

/**
 * openssl_pkcs12_read parses the PKCS#12 certificate store supplied by
 * PKCS12 into a array named
 * certs.
 *
 * @param mixed
 * @param array
 * @param string
 * @return bool
 **/
function openssl_pkcs12_read($PKCS12, $certs, $pass) {}

/**
 * Decrypts the S/MIME encrypted message contained in the file specified by
 * infilename using the certificate and its
 * associated private key specified by recipcert and
 * recipkey.
 *
 * @param string
 * @param string
 * @param mixed
 * @param mixed
 * @return bool
 **/
function openssl_pkcs7_decrypt($infilename, $outfilename, $recipcert, $recipkey) {}

/**
 * openssl_pkcs7_encrypt takes the contents of the
 * file named infile and encrypts them using an RC2
 * 40-bit cipher so that they can only be read by the intended recipients
 * specified by recipcerts.
 *
 * @param string
 * @param string
 * @param mixed
 * @param array
 * @param int
 * @param int
 * @return bool
 **/
function openssl_pkcs7_encrypt($infile, $outfile, $recipcerts, $headers, $flags, $cipherid) {}

/**
 * openssl_pkcs7_sign takes the contents of the file
 * named infilename and signs them using the
 * certificate and its matching private key specified by
 * signcert and privkey
 * parameters.
 *
 * @param string
 * @param string
 * @param mixed
 * @param mixed
 * @param array
 * @param int
 * @param string
 * @return bool
 **/
function openssl_pkcs7_sign($infilename, $outfilename, $signcert, $privkey, $headers, $flags, $extracerts) {}

/**
 * openssl_pkcs7_verify reads the S/MIME message
 * contained in the given file and examines the digital signature.
 *
 * @param string
 * @param int
 * @param string
 * @param array
 * @param string
 * @param string
 * @return mixed
 **/
function openssl_pkcs7_verify($filename, $flags, $outfilename, $cainfo, $extracerts, $content) {}

/**
 * openssl_pkey_export_to_file saves an ascii-armoured
 * (PEM encoded) rendition of key into the file named
 * by outfilename.
 *
 * @param mixed
 * @param string
 * @param string
 * @param array
 * @return bool
 **/
function openssl_pkey_export_to_file($key, $outfilename, $passphrase, $configargs) {}

/**
 * openssl_pkey_export exports
 * key as a PEM encoded string and stores it into
 * out (which is passed by reference).
 *
 * @param mixed
 * @param string
 * @param string
 * @param array
 * @return bool
 **/
function openssl_pkey_export($key, $out, $passphrase, $configargs) {}

/**
 * This function frees a private key created by
 * openssl_pkey_new.
 *
 * @param resource
 * @return void
 **/
function openssl_pkey_free($key) {}

/**
 * This function returns the key details (bits, key, type).
 *
 * @param resource
 * @return array
 **/
function openssl_pkey_get_details($key) {}

/**
 * openssl_get_privatekey parses
 * key and prepares it for use by other functions.
 *
 * @param mixed
 * @param string
 * @return resource
 **/
function openssl_pkey_get_private($key, $passphrase) {}

/**
 * openssl_get_publickey extracts the public key from
 * certificate and prepares it for use by other
 * functions.
 *
 * @param mixed
 * @return resource
 **/
function openssl_pkey_get_public($certificate) {}

/**
 * openssl_pkey_new generates a new private and public
 * key pair. The public component of the key can be obtained using
 * openssl_pkey_get_public.
 *
 * @param array
 * @return resource
 **/
function openssl_pkey_new($configargs) {}

/**
 * openssl_private_decrypt decrypts
 * data that was previous encrypted via
 * openssl_public_encrypt and stores the result into
 * decrypted.
 *
 * @param string
 * @param string
 * @param mixed
 * @param int
 * @return bool
 **/
function openssl_private_decrypt($data, $decrypted, $key, $padding) {}

/**
 * openssl_private_encrypt encrypts data
 * with private key and stores the result into
 * crypted. Encrypted data can be decrypted via
 * openssl_public_decrypt.
 *
 * @param string
 * @param string
 * @param mixed
 * @param int
 * @return bool
 **/
function openssl_private_encrypt($data, $crypted, $key, $padding) {}

/**
 * openssl_public_decrypt decrypts
 * data that was previous encrypted via
 * openssl_private_encrypt and stores the result into
 * decrypted.
 *
 * @param string
 * @param string
 * @param mixed
 * @param int
 * @return bool
 **/
function openssl_public_decrypt($data, $decrypted, $key, $padding) {}

/**
 * openssl_public_encrypt encrypts data
 * with public key and stores the result into
 * crypted. Encrypted data can be decrypted via
 * openssl_private_decrypt.
 *
 * @param string
 * @param string
 * @param mixed
 * @param int
 * @return bool
 **/
function openssl_public_encrypt($data, $crypted, $key, $padding) {}

/**
 * openssl_seal seals (encrypts)
 * data by using RC4 with a randomly generated
 * secret key. The key is encrypted with each of the public keys
 * associated with the identifiers in pub_key_ids
 * and each encrypted key is returned
 * in env_keys. This means that one can send
 * sealed data to multiple recipients (provided one has obtained their
 * public keys). Each recipient must receive both the sealed data and
 * the envelope key that was encrypted with the recipient's public key.
 *
 * @param string
 * @param string
 * @param array
 * @param array
 * @return int
 **/
function openssl_seal($data, $sealed_data, $env_keys, $pub_key_ids) {}

/**
 * openssl_sign computes a signature for the
 * specified data by using SHA1 for hashing
 * followed by encryption using the private key associated with
 * priv_key_id. Note that the data itself is
 * not encrypted.
 *
 * @param string
 * @param string
 * @param mixed
 * @param int
 * @return bool
 **/
function openssl_sign($data, $signature, $priv_key_id, $signature_alg) {}

/**
 * openssl_verify verifies that the
 * signature is correct for the specified
 * data using the public key associated with
 * pub_key_id. This must be the public key
 * corresponding to the private key used for signing.
 *
 * @param string
 * @param string
 * @param mixed
 * @param int
 * @return int
 **/
function openssl_verify($data, $signature, $pub_key_id, $signature_alg) {}

/**
 * Checks whether the given key is the private key
 * that corresponds to cert.
 *
 * @param mixed
 * @param mixed
 * @return bool
 **/
function openssl_x509_check_private_key($cert, $key) {}

/**
 * openssl_x509_checkpurpose examines a certificate to
 * see if it can be used for the specified purpose.
 *
 * @param mixed
 * @param int
 * @param array
 * @param string
 * @return int
 **/
function openssl_x509_checkpurpose($x509cert, $purpose, $cainfo, $untrustedfile) {}

/**
 * openssl_x509_export_to_file stores
 * x509 into a file named by
 * outfilename in a PEM encoded format.
 *
 * @param mixed
 * @param string
 * @param bool
 * @return bool
 **/
function openssl_x509_export_to_file($x509, $outfilename, $notext) {}

/**
 * openssl_x509_export stores
 * x509 into a string named by
 * output in a PEM encoded format.
 *
 * @param mixed
 * @param string
 * @param bool
 * @return bool
 **/
function openssl_x509_export($x509, $output, $notext) {}

/**
 * openssl_x509_free frees the certificate associated
 * with the specified x509cert resource from memory.
 *
 * @param resource
 * @return void
 **/
function openssl_x509_free($x509cert) {}

/**
 * openssl_x509_parse returns information about the
 * supplied x509cert, including fields such as subject
 * name, issuer name, purposes, valid from and valid to dates etc.
 *
 * @param mixed
 * @param bool
 * @return array
 **/
function openssl_x509_parse($x509cert, $shortnames) {}

/**
 * openssl_x509_read parses the certificate supplied by
 * x509certdata and returns a resource identifier for
 * it.
 *
 * @param mixed
 * @return resource
 **/
function openssl_x509_read($x509certdata) {}

/**
 * Flushes the output buffers of PHP and whatever backend PHP is using (CGI,
 * a web server, etc). This effectively tries to push all the output so far
 * to the user's browser.
 *
 * @return void
 **/
function flush() {}

/**
 * This function discards the contents of the output buffer.
 *
 * @return void
 **/
function ob_clean() {}

/**
 * This function discards the contents of the topmost output buffer and turns
 * off this output buffering. If you want to further process the buffer's
 * contents you have to call ob_get_contents before
 * ob_end_clean as the buffer contents are discarded
 * when ob_end_clean is called.
 *
 * @return bool
 **/
function ob_end_clean() {}

/**
 * This function will send the contents of the topmost output buffer (if
 * any) and turn this output buffer off. If you want to further
 * process the buffer's contents you have to call
 * ob_get_contents before
 * ob_end_flush as the buffer contents are
 * discarded after ob_end_flush is called.
 *
 * @return bool
 **/
function ob_end_flush() {}

/**
 * This function will send the contents of the output buffer (if any). If you
 * want to further process the buffer's contents you have to call
 * ob_get_contents before ob_flush
 * as the buffer contents are discarded after ob_flush
 * is called.
 *
 * @return void
 **/
function ob_flush() {}

/**
 * Gets the current buffer contents and delete current output buffer.
 *
 * @return string
 **/
function ob_get_clean() {}

/**
 * Gets the contents of the output buffer without clearing it.
 *
 * @return string
 **/
function ob_get_contents() {}

/**
 * ob_get_flush flushes the output buffer, return
 * it as a string and turns off output buffering.
 *
 * @return string
 **/
function ob_get_flush() {}

/**
 * This will return the length of the contents in the output buffer.
 *
 * @return int
 **/
function ob_get_length() {}

/**
 * Returns the nesting level of the output buffering mechanism.
 *
 * @return int
 **/
function ob_get_level() {}

/**
 * ob_get_status returns status information on either
 * the top level output buffer or all active output buffer levels if
 * full_status is set to .
 *
 * @param bool
 * @return array
 **/
function ob_get_status($full_status) {}

/**
 * ob_gzhandler is intended to be used as a callback
 * function for ob_start to help facilitate sending
 * gz-encoded data to web browsers that support compressed web pages. 
 * Before ob_gzhandler actually sends compressed data,
 * it determines what type of content encoding the browser will accept
 * ("gzip", "deflate" or none at all) and will return its output accordingly.
 * All browsers are supported since it's up to the browser to send the
 * correct header saying that it accepts compressed web pages. If a browser
 * doesn't support compressed pages this function returns .
 *
 * @param string
 * @param int
 * @return string
 **/
function ob_gzhandler($buffer, $mode) {}

/**
 * ob_implicit_flush will turn implicit flushing on or
 * off. Implicit flushing will result in a flush operation after every output
 * call, so that explicit calls to flush will no longer
 * be needed.
 *
 * @param int
 * @return void
 **/
function ob_implicit_flush($flag) {}

/**
 * Lists all output handlers in use.
 *
 * @return array
 **/
function ob_list_handlers() {}

/**
 * This function will turn output buffering on. While output buffering is
 * active no output is sent from the script (other than headers), instead the
 * output is stored in an internal buffer.
 *
 * @param callback
 * @param int
 * @param bool
 * @return bool
 **/
function ob_start($output_callback, $chunk_size, $erase) {}

/**
 * This function adds another name/value pair to the URL rewrite mechanism.
 * The name and value will be added to URLs (as GET parameter) and forms
 * (as hidden input fields) the same way as the session ID when transparent
 * URL rewriting is enabled with session.use_trans_sid. Please
 * note that absolute URLs (http://example.com/..) aren't rewritten.
 *
 * @param string
 * @param string
 * @return bool
 **/
function output_add_rewrite_var($name, $value) {}

/**
 * This function resets the URL rewriter and removes all rewrite
 * variables previously set by the output_add_rewrite_var
 * function or the session mechanism (if session.use_trans_sid
 * was set on session_start).
 *
 * @return bool
 **/
function output_reset_rewrite_vars() {}

/**
 * The overload function will enable property and method
 * call overloading for a class identified by class_name.
 *
 * @param string
 * @return void
 **/
function overload($class_name) {}

/**
 * Closes the specified connection to Ovrimos. This 
 * has the effect of rolling back uncommitted transactions.
 *
 * @param int
 * @return void
 **/
function ovrimos_close($connection) {}

/**
 * Commits the transaction.
 *
 * @param int
 * @return bool
 **/
function ovrimos_commit($connection_id) {}

/**
 * Connects to the specified database.
 *
 * @param string
 * @param string
 * @param string
 * @param string
 * @return int
 **/
function ovrimos_connect($host, $dborport, $user, $password) {}

/**
 * Gets the name of the cursor. Useful when wishing to perform positioned
 * updates or deletes.
 *
 * @param int
 * @return string
 **/
function ovrimos_cursor($result_id) {}

/**
 * Executes an SQL statement (query or update) and returns a result 
 * identifier.
 *
 * @param int
 * @param string
 * @return int
 **/
function ovrimos_exec($connection_id, $query) {}

/**
 * Executes a prepared statement.
 *
 * @param int
 * @param array
 * @return bool
 **/
function ovrimos_execute($result_id, $parameters_array) {}

/**
 * Fetches a row from the given result set, into 
 * result_array.
 *
 * @param int
 * @param array
 * @param string
 * @param int
 * @return bool
 **/
function ovrimos_fetch_into($result_id, $result_array, $how, $rownumber) {}

/**
 * Fetches a row from the result set. Column values should be retrieved with
 * other calls.
 *
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function ovrimos_fetch_row($result_id, $how, $row_number) {}

/**
 * Gets the length of the specified output column.
 *
 * @param int
 * @param int
 * @return int
 **/
function ovrimos_field_len($result_id, $field_number) {}

/**
 * Returns the output column name at the index specified.
 *
 * @param int
 * @param int
 * @return string
 **/
function ovrimos_field_name($result_id, $field_number) {}

/**
 * Returns the 1-based index of the specified output column.
 *
 * @param int
 * @param string
 * @return int
 **/
function ovrimos_field_num($result_id, $field_name) {}

/**
 * Returns the type of the output column
 *
 * @param int
 * @param int
 * @return int
 **/
function ovrimos_field_type($result_id, $field_number) {}

/**
 * Frees the specified result identifier.
 *
 * @param int
 * @return bool
 **/
function ovrimos_free_result($result_id) {}

/**
 * Specifies how many bytes are to be retrieved from long datatypes (long
 * varchar and long varbinary).
 *
 * @param int
 * @param int
 * @return bool
 **/
function ovrimos_longreadlen($result_id, $length) {}

/**
 * Returns the number of columns in the specified result identifier.
 *
 * @param int
 * @return int
 **/
function ovrimos_num_fields($result_id) {}

/**
 * Gets the number of rows affected by update operations.
 *
 * @param int
 * @return int
 **/
function ovrimos_num_rows($result_id) {}

/**
 * Prepares an SQL statement.
 *
 * @param int
 * @param string
 * @return int
 **/
function ovrimos_prepare($connection_id, $query) {}

/**
 * Prints the whole result set as an HTML table.
 *
 * @param int
 * @param string
 * @return int
 **/
function ovrimos_result_all($result_id, $format) {}

/**
 * Retrieves the output column specified by field.
 *
 * @param int
 * @param mixed
 * @return string
 **/
function ovrimos_result($result_id, $field) {}

/**
 * Rolls back the transaction.
 *
 * @param int
 * @return bool
 **/
function ovrimos_rollback($connection_id) {}

/**
 * Closes the paradox database. This function will not close the file. You will
 * have to call fclose afterwards.
 *
 * @param resource
 * @return bool
 **/
function px_close($pxdoc) {}

/**
 * Create a new paradox database file. The actual file has to be opened before
 * with fopen. Make sure the file is writable.
 *
 * @param resource
 * @param resource
 * @param array
 * @return bool
 **/
function px_create_fp($pxdoc, $file, $fielddesc) {}

/**
 * Turns a date as it stored in the paradox file into human readable
 * format. Paradox dates are the number of days since 1.1.0000.
 * This function is just for convenience. It can be easily replaced by some
 * math and the calendar functions as demonstrated in the example below.
 *
 * @param resource
 * @param int
 * @param string
 * @return string
 **/
function px_date2string($pxdoc, $value, $format) {}

/**
 * This function deletes a record from the database. It does not free
 * the space in the database file but just marks it as deleted. Inserting
 * a new record afterwards will reuse the space.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function px_delete_record($pxdoc, $num) {}

/**
 * Deletes the resource of the paradox file and frees all memory.
 *
 * @param resource
 * @return bool
 **/
function px_delete($pxdoc) {}

/**
 * @param resource
 * @param int
 * @return array
 **/
function px_get_field($pxdoc, $fieldno) {}

/**
 * @param resource
 * @return array
 **/
function px_get_info($pxdoc) {}

/**
 * Gets various parameters.
 *
 * @param resource
 * @param string
 * @return string
 **/
function px_get_parameter($pxdoc, $name) {}

/**
 * @param resource
 * @param int
 * @param int
 * @return array
 **/
function px_get_record($pxdoc, $num, $mode) {}

/**
 * px_get_schema returns the database schema.
 *
 * @param resource
 * @param int
 * @return array
 **/
function px_get_schema($pxdoc, $mode) {}

/**
 * Gets various values.
 *
 * @param resource
 * @param string
 * @return float
 **/
function px_get_value($pxdoc, $name) {}

/**
 * Inserts a new record into the database. The record is not necessarily
 * inserted at the end of the database, but may be inserted at any
 * position depending on where the first free slot is found.
 *
 * @param resource
 * @param array
 * @return int
 **/
function px_insert_record($pxdoc, $data) {}

/**
 * Create a new paradox object. You will have to call this function before any
 * further functions. px_new does not create any file on
 * the disk, it just creates an instance of a paradox object. This function
 * must not be called if the object oriented interface is used. Use new
 * paradox_db() instead.
 *
 * @return resource
 **/
function px_new() {}

/**
 * Get the number of fields in a database file.
 *
 * @param resource
 * @return int
 **/
function px_numfields($pxdoc) {}

/**
 * Get the number of records in a database file.
 *
 * @param resource
 * @return int
 **/
function px_numrecords($pxdoc) {}

/**
 * Open an existing paradox database file. The actual file has to be opened
 * before with fopen. This function can also be used to
 * open primary index files and tread them like a paradox database. This is
 * supported for those who would like to investigate a primary index. It
 * cannot be used to accelerate access to a database file.
 *
 * @param resource
 * @param resource
 * @return bool
 **/
function px_open_fp($pxdoc, $file) {}

/**
 * Stores a record into a paradox database. The record is always added at
 * the end of the database, regardless of any free slots. Use
 * px_insert_record to add a new record into the first
 * free slot found in the database.
 *
 * @param resource
 * @param array
 * @param int
 * @return bool
 **/
function px_put_record($pxdoc, $record, $recpos) {}

/**
 * This function is very similar to px_get_record
 * but uses internally a different approach to retrieve the data. It
 * relies on pxlib for reading each single field value, which usually
 * results in support for more field types.
 *
 * @param resource
 * @param int
 * @param int
 * @return array
 **/
function px_retrieve_record($pxdoc, $num, $mode) {}

/**
 * Sets the name of the file where blobs are going to be read from or written
 * into. Without
 * calling this function, px_get_record or
 * px_retrieve_record will only return
 * data in blob fields if the data is part of the record and not stored in the
 * blob file. Blob data is stored in the record if it is small enough to fit
 * in the size of the blob field.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function px_set_blob_file($pxdoc, $filename) {}

/**
 * Sets various parameters.
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function px_set_parameter($pxdoc, $name, $value) {}

/**
 * Sets the table name of a paradox database, which was created with
 * px_create_fp. This function is deprecated use
 * px_set_parameter instead.
 *
 * @param resource
 * @param string
 * @return void
 **/
function px_set_tablename($pxdoc, $name) {}

/**
 * Set the encoding for data retrieved from a character field. All character
 * fields will be recoded to the encoding set by this function. If the
 * encoding is not set, the character data will be returned in the DOS code
 * page encoding as specified in the database file. The
 * encoding can be any string identifier known to
 * iconv or recode. On Unix systems run iconv -l for
 * a list of available encodings.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function px_set_targetencoding($pxdoc, $encoding) {}

/**
 * Sets various values.
 *
 * @param resource
 * @param string
 * @param float
 * @return bool
 **/
function px_set_value($pxdoc, $name, $value) {}

/**
 * Turns a timestamp as it stored in the paradox file into human readable
 * format. Paradox timestamps are the number of milliseconds since 1.1.0000.
 * This function is just for convenience. It can be easily replaced by some
 * math and the calendar functions as demonstrated in the following example.
 *
 * @param resource
 * @param float
 * @param string
 * @return string
 **/
function px_timestamp2string($pxdoc, $value, $format) {}

/**
 * Updates an exiting record in the database. The record starts at 0.
 *
 * @param resource
 * @param array
 * @param int
 * @return bool
 **/
function px_update_record($pxdoc, $data, $num) {}

/**
 * @param string
 * @param array
 * @param int
 * @return array
 **/
function parsekit_compile_file($filename, $errors, $options) {}

/**
 * @param string
 * @param array
 * @param int
 * @return array
 **/
function parsekit_compile_string($phpcode, $errors, $options) {}

/**
 * @param mixed
 * @return array
 **/
function parsekit_func_arginfo($function) {}

/**
 * Creates a timer that will send a SIGALRM signal to
 * the process after the given number of seconds.
 * Any call to pcntl_alarm will cancel any previously
 * set alarm.
 *
 * @param int
 * @return int
 **/
function pcntl_alarm($seconds) {}

/**
 * Executes the program with the given arguments.
 *
 * @param string
 * @param array
 * @param array
 * @return void
 **/
function pcntl_exec($path, $args, $envs) {}

/**
 * The pcntl_fork function creates a child
 * process that differs from the parent process only in its PID and
 * PPID. Please see your system's fork(2) man page for specific details as to
 * how fork works on your system.
 *
 * @return int
 **/
function pcntl_fork() {}

/**
 * pcntl_getpriority gets the priority of
 * pid. Because priority levels can differ between
 * system types and kernel versions, please see your system's getpriority(2)
 * man page for specific details.
 *
 * @param int
 * @param int
 * @return int
 **/
function pcntl_getpriority($pid, $process_identifier) {}

/**
 * pcntl_setpriority sets the priority of
 * pid.
 *
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function pcntl_setpriority($priority, $pid, $process_identifier) {}

/**
 * The pcntl_signal function installs a new
 * signal handler for the signal indicated by signo.
 *
 * @param int
 * @param callback
 * @param bool
 * @return bool
 **/
function pcntl_signal($signo, $handler, $restart_syscalls) {}

/**
 * The wait function suspends execution of the current process until a
 * child has exited, or until a signal is delivered whose action is to
 * terminate the current process or to call a signal handling function. If a
 * child has already exited by the time of the call (a so-called "zombie"
 * process), the function returns immediately. Any system resources used by
 * the child are freed. Please see your system's wait(2) man page for
 * specific details as to how wait works on your system.
 *
 * @param int
 * @param int
 * @return int
 **/
function pcntl_wait($status, $options) {}

/**
 * Suspends execution of the current process until a child as specified by
 * the pid argument has exited, or until a signal is
 * delivered whose action is to terminate the current process or to call a
 * signal handling function.
 *
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function pcntl_waitpid($pid, $status, $options) {}

/**
 * Returns the return code of a terminated child. This function is
 * only useful if pcntl_wifexited returned
 * .
 *
 * @param int
 * @return int
 **/
function pcntl_wexitstatus($status) {}

/**
 * Checks whether the child status code represents a normal exit.
 *
 * @param int
 * @return bool
 **/
function pcntl_wifexited($status) {}

/**
 * Checks whether the child process exited because of a signal which was not
 * caught.
 *
 * @param int
 * @return bool
 **/
function pcntl_wifsignaled($status) {}

/**
 * Checks whether the child process which caused the return is currently
 * stopped; this is only possible if the call to
 * pcntl_waitpid was done using the option
 * WUNTRACED.
 *
 * @param int
 * @return bool
 **/
function pcntl_wifstopped($status) {}

/**
 * Returns the number of the signal which caused the child to stop.
 * This function is only useful if
 * pcntl_wifstopped returned .
 *
 * @param int
 * @return int
 **/
function pcntl_wstopsig($status) {}

/**
 * Returns the number of the signal that caused the child process to
 * terminate. This function is only useful if
 * pcntl_wifsignaled returned .
 *
 * @param int
 * @return int
 **/
function pcntl_wtermsig($status) {}

/**
 * Returns the array consisting of the elements of the 
 * input array that match the given
 * pattern.
 *
 * @param string
 * @param array
 * @param int
 * @return array
 **/
function preg_grep($pattern, $input, $flags) {}

/**
 * Returns the error code of the last PCRE regex execution.
 *
 * @return int
 **/
function preg_last_error() {}

/**
 * Searches subject for all matches to the regular
 * expression given in pattern and puts them in
 * matches in the order specified by
 * flags.
 *
 * @param string
 * @param string
 * @param array
 * @param int
 * @param int
 * @return int
 **/
function preg_match_all($pattern, $subject, $matches, $flags, $offset) {}

/**
 * Searches subject for a match to the regular
 * expression given in pattern.
 *
 * @param string
 * @param string
 * @param array
 * @param int
 * @param int
 * @return int
 **/
function preg_match($pattern, $subject, $matches, $flags, $offset) {}

/**
 * preg_quote takes str
 * and puts a backslash in front of every character that is part of
 * the regular expression syntax. This is useful if you have a
 * run-time string that you need to match in some text and the
 * string may contain special regex characters.
 *
 * @param string
 * @param string
 * @return string
 **/
function preg_quote($str, $delimiter) {}

/**
 * The behavior of this function is almost identical to
 * preg_replace, except for the fact that instead of
 * replacement parameter, one should specify a
 * callback.
 *
 * @param mixed
 * @param callback
 * @param mixed
 * @param int
 * @param int
 * @return mixed
 **/
function preg_replace_callback($pattern, $callback, $subject, $limit, $count) {}

/**
 * Searches subject for matches to
 * pattern and replaces them with
 * replacement.
 *
 * @param mixed
 * @param mixed
 * @param mixed
 * @param int
 * @param int
 * @return mixed
 **/
function preg_replace($pattern, $replacement, $subject, $limit, $count) {}

/**
 * Split the given string by a regular expression.
 *
 * @param string
 * @param string
 * @param int
 * @param int
 * @return array
 **/
function preg_split($pattern, $subject, $limit, $flags) {}

/**
 * Activates a previously created structure element or other content item.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function PDF_activate_item($pdfdoc, $id) {}

/**
 * Adds a link to a web resource.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @param float
 * @param string
 * @return bool
 **/
function PDF_add_launchlink($pdfdoc, $llx, $lly, $urx, $ury, $filename) {}

/**
 * Add a link annotation to a target within the current PDF file.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @param float
 * @param int
 * @param string
 * @return bool
 **/
function PDF_add_locallink($pdfdoc, $lowerleftx, $lowerlefty, $upperrightx, $upperrighty, $page, $dest) {}

/**
 * Creates a named destination on an arbitrary page in the current document.
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function PDF_add_nameddest($pdfdoc, $name, $optlist) {}

/**
 * Sets an annotation for the current page.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @param float
 * @param string
 * @param string
 * @param string
 * @param int
 * @return bool
 **/
function PDF_add_note($pdfdoc, $llx, $lly, $urx, $ury, $contents, $title, $icon, $open) {}

/**
 * Add a file link annotation to a PDF target.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @param float
 * @param string
 * @param int
 * @param string
 * @return bool
 **/
function PDF_add_pdflink($pdfdoc, $bottom_left_x, $bottom_left_y, $up_right_x, $up_right_y, $filename, $page, $dest) {}

/**
 * Adds a cell to a new or existing table.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param string
 * @param string
 * @return int
 **/
function PDF_add_table_cell($pdfdoc, $table, $column, $row, $text, $optlist) {}

/**
 * Creates a Textflow object, or adds text and explicit options to an
 * existing Textflow.
 *
 * @param resource
 * @param int
 * @param string
 * @param string
 * @return int
 **/
function PDF_add_textflow($pdfdoc, $textflow, $text, $optlist) {}

/**
 * Adds an existing image as thumbnail for the current page.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function PDF_add_thumbnail($pdfdoc, $image) {}

/**
 * Adds a weblink annotation to a target url on the Web.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @param float
 * @param string
 * @return bool
 **/
function PDF_add_weblink($pdfdoc, $lowerleftx, $lowerlefty, $upperrightx, $upperrighty, $url) {}

/**
 * Adds a counterclockwise circular arc.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @return bool
 **/
function PDF_arc($p, $x, $y, $r, $alpha, $beta) {}

/**
 * Except for the drawing direction, this function behaves exactly like
 * PDF_arc.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @return bool
 **/
function PDF_arcn($p, $x, $y, $r, $alpha, $beta) {}

/**
 * Adds a file attachment annotation.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @param float
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function PDF_attach_file($pdfdoc, $llx, $lly, $urx, $ury, $filename, $description, $author, $mimetype, $icon) {}

/**
 * Creates a new PDF file subject to various options.
 *
 * @param resource
 * @param string
 * @param string
 * @return int
 **/
function PDF_begin_document($pdfdoc, $filename, $optlist) {}

/**
 * Starts a Type 3 font definition.
 *
 * @param resource
 * @param string
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @param string
 * @return bool
 **/
function PDF_begin_font($pdfdoc, $filename, $a, $b, $c, $d, $e, $f, $optlist) {}

/**
 * Starts a glyph definition for a Type 3 font.
 *
 * @param resource
 * @param string
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @return bool
 **/
function PDF_begin_glyph($pdfdoc, $glyphname, $wx, $llx, $lly, $urx, $ury) {}

/**
 * Opens a structure element or other content item with attributes supplied
 * as options.
 *
 * @param resource
 * @param string
 * @param string
 * @return int
 **/
function PDF_begin_item($pdfdoc, $tag, $optlist) {}

/**
 * Starts a layer for subsequent output on the page.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function PDF_begin_layer($pdfdoc, $layer) {}

/**
 * Adds a new page to the document, and specifies various options.
 * The parameters width and height
 * are the dimensions of the new page in points.
 *
 * @param resource
 * @param float
 * @param float
 * @param string
 * @return bool
 **/
function PDF_begin_page_ext($pdfdoc, $width, $height, $optlist) {}

/**
 * Adds a new page to the document.
 *
 * @param resource
 * @param float
 * @param float
 * @return bool
 **/
function PDF_begin_page($pdfdoc, $width, $height) {}

/**
 * Starts a new pattern definition.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @param float
 * @param int
 * @return int
 **/
function PDF_begin_pattern($pdfdoc, $width, $height, $xstep, $ystep, $painttype) {}

/**
 * Starts a new template definition.
 *
 * @param resource
 * @param float
 * @param float
 * @param string
 * @return int
 **/
function PDF_begin_template_ext($pdfdoc, $width, $height, $optlist) {}

/**
 * Starts a new template definition.
 *
 * @param resource
 * @param float
 * @param float
 * @return int
 **/
function PDF_begin_template($pdfdoc, $width, $height) {}

/**
 * Adds a circle.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @return bool
 **/
function PDF_circle($pdfdoc, $x, $y, $r) {}

/**
 * Uses the current path as clipping path, and terminate the path.
 *
 * @param resource
 * @return bool
 **/
function PDF_clip($p) {}

/**
 * Closes an image retrieved with the
 * PDF_open_image function.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function PDF_close_image($p, $image) {}

/**
 * Closes the page handle, and frees all page-related resources.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function PDF_close_pdi_page($p, $page) {}

/**
 * Closes all open page handles, and closes the input PDF document.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function PDF_close_pdi($p, $doc) {}

/**
 * Closes the generated PDF file, and frees all document-related resources.
 *
 * @param resource
 * @return bool
 **/
function PDF_close($p) {}

/**
 * Closes the path, fills, and strokes it.
 *
 * @param resource
 * @return bool
 **/
function PDF_closepath_fill_stroke($p) {}

/**
 * Closes the path, and strokes it.
 *
 * @param resource
 * @return bool
 **/
function PDF_closepath_stroke($p) {}

/**
 * Closes the current path.
 *
 * @param resource
 * @return bool
 **/
function PDF_closepath($p) {}

/**
 * Concatenates a matrix to the current transformation matrix (CTM).
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @return bool
 **/
function PDF_concat($p, $a, $b, $c, $d, $e, $f) {}

/**
 * Prints text at the next line.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function PDF_continue_text($p, $text) {}

/**
 * Creates a 3D view.
 *
 * @param resource
 * @param string
 * @param string
 * @return int
 **/
function PDF_create_3dview($pdfdoc, $username, $optlist) {}

/**
 * Creates an action which can be applied to various objects and events.
 *
 * @param resource
 * @param string
 * @param string
 * @return int
 **/
function PDF_create_action($pdfdoc, $type, $optlist) {}

/**
 * Creates a rectangular annotation on the current page.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @param float
 * @param string
 * @param string
 * @return bool
 **/
function PDF_create_annotation($pdfdoc, $llx, $lly, $urx, $ury, $type, $optlist) {}

/**
 * Creates a bookmark subject to various options.
 *
 * @param resource
 * @param string
 * @param string
 * @return int
 **/
function PDF_create_bookmark($pdfdoc, $text, $optlist) {}

/**
 * Creates a form field on the current page subject to various options.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @param float
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function PDF_create_field($pdfdoc, $llx, $lly, $urx, $ury, $name, $type, $optlist) {}

/**
 * Creates a form field group subject to various options.
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function PDF_create_fieldgroup($pdfdoc, $name, $optlist) {}

/**
 * Creates a graphics state object subject to various options.
 *
 * @param resource
 * @param string
 * @return int
 **/
function PDF_create_gstate($pdfdoc, $optlist) {}

/**
 * Creates a named virtual read-only file from data provided in memory.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function PDF_create_pvf($pdfdoc, $filename, $data, $optlist) {}

/**
 * Preprocesses text for later formatting and creates a textflow object.
 *
 * @param resource
 * @param string
 * @param string
 * @return int
 **/
function PDF_create_textflow($pdfdoc, $text, $optlist) {}

/**
 * Draws a Bezier curve from the current point, using 3 more control points.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @return bool
 **/
function PDF_curveto($p, $x1, $y1, $x2, $y2, $x3, $y3) {}

/**
 * Creates a new layer definition.
 *
 * @param resource
 * @param string
 * @param string
 * @return int
 **/
function PDF_define_layer($pdfdoc, $name, $optlist) {}

/**
 * Deletes a named virtual file and frees its data structures (but not
 * the contents).
 *
 * @param resource
 * @param string
 * @return int
 **/
function PDF_delete_pvf($pdfdoc, $filename) {}

/**
 * Deletes a table and all associated data structures.
 *
 * @param resource
 * @param int
 * @param string
 * @return bool
 **/
function PDF_delete_table($pdfdoc, $table, $optlist) {}

/**
 * Deletes a textflow and the associated data structures.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function PDF_delete_textflow($pdfdoc, $textflow) {}

/**
 * Deletes a PDFlib object, and frees all internal resources.
 *
 * @param resource
 * @return bool
 **/
function PDF_delete($pdfdoc) {}

/**
 * Adds a glyph name and/or Unicode value to a custom encoding.
 *
 * @param resource
 * @param string
 * @param int
 * @param string
 * @param int
 * @return bool
 **/
function PDF_encoding_set_char($pdfdoc, $encoding, $slot, $glyphname, $uv) {}

/**
 * Closes the generated PDF file and applies various options.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function PDF_end_document($pdfdoc, $optlist) {}

/**
 * Terminates a Type 3 font definition.
 *
 * @param resource
 * @return bool
 **/
function PDF_end_font($pdfdoc) {}

/**
 * Terminates a glyph definition for a Type 3 font.
 *
 * @param resource
 * @return bool
 **/
function PDF_end_glyph($pdfdoc) {}

/**
 * Closes a structure element or other content item.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function PDF_end_item($pdfdoc, $id) {}

/**
 * Deactivates all active layers.
 *
 * @param resource
 * @return bool
 **/
function PDF_end_layer($pdfdoc) {}

/**
 * Finishes a page, and applies various options.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function PDF_end_page_ext($pdfdoc, $optlist) {}

/**
 * Finishes the page.
 *
 * @param resource
 * @return bool
 **/
function PDF_end_page($p) {}

/**
 * Finishes the pattern definition.
 *
 * @param resource
 * @return bool
 **/
function PDF_end_pattern($p) {}

/**
 * Finishes a template definition.
 *
 * @param resource
 * @return bool
 **/
function PDF_end_template($p) {}

/**
 * Ends the current path without filling or stroking it.
 *
 * @param resource
 * @return bool
 **/
function PDF_endpath($p) {}

/**
 * Fills an image block with variable data according to its properties.
 *
 * @param resource
 * @param int
 * @param string
 * @param int
 * @param string
 * @return int
 **/
function PDF_fill_imageblock($pdfdoc, $page, $blockname, $image, $optlist) {}

/**
 * Fills a PDF block with variable data according to its properties.
 *
 * @param resource
 * @param int
 * @param string
 * @param int
 * @param string
 * @return int
 **/
function PDF_fill_pdfblock($pdfdoc, $page, $blockname, $contents, $optlist) {}

/**
 * Fills and strokes the current path with the current fill and stroke color.
 *
 * @param resource
 * @return bool
 **/
function PDF_fill_stroke($p) {}

/**
 * Fills a text block with variable data according to its properties.
 *
 * @param resource
 * @param int
 * @param string
 * @param string
 * @param string
 * @return int
 **/
function PDF_fill_textblock($pdfdoc, $page, $blockname, $text, $optlist) {}

/**
 * Fills the interior of the current path with the current fill color.
 *
 * @param resource
 * @return bool
 **/
function PDF_fill($p) {}

/**
 * Search for a font and prepare it for later use with PDF_setfont.
 * The metrics will be loaded, and if embed is
 * nonzero, the font file will be checked, but not yet used.
 * encoding is one of builtin,
 * macroman, winansi,
 * host, a user-defined encoding name or the name of
 * a CMap.
 * Parameter embed is optional before PHP 4.3.5 or
 * with PDFlib less than 5.
 *
 * @param resource
 * @param string
 * @param string
 * @param int
 * @return int
 **/
function PDF_findfont($p, $fontname, $encoding, $embed) {}

/**
 * Places an image or template on the page, subject to various options.
 *
 * @param resource
 * @param int
 * @param float
 * @param float
 * @param string
 * @return bool
 **/
function PDF_fit_image($pdfdoc, $image, $x, $y, $optlist) {}

/**
 * Places an imported PDF page on the page, subject to various options.
 *
 * @param resource
 * @param int
 * @param float
 * @param float
 * @param string
 * @return bool
 **/
function PDF_fit_pdi_page($pdfdoc, $page, $x, $y, $optlist) {}

/**
 * Places a table on the page fully or partially.
 *
 * @param resource
 * @param int
 * @param float
 * @param float
 * @param float
 * @param float
 * @param string
 * @return string
 **/
function PDF_fit_table($pdfdoc, $table, $llx, $lly, $urx, $ury, $optlist) {}

/**
 * Formats the next portion of a textflow into a rectangular area.
 *
 * @param resource
 * @param int
 * @param float
 * @param float
 * @param float
 * @param float
 * @param string
 * @return string
 **/
function PDF_fit_textflow($pdfdoc, $textflow, $llx, $lly, $urx, $ury, $optlist) {}

/**
 * Places a single line of text on the page, subject to various options.
 *
 * @param resource
 * @param string
 * @param float
 * @param float
 * @param string
 * @return bool
 **/
function PDF_fit_textline($pdfdoc, $text, $x, $y, $optlist) {}

/**
 * Gets the name of the API function which threw the last exception or failed.
 *
 * @param resource
 * @return string
 **/
function PDF_get_apiname($pdfdoc) {}

/**
 * Fetches the buffer containing the generated PDF data.
 *
 * @param resource
 * @return string
 **/
function PDF_get_buffer($p) {}

/**
 * Gets the text of the last thrown exception or the reason for a failed
 * function call.
 *
 * @param resource
 * @return string
 **/
function PDF_get_errmsg($pdfdoc) {}

/**
 * Gets the number of the last thrown exception or the reason for a failed
 * function call.
 *
 * @param resource
 * @return int
 **/
function PDF_get_errnum($pdfdoc) {}

/**
 * This function is deprecated since PDFlib version 5, use
 * PDF_get_value with the parameter
 * major instead.
 *
 * @return int
 **/
function PDF_get_majorversion() {}

/**
 * Returns the minor version number of the PDFlib version.
 *
 * @return int
 **/
function PDF_get_minorversion() {}

/**
 * Gets the contents of some PDFlib parameter with string type.
 *
 * @param resource
 * @param string
 * @param float
 * @return string
 **/
function PDF_get_parameter($p, $key, $modifier) {}

/**
 * Gets the contents of a PDI document parameter with string type.
 *
 * @param resource
 * @param string
 * @param int
 * @param int
 * @param int
 * @return string
 **/
function PDF_get_pdi_parameter($p, $key, $doc, $page, $reserved) {}

/**
 * Gets the contents of a PDI document parameter with numerical type.
 *
 * @param resource
 * @param string
 * @param int
 * @param int
 * @param int
 * @return float
 **/
function PDF_get_pdi_value($p, $key, $doc, $page, $reserved) {}

/**
 * Gets the value of some PDFlib parameter with numerical type.
 *
 * @param resource
 * @param string
 * @param float
 * @return float
 **/
function PDF_get_value($p, $key, $modifier) {}

/**
 * Queries information about a matchbox on the current page.
 *
 * @param resource
 * @param string
 * @param int
 * @param string
 * @return float
 **/
function PDF_info_matchbox($pdfdoc, $boxname, $num, $keyword) {}

/**
 * Retrieves table information related to the most recently placed
 * table instance.
 *
 * @param resource
 * @param int
 * @param string
 * @return float
 **/
function PDF_info_table($pdfdoc, $table, $keyword) {}

/**
 * Queries the current state of a textflow.
 *
 * @param resource
 * @param int
 * @param string
 * @return float
 **/
function PDF_info_textflow($pdfdoc, $textflow, $keyword) {}

/**
 * Performs textline formatting and queries the resulting metrics.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @return float
 **/
function PDF_info_textline($pdfdoc, $text, $keyword, $optlist) {}

/**
 * Reset all color and graphics state parameters to their defaults.
 *
 * @param resource
 * @return bool
 **/
function PDF_initgraphics($p) {}

/**
 * Draws a line from the current point to another point.
 *
 * @param resource
 * @param float
 * @param float
 * @return bool
 **/
function PDF_lineto($p, $x, $y) {}

/**
 * Loads a 3D model from a disk-based or virtual file.
 *
 * @param resource
 * @param string
 * @param string
 * @return int
 **/
function PDF_load_3ddata($pdfdoc, $filename, $optlist) {}

/**
 * Searches for a font and prepares it for later use.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @return int
 **/
function PDF_load_font($pdfdoc, $fontname, $encoding, $optlist) {}

/**
 * Searches for an ICC profile, and prepares it for later use.
 *
 * @param resource
 * @param string
 * @param string
 * @return int
 **/
function PDF_load_iccprofile($pdfdoc, $profilename, $optlist) {}

/**
 * Opens a disk-based or virtual image file subject to various options.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @return int
 **/
function PDF_load_image($pdfdoc, $imagetype, $filename, $optlist) {}

/**
 * Finds a built-in spot color name, or makes a named spot color from the
 * current fill color.
 *
 * @param resource
 * @param string
 * @return int
 **/
function PDF_makespotcolor($p, $spotname) {}

/**
 * Sets the current point for graphics output.
 *
 * @param resource
 * @param float
 * @param float
 * @return bool
 **/
function PDF_moveto($p, $x, $y) {}

/**
 * Creates a new PDFlib object with default settings.
 *
 * @return resource
 **/
function PDF_new() {}

/**
 * Opens a raw CCITT image.
 *
 * @param resource
 * @param string
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function PDF_open_ccitt($pdfdoc, $filename, $width, $height, $BitReverse, $k, $Blackls1) {}

/**
 * Creates a new PDF file using the supplied file name.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function PDF_open_file($p, $filename) {}

/**
 * Opens an image file.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param int
 * @return int
 **/
function PDF_open_image_file($p, $imagetype, $filename, $stringparam, $intparam) {}

/**
 * Uses image data from a variety of data sources.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param string
 * @return int
 **/
function PDF_open_image($p, $imagetype, $source, $data, $length, $width, $height, $components, $bpc, $params) {}

/**
 * This function is not supported by PDFlib GmbH.
 *
 * @param resource
 * @param resource
 * @return int
 **/
function PDF_open_memory_image($p, $image) {}

/**
 * Prepares a page for later use with PDF_fit_pdi_page.
 *
 * @param resource
 * @param int
 * @param int
 * @param string
 * @return int
 **/
function PDF_open_pdi_page($p, $doc, $pagenumber, $optlist) {}

/**
 * Opens a disk-based or virtual PDF document and prepares it for later use.
 *
 * @param resource
 * @param string
 * @param string
 * @param int
 * @return int
 **/
function PDF_open_pdi($pdfdoc, $filename, $optlist, $len) {}

/**
 * Gets the value of a pCOS path with type number or boolean.
 *
 * @param resource
 * @param int
 * @param string
 * @return float
 **/
function PDF_pcos_get_number($p, $doc, $path) {}

/**
 * Gets the contents of a pCOS path with type stream, fstream, or
 * string.
 *
 * @param resource
 * @param int
 * @param string
 * @param string
 * @return string
 **/
function PDF_pcos_get_stream($p, $doc, $optlist, $path) {}

/**
 * Gets the value of a pCOS path with type name, string, or boolean.
 *
 * @param resource
 * @param int
 * @param string
 * @return string
 **/
function PDF_pcos_get_string($p, $doc, $path) {}

/**
 * Places an image and scales it.
 *
 * @param resource
 * @param int
 * @param float
 * @param float
 * @param float
 * @return bool
 **/
function PDF_place_image($pdfdoc, $image, $x, $y, $scale) {}

/**
 * Places a PDF page and scales it.
 *
 * @param resource
 * @param int
 * @param float
 * @param float
 * @param float
 * @param float
 * @return bool
 **/
function PDF_place_pdi_page($pdfdoc, $page, $x, $y, $sx, $sy) {}

/**
 * Processes certain elements of an imported PDF document.
 *
 * @param resource
 * @param int
 * @param int
 * @param string
 * @return int
 **/
function PDF_process_pdi($pdfdoc, $doc, $page, $optlist) {}

/**
 * Draws a rectangle.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @param float
 * @return bool
 **/
function PDF_rect($p, $x, $y, $width, $height) {}

/**
 * Restores the most recently saved graphics state.
 *
 * @param resource
 * @return bool
 **/
function PDF_restore($p) {}

/**
 * Resumes a page to add more content to it.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function PDF_resume_page($pdfdoc, $optlist) {}

/**
 * Rotates the coordinate system.
 *
 * @param resource
 * @param float
 * @return bool
 **/
function PDF_rotate($p, $phi) {}

/**
 * Saves the current graphics state.
 *
 * @param resource
 * @return bool
 **/
function PDF_save($p) {}

/**
 * Scales the coordinate system.
 *
 * @param resource
 * @param float
 * @param float
 * @return bool
 **/
function PDF_scale($p, $sx, $sy) {}

/**
 * Sets the border color for all kinds of annotations.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @return bool
 **/
function PDF_set_border_color($p, $red, $green, $blue) {}

/**
 * Sets the border dash style for all kinds of annotations.
 *
 * @param resource
 * @param float
 * @param float
 * @return bool
 **/
function PDF_set_border_dash($pdfdoc, $black, $white) {}

/**
 * Sets the border style for all kinds of annotations.
 *
 * @param resource
 * @param string
 * @param float
 * @return bool
 **/
function PDF_set_border_style($pdfdoc, $style, $width) {}

/**
 * Activates a graphics state object.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function PDF_set_gstate($pdfdoc, $gstate) {}

/**
 * Fill document information field key with
 * value.
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function PDF_set_info($p, $key, $value) {}

/**
 * Defines hierarchical and group relationships among layers.
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function PDF_set_layer_dependency($pdfdoc, $type, $optlist) {}

/**
 * Sets some PDFlib parameter with string type.
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function PDF_set_parameter($p, $key, $value) {}

/**
 * Sets the position for text output on the page.
 *
 * @param resource
 * @param float
 * @param float
 * @return bool
 **/
function PDF_set_text_pos($p, $x, $y) {}

/**
 * Sets the value of some PDFlib parameter with numerical type.
 *
 * @param resource
 * @param string
 * @param float
 * @return bool
 **/
function PDF_set_value($p, $key, $value) {}

/**
 * Sets the current color space and color.
 *
 * @param resource
 * @param string
 * @param string
 * @param float
 * @param float
 * @param float
 * @param float
 * @return bool
 **/
function PDF_setcolor($p, $fstype, $colorspace, $c1, $c2, $c3, $c4) {}

/**
 * Sets the current dash pattern to b black
 * and w white units.
 *
 * @param resource
 * @param float
 * @param float
 * @return bool
 **/
function PDF_setdash($pdfdoc, $b, $w) {}

/**
 * Sets a dash pattern defined by an option list.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function PDF_setdashpattern($pdfdoc, $optlist) {}

/**
 * Sets the flatness parameter.
 *
 * @param resource
 * @param float
 * @return bool
 **/
function PDF_setflat($pdfdoc, $flatness) {}

/**
 * Sets the current font in the specified size, using a
 * font handle returned by PDF_load_font.
 *
 * @param resource
 * @param int
 * @param float
 * @return bool
 **/
function PDF_setfont($pdfdoc, $font, $fontsize) {}

/**
 * Sets the current fill color to a gray value between 0 and 1 inclusive.
 *
 * @param resource
 * @param float
 * @return bool
 **/
function PDF_setgray_fill($p, $g) {}

/**
 * Sets the current stroke color to a gray value between 0 and 1 inclusive.
 *
 * @param resource
 * @param float
 * @return bool
 **/
function PDF_setgray_stroke($p, $g) {}

/**
 * Sets the current fill and stroke color to a gray value between 0 and 1 inclusive.
 *
 * @param resource
 * @param float
 * @return bool
 **/
function PDF_setgray($p, $g) {}

/**
 * Sets the linecap parameter to control the shape
 * at the end of a path with respect to stroking.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function PDF_setlinecap($p, $linecap) {}

/**
 * Sets the linejoin parameter to specify the shape
 * at the corners of paths that are stroked.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function PDF_setlinejoin($p, $value) {}

/**
 * Sets the current line width.
 *
 * @param resource
 * @param float
 * @return bool
 **/
function PDF_setlinewidth($p, $width) {}

/**
 * Explicitly sets the current transformation matrix.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @return bool
 **/
function PDF_setmatrix($p, $a, $b, $c, $d, $e, $f) {}

/**
 * Sets the miter limit.
 *
 * @param resource
 * @param float
 * @return bool
 **/
function PDF_setmiterlimit($pdfdoc, $miter) {}

/**
 * Sets the current fill color to the supplied RGB values.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @return bool
 **/
function PDF_setrgbcolor_fill($p, $red, $green, $blue) {}

/**
 * Sets the current stroke color to the supplied RGB values.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @return bool
 **/
function PDF_setrgbcolor_stroke($p, $red, $green, $blue) {}

/**
 * Sets the current fill and stroke color to the supplied RGB values.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @return bool
 **/
function PDF_setrgbcolor($p, $red, $green, $blue) {}

/**
 * Defines a shading pattern using a shading object.
 *
 * @param resource
 * @param int
 * @param string
 * @return int
 **/
function PDF_shading_pattern($pdfdoc, $shading, $optlist) {}

/**
 * Defines a blend from the current fill color to another color.
 *
 * @param resource
 * @param string
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @param string
 * @return int
 **/
function PDF_shading($pdfdoc, $shtype, $x0, $y0, $x1, $y1, $c1, $c2, $c3, $c4, $optlist) {}

/**
 * Fills an area with a shading, based on a shading object.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function PDF_shfill($pdfdoc, $shading) {}

/**
 * This function is deprecated since PDFlib version 6, use
 * PDF_fit_textline for single lines, or the
 * PDF_*_textflow functions for multi-line formatting
 * instead.
 *
 * @param resource
 * @param string
 * @param float
 * @param float
 * @param float
 * @param float
 * @param string
 * @param string
 * @return int
 **/
function PDF_show_boxed($p, $text, $left, $top, $width, $height, $mode, $feature) {}

/**
 * Prints text in the current font.
 *
 * @param resource
 * @param string
 * @param float
 * @param float
 * @return bool
 **/
function PDF_show_xy($p, $text, $x, $y) {}

/**
 * Prints text in the current font and size at
 * the current position.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function PDF_show($pdfdoc, $text) {}

/**
 * Skews the coordinate system in x and y direction by alpha
 * and beta degrees.
 *
 * @param resource
 * @param float
 * @param float
 * @return bool
 **/
function PDF_skew($p, $alpha, $beta) {}

/**
 * Returns the width of text in an arbitrary font.
 *
 * @param resource
 * @param string
 * @param int
 * @param float
 * @return float
 **/
function PDF_stringwidth($p, $text, $font, $fontsize) {}

/**
 * Strokes the path with the current color and line width, and clear it.
 *
 * @param resource
 * @return bool
 **/
function PDF_stroke($p) {}

/**
 * Suspends the current page so that it can later be resumed with
 * PDF_resume_page.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function PDF_suspend_page($pdfdoc, $optlist) {}

/**
 * Translates the origin of the coordinate system.
 *
 * @param resource
 * @param float
 * @param float
 * @return bool
 **/
function PDF_translate($p, $tx, $ty) {}

/**
 * Converts a string from UTF-16 format to UTF-8.
 *
 * @param resource
 * @param string
 * @return string
 **/
function PDF_utf16_to_utf8($pdfdoc, $utf16string) {}

/**
 * Converts a string from UTF-32 format to UTF-16.
 *
 * @param resource
 * @param string
 * @param string
 * @return string
 **/
function PDF_utf32_to_utf16($pdfdoc, $utf32string, $ordering) {}

/**
 * Converts a string from UTF-8 format to UTF-16.
 *
 * @param resource
 * @param string
 * @param string
 * @return string
 **/
function PDF_utf8_to_utf16($pdfdoc, $utf8string, $ordering) {}

/**
 * pg_affected_rows returns the number of tuples
 * (instances/records/rows) affected by INSERT, 
 * UPDATE, and DELETE
 * queries.
 *
 * @param resource
 * @return int
 **/
function pg_affected_rows($result) {}

/**
 * pg_cancel_query cancels an asynchronous query sent with 
 * pg_send_query, pg_send_query_params
 * or pg_send_execute. You cannot cancel a query executed using 
 * pg_query.
 *
 * @param resource
 * @return bool
 **/
function pg_cancel_query($connection) {}

/**
 * PostgreSQL supports automatic character set conversion between 
 * server and client for certain character sets.
 * pg_client_encoding returns the client
 * encoding as a string. The returned string will be one of the
 * standard PostgreSQL encoding identifiers.
 *
 * @param resource
 * @return string
 **/
function pg_client_encoding($connection) {}

/**
 * pg_close closes the non-persistent
 * connection to a PostgreSQL database associated with the given
 * connection resource.
 *
 * @param resource
 * @return bool
 **/
function pg_close($connection) {}

/**
 * pg_connect opens a connection to a
 * PostgreSQL database specified by the
 * connection_string.
 *
 * @param string
 * @param int
 * @return resource
 **/
function pg_connect($connection_string, $connect_type) {}

/**
 * pg_connection_busy determines whether or not a connection
 * is busy. If it is busy, a previous query is still executing.
 * If pg_get_result is used on the connection, it will be blocked.
 *
 * @param resource
 * @return bool
 **/
function pg_connection_busy($connection) {}

/**
 * pg_connection_reset resets the connection.
 * It is useful for error recovery.
 *
 * @param resource
 * @return bool
 **/
function pg_connection_reset($connection) {}

/**
 * pg_connection_status returns the status of
 * the specified connection.
 *
 * @param resource
 * @return int
 **/
function pg_connection_status($connection) {}

/**
 * pg_convert checks and converts the values in
 * assoc_array into suitable values for use in a SQL
 * statement. Precondition for pg_convert is the 
 * existence of a table table_name which has at least
 * as many columns as assoc_array has elements. The
 * fieldnames in table_name must match the indices in
 * assoc_array and the corresponding datatypes must be
 * compatible. Returns an array with the converted values on success, 
 * otherwise.
 *
 * @param resource
 * @param string
 * @param array
 * @param int
 * @return array
 **/
function pg_convert($connection, $table_name, $assoc_array, $options) {}

/**
 * pg_copy_from inserts records into a table from 
 * rows. It issues a COPY FROM SQL command 
 * internally to insert records.
 *
 * @param resource
 * @param string
 * @param array
 * @param string
 * @param string
 * @return bool
 **/
function pg_copy_from($connection, $table_name, $rows, $delimiter, $null_as) {}

/**
 * pg_copy_to copies a table to an array. It
 * issues COPY TO SQL command internally to
 * retrieve records.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @return array
 **/
function pg_copy_to($connection, $table_name, $delimiter, $null_as) {}

/**
 * pg_dbname returns the name of the database
 * that the given PostgreSQL connection
 * resource.
 *
 * @param resource
 * @return string
 **/
function pg_dbname($connection) {}

/**
 * pg_delete deletes records from a table specified by
 * the keys and values in assoc_array. If options is
 * specified, pg_convert is applied
 * to assoc_array with the specified options.
 *
 * @param resource
 * @param string
 * @param array
 * @param int
 * @return mixed
 **/
function pg_delete($connection, $table_name, $assoc_array, $options) {}

/**
 * pg_end_copy syncs the PostgreSQL frontend
 * (usually a web server process) with the PostgreSQL server after
 * doing a copy operation performed by
 * pg_put_line. pg_end_copy
 * must be issued, otherwise the PostgreSQL server may get out of
 * sync with the frontend and will report an error.
 *
 * @param resource
 * @return bool
 **/
function pg_end_copy($connection) {}

/**
 * pg_escape_bytea escapes string for
 * bytea datatype. It returns escaped string.
 *
 * @param resource
 * @param string
 * @return string
 **/
function pg_escape_bytea($connection, $data) {}

/**
 * pg_escape_string escapes a string for
 * insertion into the database. It returns an escaped string in the
 * PostgreSQL format. Use of this function is recommended instead of
 * addslashes. If the type of the column
 * is bytea, pg_escape_bytea must be used
 * instead.
 *
 * @param resource
 * @param string
 * @return string
 **/
function pg_escape_string($connection, $data) {}

/**
 * Sends a request to execute a prepared statement with given parameters, and 
 * waits for the result.
 *
 * @param resource
 * @param string
 * @param array
 * @return resource
 **/
function pg_execute($connection, $stmtname, $params) {}

/**
 * pg_fetch_all_columns returns an array that
 * contains all rows (records) in a particular column of the result resource.
 *
 * @param resource
 * @param int
 * @return array
 **/
function pg_fetch_all_columns($result, $column) {}

/**
 * pg_fetch_all returns an array that
 * contains all rows (records) in the result resource.
 *
 * @param resource
 * @return array
 **/
function pg_fetch_all($result) {}

/**
 * pg_fetch_array returns an array that
 * corresponds to the fetched row (record).
 *
 * @param resource
 * @param int
 * @param int
 * @return array
 **/
function pg_fetch_array($result, $row, $result_type) {}

/**
 * pg_fetch_assoc returns an associative array that
 * corresponds to the fetched row (records).
 *
 * @param resource
 * @param int
 * @return array
 **/
function pg_fetch_assoc($result, $row) {}

/**
 * pg_fetch_object returns an object with
 * properties that correspond to the fetched row's field names. It can optionally
 * instantiate an object of a specific class, and pass parameters to that
 * class's constructor.
 *
 * @param resource
 * @param int
 * @param int
 * @return object
 **/
function pg_fetch_object($result, $row, $result_type) {}

/**
 * pg_fetch_result returns the value of a particular
 * row and field (column) in a PostgreSQL result resource.
 *
 * @param resource
 * @param int
 * @param mixed
 * @return string
 **/
function pg_fetch_result($result, $row, $field) {}

/**
 * pg_fetch_row fetches one row of data from
 * the result associated with the specified
 * result resource.
 *
 * @param resource
 * @param int
 * @return array
 **/
function pg_fetch_row($result, $row) {}

/**
 * pg_field_is_null tests if a field in a PostgreSQL
 * result resource is SQL NULL or not.
 *
 * @param resource
 * @param int
 * @param mixed
 * @return int
 **/
function pg_field_is_null($result, $row, $field) {}

/**
 * pg_field_name returns the name of the field
 * occupying the given field_number in the
 * given PostgreSQL result resource. Field
 * numbering starts from 0.
 *
 * @param resource
 * @param int
 * @return string
 **/
function pg_field_name($result, $field_number) {}

/**
 * pg_field_num will return the number of the
 * field number that corresponds to the
 * field_name in the given PostgreSQL
 * result resource.
 *
 * @param resource
 * @param string
 * @return int
 **/
function pg_field_num($result, $field_name) {}

/**
 * pg_field_prtlen returns the actual printed
 * length (number of characters) of a specific value in a PostgreSQL
 * result. Row numbering starts at 0. This
 * function will return -1 on an error.
 *
 * @param resource
 * @param int
 * @param mixed
 * @return int
 **/
function pg_field_prtlen($result, $row_number, $field_name_or_number) {}

/**
 * pg_field_size returns the internal storage
 * size (in bytes) of the field number in the given PostgreSQL
 * result.
 *
 * @param resource
 * @param int
 * @return int
 **/
function pg_field_size($result, $field_number) {}

/**
 * pg_field_table returns the name of the table that field 
 * belongs to, or the table's oid if oid_only is .
 *
 * @param resource
 * @param int
 * @param bool
 * @return mixed
 **/
function pg_field_table($result, $field_number, $oid_only) {}

/**
 * pg_field_type_oid returns an integer containing the
 * OID of the base type of the given field_number in the
 * given PostgreSQL result resource.
 *
 * @param resource
 * @param int
 * @return int
 **/
function pg_field_type_oid($result, $field_number) {}

/**
 * pg_field_type returns a string containing the
 * base type name of the given field_number in the
 * given PostgreSQL result resource.
 *
 * @param resource
 * @param int
 * @return string
 **/
function pg_field_type($result, $field_number) {}

/**
 * pg_free_result frees the memory and data associated with the
 * specified PostgreSQL query result resource.
 *
 * @param resource
 * @return bool
 **/
function pg_free_result($result) {}

/**
 * pg_get_notify gets notifications generated by a
 * NOTIFY SQL command. To receive notifications,
 * the LISTEN SQL command must be
 * issued.
 *
 * @param resource
 * @param int
 * @return array
 **/
function pg_get_notify($connection, $result_type) {}

/**
 * pg_get_pid gets the backend's (database server
 * process) PID. The PID is useful to determine whether or not a NOTIFY
 * message received via pg_get_notify is sent from another process
 * or not.
 *
 * @param resource
 * @return int
 **/
function pg_get_pid($connection) {}

/**
 * pg_get_result gets the result resource from
 * an asynchronous query executed by
 * pg_send_query, pg_send_query_params or
 * pg_send_execute.
 *
 * @param resource
 * @return resource
 **/
function pg_get_result($connection) {}

/**
 * pg_host returns the host name of the given
 * PostgreSQL connection resource is
 * connected to.
 *
 * @param resource
 * @return string
 **/
function pg_host($connection) {}

/**
 * pg_insert inserts the values of assoc_array 
 * into the table specified by table_name.
 * If options is
 * specified, pg_convert is applied
 * to assoc_array with the specified options.
 *
 * @param resource
 * @param string
 * @param array
 * @param int
 * @return mixed
 **/
function pg_insert($connection, $table_name, $assoc_array, $options) {}

/**
 * pg_last_error returns the last error message
 * for a given connection.
 *
 * @param resource
 * @return string
 **/
function pg_last_error($connection) {}

/**
 * pg_last_notice returns the last notice
 * message from the PostgreSQL server on the specified
 * connection. The PostgreSQL server sends notice
 * messages in several cases, for instance when creating a SERIAL
 * column in a table.
 *
 * @param resource
 * @return string
 **/
function pg_last_notice($connection) {}

/**
 * pg_last_oid is used to retrieve the
 * OID assigned to an inserted row.
 *
 * @param resource
 * @return string
 **/
function pg_last_oid($result) {}

/**
 * pg_lo_close closes a large
 * object. large_object is a resource for the
 * large object from pg_lo_open.
 *
 * @param resource
 * @return bool
 **/
function pg_lo_close($large_object) {}

/**
 * pg_lo_create creates a large
 * object and returns the OID of the large
 * object. PostgreSQL access modes
 * INV_READ, INV_WRITE, and 
 * INV_ARCHIVE are not supported, the
 * object is created always with both read and write
 * access. INV_ARCHIVE has been removed from PostgreSQL itself
 * (version 6.3 and above).
 *
 * @param resource
 * @param mixed
 * @return int
 **/
function pg_lo_create($connection, $object_id) {}

/**
 * pg_lo_export takes a large object in a
 * PostgreSQL database and saves its contents to a file on the local
 * filesystem.
 *
 * @param resource
 * @param int
 * @param string
 * @return bool
 **/
function pg_lo_export($connection, $oid, $pathname) {}

/**
 * pg_lo_import creates a new large object
 * in the database using a file on the filesystem as its data
 * source.
 *
 * @param resource
 * @param string
 * @param mixed
 * @return int
 **/
function pg_lo_import($connection, $pathname, $object_id) {}

/**
 * pg_lo_open opens a large object in the database
 * and returns large object resource so that it can be manipulated.
 *
 * @param resource
 * @param int
 * @param string
 * @return resource
 **/
function pg_lo_open($connection, $oid, $mode) {}

/**
 * pg_lo_read_all reads a large object and passes
 * it straight through to the browser after sending all pending
 * headers. Mainly intended for sending binary data like images or
 * sound.
 *
 * @param resource
 * @return int
 **/
function pg_lo_read_all($large_object) {}

/**
 * pg_lo_read reads at most
 * len bytes from a large object and
 * returns it as a string.
 *
 * @param resource
 * @param int
 * @return string
 **/
function pg_lo_read($large_object, $len) {}

/**
 * pg_lo_seek seeks a position within a large object
 * resource.
 *
 * @param resource
 * @param int
 * @param int
 * @return bool
 **/
function pg_lo_seek($large_object, $offset, $whence) {}

/**
 * pg_lo_tell returns the current position (offset
 * from the beginning) of a large object.
 *
 * @param resource
 * @return int
 **/
function pg_lo_tell($large_object) {}

/**
 * pg_lo_unlink deletes a large object with the
 * oid.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function pg_lo_unlink($connection, $oid) {}

/**
 * pg_lo_write writes data into a large object
 * at the current seek position.
 *
 * @param resource
 * @param string
 * @param int
 * @return int
 **/
function pg_lo_write($large_object, $data, $len) {}

/**
 * pg_meta_data returns table definition for
 * table_name as an array.
 *
 * @param resource
 * @param string
 * @return array
 **/
function pg_meta_data($connection, $table_name) {}

/**
 * pg_num_fields returns the number of fields
 * (columns) in a PostgreSQL result resource.
 *
 * @param resource
 * @return int
 **/
function pg_num_fields($result) {}

/**
 * pg_num_rows will return the number of rows in
 * a PostgreSQL result resource.
 *
 * @param resource
 * @return int
 **/
function pg_num_rows($result) {}

/**
 * pg_options will return a string containing
 * the options specified on the given PostgreSQL
 * connection resource.
 *
 * @param resource
 * @return string
 **/
function pg_options($connection) {}

/**
 * Looks up a current parameter setting of the server.
 *
 * @param resource
 * @param string
 * @return string
 **/
function pg_parameter_status($connection, $param_name) {}

/**
 * pg_pconnect opens a connection to a
 * PostgreSQL database. It returns a connection resource that is
 * needed by other PostgreSQL functions.
 *
 * @param string
 * @param int
 * @return resource
 **/
function pg_pconnect($connection_string, $connect_type) {}

/**
 * pg_ping pings a database connection and tries to
 * reconnect it if it is broken.
 *
 * @param resource
 * @return bool
 **/
function pg_ping($connection) {}

/**
 * pg_port returns the port number that the
 * given PostgreSQL connection resource is
 * connected to.
 *
 * @param resource
 * @return int
 **/
function pg_port($connection) {}

/**
 * pg_prepare creates a prepared statement for later execution with 
 * pg_execute or pg_send_execute. 
 * This feature allows commands that will be used repeatedly to 
 * be parsed and planned just once, rather than each time they are executed. 
 * pg_prepare is supported only against PostgreSQL 7.4 or
 * higher connections; it will fail when using earlier versions.
 *
 * @param resource
 * @param string
 * @param string
 * @return resource
 **/
function pg_prepare($connection, $stmtname, $query) {}

/**
 * pg_put_line sends a NULL-terminated string
 * to the PostgreSQL backend server. This is needed in conjunction
 * with PostgreSQL's COPY FROM command.
 *
 * @param string
 * @return bool
 **/
function pg_put_line($data) {}

/**
 * Submits a command to the server and waits for the result, with the ability 
 * to pass parameters separately from the SQL command text.
 *
 * @param resource
 * @param string
 * @param array
 * @return resource
 **/
function pg_query_params($connection, $query, $params) {}

/**
 * pg_query executes the query
 * on the specified database connection.
 *
 * @param string
 * @return resource
 **/
function pg_query($query) {}

/**
 * pg_result_error_field returns one of the detailed error message
 * fields associated with result resource. It is only available
 * against a PostgreSQL 7.4 or above server. The error field is specified by
 * the fieldcode.
 *
 * @param resource
 * @param int
 * @return string
 **/
function pg_result_error_field($result, $fieldcode) {}

/**
 * pg_result_error returns any error message
 * associated with the result resource. Therefore,
 * the user has a better chance of getting the correct error message than
 * with pg_last_error.
 *
 * @param resource
 * @return string
 **/
function pg_result_error($result) {}

/**
 * pg_result_seek sets the internal row offset in
 * a result resource.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function pg_result_seek($result, $offset) {}

/**
 * pg_result_status returns the status of a result
 * resource, or the PostgreSQL command completion tag associated with the result
 *
 * @param resource
 * @param int
 * @return mixed
 **/
function pg_result_status($result, $type) {}

/**
 * pg_select selects records specified by
 * assoc_array which has
 * field=&gt;value. For a successful query, it returns an
 * array containing all records and fields that match the condition
 * specified by assoc_array.
 *
 * @param resource
 * @param string
 * @param array
 * @param int
 * @return mixed
 **/
function pg_select($connection, $table_name, $assoc_array, $options) {}

/**
 * Sends a request to execute a prepared statement with given parameters, 
 * without waiting for the result(s).
 *
 * @param resource
 * @param string
 * @param array
 * @return bool
 **/
function pg_send_execute($connection, $stmtname, $params) {}

/**
 * Sends a request to create a prepared statement with the given parameters, 
 * without waiting for completion.
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function pg_send_prepare($connection, $stmtname, $query) {}

/**
 * Submits a command and separate parameters to the server without 
 * waiting for the result(s).
 *
 * @param resource
 * @param string
 * @param array
 * @return bool
 **/
function pg_send_query_params($connection, $query, $params) {}

/**
 * pg_send_query sends a query or queries asynchronously to the
 * connection. Unlike
 * pg_query, it can send multiple queries at once to
 * PostgreSQL and get the results one by one using
 * pg_get_result.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function pg_send_query($connection, $query) {}

/**
 * pg_set_client_encoding sets the client
 * encoding and returns 0 if success or -1 if error.
 *
 * @param string
 * @return int
 **/
function pg_set_client_encoding($encoding) {}

/**
 * Determines the verbosity of messages returned by pg_last_error 
 * and pg_result_error.
 *
 * @param resource
 * @param int
 * @return int
 **/
function pg_set_error_verbosity($connection, $verbosity) {}

/**
 * pg_trace enables tracing of the PostgreSQL
 * frontend/backend communication to a file. To fully understand the results,
 * one needs to be familiar with the internals of PostgreSQL
 * communication protocol.
 *
 * @param string
 * @param string
 * @param resource
 * @return bool
 **/
function pg_trace($pathname, $mode, $connection) {}

/**
 * Returns the current in-transaction status of the server.
 *
 * @param resource
 * @return int
 **/
function pg_transaction_status($connection) {}

/**
 * pg_tty returns the TTY name that server
 * side debugging output is sent to on the given PostgreSQL
 * connection resource.
 *
 * @param resource
 * @return string
 **/
function pg_tty($connection) {}

/**
 * pg_unescape_bytea unescapes PostgreSQL bytea data
 * values. It returns the unescaped string, possibly containing binary data.
 *
 * @param string
 * @return string
 **/
function pg_unescape_bytea($data) {}

/**
 * Stop tracing started by pg_trace.
 *
 * @param resource
 * @return bool
 **/
function pg_untrace($connection) {}

/**
 * pg_update updates records that matches
 * condition with data. If
 * options is specified,
 * pg_convert is applied to
 * data with specified options.
 *
 * @param resource
 * @param string
 * @param array
 * @param array
 * @param int
 * @return mixed
 **/
function pg_update($connection, $table_name, $data, $condition, $options) {}

/**
 * pg_version returns an array with the client, protocol
 * and server version. Protocol and server versions are only available if PHP
 * was compiled with PostgreSQL 7.4 or later.
 *
 * @param resource
 * @return array
 **/
function pg_version($connection) {}

/**
 * posix_access checks the user's permission of a file.
 *
 * @param string
 * @param int
 * @return bool
 **/
function posix_access($file, $mode) {}

/**
 * Generates a string which is the pathname for the current 
 * controlling terminal for the process. On error this will set errno, 
 * which can be checked using posix_get_last_error
 *
 * @return string
 **/
function posix_ctermid() {}

/**
 * Retrieve the error number set by the last posix function that failed.
 * The system error message associated with the errno may be checked with
 * posix_strerror.
 *
 * @return int
 **/
function posix_get_last_error() {}

/**
 * Gets the absolute pathname of the script's current working directory.
 * On error, it sets errno which can be checked using
 * posix_get_last_error
 *
 * @return string
 **/
function posix_getcwd() {}

/**
 * Return the numeric effective group ID of the current process.
 *
 * @return int
 **/
function posix_getegid() {}

/**
 * Return the numeric effective user ID of the current process. See
 * also posix_getpwuid for information on how
 * to convert this into a useable username.
 *
 * @return int
 **/
function posix_geteuid() {}

/**
 * Return the numeric real group ID of the current process.
 *
 * @return int
 **/
function posix_getgid() {}

/**
 * Gets information about a group provided its id.
 *
 * @param int
 * @return array
 **/
function posix_getgrgid($gid) {}

/**
 * Gets information about a group provided its name.
 *
 * @param string
 * @return array
 **/
function posix_getgrnam($name) {}

/**
 * Gets the group set of the current process.
 *
 * @return array
 **/
function posix_getgroups() {}

/**
 * Returns the login name of the user owning the current process.
 *
 * @return string
 **/
function posix_getlogin() {}

/**
 * Returns the process group identifier of the process
 * pid.
 *
 * @param int
 * @return int
 **/
function posix_getpgid($pid) {}

/**
 * Return the process group identifier of the current process.
 *
 * @return int
 **/
function posix_getpgrp() {}

/**
 * Return the process identifier of the current process.
 *
 * @return int
 **/
function posix_getpid() {}

/**
 * Return the process identifier of the parent process of the
 * current process.
 *
 * @return int
 **/
function posix_getppid() {}

/**
 * Returns an array of information about the given user.
 *
 * @param string
 * @return array
 **/
function posix_getpwnam($username) {}

/**
 * Returns an array of information about the user 
 * referenced by the given user ID.
 *
 * @param int
 * @return array
 **/
function posix_getpwuid($uid) {}

/**
 * posix_getrlimit returns an array
 * of information about the current resource's soft and hard limits.
 *
 * @return array
 **/
function posix_getrlimit() {}

/**
 * Return the session id of the process pid.
 * The session id of a process is the process group id of the session leader.
 *
 * @param int
 * @return int
 **/
function posix_getsid($pid) {}

/**
 * Return the numeric real user ID of the current process.
 *
 * @return int
 **/
function posix_getuid() {}

/**
 * Calculates the group access list for the user specified in name.
 *
 * @param string
 * @param int
 * @return bool
 **/
function posix_initgroups($name, $base_group_id) {}

/**
 * Determines if the file descriptor fd refers to a valid
 * terminal type device.
 *
 * @param int
 * @return bool
 **/
function posix_isatty($fd) {}

/**
 * Send the signal sig to the process with
 * the process identifier pid.
 *
 * @param int
 * @param int
 * @return bool
 **/
function posix_kill($pid, $sig) {}

/**
 * posix_mkfifo creates a special
 * FIFO file which exists in the file system and acts as
 * a bidirectional communication endpoint for processes.
 *
 * @param string
 * @param int
 * @return bool
 **/
function posix_mkfifo($pathname, $mode) {}

/**
 * Creates a special or ordinary file.
 *
 * @param string
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function posix_mknod($pathname, $mode, $major, $minor) {}

/**
 * Set the effective group ID of the current process. This is a
 * privileged function and needs appropriate privileges (usually
 * root) on the system to be able to perform this function.
 *
 * @param int
 * @return bool
 **/
function posix_setegid($gid) {}

/**
 * Set the real user ID of the current process. This is a privileged
 * function and needs appropriate privileges (usually root) on
 * the system to be able to perform this function.
 *
 * @param int
 * @return bool
 **/
function posix_seteuid($uid) {}

/**
 * Set the real group ID of the current process. This is a
 * privileged function and needs appropriate privileges (usually
 * root) on the system to be able to perform this function. The
 * appropriate order of function calls is
 * posix_setgid first,
 * posix_setuid last.
 *
 * @param int
 * @return bool
 **/
function posix_setgid($gid) {}

/**
 * Let the process pid join the process group
 * pgid.
 *
 * @param int
 * @param int
 * @return bool
 **/
function posix_setpgid($pid, $pgid) {}

/**
 * Make the current process a session leader.
 *
 * @return int
 **/
function posix_setsid() {}

/**
 * Set the real user ID of the current process. This is a privileged
 * function that needs appropriate privileges (usually root) on
 * the system to be able to perform this function.
 *
 * @param int
 * @return bool
 **/
function posix_setuid($uid) {}

/**
 * Returns the POSIX system error message associated with the given
 * errno. You may get the
 * errno parameter by calling
 * posix_get_last_error.
 *
 * @param int
 * @return string
 **/
function posix_strerror($errno) {}

/**
 * Gets information about the current CPU usage.
 *
 * @return array
 **/
function posix_times() {}

/**
 * Returns a string for the absolute path to the current
 * terminal device that is open on the file descriptor
 * fd.
 *
 * @param int
 * @return string
 **/
function posix_ttyname($fd) {}

/**
 * Gets information about the system.
 *
 * @return array
 **/
function posix_uname() {}

/**
 * This function deletes the printers spool file.
 *
 * @param resource
 * @return void
 **/
function printer_abort($printer_handle) {}

/**
 * This function closes the printer connection.
 * printer_close also closes the active device
 * context.
 *
 * @param resource
 * @return void
 **/
function printer_close($printer_handle) {}

/**
 * The function creates a new brush and returns a handle to it. A brush is
 * used to fill shapes. For an example see
 * printer_select_brush.
 *
 * @param int
 * @param string
 * @return resource
 **/
function printer_create_brush($style, $color) {}

/**
 * The function creates a new device context. A device context is used
 * to customize the graphic objects of the document.
 *
 * @param resource
 * @return void
 **/
function printer_create_dc($printer_handle) {}

/**
 * The function creates a new font and returns a handle to it. A font is
 * used to draw text. For an example see
 * printer_select_font.
 *
 * @param string
 * @param int
 * @param int
 * @param int
 * @param bool
 * @param bool
 * @param bool
 * @param int
 * @return resource
 **/
function printer_create_font($face, $height, $width, $font_weight, $italic, $underline, $strikeout, $orientation) {}

/**
 * The function creates a new pen and returns a handle to it. A pen is
 * used to draw lines and curves. For an example see
 * printer_select_pen.
 *
 * @param int
 * @param int
 * @param string
 * @return resource
 **/
function printer_create_pen($style, $width, $color) {}

/**
 * The function deletes the selected brush. For an example see
 * printer_select_brush.
 *
 * @param resource
 * @return void
 **/
function printer_delete_brush($brush_handle) {}

/**
 * The function deletes the device context.
 * For an example see printer_create_dc.
 *
 * @param resource
 * @return bool
 **/
function printer_delete_dc($printer_handle) {}

/**
 * The function deletes the selected font. For an example see
 * printer_select_font.
 *
 * @param resource
 * @return void
 **/
function printer_delete_font($font_handle) {}

/**
 * The function deletes the selected pen. For an example see
 * printer_select_pen.
 *
 * @param resource
 * @return void
 **/
function printer_delete_pen($pen_handle) {}

/**
 * The function draws an bmp.
 *
 * @param resource
 * @param string
 * @param int
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function printer_draw_bmp($printer_handle, $filename, $x, $y, $width, $height) {}

/**
 * The function simply draws an chord.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return void
 **/
function printer_draw_chord($printer_handle, $rec_x, $rec_y, $rec_x1, $rec_y1, $rad_x, $rad_y, $rad_x1, $rad_y1) {}

/**
 * The function draws an ellipse.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @return void
 **/
function printer_draw_elipse($printer_handle, $ul_x, $ul_y, $lr_x, $lr_y) {}

/**
 * The function draws a line using the selected pen.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @return void
 **/
function printer_draw_line($printer_handle, $from_x, $from_y, $to_x, $to_y) {}

/**
 * The function draws an pie.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return void
 **/
function printer_draw_pie($printer_handle, $rec_x, $rec_y, $rec_x1, $rec_y1, $rad1_x, $rad1_y, $rad2_x, $rad2_y) {}

/**
 * The function draws a rectangle.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @return void
 **/
function printer_draw_rectangle($printer_handle, $ul_x, $ul_y, $lr_x, $lr_y) {}

/**
 * The function draws a rectangle with rounded corners.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @return void
 **/
function printer_draw_roundrect($printer_handle, $ul_x, $ul_y, $lr_x, $lr_y, $width, $height) {}

/**
 * The function draws text at position
 * x, y using the selected
 * font.
 *
 * @param resource
 * @param string
 * @param int
 * @param int
 * @return void
 **/
function printer_draw_text($printer_handle, $text, $x, $y) {}

/**
 * Closes a new document in the printer spooler. The document
 * is now ready for printing. For an example see
 * printer_start_doc.
 *
 * @param resource
 * @return bool
 **/
function printer_end_doc($printer_handle) {}

/**
 * The function closes the active page in the active document. For an
 * example see printer_start_doc.
 *
 * @param resource
 * @return bool
 **/
function printer_end_page($printer_handle) {}

/**
 * The function retrieves the configuration setting of option.
 *
 * @param resource
 * @param string
 * @return mixed
 **/
function printer_get_option($printer_handle, $option) {}

/**
 * The function enumerates available printers and their capabilities.
 *
 * @param int
 * @param string
 * @param int
 * @return array
 **/
function printer_list($enumtype, $name, $level) {}

/**
 * The function calculates the logical font height of height.
 *
 * @param resource
 * @param int
 * @return int
 **/
function printer_logical_fontheight($printer_handle, $height) {}

/**
 * This function tries to open a connection to the given printer.
 *
 * @param string
 * @return resource
 **/
function printer_open($printername) {}

/**
 * The function selects a brush as the active drawing object of the actual
 * device context. A brush is used to fill shapes. If you draw an rectangle
 * the brush is used to draw the shapes, while the pen is used to draw the
 * border.
 *
 * @param resource
 * @param resource
 * @return void
 **/
function printer_select_brush($printer_handle, $brush_handle) {}

/**
 * The function selects a font to draw text.
 *
 * @param resource
 * @param resource
 * @return void
 **/
function printer_select_font($printer_handle, $font_handle) {}

/**
 * The function selects a pen as the active drawing object of the actual
 * device context. A pen is used to draw lines and curves. I.e. if you draw
 * a single line the pen is used. If you draw an rectangle the pen is used
 * to draw the borders, while the brush is used to fill the shape.
 * If you haven't selected a pen before drawing shapes, the shape won't be
 * outlined.
 *
 * @param resource
 * @param resource
 * @return void
 **/
function printer_select_pen($printer_handle, $pen_handle) {}

/**
 * The function sets options for the current connection.
 *
 * @param resource
 * @param int
 * @param mixed
 * @return bool
 **/
function printer_set_option($printer_handle, $option, $value) {}

/**
 * The function creates a new document in the printer spooler. A document
 * can contain multiple pages, it's used to schedule the print job in the
 * spooler.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function printer_start_doc($printer_handle, $document) {}

/**
 * The function creates a new page in the active document. For an
 * example see printer_start_doc.
 *
 * @param resource
 * @return bool
 **/
function printer_start_page($printer_handle) {}

/**
 * Writes content directly to the printer.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function printer_write($printer_handle, $content) {}

/**
 * Adds a bookmark for the current page. Bookmarks usually appear in
 * PDF-Viewers left of the page in a hierarchical tree. Clicking on a
 * bookmark will jump to the given page.
 *
 * @param resource
 * @param string
 * @param int
 * @param int
 * @return int
 **/
function ps_add_bookmark($psdoc, $text, $parent, $open) {}

/**
 * Places a hyperlink at the given position pointing to a file program
 * which is being started when clicked on. The hyperlink's source position
 * is a rectangle
 * with its lower left corner at (llx, lly) and its upper right corner at
 * (urx, ury). The rectangle has by default a thin blue border.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @param float
 * @param string
 * @return bool
 **/
function ps_add_launchlink($psdoc, $llx, $lly, $urx, $ury, $filename) {}

/**
 * Places a hyperlink at the given position pointing to a page in the same
 * document. Clicking on the link will jump to the given page. The first page
 * in a document has number 1.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @param float
 * @param int
 * @param string
 * @return bool
 **/
function ps_add_locallink($psdoc, $llx, $lly, $urx, $ury, $page, $dest) {}

/**
 * Adds a note at a certain position on the page. Notes are like little
 * rectangular sheets with text on it, which can be placed anywhere on
 * a page. They
 * are shown either folded or unfolded. If unfolded, the specified icon
 * is used as a placeholder.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @param float
 * @param string
 * @param string
 * @param string
 * @param int
 * @return bool
 **/
function ps_add_note($psdoc, $llx, $lly, $urx, $ury, $contents, $title, $icon, $open) {}

/**
 * Places a hyperlink at the given position pointing to a second pdf document.
 * Clicking on the link will branch to the document at the given page. The
 * first page in a document has number 1.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @param float
 * @param string
 * @param int
 * @param string
 * @return bool
 **/
function ps_add_pdflink($psdoc, $llx, $lly, $urx, $ury, $filename, $page, $dest) {}

/**
 * Places a hyperlink at the given position pointing to a web page. The 
 * hyperlink's source position is a rectangle with its lower left corner at
 * (llx, lly) and
 * its upper right corner at (urx,
 * ury). The rectangle has by default a thin
 * blue border.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @param float
 * @param string
 * @return bool
 **/
function ps_add_weblink($psdoc, $llx, $lly, $urx, $ury, $url) {}

/**
 * Draws a portion of a circle with at middle point at
 * (x, y). The arc starts at an
 * angle of alpha and ends at an angle of
 * beta. It is drawn counterclockwise (use
 * ps_arcn to draw clockwise). The subpath added
 * to the current path starts on the arc at angle alpha
 * and ends on the arc at angle beta.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @return bool
 **/
function ps_arc($psdoc, $x, $y, $radius, $alpha, $beta) {}

/**
 * Draws a portion of a circle with at middle point at
 * (x, y). The arc starts at an
 * angle of alpha and ends at an angle of
 * beta. It is drawn clockwise (use
 * ps_arc to draw counterclockwise). The subpath added to
 * the current path starts on the arc at angle beta and
 * ends on the arc at angle alpha.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @return bool
 **/
function ps_arcn($psdoc, $x, $y, $radius, $alpha, $beta) {}

/**
 * Starts a new page. Although the parameters width
 * and height imply a different page size for each
 * page, this is not possible in PostScript. The first call of
 * ps_begin_page will set the page size for the whole
 * document. Consecutive calls will have no effect, except for creating a new
 * page. The situation is different if you intent to convert the PostScript
 * document into PDF. This function places pdfmarks into the document which
 * can set the size for each page indiviually. The resulting PDF document will
 * have different page sizes.
 *
 * @param resource
 * @param float
 * @param float
 * @return bool
 **/
function ps_begin_page($psdoc, $width, $height) {}

/**
 * Starts a new pattern. A pattern is like a page containing e.g. a drawing
 * which can be used for filling areas. It is used like a color by calling
 * ps_setcolor and setting the color space to
 * pattern.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @param float
 * @param int
 * @return int
 **/
function ps_begin_pattern($psdoc, $width, $height, $xstep, $ystep, $painttype) {}

/**
 * Starts a new template. A template is called a form in the postscript
 * language. It is created similar to a pattern but used like an image.
 * Templates are often used for drawings which are placed several times
 * through out the document, e.g. like a company logo. All drawing functions
 * may be used within a template. The template will not be drawn until
 * it is placed by ps_place_image.
 *
 * @param resource
 * @param float
 * @param float
 * @return int
 **/
function ps_begin_template($psdoc, $width, $height) {}

/**
 * Draws a circle with its middle point at (x,
 * y). The circle starts and ends at position
 * (x+radius,
 * y). If this function is called outside a path it
 * will start a new path. If it is called within a path it will add the circle
 * as a subpath. If the last drawing operation does not end in point
 * (x+radius,
 * y) then there will be a gap in the path.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @return bool
 **/
function ps_circle($psdoc, $x, $y, $radius) {}

/**
 * Takes the current path and uses it to define the border of a clipping area.
 * Everything drawn outside of that area will not be visible.
 *
 * @param resource
 * @return bool
 **/
function ps_clip($psdoc) {}

/**
 * Closes an image and frees its resources. Once an image is closed
 * it cannot be used anymore.
 *
 * @param resource
 * @param int
 * @return void
 **/
function ps_close_image($psdoc, $imageid) {}

/**
 * Closes the PostScript document.
 *
 * @param resource
 * @return bool
 **/
function ps_close($psdoc) {}

/**
 * Connects the last point with first point of a path and draws the resulting
 * closed line.
 *
 * @param resource
 * @return bool
 **/
function ps_closepath_stroke($psdoc) {}

/**
 * Connects the last point with the first point of a path. The resulting
 * path can be used for stroking, filling, clipping, etc..
 *
 * @param resource
 * @return bool
 **/
function ps_closepath($psdoc) {}

/**
 * Output a text one line below the last line. The line spacing is
 * taken from the value "leading" which must be set with
 * ps_set_value. The actual position of the
 * text is determined by the values "textx" and "texty" which can be requested
 * with ps_get_value
 *
 * @param resource
 * @param string
 * @return bool
 **/
function ps_continue_text($psdoc, $text) {}

/**
 * Add a section of a cubic Bézier curve described by the three given control
 * points to the current path.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @return bool
 **/
function ps_curveto($psdoc, $x1, $y1, $x2, $y2, $x3, $y3) {}

/**
 * Mainly frees memory used by the document. Also closes a file, if it was not
 * closed before with ps_close. You should in any case
 * close the file with ps_close before, because
 * ps_close not just closes the file but also outputs a
 * trailor containing PostScript comments like the number of pages in the
 * document and adding the bookmark hierarchy.
 *
 * @param resource
 * @return bool
 **/
function ps_delete($psdoc) {}

/**
 * Ends a page which was started with ps_begin_page.
 * Ending a page will leave the current drawing context, which e.g. requires
 * to reload fonts if they were loading within the page, and to set many
 * other drawing parameters like the line width, or color..
 *
 * @param resource
 * @return bool
 **/
function ps_end_page($psdoc) {}

/**
 * Ends a pattern which was started with ps_begin_pattern.
 * Once a pattern has been ended, it can be used like a color to fill
 * areas.
 *
 * @param resource
 * @return bool
 **/
function ps_end_pattern($psdoc) {}

/**
 * Ends a template which was started with ps_begin_template.
 * Once a template has been ended, it can be used like an image.
 *
 * @param resource
 * @return bool
 **/
function ps_end_template($psdoc) {}

/**
 * Fills and draws the path constructed with previously called drawing
 * functions like ps_lineto.
 *
 * @param resource
 * @return bool
 **/
function ps_fill_stroke($psdoc) {}

/**
 * Fills the path constructed with previously called drawing functions like
 * ps_lineto.
 *
 * @param resource
 * @return bool
 **/
function ps_fill($psdoc) {}

/**
 * Loads a font for later use. Before text is output with a loaded font it
 * must be set with ps_setfont. This function needs the
 * adobe font metric file in order to calculate the space used up by the
 * characters. A font which is loaded within a page will only be available on
 * that page. Fonts which are to be used in the complete document have to be
 * loaded before the first call of ps_begin_page. Calling
 * ps_findfont between pages will make that font
 * available for all following pages.
 *
 * @param resource
 * @param string
 * @param string
 * @param bool
 * @return int
 **/
function ps_findfont($psdoc, $fontname, $encoding, $embed) {}

/**
 * This function is not implemented yet. It will always return an empty
 * string. The idea for a later implementation is to write the contents of
 * the postscript file into an internal buffer if in memory creation is
 * requested, and retrieve the buffer content with this function.
 * Currently, documents
 * created in memory are send to the browser without buffering.
 *
 * @param resource
 * @return string
 **/
function ps_get_buffer($psdoc) {}

/**
 * Gets several parameters which were directly set by
 * ps_set_parameter or indirectly by one of the other
 * functions. Parameters are by definition string
 * values. This function cannot be used to retrieve resources which were also
 * set by ps_set_parameter.
 *
 * @param resource
 * @param string
 * @param float
 * @return string
 **/
function ps_get_parameter($psdoc, $name, $modifier) {}

/**
 * Gets several values which were set by
 * ps_set_value. Values are by definition float values.
 *
 * @param resource
 * @param string
 * @param float
 * @return float
 **/
function ps_get_value($psdoc, $name, $modifier) {}

/**
 * Hyphenates the passed word. ps_hyphenate evaluates the
 * value hyphenminchars (set by ps_set_value) and
 * the parameter hyphendict (set by ps_set_parameter).
 * hyphendict must be set before calling this function.
 *
 * @param resource
 * @param string
 * @return array
 **/
function ps_hyphenate($psdoc, $text) {}

/**
 * @param resource
 * @param string
 * @return bool
 **/
function ps_include_file($psdoc, $file) {}

/**
 * Adds a straight line from the current point to the given coordinates to the
 * current path. Use ps_moveto to set the starting point
 * of the line.
 *
 * @param resource
 * @param float
 * @param float
 * @return bool
 **/
function ps_lineto($psdoc, $x, $y) {}

/**
 * Creates a spot color from the current fill color. The fill color must be
 * defined in rgb, cmyk or gray colorspace. The spot color name can be an
 * arbitrary name. A spot color can be set as any color with
 * ps_setcolor. When the document is not printed
 * but displayed by an postscript viewer the given color in the specified
 * color space is use.
 *
 * @param resource
 * @param string
 * @param float
 * @return int
 **/
function ps_makespotcolor($psdoc, $name, $reserved) {}

/**
 * Sets the current point to new coordinates. If this is the first call of
 * ps_moveto after a previous path has been ended then it
 * will start a new path. If this function is called in the middle of a path
 * it will just set the current point and start a subpath.
 *
 * @param resource
 * @param float
 * @param float
 * @return bool
 **/
function ps_moveto($psdoc, $x, $y) {}

/**
 * Creates a new document instance. It does not create the file on disk or in
 * memory, it just sets up everything. ps_new is usually
 * followed by a call of ps_open_file to actually create
 * the postscript document.
 *
 * @return resource
 **/
function ps_new() {}

/**
 * Creates a new file on disk and writes the PostScript document into it. The
 * file will be closed when ps_close is called.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function ps_open_file($psdoc, $filename) {}

/**
 * Loads an image for later use.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param int
 * @return int
 **/
function ps_open_image_file($psdoc, $type, $filename, $stringparam, $intparam) {}

/**
 * Reads an image which is already available in memory. The parameter
 * source is currently not evaluated and assumed to be
 * memory. The image data is a sequence of pixels starting
 * in th upper left corner and ending in the lower right corner. Each pixel
 * consists of components color components, and each
 * component has bpc bits.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param int
 * @param int
 * @param int
 * @param int
 * @param int
 * @param string
 * @return int
 **/
function ps_open_image($psdoc, $type, $source, $data, $lenght, $width, $height, $components, $bpc, $params) {}

/**
 * @param resource
 * @param int
 * @return int
 **/
function ps_open_memory_image($psdoc, $gd) {}

/**
 * Places a formerly loaded image on the page. The image can be scaled.
 * If the image shall be rotated as well, you will have to rotate the
 * coordinate system before with ps_rotate.
 *
 * @param resource
 * @param int
 * @param float
 * @param float
 * @param float
 * @return bool
 **/
function ps_place_image($psdoc, $imageid, $x, $y, $scale) {}

/**
 * Draws a rectangle with its lower left corner at (x,
 * y). The rectangle starts and ends in its lower left
 * corner. If this function is called outside a path it will start a new path.
 * If it is called within a path it will add the rectangle as a subpath. If
 * the last drawing operation does not end in the lower left corner then there
 * will be a gap in the path.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @param float
 * @return bool
 **/
function ps_rect($psdoc, $x, $y, $width, $height) {}

/**
 * Restores a previously saved graphics context. Any call of
 * ps_save must be accompanied by a call to
 * ps_restore. All coordinate transformations, line
 * style settings, color settings, etc. are being restored to the state
 * before the call of ps_save.
 *
 * @param resource
 * @return bool
 **/
function ps_restore($psdoc) {}

/**
 * Sets the rotation of the coordinate system.
 *
 * @param resource
 * @param float
 * @return bool
 **/
function ps_rotate($psdoc, $rot) {}

/**
 * Saves the current graphics context, containing colors, translation and
 * rotation settings and some more. A saved context can be restored with
 * ps_restore.
 *
 * @param resource
 * @return bool
 **/
function ps_save($psdoc) {}

/**
 * Sets horizontal and vertical scaling of the coordinate system.
 *
 * @param resource
 * @param float
 * @param float
 * @return bool
 **/
function ps_scale($psdoc, $x, $y) {}

/**
 * Links added with one of the functions ps_add_weblink,
 * ps_add_pdflink, etc. will be displayed with a
 * surounded rectangle when the postscript document is converted to
 * pdf and viewed in a pdf viewer. This rectangle is not visible in
 * the postscript document.
 * This function sets the color of the rectangle's border line.
 *
 * @param resource
 * @param float
 * @param float
 * @param float
 * @return bool
 **/
function ps_set_border_color($psdoc, $red, $green, $blue) {}

/**
 * Links added with one of the functions ps_add_weblink,
 * ps_add_pdflink, etc. will be displayed with a
 * surounded rectangle when the postscript document is converted to
 * pdf and viewed in a pdf viewer. This rectangle is not visible in
 * the postscript document.
 * This function sets the length of the black and white portion of a
 * dashed border line.
 *
 * @param resource
 * @param float
 * @param float
 * @return bool
 **/
function ps_set_border_dash($psdoc, $black, $white) {}

/**
 * Links added with one of the functions ps_add_weblink,
 * ps_add_pdflink, etc. will be displayed with a
 * surounded rectangle when the postscript document is converted to
 * pdf and viewed in a pdf viewer. This rectangle is not visible in
 * the postscript document.
 * This function sets the appearance and width of the border line.
 *
 * @param resource
 * @param string
 * @param float
 * @return bool
 **/
function ps_set_border_style($psdoc, $style, $width) {}

/**
 * Sets certain information fields of the document. This fields will be shown
 * as a comment in the header of the PostScript file. If the document is
 * converted to pdf this fields will also be used for the document
 * information.
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function ps_set_info($p, $key, $val) {}

/**
 * Sets several parameters which are used by many functions. Parameters are by
 * definition string values.
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function ps_set_parameter($psdoc, $name, $value) {}

/**
 * Set the position for the next text output. You may alternatively set the x
 * and y value separately by calling ps_set_value and
 * choosing textx respectively texty as
 * the value name.
 *
 * @param resource
 * @param float
 * @param float
 * @return bool
 **/
function ps_set_text_pos($psdoc, $x, $y) {}

/**
 * Sets several values which are used by many functions. Parameters are by
 * definition float values.
 *
 * @param resource
 * @param string
 * @param float
 * @return bool
 **/
function ps_set_value($psdoc, $name, $value) {}

/**
 * Sets the color for drawing, filling, or both.
 *
 * @param resource
 * @param string
 * @param string
 * @param float
 * @param float
 * @param float
 * @param float
 * @return bool
 **/
function ps_setcolor($psdoc, $type, $colorspace, $c1, $c2, $c3, $c4) {}

/**
 * Sets the length of the black and white portions of a dashed line.
 *
 * @param resource
 * @param float
 * @param float
 * @return bool
 **/
function ps_setdash($psdoc, $on, $off) {}

/**
 * @param resource
 * @param float
 * @return bool
 **/
function ps_setflat($psdoc, $value) {}

/**
 * Sets a font, which has to be loaded before with
 * ps_findfont. Outputting text without setting a font
 * results in an error.
 *
 * @param resource
 * @param int
 * @param float
 * @return bool
 **/
function ps_setfont($psdoc, $fontid, $size) {}

/**
 * Sets the gray value for all following drawing operations.
 *
 * @param resource
 * @param float
 * @return bool
 **/
function ps_setgray($psdoc, $gray) {}

/**
 * Sets how line ends look like.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function ps_setlinecap($psdoc, $type) {}

/**
 * Sets how lines are joined.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function ps_setlinejoin($psdoc, $type) {}

/**
 * Sets the line width for all following drawing operations.
 *
 * @param resource
 * @param float
 * @return bool
 **/
function ps_setlinewidth($psdoc, $width) {}

/**
 * If two lines join in a small angle and the line join is set to
 * PS_LINEJOIN_MITER, then
 * the resulting spike will be very long. The miter limit is the maximum
 * ratio of the miter length (the length of the spike) and the line width.
 *
 * @param resource
 * @param float
 * @return bool
 **/
function ps_setmiterlimit($psdoc, $value) {}

/**
 * @param resource
 * @param int
 * @return bool
 **/
function ps_setoverprintmode($psdoc, $mode) {}

/**
 * Sets the length of the black and white portions of a dashed line.
 * ps_setpolydash is used to set more complicated dash
 * patterns.
 *
 * @param resource
 * @param float
 * @return bool
 **/
function ps_setpolydash($psdoc, $arr) {}

/**
 * Creates a pattern based on a shading, which has to be created before with
 * ps_shading. Shading patterns can be used like regular
 * patterns.
 *
 * @param resource
 * @param int
 * @param string
 * @return int
 **/
function ps_shading_pattern($psdoc, $shadingid, $optlist) {}

/**
 * Creates a shading, which can be used by ps_shfill or
 * ps_shading_pattern.
 *
 * @param resource
 * @param string
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @param string
 * @return int
 **/
function ps_shading($psdoc, $type, $x0, $y0, $x1, $y1, $c1, $c2, $c3, $c4, $optlist) {}

/**
 * Fills an area with a shading, which has to be created before with
 * ps_shading. This is an alternative way to creating
 * a pattern from a shading ps_shading_pattern and using
 * the pattern as the filling color.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function ps_shfill($psdoc, $shadingid) {}

/**
 * Outputs a text in a given box. The lower left corner of the box is at
 * (left, bottom). Line breaks
 * will be inserted where needed. Multiple spaces are treated as one.
 * Tabulators are treated as spaces.
 *
 * @param resource
 * @param string
 * @param float
 * @param float
 * @param float
 * @param float
 * @param string
 * @param string
 * @return int
 **/
function ps_show_boxed($psdoc, $text, $left, $bottom, $width, $height, $hmode, $feature) {}

/**
 * Output a text at the given text position.
 *
 * @param resource
 * @param string
 * @param float
 * @param float
 * @return bool
 **/
function ps_show_xy($psdoc, $text, $x, $y) {}

/**
 * @param resource
 * @param string
 * @param int
 * @param float
 * @param float
 * @return bool
 **/
function ps_show_xy2($psdoc, $text, $len, $xcoor, $ycoor) {}

/**
 * Output a text at the current text position. The text position can be set
 * by storing the x and y coordinates into the values textx
 * and texty with the function
 * ps_set_value. The function will issue an
 * error if a font was not set before with ps_setfont.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function ps_show($psdoc, $text) {}

/**
 * @param resource
 * @param string
 * @param int
 * @return bool
 **/
function ps_show2($psdoc, $text, $len) {}

/**
 * This function is similar to ps_stringwidth but returns
 * an array of dimensions containing the width, ascender, and descender
 * of the text.
 *
 * @param resource
 * @param string
 * @param int
 * @param float
 * @return array
 **/
function ps_string_geometry($psdoc, $text, $fontid, $size) {}

/**
 * Calculates the width of a string in points if it was output
 * in the given font and font size.
 * This function needs an Adobe font
 * metrics file to calculate the precise width. If kerning is turned on,
 * it will be taken into account.
 *
 * @param resource
 * @param string
 * @param int
 * @param float
 * @return float
 **/
function ps_stringwidth($psdoc, $text, $fontid, $size) {}

/**
 * Draws the path constructed with previously called drawing functions like
 * ps_lineto.
 *
 * @param resource
 * @return bool
 **/
function ps_stroke($psdoc) {}

/**
 * This function needs an Adobe font metrics file to know which glyphs are
 * available.
 *
 * @param resource
 * @param int
 * @param int
 * @return string
 **/
function ps_symbol_name($psdoc, $ord, $fontid) {}

/**
 * Calculates the width of a glyph in points if it was output in the given
 * font and font size. This function needs an Adobe font metrics file to
 * calculate the precise width.
 *
 * @param resource
 * @param int
 * @param int
 * @param float
 * @return float
 **/
function ps_symbol_width($psdoc, $ord, $fontid, $size) {}

/**
 * Output the glyph at position ord in the font
 * encoding vector of the current font. The font encoding for a font can be
 * set when loading the font with ps_findfont.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function ps_symbol($psdoc, $ord) {}

/**
 * Sets a new initial point of the coordinate system.
 *
 * @param resource
 * @param float
 * @param float
 * @return bool
 **/
function ps_translate($psdoc, $x, $y) {}

/**
 * @param int
 * @param string
 * @return bool
 **/
function pspell_add_to_personal($dictionary_link, $word) {}

/**
 * @param int
 * @param string
 * @return bool
 **/
function pspell_add_to_session($dictionary_link, $word) {}

/**
 * @param int
 * @param string
 * @return bool
 **/
function pspell_check($dictionary_link, $word) {}

/**
 * @param int
 * @return bool
 **/
function pspell_clear_session($dictionary_link) {}

/**
 * Create a config used to open a dictionary.
 *
 * @param string
 * @param string
 * @param string
 * @param string
 * @return int
 **/
function pspell_config_create($language, $spelling, $jargon, $encoding) {}

/**
 * @param int
 * @param string
 * @return bool
 **/
function pspell_config_data_dir($conf, $directory) {}

/**
 * @param int
 * @param string
 * @return bool
 **/
function pspell_config_dict_dir($conf, $directory) {}

/**
 * @param int
 * @param int
 * @return bool
 **/
function pspell_config_ignore($dictionary_link, $n) {}

/**
 * @param int
 * @param int
 * @return bool
 **/
function pspell_config_mode($dictionary_link, $mode) {}

/**
 * Set a file that contains personal wordlist. The personal wordlist will be
 * loaded and used in addition to the standard one after you call
 * pspell_new_config. The file is also the file where
 * pspell_save_wordlist will save personal wordlist to.
 *
 * @param int
 * @param string
 * @return bool
 **/
function pspell_config_personal($dictionary_link, $file) {}

/**
 * Set a file that contains replacement pairs.
 *
 * @param int
 * @param string
 * @return bool
 **/
function pspell_config_repl($dictionary_link, $file) {}

/**
 * This function determines whether run-together words will be treated as
 * legal compounds. That is, "thecat" will be a legal compound, although
 * there should be a space between the two words. Changing this setting only
 * affects the results returned by pspell_check;
 * pspell_suggest will still return suggestions.
 *
 * @param int
 * @param bool
 * @return bool
 **/
function pspell_config_runtogether($dictionary_link, $flag) {}

/**
 * pspell_config_save_repl determines whether
 * pspell_save_wordlist will save the replacement pairs
 * along with the wordlist. Usually there is no need to use this function
 * because if pspell_config_repl is used, the
 * replacement pairs will be saved by
 * pspell_save_wordlist anyway, and if it is not,
 * the replacement pairs will not be saved.
 *
 * @param int
 * @param bool
 * @return bool
 **/
function pspell_config_save_repl($dictionary_link, $flag) {}

/**
 * @param int
 * @return int
 **/
function pspell_new_config($config) {}

/**
 * For more information and examples, check out inline manual pspell
 * website:.
 *
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string
 * @param int
 * @return int
 **/
function pspell_new_personal($personal, $language, $spelling, $jargon, $encoding, $mode) {}

/**
 * pspell_new opens up a new dictionary and
 * returns the dictionary link identifier for use in other pspell
 * functions.
 *
 * @param string
 * @param string
 * @param string
 * @param string
 * @param int
 * @return int
 **/
function pspell_new($language, $spelling, $jargon, $encoding, $mode) {}

/**
 * @param int
 * @return bool
 **/
function pspell_save_wordlist($dictionary_link) {}

/**
 * @param int
 * @param string
 * @param string
 * @return bool
 **/
function pspell_store_replacement($dictionary_link, $misspelled, $correct) {}

/**
 * @param int
 * @param string
 * @return array
 **/
function pspell_suggest($dictionary_link, $word) {}

/**
 * @return string
 **/
function qdom_error() {}

/**
 * @param string
 * @return QDomDocument
 **/
function qdom_tree($doc) {}

/**
 * @return resource
 **/
function radius_acct_open() {}

/**
 * radius_add_server may be called multiple times, and it
 * may be used together with radius_config. At most 10
 * servers may be specified. When multiple servers are given, they are tried
 * in round-robin fashion until a valid response is received, or until each
 * server's max_tries limit has been reached.
 *
 * @param resource
 * @param string
 * @param int
 * @param string
 * @param int
 * @param int
 * @return bool
 **/
function radius_add_server($radius_handle, $hostname, $port, $secret, $timeout, $max_tries) {}

/**
 * @return resource
 **/
function radius_auth_open() {}

/**
 * It is not needed to call this function because php frees all resources at
 * the end of each request.
 *
 * @param resource
 * @return bool
 **/
function radius_close($radius_handle) {}

/**
 * Before issuing any Radius requests, the library must be made aware of the
 * servers it can contact. The easiest way to configure the library is to
 * call radius_config. radius_config
 * causes the library to read a configuration file whose format is described
 * in radius.conf.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function radius_config($radius_handle, $file) {}

/**
 * A Radius request consists of a code specifying the kind of request, and
 * zero or more attributes which provide additional information. To begin
 * constructing a new request, call radius_create_request.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function radius_create_request($radius_handle, $type) {}

/**
 * @param string
 * @return string
 **/
function radius_cvt_addr($data) {}

/**
 * @param string
 * @return int
 **/
function radius_cvt_int($data) {}

/**
 * @param string
 * @return string
 **/
function radius_cvt_string($data) {}

/**
 * When using MPPE with MS-CHAPv2, the send- and recv-keys are mangled
 * (see RFC 2548), however this function is
 * useless, because I don't think that there is or will be a PPTP-MPPE
 * implementation in PHP.
 *
 * @param resource
 * @param string
 * @return string
 **/
function radius_demangle_mppe_key($radius_handle, $mangled) {}

/**
 * Some data (Passwords, MS-CHAPv1 MPPE-Keys) is mangled for security reasons,
 * and must be demangled before you can use them.
 *
 * @param resource
 * @param string
 * @return string
 **/
function radius_demangle($radius_handle, $mangled) {}

/**
 * Like Radius requests, each response may contain zero or more attributes.
 * After a response has been received successfully by
 * radius_send_request, its attributes can be extracted
 * one by one using radius_get_attr. Each time
 * radius_get_attr is called, it gets the next attribute
 * from the current response.
 *
 * @param resource
 * @return mixed
 **/
function radius_get_attr($radius_handle) {}

/**
 * If radius_get_attr returns
 * RADIUS_VENDOR_SPECIFIC,
 * radius_get_vendor_attr may be called to determine the
 * vendor.
 *
 * @param string
 * @return array
 **/
function radius_get_vendor_attr($data) {}

/**
 * @param resource
 * @param int
 * @param string
 * @return bool
 **/
function radius_put_addr($radius_handle, $type, $addr) {}

/**
 * @param resource
 * @param int
 * @param string
 * @return bool
 **/
function radius_put_attr($radius_handle, $type, $value) {}

/**
 * @param resource
 * @param int
 * @param int
 * @return bool
 **/
function radius_put_int($radius_handle, $type, $value) {}

/**
 * @param resource
 * @param int
 * @param string
 * @return bool
 **/
function radius_put_string($radius_handle, $type, $value) {}

/**
 * @param resource
 * @param int
 * @param int
 * @param string
 * @return bool
 **/
function radius_put_vendor_addr($radius_handle, $vendor, $type, $addr) {}

/**
 * @param resource
 * @param int
 * @param int
 * @param string
 * @return bool
 **/
function radius_put_vendor_attr($radius_handle, $vendor, $type, $value) {}

/**
 * @param resource
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function radius_put_vendor_int($radius_handle, $vendor, $type, $value) {}

/**
 * @param resource
 * @param int
 * @param int
 * @param string
 * @return bool
 **/
function radius_put_vendor_string($radius_handle, $vendor, $type, $value) {}

/**
 * The request authenticator is needed for demangling mangled data like
 * passwords and encryption-keys.
 *
 * @param resource
 * @return string
 **/
function radius_request_authenticator($radius_handle) {}

/**
 * After the Radius request has been constructed, it is sent by
 * radius_send_request.
 *
 * @param resource
 * @return int
 **/
function radius_send_request($radius_handle) {}

/**
 * The shared secret is needed as salt for demangling mangled data like
 * passwords and encryption-keys.
 *
 * @param resource
 * @return string
 **/
function radius_server_secret($radius_handle) {}

/**
 * If Radius-functions fail then they record an error message. This error
 * message can be retrieved with this function.
 *
 * @param resource
 * @return string
 **/
function radius_strerror($radius_handle) {}

/**
 * Close Rar archive and free all allocated resources.
 *
 * @param resource
 * @return bool
 **/
function rar_close($rar_file) {}

/**
 * Get entry object from the Rar archive.
 *
 * @param resource
 * @param string
 * @return RarEntry
 **/
function rar_entry_get($rar_file, $entry_name) {}

/**
 * Get entries list from the Rar archive.
 *
 * @param resource
 * @return array
 **/
function rar_list($rar_file) {}

/**
 * Open specified Rar archive and return Rar file resource.
 *
 * @param string
 * @param string
 * @return resource
 **/
function rar_open($filename, $password) {}

/**
 * This function adds a line to the command line history.
 *
 * @param string
 * @return bool
 **/
function readline_add_history($line) {}

/**
 * Sets up a readline callback interface then prints
 * prompt and immediately returns. 
 * Calling this function twice without removing the previous
 * callback interface will automatically and conveniently overwrite the old
 * interface.
 *
 * @param string
 * @param callback
 * @return bool
 **/
function readline_callback_handler_install($prompt, $callback) {}

/**
 * Removes a previously installed callback handler and restores terminal
 * settings.
 *
 * @return bool
 **/
function readline_callback_handler_remove() {}

/**
 * Reads a character of user input. When a line is received, this function
 * informs the readline callback interface installed using
 * readline_callback_handler_install that a line
 * is ready for input.
 *
 * @return void
 **/
function readline_callback_read_char() {}

/**
 * This function clears the entire command line history.
 *
 * @return bool
 **/
function readline_clear_history() {}

/**
 * This function registers a completion function. This is the same kind of
 * functionality you'd get if you hit your tab key while using Bash.
 *
 * @param callback
 * @return bool
 **/
function readline_completion_function($function) {}

/**
 * Gets or sets various internal readline variables.
 *
 * @param string
 * @param string
 * @return mixed
 **/
function readline_info($varname, $newvalue) {}

/**
 * Gets the entire command line history.
 *
 * @return array
 **/
function readline_list_history() {}

/**
 * Tells readline that the cursor has moved to a new line.
 *
 * @return void
 **/
function readline_on_new_line() {}

/**
 * This function reads a command history from a file.
 *
 * @param string
 * @return bool
 **/
function readline_read_history($filename) {}

/**
 * Redraws readline to redraw the display.
 *
 * @return void
 **/
function readline_redisplay() {}

/**
 * This function writes the command history to a file.
 *
 * @param string
 * @return bool
 **/
function readline_write_history($filename) {}

/**
 * Reads a single line from the user. You must add this line to the history
 * yourself using readline_add_history.
 *
 * @param string
 * @return string
 **/
function readline($prompt) {}

/**
 * Recode the file referenced by file handle
 * input into the file referenced by file
 * handle output according to the recode
 * request.
 *
 * @param string
 * @param resource
 * @param resource
 * @return bool
 **/
function recode_file($request, $input, $output) {}

/**
 * Recode the string string according to
 * the recode request request.
 *
 * @param string
 * @param string
 * @return string
 **/
function recode_string($request, $string) {}

/**
 * @param string
 * @param string
 * @param string
 * @return string
 **/
function ereg_replace($pattern, $replacement, $string) {}

/**
 * @param string
 * @param string
 * @param array
 * @return int
 **/
function ereg($pattern, $string, $regs) {}

/**
 * This function is identical to ereg_replace
 * except that this ignores case distinction when matching
 * alphabetic characters.
 *
 * @param string
 * @param string
 * @param string
 * @return string
 **/
function eregi_replace($pattern, $replacement, $string) {}

/**
 * This function is identical to ereg except that it
 * ignores case distinction when matching alphabetic characters.
 *
 * @param string
 * @param string
 * @param array
 * @return int
 **/
function eregi($pattern, $string, $regs) {}

/**
 * Splits a string into array by regular expression.
 *
 * @param string
 * @param string
 * @param int
 * @return array
 **/
function split($pattern, $string, $limit) {}

/**
 * Splits a string into array by regular expression.
 *
 * @param string
 * @param string
 * @param int
 * @return array
 **/
function spliti($pattern, $string, $limit) {}

/**
 * Creates a regular expression for a case insensitive match.
 *
 * @param string
 * @return string
 **/
function sql_regcase($string) {}

/**
 * rpm_close will close an RPM file pointer.
 *
 * @param resource
 * @return bool
 **/
function rpm_close($rpmr) {}

/**
 * rpm_get_tag will retrieve a given tag from
 * the RPM file's header and return it.
 *
 * @param resource
 * @param int
 * @return mixed
 **/
function rpm_get_tag($rpmr, $tagnum) {}

/**
 * rpm_is_valid will test an RPM file for
 * validity as an RPM file. This is not the same as
 * rpm_open as it only checks the file for
 * validity but does not return a file pointer to be used by further
 * functions.
 *
 * @param string
 * @return bool
 **/
function rpm_is_valid($filename) {}

/**
 * rpm_open will open an RPM file and will
 * determine if the file is a valid RPM file.
 *
 * @param string
 * @return resource
 **/
function rpm_open($filename) {}

/**
 * rpm_version will return the current version of the
 * rpmreader extension.
 *
 * @return string
 **/
function rpm_version() {}

/**
 * @param string
 * @param string
 * @return bool
 **/
function runkit_class_adopt($classname, $parentname) {}

/**
 * @param string
 * @return bool
 **/
function runkit_class_emancipate($classname) {}

/**
 * @param string
 * @param mixed
 * @return bool
 **/
function runkit_constant_add($constname, $value) {}

/**
 * @param string
 * @param mixed
 * @return bool
 **/
function runkit_constant_redefine($constname, $newvalue) {}

/**
 * @param string
 * @return bool
 **/
function runkit_constant_remove($constname) {}

/**
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function runkit_function_add($funcname, $arglist, $code) {}

/**
 * @param string
 * @param string
 * @return bool
 **/
function runkit_function_copy($funcname, $targetname) {}

/**
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function runkit_function_redefine($funcname, $arglist, $code) {}

/**
 * @param string
 * @return bool
 **/
function runkit_function_remove($funcname) {}

/**
 * @param string
 * @param string
 * @return bool
 **/
function runkit_function_rename($funcname, $newname) {}

/**
 * Similar to include however any code residing outside
 * of a function or class is simply ignored.
 * Additionally, depending on the value of flags,
 * any functions or classes which already exist in the currently running environment
 * will be automatically overwritten by their new definitions.
 *
 * @param string
 * @param int
 * @return bool
 **/
function runkit_import($filename, $flags) {}

/**
 * The runkit_lint_file function performs a syntax (lint) check
 * on the specified filename testing for scripting errors. This is similar to using php -l
 * from the commandline.
 *
 * @param string
 * @return bool
 **/
function runkit_lint_file($filename) {}

/**
 * The runkit_lint function performs a syntax (lint)
 * check on the specified php code testing for scripting errors.
 * This is similar to using php -l from the command line except
 * runkit_lint accepts actual code rather than a filename.
 *
 * @param string
 * @return bool
 **/
function runkit_lint($code) {}

/**
 * @param string
 * @param string
 * @param string
 * @param string
 * @param int
 * @return bool
 **/
function runkit_method_add($classname, $methodname, $args, $code, $flags) {}

/**
 * @param string
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function runkit_method_copy($dClass, $dMethod, $sClass, $sMethod) {}

/**
 * @param string
 * @param string
 * @param string
 * @param string
 * @param int
 * @return bool
 **/
function runkit_method_redefine($classname, $methodname, $args, $code, $flags) {}

/**
 * @param string
 * @param string
 * @return bool
 **/
function runkit_method_remove($classname, $methodname) {}

/**
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function runkit_method_rename($classname, $methodname, $newname) {}

/**
 * @return bool
 **/
function runkit_return_value_used() {}

/**
 * Ordinarily, anything output (such as with echo
 * or print) will be output as though it were printed
 * from the parent's scope. Using runkit_sandbox_output_handler
 * however, output generated by the sandbox (including errors), can be captured
 * by a function outside of the sandbox.
 *
 * @param object
 * @param mixed
 * @return mixed
 **/
function runkit_sandbox_output_handler($sandbox, $callback) {}

/**
 * @return array
 **/
function runkit_superglobals() {}

/**
 * The function converts the pathname of an existing
 * accessible file and a project identifier into an
 * integer for use with for example
 * shmop_open and other System V IPC keys.
 *
 * @param string
 * @param string
 * @return int
 **/
function ftok($pathname, $proj) {}

/**
 * msg_get_queue returns an id that can be used to
 * access the System V message queue with the given
 * key. The first call creates the message queue with
 * the optional perms.
 * A second call to msg_get_queue for the same
 * key will return a different message queue
 * identifier, but both identifiers access the same underlying message
 * queue.
 *
 * @param int
 * @param int
 * @return resource
 **/
function msg_get_queue($key, $perms) {}

/**
 * Checks wether the message queue key exists.
 *
 * @param int
 * @return bool
 **/
function msg_queue_exists($key) {}

/**
 * msg_receive will receive the first message from the
 * specified queue of the type specified by
 * desiredmsgtype.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @param mixed
 * @param bool
 * @param int
 * @param int
 * @return bool
 **/
function msg_receive($queue, $desiredmsgtype, $msgtype, $maxsize, $message, $unserialize, $flags, $errorcode) {}

/**
 * msg_remove_queue destroys the message queue specified
 * by the queue. Only use this function when all
 * processes have finished working with the message queue and you need to
 * release the system resources held by it.
 *
 * @param resource
 * @return bool
 **/
function msg_remove_queue($queue) {}

/**
 * msg_send sends a message of type
 * msgtype (which MUST be greater than 0) to
 * the message queue specified by queue.
 *
 * @param resource
 * @param int
 * @param mixed
 * @param bool
 * @param bool
 * @param int
 * @return bool
 **/
function msg_send($queue, $msgtype, $message, $serialize, $blocking, $errorcode) {}

/**
 * msg_set_queue allows you to change the values of the
 * msg_perm.uid, msg_perm.gid, msg_perm.mode and msg_qbytes fields of the
 * underlying message queue data structure.
 *
 * @param resource
 * @param array
 * @return bool
 **/
function msg_set_queue($queue, $data) {}

/**
 * msg_stat_queue returns the message queue meta data
 * for the message queue specified by the queue.
 * This is useful, for example, to determine which process sent the message
 * that was just received.
 *
 * @param resource
 * @return array
 **/
function msg_stat_queue($queue) {}

/**
 * sem_acquire blocks (if necessary) until the semaphore
 * can be acquired. A process attempting to acquire a semaphore which it has
 * already acquired will block forever if acquiring the semaphore would cause
 * its maximum number of semaphore to be exceeded.
 *
 * @param resource
 * @return bool
 **/
function sem_acquire($sem_identifier) {}

/**
 * sem_get returns an id that can be used to
 * access the System V semaphore with the given key.
 *
 * @param int
 * @param int
 * @param int
 * @param int
 * @return resource
 **/
function sem_get($key, $max_acquire, $perm, $auto_release) {}

/**
 * sem_release releases the semaphore if it
 * is currently acquired by the calling process, otherwise
 * a warning is generated.
 *
 * @param resource
 * @return bool
 **/
function sem_release($sem_identifier) {}

/**
 * sem_remove removes the given semaphore.
 *
 * @param resource
 * @return bool
 **/
function sem_remove($sem_identifier) {}

/**
 * shm_attach returns an id that can be used to access
 * the System V shared memory with the given key, the
 * first call creates the shared memory segment with 
 * memsize and the optional perm-bits 
 * perm.
 *
 * @param int
 * @param int
 * @param int
 * @return int
 **/
function shm_attach($key, $memsize, $perm) {}

/**
 * shm_detach disconnects from the shared memory given
 * by the shm_identifier created by
 * shm_attach. Remember, that shared memory still exist
 * in the Unix system and the data is still present.
 *
 * @param int
 * @return bool
 **/
function shm_detach($shm_identifier) {}

/**
 * shm_get_var returns the variable with a given
 * variable_key, in the given shared memory segment.
 * The variable is still present in the shared memory.
 *
 * @param int
 * @param int
 * @return mixed
 **/
function shm_get_var($shm_identifier, $variable_key) {}

/**
 * shm_put_var inserts or updates the
 * variable with the given
 * variable_key.
 *
 * @param int
 * @param int
 * @param mixed
 * @return bool
 **/
function shm_put_var($shm_identifier, $variable_key, $variable) {}

/**
 * Removes a variable with a given variable_key
 * and frees the occupied memory.
 *
 * @param int
 * @param int
 * @return bool
 **/
function shm_remove_var($shm_identifier, $variable_key) {}

/**
 * shm_remove removes the shared memory
 * shm_identifier. All data will be destroyed.
 *
 * @param int
 * @return bool
 **/
function shm_remove($shm_identifier) {}

/**
 * session_cache_expire returns the current setting of
 * session.cache_expire.
 *
 * @param int
 * @return int
 **/
function session_cache_expire($new_cache_expire) {}

/**
 * session_cache_limiter returns the name of the
 * current cache limiter.
 *
 * @param string
 * @return string
 **/
function session_cache_limiter($cache_limiter) {}

/**
 * session_decode decodes the session data in
 * data, setting variables stored in the
 * session.
 *
 * @param string
 * @return bool
 **/
function session_decode($data) {}

/**
 * In order to kill the session altogether, like to log the user out, the
 * session id must also be unset. If a cookie is used to propagate the
 * session id (default behavior), then the session cookie must be deleted.
 * setcookie may be used for that.
 *
 * @return bool
 **/
function session_destroy() {}

/**
 * session_encode returns a string with the
 * contents of the current session encoded within.
 *
 * @return string
 **/
function session_encode() {}

/**
 * Gets the session cookie parameters.
 *
 * @return array
 **/
function session_get_cookie_params() {}

/**
 * session_id is used to get or set the session id for
 * the current session.
 *
 * @param string
 * @return string
 **/
function session_id($id) {}

/**
 * Finds out whether a global variable is registered in a session.
 *
 * @param string
 * @return bool
 **/
function session_is_registered($name) {}

/**
 * session_module_name gets the name of the current
 * session module.
 *
 * @param string
 * @return string
 **/
function session_module_name($module) {}

/**
 * session_name returns the name of the current
 * session.
 *
 * @param string
 * @return string
 **/
function session_name($name) {}

/**
 * session_regenerate_id will replace the current
 * session id with a new one, and keep the current session information.
 *
 * @param bool
 * @return bool
 **/
function session_regenerate_id($delete_old_session) {}

/**
 * session_register accepts a variable number of
 * arguments, any of which can be either a string holding the name of a
 * variable or an array consisting of variable names or other arrays. For
 * each name, session_register registers the global
 * variable with that name in the current session.
 *
 * @param mixed
 * @return bool
 **/
function session_register($name) {}

/**
 * session_save_path returns the path of the current
 * directory used to save session data.
 *
 * @param string
 * @return string
 **/
function session_save_path($path) {}

/**
 * Set cookie parameters defined in the file. The effect of this
 * function only lasts for the duration of the script. Thus, you need to
 * call session_set_cookie_params for every request and
 * before session_start is called.
 *
 * @param int
 * @param string
 * @param string
 * @param bool
 * @param bool
 * @return void
 **/
function session_set_cookie_params($lifetime, $path, $domain, $secure, $httponly) {}

/**
 * session_set_save_handler sets the user-level
 * session storage functions which are used for storing and
 * retrieving data associated with a session. This is most useful
 * when a storage method other than those supplied by PHP sessions
 * is preferred. i.e. Storing the session data in a local database.
 *
 * @param callback
 * @param callback
 * @param callback
 * @param callback
 * @param callback
 * @param callback
 * @return bool
 **/
function session_set_save_handler($open, $close, $read, $write, $destroy, $gc) {}

/**
 * session_start creates a session or resumes the
 * current one based on the current session id that's being passed via a
 * request, such as GET, POST, or a cookie.
 *
 * @return bool
 **/
function session_start() {}

/**
 * session_unregister unregisters the global variable
 * named name from the current session.
 *
 * @param string
 * @return bool
 **/
function session_unregister($name) {}

/**
 * The session_unset function frees all session variables
 * currently registered.
 *
 * @return void
 **/
function session_unset() {}

/**
 * End the current session and store session data.
 *
 * @return void
 **/
function session_write_close() {}

/**
 * @param int
 * @param string
 * @return bool
 **/
function session_pgsql_add_error($error_level, $error_message) {}

/**
 * Get the number of errors and optional the error messages.
 *
 * @param bool
 * @return array
 **/
function session_pgsql_get_error($with_error_message) {}

/**
 * @return string
 **/
function session_pgsql_get_field() {}

/**
 * Reset the connection to the session database servers.
 *
 * @return bool
 **/
function session_pgsql_reset() {}

/**
 * @param string
 * @return bool
 **/
function session_pgsql_set_field($value) {}

/**
 * @return array
 **/
function session_pgsql_status() {}

/**
 * shmop_close is used to close a shared memory block.
 *
 * @param int
 * @return void
 **/
function shmop_close($shmid) {}

/**
 * shmop_delete is used to delete a shared memory block.
 *
 * @param int
 * @return bool
 **/
function shmop_delete($shmid) {}

/**
 * shmop_open can create or open a shared memory block.
 *
 * @param int
 * @param string
 * @param int
 * @param int
 * @return int
 **/
function shmop_open($key, $flags, $mode, $size) {}

/**
 * shmop_read will read a string from shared memory block.
 *
 * @param int
 * @param int
 * @param int
 * @return string
 **/
function shmop_read($shmid, $start, $count) {}

/**
 * shmop_size is used to get the size, in bytes of the
 * shared memory block.
 *
 * @param int
 * @return int
 **/
function shmop_size($shmid) {}

/**
 * shmop_write will write a string into shared memory block.
 *
 * @param int
 * @param string
 * @param int
 * @return int
 **/
function shmop_write($shmid, $data, $offset) {}

/**
 * This function takes a node of a DOM
 * document and makes it into a SimpleXML node. This new object can
 * then be used as a native SimpleXML element.
 *
 * @param DOMNode
 * @param string
 * @return SimpleXMLElement
 **/
function simplexml_import_dom($node, $class_name) {}

/**
 * Convert the well-formed XML document in the given file to an object.
 *
 * @param string
 * @param string
 * @param int
 * @param string
 * @param bool
 * @return object
 **/
function simplexml_load_file($filename, $class_name, $options, $ns, $is_prefix) {}

/**
 * Takes a well-formed XML string and returns it as an object.
 *
 * @param string
 * @param string
 * @param int
 * @param string
 * @param bool
 * @return object
 **/
function simplexml_load_string($data, $class_name, $options, $ns, $is_prefix) {}

/**
 * Returns the current value stored in the UCD Library for quick_print. 
 * quick_print is off by default.
 *
 * @return bool
 **/
function snmp_get_quick_print() {}

/**
 * @return int
 **/
function snmp_get_valueretrieval() {}

/**
 * @param string
 * @return bool
 **/
function snmp_read_mib($filename) {}

/**
 * @param int
 * @return void
 **/
function snmp_set_enum_print($enum_print) {}

/**
 * @param int
 * @return void
 **/
function snmp_set_oid_numeric_print($oid_numeric_print) {}

/**
 * snmp_set_oid_output_format sets the output format
 * to be full or numeric.
 *
 * @param int
 * @return void
 **/
function snmp_set_oid_output_format($oid_format) {}

/**
 * Sets the value of quick_print within the UCD SNMP library. When this
 * is set (1), the SNMP library will return 'quick printed' values. This
 * means that just the value will be printed. When quick_print is not
 * enabled (default) the UCD SNMP library prints extra information
 * including the type of the value (i.e. IpAddress or OID). Additionally, 
 * if quick_print is not enabled, the library prints additional hex values 
 * for all strings of three characters or less.
 *
 * @param bool
 * @return void
 **/
function snmp_set_quick_print($quick_print) {}

/**
 * @param int
 * @return void
 **/
function snmp_set_valueretrieval($method) {}

/**
 * The snmpget function is used to read the
 * value of an SNMP object specified by the
 * object_id.
 *
 * @param string
 * @param string
 * @param string
 * @param int
 * @param int
 * @return string
 **/
function snmpget($hostname, $community, $object_id, $timeout, $retries) {}

/**
 * @param string
 * @param string
 * @param string
 * @param int
 * @param int
 * @return string
 **/
function snmpgetnext($host, $community, $object_id, $timeout, $retries) {}

/**
 * @param string
 * @param string
 * @param string
 * @param int
 * @param int
 * @return array
 **/
function snmprealwalk($host, $community, $object_id, $timeout, $retries) {}

/**
 * snmpset is used to set the value of an SNMP object
 * specified by the object_id.
 *
 * @param string
 * @param string
 * @param string
 * @param string
 * @param mixed
 * @param int
 * @param int
 * @return bool
 **/
function snmpset($hostname, $community, $object_id, $type, $value, $timeout, $retries) {}

/**
 * snmpwalk function is used to read all the values from
 * an SNMP agent specified by the hostname.
 *
 * @param string
 * @param string
 * @param string
 * @param int
 * @param int
 * @return array
 **/
function snmpwalk($hostname, $community, $object_id, $timeout, $retries) {}

/**
 * snmpwalkoid function is used to read all object ids
 * and their respective values from an SNMP agent specified by 
 * hostname.
 *
 * @param string
 * @param string
 * @param string
 * @param int
 * @param int
 * @return array
 **/
function snmpwalkoid($hostname, $community, $object_id, $timeout, $retries) {}

/**
 * This function is useful when you like to check if the SOAP call failed, but
 * don't like to use exceptions. To use it you must create a 
 * SoapClient object with the exceptions
 * option set to zero or .
 * In this case, the SOAP method will return a special 
 * SoapFault object which encapsulates the fault 
 * details (faultcode, faultstring, faultactor and faultdetails).
 *
 * @param mixed
 * @return bool
 **/
function is_soap_fault($obj) {}

/**
 * @param bool
 * @return bool
 **/
function use_soap_error_handler($handler) {}

/**
 * After the socket socket has been created
 * using socket_create, bound to a name with
 * socket_bind, and told to listen for connections
 * with socket_listen, this function will accept
 * incoming connections on that socket. Once a successful connection
 * is made, a new socket resource is returned, which may be used
 * for communication. If there are multiple connections queued on
 * the socket, the first will be used. If there are no pending
 * connections, socket_accept will block until
 * a connection becomes present. If socket
 * has been made non-blocking using
 * socket_set_blocking or
 * socket_set_nonblock, will be returned.
 *
 * @param resource
 * @return resource
 **/
function socket_accept($socket) {}

/**
 * Binds the name given in address to the socket
 * described by socket. This has to be done before
 * a connection is be established using socket_connect
 * or socket_listen.
 *
 * @param resource
 * @param string
 * @param int
 * @return bool
 **/
function socket_bind($socket, $address, $port) {}

/**
 * This function clears the error code on the given socket or the global
 * last socket error if no socket is specified.
 *
 * @param resource
 * @return void
 **/
function socket_clear_error($socket) {}

/**
 * socket_close closes the socket resource
 * given by socket. This function is specific to sockets
 * and cannot be used on any other type of resources.
 *
 * @param resource
 * @return void
 **/
function socket_close($socket) {}

/**
 * Initiate a connection to address using the socket resource
 * socket, which must be a valid socket
 * resource created with socket_create.
 *
 * @param resource
 * @param string
 * @param int
 * @return bool
 **/
function socket_connect($socket, $address, $port) {}

/**
 * socket_create_listen creates a new socket resource of
 * type AF_INET listening on all
 * local interfaces on the given port waiting for new connections.
 *
 * @param int
 * @param int
 * @return resource
 **/
function socket_create_listen($port, $backlog) {}

/**
 * socket_create_pair creates two connected and
 * indistinguishable sockets, and stores them in fd.
 * This function is commonly used in IPC (InterProcess Communication).
 *
 * @param int
 * @param int
 * @param int
 * @param array
 * @return bool
 **/
function socket_create_pair($domain, $type, $protocol, $fd) {}

/**
 * Creates and returns a socket resource, also referred to as an endpoint
 * of communication. A typical network connection is made up of 2 sockets, one
 * performing the role of the client, and another performing the role of the server.
 *
 * @param int
 * @param int
 * @param int
 * @return resource
 **/
function socket_create($domain, $type, $protocol) {}

/**
 * The socket_get_option function retrieves the value for
 * the option specified by the optname parameter for the
 * specified socket.
 *
 * @param resource
 * @param int
 * @param int
 * @return mixed
 **/
function socket_get_option($socket, $level, $optname) {}

/**
 * Queries the remote side of the given socket which may either result in
 * host/port or in a Unix filesystem path, dependent on its type.
 *
 * @param resource
 * @param string
 * @param int
 * @return bool
 **/
function socket_getpeername($socket, $address, $port) {}

/**
 * @param resource
 * @param string
 * @param int
 * @return bool
 **/
function socket_getsockname($socket, $addr, $port) {}

/**
 * If a socket resource is passed to this function, the last error which
 * occurred on this particular socket is returned. If the socket resource is
 * omitted, the error code of the last failed socket function is returned.
 * The latter is particularly helpful for functions like
 * socket_create which don't return a socket on
 * failure and socket_select which can fail for reasons
 * not directly tied to a particular socket. The error code is suitable to
 * be fed to socket_strerror which returns a string
 * describing the given error code.
 *
 * @param resource
 * @return int
 **/
function socket_last_error($socket) {}

/**
 * After the socket socket has been created
 * using socket_create and bound to a name with
 * socket_bind, it may be told to listen for incoming
 * connections on socket.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function socket_listen($socket, $backlog) {}

/**
 * The function socket_read reads from the socket
 * resource socket created by the
 * socket_create or
 * socket_accept functions.
 *
 * @param resource
 * @param int
 * @param int
 * @return string
 **/
function socket_read($socket, $length, $type) {}

/**
 * @param resource
 * @param string
 * @param int
 * @param int
 * @return int
 **/
function socket_recv($socket, $buf, $len, $flags) {}

/**
 * The socket_recvfrom function receives
 * len bytes of data in buf from
 * name on port port (if the
 * socket is not of type AF_UNIX) using
 * socket. socket_recvfrom can be
 * used to gather data from both connected and unconnected sockets.
 * Additionally, one or more flags can be specified to modify the behaviour of
 * the function.
 *
 * @param resource
 * @param string
 * @param int
 * @param int
 * @param string
 * @param int
 * @return int
 **/
function socket_recvfrom($socket, $buf, $len, $flags, $name, $port) {}

/**
 * socket_select accepts arrays of sockets and waits for
 * them to change status. Those coming with BSD sockets background will
 * recognize that those socket resource arrays are in fact the so-called file
 * descriptor sets. Three independent arrays of socket resources are watched.
 *
 * @param array
 * @param array
 * @param array
 * @param int
 * @param int
 * @return int
 **/
function socket_select($read, $write, $except, $tv_sec, $tv_usec) {}

/**
 * The function socket_send sends
 * len bytes to the socket
 * socket from buf.
 *
 * @param resource
 * @param string
 * @param int
 * @param int
 * @return int
 **/
function socket_send($socket, $buf, $len, $flags) {}

/**
 * The function socket_sendto sends
 * len bytes from buf
 * through the socket socket to the
 * port at the address addr.
 *
 * @param resource
 * @param string
 * @param int
 * @param int
 * @param string
 * @param int
 * @return int
 **/
function socket_sendto($socket, $buf, $len, $flags, $addr, $port) {}

/**
 * The socket_set_block function removes the 
 * O_NONBLOCK flag on the socket specified by the 
 * socket parameter.
 *
 * @param resource
 * @return bool
 **/
function socket_set_block($socket) {}

/**
 * The socket_set_nonblock function sets the 
 * O_NONBLOCK flag on the socket specified by
 * the socket parameter.
 *
 * @param resource
 * @return bool
 **/
function socket_set_nonblock($socket) {}

/**
 * The socket_set_option function sets the option
 * specified by the optname parameter, at the
 * specified protocol level, to the value pointed to
 * by the optval parameter for the 
 * socket.
 *
 * @param resource
 * @param int
 * @param int
 * @param mixed
 * @return bool
 **/
function socket_set_option($socket, $level, $optname, $optval) {}

/**
 * The socket_shutdown function allows you to stop
 * incoming, outgoing or all data (the default) from being sent through the
 * socket
 *
 * @param resource
 * @param int
 * @return bool
 **/
function socket_shutdown($socket, $how) {}

/**
 * socket_strerror takes as its
 * errno parameter a socket error code as returned by
 * socket_last_error and returns the corresponding
 * explanatory text.
 *
 * @param int
 * @return string
 **/
function socket_strerror($errno) {}

/**
 * The function socket_write writes to the
 * socket from the given
 * buffer.
 *
 * @param resource
 * @param string
 * @param int
 * @return int
 **/
function socket_write($socket, $buffer, $length) {}

/**
 * This function returns an array with the names of the interfaces that the
 * given class and its parents implement.
 *
 * @param mixed
 * @param bool
 * @return array
 **/
function class_implements($class, $autoload) {}

/**
 * This function returns an array with the name of the parent classes of
 * the given class.
 *
 * @param mixed
 * @param bool
 * @return array
 **/
function class_parents($class, $autoload) {}

/**
 * Count the elements in an iterator.
 *
 * @param IteratorAggregate
 * @return int
 **/
function iterator_count($iterator) {}

/**
 * Count the elements in an iterator.
 *
 * @param IteratorAggregate
 * @param bool
 * @return array
 **/
function iterator_to_array($iterator, $use_keys) {}

/**
 * This function can be used to manually search for a class or interface
 * using the registered __autoload functions.
 *
 * @param string
 * @return void
 **/
function spl_autoload_call($class_name) {}

/**
 * This function can modify and check the file extensions that the built in
 * __autoload fallback function spl_autoload 
 * will be using.
 *
 * @param string
 * @return string
 **/
function spl_autoload_extensions($file_extensions) {}

/**
 * Get all registered __autoload() functions.
 *
 * @return array
 **/
function spl_autoload_functions() {}

/**
 * Register a function with the spl provided __autoload stack. If the stack
 * is not yet activated it will be activated.
 *
 * @param callback
 * @return bool
 **/
function spl_autoload_register($autoload_function) {}

/**
 * Unregister a function from the spl provided __autoload stack. If the stack
 * is activated and empty after unregistering the given function then it will
 * be deactivated.
 *
 * @param mixed
 * @return bool
 **/
function spl_autoload_unregister($autoload_function) {}

/**
 * This function is intended to be used as a default implementation for
 * __autoload(). If nothing else is specified and autoload_register() is
 * called without any parameters then this functions will be used for any
 * later call to __autoload().
 *
 * @param string
 * @param string
 * @return void
 **/
function spl_autoload($class_name, $file_extensions) {}

/**
 * This function returns an array with the current available SPL classes.
 *
 * @return array
 **/
function spl_classes() {}

/**
 * This function returns an unique identifier for the object. This id can be
 * used as a hash key for storing objects or for identifying an object.
 *
 * @param object
 * @return string
 **/
function spl_object_hash($obj) {}

/**
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string
 * @return string
 **/
function calcul_hmac($clent, $siretcode, $price, $reference, $validity, $taxation, $devise, $language) {}

/**
 * @param string
 * @param string
 * @return string
 **/
function calculhmac($clent, $data) {}

/**
 * @param string
 * @param string
 * @return string
 **/
function nthmac($clent, $data) {}

/**
 * Object oriented style (method):
 *
 * @param resource
 * @param string
 * @param int
 * @param bool
 * @return array
 **/
function sqlite_array_query($dbhandle, $query, $result_type, $decode_binary) {}

/**
 * Object oriented style (method):
 *
 * @param resource
 * @param int
 * @return void
 **/
function sqlite_busy_timeout($dbhandle, $milliseconds) {}

/**
 * Object oriented style (method):
 *
 * @param resource
 * @return int
 **/
function sqlite_changes($dbhandle) {}

/**
 * Closes the given database handle.
 * If the database was persistent, it will be closed and removed from the
 * persistent list.
 *
 * @param resource
 * @return void
 **/
function sqlite_close($dbhandle) {}

/**
 * Fetches the value of a column named index_or_name
 * (if it is a string), or of the ordinal column numbered
 * index_or_name (if it is an integer) from the
 * current row of the query result handle result.
 *
 * @param resource
 * @param mixed
 * @param bool
 * @return mixed
 **/
function sqlite_column($result, $index_or_name, $decode_binary) {}

/**
 * Object oriented style (method):
 *
 * @param resource
 * @param string
 * @param callback
 * @param callback
 * @param int
 * @return void
 **/
function sqlite_create_aggregate($dbhandle, $function_name, $step_func, $finalize_func, $num_args) {}

/**
 * Object oriented style (method):
 *
 * @param resource
 * @param string
 * @param callback
 * @param int
 * @return void
 **/
function sqlite_create_function($dbhandle, $function_name, $callback, $num_args) {}

/**
 * Object oriented style (method):
 *
 * @param resource
 * @param int
 * @param bool
 * @return array
 **/
function sqlite_current($result, $result_type, $decode_binary) {}

/**
 * Returns a human readable description of the
 * error_code returned from
 * sqlite_last_error.
 *
 * @param int
 * @return string
 **/
function sqlite_error_string($error_code) {}

/**
 * sqlite_escape_string will correctly quote the string
 * specified by item
 * for use in an SQLite SQL statement. This includes doubling up
 * single-quote characters (') and checking for
 * binary-unsafe characters in the query string.
 *
 * @param string
 * @return string
 **/
function sqlite_escape_string($item) {}

/**
 * Object oriented style (method):
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function sqlite_exec($dbhandle, $query, $error_msg) {}

/**
 * sqlite_factory behaves similarly to
 * sqlite_open in that it opens an SQLite database or
 * attempts to create it if it does not exist. However, a
 * SQLiteDatabase object is
 * returned rather than a resource. Please see the
 * sqlite_open reference page for further usage and caveats.
 *
 * @param string
 * @param int
 * @param string
 * @return SQLiteDatabase
 **/
function sqlite_factory($filename, $mode, $error_message) {}

/**
 * Object oriented style (method):
 *
 * @param resource
 * @param int
 * @param bool
 * @return array
 **/
function sqlite_fetch_all($result, $result_type, $decode_binary) {}

/**
 * Object oriented style (method):
 *
 * @param resource
 * @param int
 * @param bool
 * @return array
 **/
function sqlite_fetch_array($result, $result_type, $decode_binary) {}

/**
 * Object oriented style (method):
 *
 * @param string
 * @param resource
 * @param int
 * @return array
 **/
function sqlite_fetch_column_types($table_name, $dbhandle, $result_type) {}

/**
 * Object oriented style (method):
 *
 * @param resource
 * @param string
 * @param array
 * @param bool
 * @return object
 **/
function sqlite_fetch_object($result, $class_name, $ctor_params, $decode_binary) {}

/**
 * Object oriented style (method):
 *
 * @param resource
 * @param bool
 * @return string
 **/
function sqlite_fetch_single($result, $decode_binary) {}

/**
 * Object oriented style (method):
 *
 * @param resource
 * @param int
 * @return string
 **/
function sqlite_field_name($result, $field_index) {}

/**
 * Finds whether more rows are available from the given result set.
 *
 * @param resource
 * @return bool
 **/
function sqlite_has_more($result) {}

/**
 * Object oriented style (method):
 *
 * @param resource
 * @return bool
 **/
function sqlite_has_prev($result) {}

/**
 * Object oriented style (method):
 *
 * @param resource
 * @return int
 **/
function sqlite_key($result) {}

/**
 * Object oriented style (method):
 *
 * @param resource
 * @return int
 **/
function sqlite_last_error($dbhandle) {}

/**
 * Object oriented style (method):
 *
 * @param resource
 * @return int
 **/
function sqlite_last_insert_rowid($dbhandle) {}

/**
 * The SQLite library may be compiled in either ISO-8859-1 or UTF-8
 * compatible modes. This function allows you to determine which encoding
 * scheme is used by your version of the library.
 *
 * @return string
 **/
function sqlite_libencoding() {}

/**
 * Returns the version of the linked SQLite library.
 *
 * @return string
 **/
function sqlite_libversion() {}

/**
 * Object oriented style (method):
 *
 * @param resource
 * @return bool
 **/
function sqlite_next($result) {}

/**
 * Object oriented style (method):
 *
 * @param resource
 * @return int
 **/
function sqlite_num_fields($result) {}

/**
 * Object oriented style (method):
 *
 * @param resource
 * @return int
 **/
function sqlite_num_rows($result) {}

/**
 * Object oriented style (constructor):
 *
 * @param string
 * @param int
 * @param string
 * @return resource
 **/
function sqlite_open($filename, $mode, $error_message) {}

/**
 * sqlite_popen will first check to see if a persistent
 * handle has already been opened for the given
 * filename. If it finds one, it returns that handle
 * to your script, otherwise it opens a fresh handle to the database.
 *
 * @param string
 * @param int
 * @param string
 * @return resource
 **/
function sqlite_popen($filename, $mode, $error_message) {}

/**
 * Object oriented style (method):
 *
 * @param resource
 * @return bool
 **/
function sqlite_prev($result) {}

/**
 * Object oriented style (method):
 *
 * @param resource
 * @param string
 * @param int
 * @param string
 * @return resource
 **/
function sqlite_query($dbhandle, $query, $result_type, $error_msg) {}

/**
 * Object oriented style (method):
 *
 * @param resource
 * @return bool
 **/
function sqlite_rewind($result) {}

/**
 * Object oriented style (method):
 *
 * @param resource
 * @param int
 * @return bool
 **/
function sqlite_seek($result, $rownum) {}

/**
 * Object oriented style (method):
 *
 * @param resource
 * @param string
 * @param bool
 * @param bool
 * @return array
 **/
function sqlite_single_query($db, $query, $first_row_only, $decode_binary) {}

/**
 * Decodes binary data passed as parameters to a UDF.
 *
 * @param string
 * @return string
 **/
function sqlite_udf_decode_binary($data) {}

/**
 * sqlite_udf_encode_binary applies a binary encoding
 * to the data so that it can be safely returned from
 * queries (since the underlying libsqlite API is not binary safe).
 *
 * @param string
 * @return string
 **/
function sqlite_udf_encode_binary($data) {}

/**
 * Object oriented style (method):
 *
 * @param resource
 * @param string
 * @param int
 * @param string
 * @return resource
 **/
function sqlite_unbuffered_query($dbhandle, $query, $result_type, $error_msg) {}

/**
 * Object oriented style (method):
 *
 * @param resource
 * @return bool
 **/
function sqlite_valid($result) {}

/**
 * Authenticate using a public hostkey read from a file.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function ssh2_auth_hostbased_file($session, $username, $hostname, $pubkeyfile, $privkeyfile, $passphrase, $local_username) {}

/**
 * Attempt "none" authentication which usually will (and should) fail.
 * As part of the failure, this function will return an array of accepted
 * authentication methods.
 *
 * @param resource
 * @param string
 * @return mixed
 **/
function ssh2_auth_none($session, $username) {}

/**
 * Authenticate over SSH using a plain password
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function ssh2_auth_password($session, $username, $password) {}

/**
 * Authenticate using a public key read from a file.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function ssh2_auth_pubkey_file($session, $username, $pubkeyfile, $privkeyfile, $passphrase) {}

/**
 * Establish a connection to a remote SSH server.
 *
 * @param string
 * @param int
 * @param array
 * @param array
 * @return resource
 **/
function ssh2_connect($host, $port, $methods, $callbacks) {}

/**
 * Execute a command at the remote end and allocate a channel for it.
 *
 * @param resource
 * @param string
 * @param string
 * @param array
 * @param int
 * @param int
 * @param int
 * @return resource
 **/
function ssh2_exec($session, $command, $pty, $env, $width, $height, $width_height_type) {}

/**
 * Fetches an alternate substream associated with an SSH2 channel stream.
 * The SSH2 protocol currently defines only one substream, STDERR, which has
 * a substream ID of SSH2_STREAM_STDERR (defined as 1).
 *
 * @param resource
 * @param int
 * @return resource
 **/
function ssh2_fetch_stream($channel, $streamid) {}

/**
 * Returns a server hostkey hash from an active session.
 *
 * @param resource
 * @param int
 * @return string
 **/
function ssh2_fingerprint($session, $flags) {}

/**
 * Returns list of negotiated methods.
 *
 * @param resource
 * @return array
 **/
function ssh2_methods_negotiated($session) {}

/**
 * @param resource
 * @param string
 * @param string
 * @param bool
 * @param array
 * @return bool
 **/
function ssh2_publickey_add($pkey, $algoname, $blob, $overwrite, $attributes) {}

/**
 * Request the Publickey subsystem from an already connected SSH2 server.
 *
 * @param resource
 * @return resource
 **/
function ssh2_publickey_init($session) {}

/**
 * List currently authorized publickeys.
 *
 * @param resource
 * @return array
 **/
function ssh2_publickey_list($pkey) {}

/**
 * Removes an authorized publickey.
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function ssh2_publickey_remove($pkey, $algoname, $blob) {}

/**
 * Copy a file from the remote server to the local filesystem using the SCP protocol.
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function ssh2_scp_recv($session, $remote_file, $local_file) {}

/**
 * Copy a file from the local filesystem to the remote server using the SCP protocol.
 *
 * @param resource
 * @param string
 * @param string
 * @param int
 * @return bool
 **/
function ssh2_scp_send($session, $local_file, $remote_file, $create_mode) {}

/**
 * Stats a symbolic link on the remote filesystem without
 * following the link.
 *
 * @param resource
 * @param string
 * @return array
 **/
function ssh2_sftp_lstat($sftp, $path) {}

/**
 * Creates a directory on the remote file server with permissions set to
 * mode.
 *
 * @param resource
 * @param string
 * @param int
 * @param bool
 * @return bool
 **/
function ssh2_sftp_mkdir($sftp, $dirname, $mode, $recursive) {}

/**
 * Returns the target of a symbolic link.
 *
 * @param resource
 * @param string
 * @return string
 **/
function ssh2_sftp_readlink($sftp, $link) {}

/**
 * Translates filename into the effective real path
 * on the remote filesystem.
 *
 * @param resource
 * @param string
 * @return string
 **/
function ssh2_sftp_realpath($sftp, $filename) {}

/**
 * Renames a file on the remote filesystem.
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function ssh2_sftp_rename($sftp, $from, $to) {}

/**
 * Removes a directory from the remote file server.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function ssh2_sftp_rmdir($sftp, $dirname) {}

/**
 * Stats a file on the remote filesystem following any symbolic links.
 *
 * @param resource
 * @param string
 * @return array
 **/
function ssh2_sftp_stat($sftp, $path) {}

/**
 * Creates a symbolic link named link on the remote
 * filesystem pointing to target.
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function ssh2_sftp_symlink($sftp, $target, $link) {}

/**
 * Deletes a file on the remote filesystem.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function ssh2_sftp_unlink($sftp, $filename) {}

/**
 * Request the SFTP subsystem from an already connected SSH2 server.
 *
 * @param resource
 * @return resource
 **/
function ssh2_sftp($session) {}

/**
 * Open a shell at the remote end and allocate a stream for it.
 *
 * @param resource
 * @param string
 * @param array
 * @param int
 * @param int
 * @param int
 * @return resource
 **/
function ssh2_shell($session, $term_type, $env, $width, $height, $width_height_type) {}

/**
 * Open a socket stream to an arbitrary host/port by way of the currently
 * connected SSH server.
 *
 * @param resource
 * @param string
 * @param int
 * @return resource
 **/
function ssh2_tunnel($session, $host, $port) {}

/**
 * @param array
 * @return float
 **/
function stats_absolute_deviation($a) {}

/**
 * Method
 * 
 * Cumulative distribution function (P) is calculated directly by
 * code associated with the following reference.
 * 
 * DiDinato, A. R. and Morris, A. H. Algorithm 708: Significant
 * Digit Computation of the Incomplete Beta Function Ratios. ACM
 * Trans. Math. Softw. 18 (1993), 360-373.
 * 
 * Computation of other parameters involve a search for a value that
 * produces the desired value of P. The search relies on the
 * monotinicity of P with the other parameter.
 * 
 * Note
 * 
 * The beta density is proportional to
 * t^(A-1) * (1-t)^(B-1)
 * 
 * Arguments
 * 
 * 
 * P -- The integral from 0 to X of the chi-square
 * distribution.
 * Input range: [0, 1].
 * 
 * Q -- 1-P.
 * Input range: [0, 1].
 * P + Q = 1.0.
 * 
 * X -- Upper limit of integration of beta density.
 * Input range: [0,1].
 * Search range: [0,1]
 * 
 * Y -- 1-X.
 * Input range: [0,1].
 * Search range: [0,1]
 * X + Y = 1.0.
 * 
 * A -- The first parameter of the beta density.
 * Input range: (0, +infinity).
 * Search range: [1D-100,1D100]
 * 
 * B -- The second parameter of the beta density.
 * Input range: (0, +infinity).
 * Search range: [1D-100,1D100]
 * 
 * STATUS -- 0 if calculation completed correctly
 * -I if input parameter number I is out of range
 * 1 if answer appears to be lower than lowest
 * search bound
 * 2 if answer appears to be higher than greatest
 * search bound
 * 3 if P + Q .ne. 1
 * 4 if X + Y .ne. 1
 * 
 * BOUND -- Undefined if STATUS is 0
 * 
 * Bound exceeded by parameter number I if STATUS
 * is negative.
 * 
 * Lower search bound if STATUS is 1.
 * 
 * Upper search bound if STATUS is 2.
 *
 * @param float
 * @param float
 * @param float
 * @param int
 * @return float
 **/
function stats_cdf_beta($par1, $par2, $par3, $which) {}

/**
 * @param float
 * @param float
 * @param float
 * @param int
 * @return float
 **/
function stats_cdf_binomial($par1, $par2, $par3, $which) {}

/**
 * @param float
 * @param float
 * @param float
 * @param int
 * @return float
 **/
function stats_cdf_cauchy($par1, $par2, $par3, $which) {}

/**
 * @param float
 * @param float
 * @param int
 * @return float
 **/
function stats_cdf_chisquare($par1, $par2, $which) {}

/**
 * @param float
 * @param float
 * @param int
 * @return float
 **/
function stats_cdf_exponential($par1, $par2, $which) {}

/**
 * @param float
 * @param float
 * @param float
 * @param int
 * @return float
 **/
function stats_cdf_f($par1, $par2, $par3, $which) {}

/**
 * @param float
 * @param float
 * @param float
 * @param int
 * @return float
 **/
function stats_cdf_gamma($par1, $par2, $par3, $which) {}

/**
 * @param float
 * @param float
 * @param float
 * @param int
 * @return float
 **/
function stats_cdf_laplace($par1, $par2, $par3, $which) {}

/**
 * @param float
 * @param float
 * @param float
 * @param int
 * @return float
 **/
function stats_cdf_logistic($par1, $par2, $par3, $which) {}

/**
 * @param float
 * @param float
 * @param float
 * @param int
 * @return float
 **/
function stats_cdf_negative_binomial($par1, $par2, $par3, $which) {}

/**
 * @param float
 * @param float
 * @param float
 * @param int
 * @return float
 **/
function stats_cdf_noncentral_chisquare($par1, $par2, $par3, $which) {}

/**
 * @param float
 * @param float
 * @param float
 * @param float
 * @param int
 * @return float
 **/
function stats_cdf_noncentral_f($par1, $par2, $par3, $par4, $which) {}

/**
 * @param float
 * @param float
 * @param int
 * @return float
 **/
function stats_cdf_poisson($par1, $par2, $which) {}

/**
 * @param float
 * @param float
 * @param int
 * @return float
 **/
function stats_cdf_t($par1, $par2, $which) {}

/**
 * @param float
 * @param float
 * @param float
 * @param int
 * @return float
 **/
function stats_cdf_uniform($par1, $par2, $par3, $which) {}

/**
 * @param float
 * @param float
 * @param float
 * @param int
 * @return float
 **/
function stats_cdf_weibull($par1, $par2, $par3, $which) {}

/**
 * @param array
 * @param array
 * @return float
 **/
function stats_covariance($a, $b) {}

/**
 * @param float
 * @param float
 * @param float
 * @return float
 **/
function stats_den_uniform($x, $a, $b) {}

/**
 * @param float
 * @param float
 * @param float
 * @return float
 **/
function stats_dens_beta($x, $a, $b) {}

/**
 * @param float
 * @param float
 * @param float
 * @return float
 **/
function stats_dens_cauchy($x, $ave, $stdev) {}

/**
 * @param float
 * @param float
 * @return float
 **/
function stats_dens_chisquare($x, $dfr) {}

/**
 * @param float
 * @param float
 * @return float
 **/
function stats_dens_exponential($x, $scale) {}

/**
 * @param float
 * @param float
 * @param float
 * @return float
 **/
function stats_dens_f($x, $dfr1, $dfr2) {}

/**
 * @param float
 * @param float
 * @param float
 * @return float
 **/
function stats_dens_gamma($x, $shape, $scale) {}

/**
 * @param float
 * @param float
 * @param float
 * @return float
 **/
function stats_dens_laplace($x, $ave, $stdev) {}

/**
 * @param float
 * @param float
 * @param float
 * @return float
 **/
function stats_dens_logistic($x, $ave, $stdev) {}

/**
 * @param float
 * @param float
 * @param float
 * @return float
 **/
function stats_dens_negative_binomial($x, $n, $pi) {}

/**
 * @param float
 * @param float
 * @param float
 * @return float
 **/
function stats_dens_normal($x, $ave, $stdev) {}

/**
 * @param float
 * @param float
 * @param float
 * @return float
 **/
function stats_dens_pmf_binomial($x, $n, $pi) {}

/**
 * @param float
 * @param float
 * @param float
 * @param float
 * @return float
 **/
function stats_dens_pmf_hypergeometric($n1, $n2, $N1, $N2) {}

/**
 * @param float
 * @param float
 * @return float
 **/
function stats_dens_pmf_poisson($x, $lb) {}

/**
 * @param float
 * @param float
 * @return float
 **/
function stats_dens_t($x, $dfr) {}

/**
 * @param float
 * @param float
 * @param float
 * @return float
 **/
function stats_dens_weibull($x, $a, $b) {}

/**
 * @param array
 * @return number
 **/
function stats_harmonic_mean($a) {}

/**
 * @param array
 * @return float
 **/
function stats_kurtosis($a) {}

/**
 * Returns a random deviate from the beta distribution with parameters A and
 * B. The density of the beta is x^(a-1) * (1-x)^(b-1) / B(a,b) for 0 x
 * . Method R. C. H. Cheng.
 *
 * @param float
 * @param float
 * @return float
 **/
function stats_rand_gen_beta($a, $b) {}

/**
 * @param float
 * @return float
 **/
function stats_rand_gen_chisquare($df) {}

/**
 * @param float
 * @return float
 **/
function stats_rand_gen_exponential($av) {}

/**
 * Generates a random deviate from the F (variance ratio) distribution with 
 * "dfn" degrees of freedom in the numerator and "dfd" degrees of freedom in 
 * the denominator. Method : directly generates ratio of chisquare variates.
 *
 * @param float
 * @param float
 * @return float
 **/
function stats_rand_gen_f($dfn, $dfd) {}

/**
 * @param float
 * @param float
 * @return float
 **/
function stats_rand_gen_funiform($low, $high) {}

/**
 * Generates random deviates from the gamma distribution whose density is
 * (A**R)/Gamma(R) * X**(R-1) * Exp(-A*X).
 *
 * @param float
 * @param float
 * @return float
 **/
function stats_rand_gen_gamma($a, $r) {}

/**
 * @param int
 * @param float
 * @return int
 **/
function stats_rand_gen_ibinomial_negative($n, $p) {}

/**
 * @param int
 * @param float
 * @return int
 **/
function stats_rand_gen_ibinomial($n, $pp) {}

/**
 * @return int
 **/
function stats_rand_gen_int() {}

/**
 * @param float
 * @return int
 **/
function stats_rand_gen_ipoisson($mu) {}

/**
 * @param int
 * @param int
 * @return int
 **/
function stats_rand_gen_iuniform($low, $high) {}

/**
 * @param float
 * @param float
 * @return float
 **/
function stats_rand_gen_noncenral_chisquare($df, $xnonc) {}

/**
 * @param float
 * @param float
 * @param float
 * @return float
 **/
function stats_rand_gen_noncentral_f($dfn, $dfd, $xnonc) {}

/**
 * @param float
 * @param float
 * @return float
 **/
function stats_rand_gen_noncentral_t($df, $xnonc) {}

/**
 * @param float
 * @param float
 * @return float
 **/
function stats_rand_gen_normal($av, $sd) {}

/**
 * @param float
 * @return float
 **/
function stats_rand_gen_t($df) {}

/**
 * @return array
 **/
function stats_rand_get_seeds() {}

/**
 * @param string
 * @return array
 **/
function stats_rand_phrase_to_seeds($phrase) {}

/**
 * @return float
 **/
function stats_rand_ranf() {}

/**
 * @param int
 * @param int
 * @return void
 **/
function stats_rand_setall($iseed1, $iseed2) {}

/**
 * @param array
 * @return float
 **/
function stats_skew($a) {}

/**
 * @param array
 * @param bool
 * @return float
 **/
function stats_standard_deviation($a, $sample) {}

/**
 * @param int
 * @param int
 * @return float
 **/
function stats_stat_binomial_coef($x, $n) {}

/**
 * @param array
 * @param array
 * @return float
 **/
function stats_stat_correlation($arr1, $arr2) {}

/**
 * @param int
 * @return float
 **/
function stats_stat_gennch($n) {}

/**
 * @param array
 * @param array
 * @return float
 **/
function stats_stat_independent_t($arr1, $arr2) {}

/**
 * @param array
 * @param array
 * @return float
 **/
function stats_stat_innerproduct($arr1, $arr2) {}

/**
 * @param float
 * @param float
 * @param float
 * @param int
 * @return float
 **/
function stats_stat_noncentral_t($par1, $par2, $par3, $which) {}

/**
 * @param array
 * @param array
 * @return float
 **/
function stats_stat_paired_t($arr1, $arr2) {}

/**
 * @param float
 * @param float
 * @return float
 **/
function stats_stat_percentile($df, $xnonc) {}

/**
 * @param array
 * @param float
 * @return float
 **/
function stats_stat_powersum($arr, $power) {}

/**
 * @param array
 * @param bool
 * @return float
 **/
function stats_variance($a, $sample) {}

/**
 * @param resource
 * @param resource
 * @return void
 **/
function stream_bucket_append($brigade, $bucket) {}

/**
 * @param resource
 * @return object
 **/
function stream_bucket_make_writeable($brigade) {}

/**
 * @param resource
 * @param string
 * @return object
 **/
function stream_bucket_new($stream, $buffer) {}

/**
 * @param resource
 * @param resource
 * @return void
 **/
function stream_bucket_prepend($brigade, $bucket) {}

/**
 * Creates and returns a stream context with any options supplied in
 * options preset.
 *
 * @param array
 * @param array
 * @return resource
 **/
function stream_context_create($options, $params) {}

/**
 * @param array
 * @return resource
 **/
function stream_context_get_default($options) {}

/**
 * @param resource
 * @return array
 **/
function stream_context_get_options($stream_or_context) {}

/**
 * @param array
 * @return resource
 **/
function stream_context_set_default($options) {}

/**
 * @param resource
 * @param string
 * @param string
 * @param mixed
 * @return bool
 **/
function stream_context_set_option($stream_or_context, $wrapper, $option, $value) {}

/**
 * @param resource
 * @param array
 * @return bool
 **/
function stream_context_set_params($stream_or_context, $params) {}

/**
 * Makes a copy of up to maxlength bytes
 * of data from the current position (or from the
 * offset position, if specified) in
 * source to dest. If
 * maxlength is not specified, all remaining content in
 * source will be copied.
 *
 * @param resource
 * @param resource
 * @param int
 * @param int
 * @return int
 **/
function stream_copy_to_stream($source, $dest, $maxlength, $offset) {}

/**
 * @param resource
 * @param string
 * @return bool
 **/
function stream_encoding($stream, $encoding) {}

/**
 * Adds filtername to the list of filters
 * attached to stream. This filter will be
 * added with the specified params
 * to the end of the list and
 * will therefore be called last during stream operations. To
 * add a filter to the beginning of the list, use
 * stream_filter_prepend.
 *
 * @param resource
 * @param string
 * @param int
 * @param mixed
 * @return resource
 **/
function stream_filter_append($stream, $filtername, $read_write, $params) {}

/**
 * Adds filtername to the list of filters
 * attached to stream. This filter will be
 * added with the specified params
 * to the beginning of the list and
 * will therefore be called first during stream operations. To
 * add a filter to the end of the list, use
 * stream_filter_append.
 *
 * @param resource
 * @param string
 * @param int
 * @param mixed
 * @return resource
 **/
function stream_filter_prepend($stream, $filtername, $read_write, $params) {}

/**
 * stream_filter_register allows you to implement
 * your own filter on any registered stream used with all the other
 * filesystem functions (such as fopen,
 * fread etc.).
 *
 * @param string
 * @param string
 * @return bool
 **/
function stream_filter_register($filtername, $classname) {}

/**
 * Dynamicly refiltering a stream
 *
 * @param resource
 * @return bool
 **/
function stream_filter_remove($stream_filter) {}

/**
 * Identical to file_get_contents, except that
 * stream_get_contents operates on an already open
 * stream resource and returns the remaining contents in a string, up to
 * maxlength bytes and starting at the specified
 * offset.
 *
 * @param resource
 * @param int
 * @param int
 * @return string
 **/
function stream_get_contents($handle, $maxlength, $offset) {}

/**
 * Using stream_get_filters
 * 
 * 
 * 
 * 
 * Output will be similar to the following.
 * Note: there may be more or fewer filters in your version of PHP.
 *
 * @return array
 **/
function stream_get_filters() {}

/**
 * Returns a string of up to length bytes read from the file
 * pointed to by handle. Reading ends when
 * length bytes have been read, when the string specified by
 * ending is found (which is not included
 * in the return value), or on EOF (whichever comes first).
 *
 * @param resource
 * @param int
 * @param string
 * @return string
 **/
function stream_get_line($handle, $length, $ending) {}

/**
 * @param resource
 * @return array
 **/
function stream_get_meta_data($stream) {}

/**
 * Using stream_get_transports
 * 
 * 
 * 
 * 
 * Output will be similar to the following.
 * Note: there may be more or fewer transports in your version of PHP.
 *
 * @return array
 **/
function stream_get_transports() {}

/**
 * Returns an indexed array containing the name of all stream wrappers
 * available on the running system.
 *
 * @return array
 **/
function stream_get_wrappers() {}

/**
 * A callback function called during an event.
 *
 * @param int
 * @param int
 * @param string
 * @param int
 * @param int
 * @param int
 * @return void
 **/
function stream_notification_callback($notification_code, $severity, $message, $message_code, $bytes_transferred, $bytes_max) {}

/**
 * @param string
 * @param resource
 * @return string
 **/
function stream_resolve_include_path($filename, $context) {}

/**
 * This example checks to see if data has arrived for reading on either
 * $stream1 or $stream2.
 * Since the timeout value is 0 it will return
 * immediately:
 *
 * @param array
 * @param array
 * @param array
 * @param int
 * @param int
 * @return int
 **/
function stream_select($read, $write, $except, $tv_sec, $tv_usec) {}

/**
 * If mode is 0, the given stream
 * will be switched to non-blocking mode, and if 1, it
 * will be switched to blocking mode. This affects calls like
 * fgets and fread
 * that read from the stream. In non-blocking mode an
 * fgets call will always return right away
 * while in blocking mode it will wait for data to become available
 * on the stream.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function stream_set_blocking($stream, $mode) {}

/**
 * Sets the timeout value on stream,
 * expressed in the sum of seconds and
 * microseconds.
 *
 * @param resource
 * @param int
 * @param int
 * @return bool
 **/
function stream_set_timeout($stream, $seconds, $microseconds) {}

/**
 * The following example demonstrates how to use
 * stream_set_write_buffer to create an unbuffered stream.
 * 
 * stream_set_write_buffer example
 *
 * @param resource
 * @param int
 * @return int
 **/
function stream_set_write_buffer($stream, $buffer) {}

/**
 * Accept a connection on a socket previously created by
 * stream_socket_server. If
 * timeout is specified, the default
 * socket accept timeout will be overridden with the time
 * specified in seconds. The name (address) of the client
 * which connected will be passed back in peername
 * if included and available from the selected transport.
 *
 * @param resource
 * @param float
 * @param string
 * @return resource
 **/
function stream_socket_accept($server_socket, $timeout, $peername) {}

/**
 * Initiates a stream or datagram connection to the destination specified
 * by remote_socket. The type of socket created
 * is determined by the transport specified using standard URL formatting:
 * transport://target. For Internet Domain sockets
 * (AF_INET) such as TCP and UDP, the target portion
 * of the remote_socket parameter should consist of
 * a hostname or IP address followed by a colon and a port number. For Unix
 * domain sockets, the target portion should point
 * to the socket file on the filesystem.
 * 
 * The optional timeout can be used to
 * set a timeout in seconds for the connect system call.
 * 
 * flags is a bitmask field which may be set to any
 * combination of connection flags. Currently the selection of connection
 * flags is limited to STREAM_CLIENT_CONNECT (default),
 * STREAM_CLIENT_ASYNC_CONNECT and
 * STREAM_CLIENT_PERSISTENT.
 *
 * @param string
 * @param int
 * @param string
 * @param float
 * @param int
 * @param resource
 * @return resource
 **/
function stream_socket_client($remote_socket, $errno, $errstr, $timeout, $flags, $context) {}

/**
 * Valid values for crypto_type
 * 
 * STREAM_CRYPTO_METHOD_SSLv2_CLIENT
 * STREAM_CRYPTO_METHOD_SSLv3_CLIENT
 * STREAM_CRYPTO_METHOD_SSLv23_CLIENT
 * STREAM_CRYPTO_METHOD_TLS_CLIENT
 * STREAM_CRYPTO_METHOD_SSLv2_SERVER
 * STREAM_CRYPTO_METHOD_SSLv3_SERVER
 * STREAM_CRYPTO_METHOD_SSLv23_SERVER
 * STREAM_CRYPTO_METHOD_TLS_SERVER
 *
 * @param resource
 * @param bool
 * @param int
 * @param resource
 * @return mixed
 **/
function stream_socket_enable_crypto($stream, $enable, $crypto_type, $session_stream) {}

/**
 * Returns the local or remote name of a given socket connection.
 * If want_peer is set to the remote
 * socket name will be returned, if it is set to the local
 * socket name will be returned.
 *
 * @param resource
 * @param bool
 * @return string
 **/
function stream_socket_get_name($handle, $want_peer) {}

/**
 * stream_socket_pair creates a pair of connected,
 * indistinguishable socket streams. This function is commonly used in IPC
 * (Inter-Process Communication).
 *
 * @param int
 * @param int
 * @param int
 * @return array
 **/
function stream_socket_pair($domain, $type, $protocol) {}

/**
 * The function stream_socket_recvfrom accepts
 * data from a remote socket up to length bytes.
 * If address is provided it will be populated with
 * the address of the remote socket.
 *
 * @param resource
 * @param int
 * @param int
 * @param string
 * @return string
 **/
function stream_socket_recvfrom($socket, $length, $flags, $address) {}

/**
 * The function stream_socket_sendto sends
 * the data specified by data through the
 * socket specified by socket. The address
 * specified when the socket stream was created will be used unless
 * an alternate address is specified in address.
 *
 * @param resource
 * @param string
 * @param int
 * @param string
 * @return int
 **/
function stream_socket_sendto($socket, $data, $flags, $address) {}

/**
 * Creates a stream or datagram socket on the specified
 * local_socket. The type of socket created
 * is determined by the transport specified using standard URL formatting:
 * transport://target. For Internet Domain sockets
 * (AF_INET) such as TCP and UDP, the target portion
 * of the remote_socket parameter should consist of
 * a hostname or IP address followed by a colon and a port number. For Unix
 * domain sockets, the target portion should point
 * to the socket file on the filesystem.
 * 
 * flags is a bitmask field which may be set to any
 * combination of socket creation flags. The default value of flags is
 * STREAM_SERVER_BIND | STREAM_SERVER_LISTEN.
 *
 * @param string
 * @param int
 * @param string
 * @param int
 * @param resource
 * @return resource
 **/
function stream_socket_server($local_socket, $errno, $errstr, $flags, $context) {}

/**
 * Shutdowns (partially or not) a full-duplex connection.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function stream_socket_shutdown($stream, $how) {}

/**
 * stream_wrapper_register allows you to implement
 * your own protocol handlers and streams for use with all the other
 * filesystem functions (such as fopen,
 * fread etc.).
 *
 * @param string
 * @param string
 * @return bool
 **/
function stream_wrapper_register($protocol, $classname) {}

/**
 * Restores a built-in wrapper previously unregistered with
 * stream_wrapper_unregister.
 *
 * @param string
 * @return bool
 **/
function stream_wrapper_restore($protocol) {}

/**
 * Allows you to disable an already defined stream wrapper. Once the wrapper
 * has been disabled you may override it with a user-defined wrapper using
 * stream_wrapper_register or reenable it later on with
 * stream_wrapper_restore.
 *
 * @param string
 * @return bool
 **/
function stream_wrapper_unregister($protocol) {}

/**
 * Returns a string with backslashes before characters that are
 * listed in charlist parameter.
 *
 * @param string
 * @param string
 * @return string
 **/
function addcslashes($str, $charlist) {}

/**
 * Returns a string with backslashes before characters that need
 * to be quoted in database queries etc. These characters are
 * single quote ('), double quote
 * ("), backslash (\)
 * and NUL (the byte).
 *
 * @param string
 * @return string
 **/
function addslashes($str) {}

/**
 * Returns an ASCII string containing the hexadecimal representation
 * of str. The conversion is done byte-wise
 * with the high-nibble first.
 *
 * @param string
 * @return string
 **/
function bin2hex($str) {}

/**
 * Returns a one-character string containing the character specified
 * by ascii.
 *
 * @param int
 * @return string
 **/
function chr($ascii) {}

/**
 * Can be used to split a string into smaller chunks which is useful for
 * e.g. converting base64_encode output to match RFC
 * 2045 semantics. It inserts end every 
 * chunklen characters.
 *
 * @param string
 * @param int
 * @param string
 * @return string
 **/
function chunk_split($body, $chunklen, $end) {}

/**
 * Converts from one Cyrillic character set to another.
 *
 * @param string
 * @param string
 * @param string
 * @return string
 **/
function convert_cyr_string($str, $from, $to) {}

/**
 * convert_uudecode decodes a uuencoded string.
 *
 * @param string
 * @return string
 **/
function convert_uudecode($data) {}

/**
 * convert_uuencode encodes a string using the uuencode
 * algorithm.
 *
 * @param string
 * @return string
 **/
function convert_uuencode($data) {}

/**
 * Counts the number of occurrences of every byte-value (0..255) in
 * string and returns it in various ways.
 *
 * @param string
 * @param int
 * @return mixed
 **/
function count_chars($string, $mode) {}

/**
 * Generates the cyclic redundancy checksum polynomial of 32-bit
 * lengths of the str. This is usually used
 * to validate the integrity of data being transmitted.
 *
 * @param string
 * @return int
 **/
function crc32($str) {}

/**
 * crypt will return an encrypted string using the
 * standard Unix DES-based encryption algorithm or
 * alternative algorithms that may be available on the system.
 *
 * @param string
 * @param string
 * @return string
 **/
function crypt($str, $salt) {}

/**
 * Returns an array of strings, each of which is a substring of
 * string formed by splitting it on
 * boundaries formed by the string delimiter.
 *
 * @param string
 * @param string
 * @param int
 * @return array
 **/
function explode($delimiter, $string, $limit) {}

/**
 * Write a string produced according to format to the
 * stream resource specified by handle.
 *
 * @param resource
 * @param string
 * @param mixed
 * @return int
 **/
function fprintf($handle, $format, $args) {}

/**
 * get_html_translation_table will return the
 * translation table that is used internally for
 * htmlspecialchars and
 * htmlentities.
 *
 * @param int
 * @param int
 * @return array
 **/
function get_html_translation_table($table, $quote_style) {}

/**
 * Converts logical Hebrew text to visual text.
 *
 * @param string
 * @param int
 * @return string
 **/
function hebrev($hebrew_text, $max_chars_per_line) {}

/**
 * This function is similar to hebrev with the
 * difference that it converts newlines (\n) to "br\n".
 *
 * @param string
 * @param int
 * @return string
 **/
function hebrevc($hebrew_text, $max_chars_per_line) {}

/**
 * html_entity_decode is the opposite of
 * htmlentities in that it converts all HTML entities
 * to their applicable characters from string.
 *
 * @param string
 * @param int
 * @param string
 * @return string
 **/
function html_entity_decode($string, $quote_style, $charset) {}

/**
 * This function is identical to htmlspecialchars in all
 * ways, except with htmlentities, all characters which
 * have HTML character entity equivalents are translated into these entities.
 *
 * @param string
 * @param int
 * @param string
 * @param bool
 * @return string
 **/
function htmlentities($string, $quote_style, $charset, $double_encode) {}

/**
 * This function is the opposite of htmlspecialchars. It
 * converts special HTML entities back to characters.
 *
 * @param string
 * @param int
 * @return string
 **/
function htmlspecialchars_decode($string, $quote_style) {}

/**
 * Certain characters have special significance in HTML, and should
 * be represented by HTML entities if they are to preserve their
 * meanings. This function returns a string with some of these
 * conversions made; the translations made are those most
 * useful for everyday web programming. If you require all HTML
 * character entities to be translated, use
 * htmlentities instead.
 *
 * @param string
 * @param int
 * @param string
 * @param bool
 * @return string
 **/
function htmlspecialchars($string, $quote_style, $charset, $double_encode) {}

/**
 * Join array elements with a glue string.
 *
 * @param string
 * @param array
 * @return string
 **/
function implode($glue, $pieces) {}

/**
 * Returns a string with the first character of
 * str , lowercased if that character is
 * alphabetic.
 *
 * @param string
 * @return string
 **/
function lcfirst($str) {}

/**
 * The Levenshtein distance is defined as the minimal number of
 * characters you have to replace, insert or delete to transform
 * str1 into str2.
 * The complexity of the algorithm is O(m*n),
 * where n and m are the
 * length of str1 and
 * str2 (rather good when compared to
 * similar_text, which is O(max(n,m)**3),
 * but still expensive).
 *
 * @param string
 * @param string
 * @return int
 **/
function levenshtein($str1, $str2) {}

/**
 * Returns an associative array containing localized numeric and
 * monetary formatting information.
 *
 * @return array
 **/
function localeconv() {}

/**
 * Strip whitespace (or other characters) from the beginning of a string.
 *
 * @param string
 * @param string
 * @return string
 **/
function ltrim($str, $charlist) {}

/**
 * Calculates the MD5 hash of the file specified by the
 * filename parameter using the
 * RSA Data Security, Inc. 
 * MD5 Message-Digest Algorithm, and returns that hash.
 * The hash is a 32-character hexadecimal number.
 *
 * @param string
 * @param bool
 * @return string
 **/
function md5_file($filename, $raw_output) {}

/**
 * Calculates the MD5 hash of str using the
 * RSA Data Security, Inc.
 * MD5 Message-Digest Algorithm, and returns that hash.
 *
 * @param string
 * @param bool
 * @return string
 **/
function md5($str, $raw_output) {}

/**
 * Calculates the metaphone key of str.
 *
 * @param string
 * @param int
 * @return string
 **/
function metaphone($str, $phones) {}

/**
 * money_format returns a formatted version of
 * number. This function wraps the C library
 * function strfmon, with the difference that
 * this implementation converts only one number at a time.
 *
 * @param string
 * @param float
 * @return string
 **/
function money_format($format, $number) {}

/**
 * nl_langinfo is used to access individual elements of
 * the locale categories. Unlike localeconv, which
 * returns all of the elements, nl_langinfo allows you
 * to select any specific element.
 *
 * @param int
 * @return string
 **/
function nl_langinfo($item) {}

/**
 * Returns string with 'br /' or 
 * 'br' inserted before all newlines.
 *
 * @param string
 * @param bool
 * @return string
 **/
function nl2br($string, $is_xhtml) {}

/**
 * This function accepts either one, two, or four parameters (not three):
 *
 * @param float
 * @param int
 * @return string
 **/
function number_format($number, $decimals) {}

/**
 * Returns the ASCII value of the first character of
 * string.
 *
 * @param string
 * @return int
 **/
function ord($string) {}

/**
 * Parses str as if it were the query string
 * passed via a URL and sets variables in the current scope.
 *
 * @param string
 * @param array
 * @return void
 **/
function parse_str($str, $arr) {}

/**
 * @param string
 * @param mixed
 * @return int
 **/
function printf($format, $args) {}

/**
 * This function returns an 8-bit binary string corresponding to the decoded
 * quoted printable string (according to RFC2045, section 6.7, not RFC2821, section 4.5.2, so additional periods
 * are not stripped from the beginning of line).
 *
 * @param string
 * @return string
 **/
function quoted_printable_decode($str) {}

/**
 * Returns a quoted printable string created according to RFC2045, section 6.7.
 *
 * @param string
 * @return string
 **/
function quoted_printable_encode($str) {}

/**
 * Returns a version of str with a backslash character (\)
 * before every character that is among these: 
 * . \ + * ? [ ^ ] ( $ )
 *
 * @param string
 * @return string
 **/
function quotemeta($str) {}

/**
 * This function returns a string with whitespace stripped from the
 * end of str.
 *
 * @param string
 * @param string
 * @return string
 **/
function rtrim($str, $charlist) {}

/**
 * Sets locale information.
 *
 * @param int
 * @param string
 * @return string
 **/
function setlocale($category, $locale) {}

/**
 * @param string
 * @param bool
 * @return string
 **/
function sha1_file($filename, $raw_output) {}

/**
 * @param string
 * @param bool
 * @return string
 **/
function sha1($str, $raw_output) {}

/**
 * This calculates the similarity between two strings as described in Oliver
 * [1993]. Note that this implementation does not use a stack as in Oliver's
 * pseudo code, but recursive calls which may or may not speed up the whole
 * process. Note also that the complexity of this algorithm is O(N**3) where
 * N is the length of the longest string.
 *
 * @param string
 * @param string
 * @param float
 * @return int
 **/
function similar_text($first, $second, $percent) {}

/**
 * Calculates the soundex key of str.
 *
 * @param string
 * @return string
 **/
function soundex($str) {}

/**
 * Returns a string produced according to the formatting string
 * format.
 *
 * @param string
 * @param mixed
 * @return string
 **/
function sprintf($format, $args) {}

/**
 * The function sscanf is the input analog of
 * printf. sscanf reads
 * from the string str and interprets it
 * according to the specified format, which is
 * described in the documentation for sprintf.
 *
 * @param string
 * @param string
 * @return mixed
 **/
function sscanf($str, $format) {}

/**
 * @param string
 * @param string
 * @param string
 * @param string
 * @return array
 **/
function str_getcsv($input, $delimiter, $enclosure, $escape) {}

/**
 * This function returns a string or an array with all occurrences of
 * search in subject
 * (ignoring case) replaced with the given replace
 * value. If you don't need fancy replacing rules, you should generally
 * use this function instead of eregi_replace or
 * preg_replace with the i modifier.
 *
 * @param mixed
 * @param mixed
 * @param mixed
 * @param int
 * @return mixed
 **/
function str_ireplace($search, $replace, $subject, $count) {}

/**
 * This functions returns the input string
 * padded on the left, the right, or both sides to the specified
 * padding length. If the optional argument
 * pad_string is not supplied, the
 * input is padded with spaces, otherwise it
 * is padded with characters from pad_string
 * up to the limit.
 *
 * @param string
 * @param int
 * @param string
 * @param int
 * @return string
 **/
function str_pad($input, $pad_length, $pad_string, $pad_type) {}

/**
 * Returns input repeated
 * multiplier times.
 *
 * @param string
 * @param int
 * @return string
 **/
function str_repeat($input, $multiplier) {}

/**
 * This function returns a string or an array with all occurrences of
 * search in subject
 * replaced with the given replace value.
 *
 * @param mixed
 * @param mixed
 * @param mixed
 * @param int
 * @return mixed
 **/
function str_replace($search, $replace, $subject, $count) {}

/**
 * Performs the ROT13 encoding on the str argument and
 * returns the resulting string.
 *
 * @param string
 * @return string
 **/
function str_rot13($str) {}

/**
 * @param string
 * @return string
 **/
function str_shuffle($str) {}

/**
 * Converts a string to an array.
 *
 * @param string
 * @param int
 * @return array
 **/
function str_split($string, $split_length) {}

/**
 * Counts the number of words inside string. 
 * If the optional format is not specified, then 
 * the return value will be an integer representing the number of words 
 * found. In the event the format is specified, the return
 * value will be an array, content of which is dependent on the 
 * format. The possible value for the 
 * format and the resultant outputs are listed below.
 *
 * @param string
 * @param int
 * @param string
 * @return mixed
 **/
function str_word_count($string, $format, $charlist) {}

/**
 * Binary safe case-insensitive string comparison.
 *
 * @param string
 * @param string
 * @return int
 **/
function strcasecmp($str1, $str2) {}

/**
 * @param string
 * @param string
 * @return int
 **/
function strcmp($str1, $str2) {}

/**
 * Note that this comparison is case sensitive, and unlike
 * strcmp this function is not binary safe.
 *
 * @param string
 * @param string
 * @return int
 **/
function strcoll($str1, $str2) {}

/**
 * Returns the length of the initial segment of
 * str1 which does not
 * contain any of the characters in str2.
 *
 * @param string
 * @param string
 * @param int
 * @param int
 * @return int
 **/
function strcspn($str1, $str2, $start, $length) {}

/**
 * This function tries to return a string with all HTML and PHP tags stripped
 * from a given str. It uses the same tag stripping
 * state machine as the fgetss function.
 *
 * @param string
 * @param string
 * @return string
 **/
function strip_tags($str, $allowable_tags) {}

/**
 * Returns a string with backslashes stripped off. Recognizes
 * C-like \n, \r ..., octal
 * and hexadecimal representation.
 *
 * @param string
 * @return string
 **/
function stripcslashes($str) {}

/**
 * Returns the numeric position of the first occurrence of
 * needle in the haystack
 * string.
 *
 * @param string
 * @param string
 * @param int
 * @return int
 **/
function stripos($haystack, $needle, $offset) {}

/**
 * Un-quotes a quoted string.
 *
 * @param string
 * @return string
 **/
function stripslashes($str) {}

/**
 * Returns all of haystack from the first
 * occurrence of needle to the end.
 *
 * @param string
 * @param mixed
 * @param bool
 * @return string
 **/
function stristr($haystack, $needle, $before_needle) {}

/**
 * Returns the length of the given string.
 *
 * @param string
 * @return int
 **/
function strlen($string) {}

/**
 * This function implements a comparison algorithm that orders alphanumeric
 * strings in the way a human being would. The behaviour of this function is
 * similar to strnatcmp, except that the comparison is
 * not case sensitive. For more information see: Martin Pool's Natural Order String Comparison page.
 *
 * @param string
 * @param string
 * @return int
 **/
function strnatcasecmp($str1, $str2) {}

/**
 * This function implements a comparison algorithm that orders
 * alphanumeric strings in the way a human being would, this is
 * described as a "natural ordering". 
 * Note that this comparison is case sensitive.
 *
 * @param string
 * @param string
 * @return int
 **/
function strnatcmp($str1, $str2) {}

/**
 * This function is similar to strcasecmp, with the
 * difference that you can specify the (upper limit of the) number of
 * characters from each string to be used in the comparison.
 *
 * @param string
 * @param string
 * @param int
 * @return int
 **/
function strncasecmp($str1, $str2, $len) {}

/**
 * This function is similar to strcmp, with the
 * difference that you can specify the (upper limit of the) number of
 * characters from each string to be used in the comparison.
 *
 * @param string
 * @param string
 * @param int
 * @return int
 **/
function strncmp($str1, $str2, $len) {}

/**
 * strpbrk searches the haystack
 * string for a char_list.
 *
 * @param string
 * @param string
 * @return string
 **/
function strpbrk($haystack, $char_list) {}

/**
 * Returns the numeric position of the first occurrence of
 * needle in the haystack
 * string. Unlike the strrpos before PHP 5, this
 * function can take a full string as the needle
 * parameter and the entire string will be used.
 *
 * @param string
 * @param mixed
 * @param int
 * @return int
 **/
function strpos($haystack, $needle, $offset) {}

/**
 * This function returns the portion of haystack which
 * starts at the last occurrence of needle and goes
 * until the end of haystack.
 *
 * @param string
 * @param mixed
 * @return string
 **/
function strrchr($haystack, $needle) {}

/**
 * Returns string, reversed.
 *
 * @param string
 * @return string
 **/
function strrev($string) {}

/**
 * Find position of last occurrence of a case-insensitive string in a string.
 * Unlike strrpos, strripos is
 * case-insensitive.
 *
 * @param string
 * @param string
 * @param int
 * @return int
 **/
function strripos($haystack, $needle, $offset) {}

/**
 * Returns the numeric position of the last occurrence of
 * needle in the
 * haystack string. Note that the needle in
 * this case can only be a single character in PHP 4. If a string is passed
 * as the needle, then only the first character of that string will
 * be used.
 *
 * @param string
 * @param string
 * @param int
 * @return int
 **/
function strrpos($haystack, $needle, $offset) {}

/**
 * Finds the length of the initial segment matching mask.
 *
 * @param string
 * @param string
 * @param int
 * @param int
 * @return int
 **/
function strspn($str1, $str2, $start, $length) {}

/**
 * Returns part of haystack string from the first
 * occurrence of needle to the end of
 * haystack.
 *
 * @param string
 * @param mixed
 * @param bool
 * @return string
 **/
function strstr($haystack, $needle, $before_needle) {}

/**
 * strtok splits a string (str)
 * into smaller strings (tokens), with each token being delimited by any
 * character from token.
 * That is, if you have a string like "This is an example string" you
 * could tokenize this string into its individual words by using the
 * space character as the token.
 *
 * @param string
 * @param string
 * @return string
 **/
function strtok($str, $token) {}

/**
 * Returns string with all alphabetic characters
 * converted to lowercase.
 *
 * @param string
 * @return string
 **/
function strtolower($str) {}

/**
 * Returns string with all alphabetic characters
 * converted to uppercase.
 *
 * @param string
 * @return string
 **/
function strtoupper($string) {}

/**
 * This function returns a copy of str,
 * translating all occurrences of each character in
 * from to the corresponding character in
 * to.
 *
 * @param string
 * @param string
 * @param string
 * @return string
 **/
function strtr($str, $from, $to) {}

/**
 * substr_compare compares main_str
 * from position offset with str
 * up to length characters.
 *
 * @param string
 * @param string
 * @param int
 * @param int
 * @param bool
 * @return int
 **/
function substr_compare($main_str, $str, $offset, $length, $case_insensitivity) {}

/**
 * substr_count returns the number of times the
 * needle substring occurs in the
 * haystack string. Please note that
 * needle is case sensitive.
 *
 * @param string
 * @param string
 * @param int
 * @param int
 * @return int
 **/
function substr_count($haystack, $needle, $offset, $length) {}

/**
 * substr_replace replaces a copy of
 * string delimited by the
 * start and (optionally)
 * length parameters with the string given in
 * replacement.
 *
 * @param mixed
 * @param string
 * @param int
 * @param int
 * @return mixed
 **/
function substr_replace($string, $replacement, $start, $length) {}

/**
 * Returns the portion of string specified by the
 * start and length parameters.
 *
 * @param string
 * @param int
 * @param int
 * @return string
 **/
function substr($string, $start, $length) {}

/**
 * This function returns a string with whitespace stripped from the
 * beginning and end of str.
 * Without the second parameter,
 * trim will strip these characters:
 * 
 * 
 * 
 * 
 * " " (ASCII 32 
 * (0x20)), an ordinary space.
 * 
 * 
 * 
 * 
 * "\t" (ASCII 9 
 * (0x09)), a tab.
 * 
 * 
 * 
 * 
 * "\n" (ASCII 10 
 * (0x0A)), a new line (line feed).
 * 
 * 
 * 
 * 
 * "\r" (ASCII 13 
 * (0x0D)), a carriage return.
 * 
 * 
 * 
 * 
 * "\0" (ASCII 0 
 * (0x00)), the NUL-byte.
 * 
 * 
 * 
 * 
 * "\x0B" (ASCII 11 
 * (0x0B)), a vertical tab.
 *
 * @param string
 * @param string
 * @return string
 **/
function trim($str, $charlist) {}

/**
 * Returns a string with the first character of
 * str capitalized, if that character is
 * alphabetic.
 *
 * @param string
 * @return string
 **/
function ucfirst($str) {}

/**
 * Returns a string with the first character of each word in
 * str capitalized, if that character is alphabetic.
 *
 * @param string
 * @return string
 **/
function ucwords($str) {}

/**
 * Write a string produced according to format to the
 * stream resource specified by handle.
 *
 * @param resource
 * @param string
 * @param array
 * @return int
 **/
function vfprintf($handle, $format, $args) {}

/**
 * Display array values as a formatted string according to
 * format (which is described in the documentation
 * for sprintf).
 *
 * @param string
 * @param array
 * @return int
 **/
function vprintf($format, $args) {}

/**
 * Operates as sprintf but accepts an array of
 * arguments, rather than a variable number of arguments.
 *
 * @param string
 * @param array
 * @return string
 **/
function vsprintf($format, $args) {}

/**
 * Wraps a string to a given number of characters using a string break
 * character.
 *
 * @param string
 * @param int
 * @param string
 * @param bool
 * @return string
 **/
function wordwrap($str, $width, $break, $cut) {}

/**
 * Adds the file, directory or symbolic link at path
 * to the working directory. The item will be added to the repository
 * the next time you call svn_commit on the working
 * copy.
 *
 * @param string
 * @param bool
 * @param bool
 * @return bool
 **/
function svn_add($path, $recursive, $force) {}

/**
 * Retrieves authentication parameter at key.
 * For a list of valid keys and their meanings, consult the
 * authentication constants list.
 *
 * @param string
 * @return string
 **/
function svn_auth_get_parameter($key) {}

/**
 * Sets authentication parameter at key to value.
 * For a list of valid keys and their meanings, consult the
 * authentication constants list.
 *
 * @param string
 * @param string
 * @return void
 **/
function svn_auth_set_parameter($key, $value) {}

/**
 * Returns the contents of the URL repos_url to
 * a file in the repository, optionally at revision number
 * revision_no.
 *
 * @param string
 * @param int
 * @return string
 **/
function svn_cat($repos_url, $revision_no) {}

/**
 * Checks out a working copy from the repository at repos
 * to targetpath at revision revision.
 *
 * @param string
 * @param string
 * @param int
 * @param int
 * @return bool
 **/
function svn_checkout($repos, $targetpath, $revision, $flags) {}

/**
 * Recursively cleanup working copy directory workingdir,
 * finishing any incomplete operations and removing working copy locks. Use
 * when a working copy is in limbo and needs to be usable again.
 *
 * @param string
 * @return bool
 **/
function svn_cleanup($workingdir) {}

/**
 * Returns the version of the SVN client libraries
 *
 * @return string
 **/
function svn_client_version() {}

/**
 * Commits changes made in the local working copy files enumerated in
 * the targets array to the repository, with the
 * log message log. Directories in the targets
 * array will be recursively committed unless dontrecurse
 * is set to true.
 *
 * @param string
 * @param array
 * @param bool
 * @return array
 **/
function svn_commit($log, $targets, $dontrecurse) {}

/**
 * Recursively diffs two paths, path1 and
 * path2.
 *
 * @param string
 * @param int
 * @param string
 * @param int
 * @return array
 **/
function svn_diff($path1, $rev1, $path2, $rev2) {}

/**
 * Abort a transaction, returns true if everything is ok, false othewise
 *
 * @param resource
 * @return bool
 **/
function svn_fs_abort_txn($txn) {}

/**
 * Creates and returns a stream that will be used to replace
 *
 * @param resource
 * @param string
 * @return resource
 **/
function svn_fs_apply_text($root, $path) {}

/**
 * Create a new transaction
 *
 * @param resource
 * @param int
 * @return resource
 **/
function svn_fs_begin_txn2($repos, $rev) {}

/**
 * Return true if everything is ok, false otherwise
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function svn_fs_change_node_prop($root, $path, $name, $value) {}

/**
 * Determines what kind of item lives at path in a given repository fsroot
 *
 * @param resource
 * @param string
 * @return int
 **/
function svn_fs_check_path($fsroot, $path) {}

/**
 * Return true if content is different, false otherwise
 *
 * @param resource
 * @param string
 * @param resource
 * @param string
 * @return bool
 **/
function svn_fs_contents_changed($root1, $path1, $root2, $path2) {}

/**
 * Copies a file or a directory, returns true if all is ok, false otherwise
 *
 * @param resource
 * @param string
 * @param resource
 * @param string
 * @return bool
 **/
function svn_fs_copy($from_root, $from_path, $to_root, $to_path) {}

/**
 * Deletes a file or a directory, return true if all is ok, false otherwise
 *
 * @param resource
 * @param string
 * @return bool
 **/
function svn_fs_delete($root, $path) {}

/**
 * Enumerates the directory entries under path; returns a hash of dir names to file type
 *
 * @param resource
 * @param string
 * @return array
 **/
function svn_fs_dir_entries($fsroot, $path) {}

/**
 * Returns a stream to access the contents of a file from a given version of the fs
 *
 * @param resource
 * @param string
 * @return resource
 **/
function svn_fs_file_contents($fsroot, $path) {}

/**
 * Returns the length of a file from a given version of the fs
 *
 * @param resource
 * @param string
 * @return int
 **/
function svn_fs_file_length($fsroot, $path) {}

/**
 * Return true if the path points to a directory, false otherwise
 *
 * @param resource
 * @param string
 * @return bool
 **/
function svn_fs_is_dir($root, $path) {}

/**
 * Return true if the path points to a file, false otherwise
 *
 * @param resource
 * @param string
 * @return bool
 **/
function svn_fs_is_file($root, $path) {}

/**
 * Creates a new empty directory, returns true if all is ok, false otherwise
 *
 * @param resource
 * @param string
 * @return bool
 **/
function svn_fs_make_dir($root, $path) {}

/**
 * Creates a new empty file, returns true if all is ok, false otherwise
 *
 * @param resource
 * @param string
 * @return bool
 **/
function svn_fs_make_file($root, $path) {}

/**
 * Returns the revision in which path under fsroot was created
 *
 * @param resource
 * @param string
 * @return int
 **/
function svn_fs_node_created_rev($fsroot, $path) {}

/**
 * Returns the value of a property for a node
 *
 * @param resource
 * @param string
 * @param string
 * @return string
 **/
function svn_fs_node_prop($fsroot, $path, $propname) {}

/**
 * Return true if props are different, false otherwise
 *
 * @param resource
 * @param string
 * @param resource
 * @param string
 * @return bool
 **/
function svn_fs_props_changed($root1, $path1, $root2, $path2) {}

/**
 * Fetches the value of a named property
 *
 * @param resource
 * @param int
 * @param string
 * @return string
 **/
function svn_fs_revision_prop($fs, $revnum, $propname) {}

/**
 * Get a handle on a specific version of the repository root
 *
 * @param resource
 * @param int
 * @return resource
 **/
function svn_fs_revision_root($fs, $revnum) {}

/**
 * Creates and returns a transaction root
 *
 * @param resource
 * @return resource
 **/
function svn_fs_txn_root($txn) {}

/**
 * Returns the number of the youngest revision in the filesystem
 *
 * @param resource
 * @return int
 **/
function svn_fs_youngest_rev($fs) {}

/**
 * Commits unversioned path into repository at
 * url. If path is a
 * directory and nonrecursive is , 
 * the directory will be imported recursively.
 *
 * @param string
 * @param string
 * @param bool
 * @return bool
 **/
function svn_import($path, $url, $nonrecursive) {}

/**
 * svn_log returns the complete history of the item at the repository URL
 * repos_url, or the history of a specific revision
 * if start_revision is set. This function is equivalent
 * to svn log --verbose -r $start_revision $repos_url.
 *
 * @param string
 * @param int
 * @param int
 * @param int
 * @param int
 * @return array
 **/
function svn_log($repos_url, $start_revision, $end_revision, $limit, $flags) {}

/**
 * This function queries the repository URL and returns a list of
 * files and directories, optionally from a specific revision. This
 * is equivalent to svn list $repos_url[@$revision_no]
 *
 * @param string
 * @param int
 * @param bool
 * @return array
 **/
function svn_ls($repos_url, $revision_no, $recurse) {}

/**
 * Create a new subversion repository at path
 *
 * @param string
 * @param array
 * @param array
 * @return resource
 **/
function svn_repos_create($path, $config, $fsconfig) {}

/**
 * Create a new transaction
 *
 * @param resource
 * @param int
 * @param string
 * @param string
 * @return resource
 **/
function svn_repos_fs_begin_txn_for_commit($repos, $rev, $author, $log_msg) {}

/**
 * Commits a transaction and returns the new revision
 *
 * @param resource
 * @return int
 **/
function svn_repos_fs_commit_txn($txn) {}

/**
 * Gets a handle on the filesystem for a repository
 *
 * @param resource
 * @return resource
 **/
function svn_repos_fs($repos) {}

/**
 * Make a hot-copy of the repos at repospath; copy it to destpath
 *
 * @param string
 * @param string
 * @param bool
 * @return bool
 **/
function svn_repos_hotcopy($repospath, $destpath, $cleanlogs) {}

/**
 * Open a shared lock on a repository.
 *
 * @param string
 * @return resource
 **/
function svn_repos_open($path) {}

/**
 * Run recovery procedures on the repository located at path.
 *
 * @param string
 * @return bool
 **/
function svn_repos_recover($path) {}

/**
 * Returns the status of working copy files and directories, giving modifications,
 * additions, deletions and other changes to items in the working copy.
 *
 * @param string
 * @param int
 * @return array
 **/
function svn_status($path, $flags) {}

/**
 * Update working copy at path to revision
 * revno. If recurse is true,
 * directories will be recursively updated.
 *
 * @param string
 * @param int
 * @param bool
 * @return int
 **/
function svn_update($path, $revno, $recurse) {}

/**
 * Gets the URL specified by the parameter url with
 * the given target.
 *
 * @param string
 * @param string
 * @return void
 **/
function swf_actiongeturl($url, $target) {}

/**
 * The swf_actiongotoframe function will go to
 * the frame specified by framenumber, play
 * it, and then stop.
 *
 * @param int
 * @return void
 **/
function swf_actiongotoframe($framenumber) {}

/**
 * The swf_actiongotolabel function displays
 * the frame with the label given by the
 * label parameter and then stops.
 *
 * @param string
 * @return void
 **/
function swf_actiongotolabel($label) {}

/**
 * Go forward one frame.
 *
 * @return void
 **/
function swf_actionnextframe() {}

/**
 * Start playing the flash movie from the current frame.
 *
 * @return void
 **/
function swf_actionplay() {}

/**
 * Go backwards one frame.
 *
 * @return void
 **/
function swf_actionprevframe() {}

/**
 * Sets the context for all actions. You can use this to control other flash
 * movies that are currently playing.
 *
 * @param string
 * @return void
 **/
function swf_actionsettarget($target) {}

/**
 * Stop playing the flash movie at the current frame.
 *
 * @return void
 **/
function swf_actionstop() {}

/**
 * Toggle the flash movie between high and low quality.
 *
 * @return void
 **/
function swf_actiontogglequality() {}

/**
 * The swf_actionwaitforframe function will
 * check to see if the frame, specified by the
 * framenumber parameter has been loaded, if
 * not it will skip the number of actions specified by the
 * skipcount parameter. This can be useful
 * for "Loading..." type animations.
 *
 * @param int
 * @param int
 * @return void
 **/
function swf_actionwaitforframe($framenumber, $skipcount) {}

/**
 * Allow you to define the specifics of using a button.
 *
 * @param int
 * @param int
 * @param int
 * @return void
 **/
function swf_addbuttonrecord($states, $shapeid, $depth) {}

/**
 * Sets the global add color to the specified color. This color is then
 * implicitly used by the swf_placeobject,
 * swf_modifyobject and 
 * swf_addbuttonrecord functions.
 *
 * @param float
 * @param float
 * @param float
 * @param float
 * @return void
 **/
function swf_addcolor($r, $g, $b, $a) {}

/**
 * Close a file that was opened by the
 * swf_openfile function.
 *
 * @param int
 * @return void
 **/
function swf_closefile($return_file) {}

/**
 * The swf_definebitmap function defines a
 * bitmap given an image.
 *
 * @param int
 * @param string
 * @return void
 **/
function swf_definebitmap($objid, $image_name) {}

/**
 * The swf_definefont function defines a font parameter
 * and gives it the specified id. It then sets the font given by 
 * fontname to the current font.
 *
 * @param int
 * @param string
 * @return void
 **/
function swf_definefont($fontid, $fontname) {}

/**
 * Defines a line.
 *
 * @param int
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @return void
 **/
function swf_defineline($objid, $x1, $y1, $x2, $y2, $width) {}

/**
 * Defines a polygon given an array of x, y coordinates.
 *
 * @param int
 * @param array
 * @param int
 * @param float
 * @return void
 **/
function swf_definepoly($objid, $coords, $npoints, $width) {}

/**
 * Defines a rectangle with an upper left hand coordinate and a lower right
 * hand coordinate.
 *
 * @param int
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @return void
 **/
function swf_definerect($objid, $x1, $y1, $x2, $y2, $width) {}

/**
 * Defines a text string using the current font and font size.
 *
 * @param int
 * @param string
 * @param int
 * @return void
 **/
function swf_definetext($objid, $str, $docenter) {}

/**
 * The swf_endbutton function ends the
 * definition of the current button.
 *
 * @return void
 **/
function swf_endbutton() {}

/**
 * Ends the current action started by the
 * swf_startdoaction function.
 *
 * @return void
 **/
function swf_enddoaction() {}

/**
 * The swf_endshape completes the definition of
 * the current shape.
 *
 * @return void
 **/
function swf_endshape() {}

/**
 * Ends the definition of a symbol that was started by the
 * swf_startsymbol function.
 *
 * @return void
 **/
function swf_endsymbol() {}

/**
 * Changes the font size to the value given by the 
 * size parameter.
 *
 * @param float
 * @return void
 **/
function swf_fontsize($size) {}

/**
 * Set the current font slant to the angle indicated by the
 * slant parameter.
 *
 * @param float
 * @return void
 **/
function swf_fontslant($slant) {}

/**
 * Set the font tracking to the value specified by the
 * tracking parameter. This function is used
 * to increase the spacing between letters and text, positive values
 * increase the space and negative values decrease the space between
 * letters.
 *
 * @param float
 * @return void
 **/
function swf_fonttracking($tracking) {}

/**
 * Returns information about a bitmap.
 *
 * @param int
 * @return array
 **/
function swf_getbitmapinfo($bitmapid) {}

/**
 * Gets information about the font by giving the height in pixels of a
 * capital A and a lowercase x.
 *
 * @return array
 **/
function swf_getfontinfo() {}

/**
 * The swf_getframe function gets the number of
 * the current frame.
 *
 * @return int
 **/
function swf_getframe() {}

/**
 * Labels the current frame with the given name.
 *
 * @param string
 * @return void
 **/
function swf_labelframe($name) {}

/**
 * Defines a viewing transformation by giving the viewing position and the
 * coordinates of a reference point in the scene.
 *
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @return void
 **/
function swf_lookat($view_x, $view_y, $view_z, $reference_x, $reference_y, $reference_z, $twist) {}

/**
 * Updates the position and/or color of the object at the specified
 * depth.
 *
 * @param int
 * @param int
 * @return void
 **/
function swf_modifyobject($depth, $how) {}

/**
 * Sets the global multiply color to the given one. This color is then
 * implicitly used by the swf_placeobject,
 * swf_modifyobject and 
 * swf_addbuttonrecord functions.
 *
 * @param float
 * @param float
 * @param float
 * @param float
 * @return void
 **/
function swf_mulcolor($r, $g, $b, $a) {}

/**
 * The swf_nextid function returns the next
 * available object id.
 *
 * @return int
 **/
function swf_nextid() {}

/**
 * The swf_oncondition function describes a
 * transition that will trigger an action list.
 *
 * @param int
 * @return void
 **/
function swf_oncondition($transition) {}

/**
 * Opens a new file. This must be the first function you call, otherwise your
 * script will not work.
 *
 * @param string
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @return void
 **/
function swf_openfile($filename, $width, $height, $framerate, $r, $g, $b) {}

/**
 * Defines an 3D orthographic mapping of user coordinates onto the current
 * viewport.
 *
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @return void
 **/
function swf_ortho($xmin, $xmax, $ymin, $ymax, $zmin, $zmax) {}

/**
 * Defines a two dimensional orthographic mapping of user coordinates onto
 * the current viewport, this defaults to one to one mapping of the area of
 * the Flash movie.
 *
 * @param float
 * @param float
 * @param float
 * @param float
 * @return void
 **/
function swf_ortho2($xmin, $xmax, $ymin, $ymax) {}

/**
 * Defines a perspective projection transformation.
 *
 * @param float
 * @param float
 * @param float
 * @param float
 * @return void
 **/
function swf_perspective($fovy, $aspect, $near, $far) {}

/**
 * Places the object in the current frame at a specified
 * depth.
 *
 * @param int
 * @param int
 * @return void
 **/
function swf_placeobject($objid, $depth) {}

/**
 * The swf_polarview function defines the
 * viewer's position in polar coordinates.
 *
 * @param float
 * @param float
 * @param float
 * @param float
 * @return void
 **/
function swf_polarview($dist, $azimuth, $incidence, $twist) {}

/**
 * Pushes the current transformation matrix back onto the stack.
 *
 * @return void
 **/
function swf_popmatrix() {}

/**
 * Enables or disables the rounding of the translation when objects are
 * placed or moved, there are times when text becomes more readable because
 * rounding has been enabled.
 *
 * @param int
 * @return void
 **/
function swf_posround($round) {}

/**
 * Pushes the current transformation matrix back onto the stack.
 *
 * @return void
 **/
function swf_pushmatrix() {}

/**
 * Removes the last object drawn at the depth specified by
 * depth.
 *
 * @param int
 * @return void
 **/
function swf_removeobject($depth) {}

/**
 * Rotates the current transformation by a given angle
 * around the given axis.
 *
 * @param float
 * @param string
 * @return void
 **/
function swf_rotate($angle, $axis) {}

/**
 * The swf_scale scales curve coordinates by the given
 * value.
 *
 * @param float
 * @param float
 * @param float
 * @return void
 **/
function swf_scale($x, $y, $z) {}

/**
 * The swf_setfont sets the current font to the
 * value given by the fontid parameter.
 *
 * @param int
 * @return void
 **/
function swf_setfont($fontid) {}

/**
 * Changes the active frame to the specified on.
 *
 * @param int
 * @return void
 **/
function swf_setframe($framenumber) {}

/**
 * Draws a circular arc.
 *
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @return void
 **/
function swf_shapearc($x, $y, $r, $ang1, $ang2) {}

/**
 * Draws a quadratic bezier curve from the current location, though the
 * two given points.
 *
 * @param float
 * @param float
 * @param float
 * @param float
 * @return void
 **/
function swf_shapecurveto($x1, $y1, $x2, $y2) {}

/**
 * Draw a cubic bezier curve using the given coordinates.
 *
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @return void
 **/
function swf_shapecurveto3($x1, $y1, $x2, $y2, $x3, $y3) {}

/**
 * Sets the fill to bitmap clipped, empty spaces will be filled by the
 * bitmap.
 *
 * @param int
 * @return void
 **/
function swf_shapefillbitmapclip($bitmapid) {}

/**
 * Sets the fill to bitmap tile, empty spaces will be filled by the
 * bitmap.
 *
 * @param int
 * @return void
 **/
function swf_shapefillbitmaptile($bitmapid) {}

/**
 * Turns off filling for the current shape.
 *
 * @return void
 **/
function swf_shapefilloff() {}

/**
 * Sets the current fill style to solid, and then sets the fill color to the
 * given color.
 *
 * @param float
 * @param float
 * @param float
 * @param float
 * @return void
 **/
function swf_shapefillsolid($r, $g, $b, $a) {}

/**
 * Sets the current line style to the given color and width.
 *
 * @param float
 * @param float
 * @param float
 * @param float
 * @param float
 * @return void
 **/
function swf_shapelinesolid($r, $g, $b, $a, $width) {}

/**
 * Draws a line to the x and y
 * coordinates. The current position is then set to that point.
 *
 * @param float
 * @param float
 * @return void
 **/
function swf_shapelineto($x, $y) {}

/**
 * Moves the current position to the given point.
 *
 * @param float
 * @param float
 * @return void
 **/
function swf_shapemoveto($x, $y) {}

/**
 * Outputs the current frame.
 *
 * @return void
 **/
function swf_showframe() {}

/**
 * Starts the definition of a button.
 *
 * @param int
 * @param int
 * @return void
 **/
function swf_startbutton($objid, $type) {}

/**
 * Starts the description of an action list for the current frame. This
 * must be called before actions are defined for the current frame.
 *
 * @return void
 **/
function swf_startdoaction() {}

/**
 * Starts a complex shape.
 *
 * @param int
 * @return void
 **/
function swf_startshape($objid) {}

/**
 * Defines an object id as a symbol. Symbols are tiny flash movies that can
 * be played simultaneously.
 *
 * @param int
 * @return void
 **/
function swf_startsymbol($objid) {}

/**
 * Gives the width of the string in pixels, using the current font and font
 * size.
 *
 * @param string
 * @return float
 **/
function swf_textwidth($str) {}

/**
 * Translates the current transformation by the given values.
 *
 * @param float
 * @param float
 * @param float
 * @return void
 **/
function swf_translate($x, $y, $z) {}

/**
 * Selects an area for future drawing for xmin to
 * xmax and ymin to
 * ymax, if this function is not called the
 * area defaults to the size of the screen.
 *
 * @param float
 * @param float
 * @param float
 * @param float
 * @return void
 **/
function swf_viewport($xmin, $xmax, $ymin, $ymax) {}

/**
 * sybase_affected_rows returns the number of
 * rows affected by the last INSERT, UPDATE or DELETE query on the
 * server associated with the specified link identifier.
 *
 * @param resource
 * @return int
 **/
function sybase_affected_rows($link_identifier) {}

/**
 * sybase_close closes the link to a Sybase
 * database that's associated with the specified link
 * link_identifier.
 *
 * @param resource
 * @return bool
 **/
function sybase_close($link_identifier) {}

/**
 * sybase_connect establishes a connection to a
 * Sybase server.
 *
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function sybase_connect($servername, $username, $password, $charset, $appname) {}

/**
 * sybase_data_seek moves the internal row
 * pointer of the Sybase result associated with the specified result
 * identifier to pointer to the specified row number. The next call
 * to sybase_fetch_row would return that row.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function sybase_data_seek($result_identifier, $row_number) {}

/**
 * Using sybase_deadlock_retry_count, the number of retries
 * can be defined in cases of deadlocks. By default, every deadlock is retried
 * an infinite number of times or until the process is killed by Sybase, the
 * executing script is killed (for instance, by set_time_limit)
 * or the query succeeds.
 *
 * @param int
 * @return void
 **/
function sybase_deadlock_retry_count($retry_count) {}

/**
 * sybase_fetch_array is an extended version of
 * sybase_fetch_row. In addition to storing the
 * data in the numeric indices of the result array, it also stores
 * the data in associative indices, using the field names as keys.
 *
 * @param resource
 * @return array
 **/
function sybase_fetch_array($result) {}

/**
 * sybase_fetch_assoc is a version of
 * sybase_fetch_row that uses column names
 * instead of integers for indices in the result array. Columns from
 * different tables with the same names are returned as
 * name, name1, name2, ..., nameN.
 *
 * @param resource
 * @return array
 **/
function sybase_fetch_assoc($result) {}

/**
 * sybase_fetch_field can be used in order to
 * obtain information about fields in a certain query result.
 *
 * @param resource
 * @param int
 * @return object
 **/
function sybase_fetch_field($result, $field_offset) {}

/**
 * sybase_fetch_object is similar to
 * sybase_fetch_assoc, with one difference - an object
 * is returned, instead of an array.
 *
 * @param resource
 * @param mixed
 * @return object
 **/
function sybase_fetch_object($result, $object) {}

/**
 * sybase_fetch_row fetches one row of data
 * from the result associated with the specified result identifier.
 *
 * @param resource
 * @return array
 **/
function sybase_fetch_row($result) {}

/**
 * Seeks to the specified field offset. If the next call to
 * sybase_fetch_field won't include a field
 * offset, this field would be returned.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function sybase_field_seek($result, $field_offset) {}

/**
 * sybase_free_result only needs to be called
 * if you are worried about using too much memory while your script
 * is running. All result memory will automatically be freed when
 * the script ends. You may call sybase_free_result
 * with the result identifier as an argument and the associated
 * result memory will be freed.
 *
 * @param resource
 * @return bool
 **/
function sybase_free_result($result) {}

/**
 * sybase_get_last_message returns the last
 * message reported by the server.
 *
 * @return string
 **/
function sybase_get_last_message() {}

/**
 * sybase_min_client_severity sets the minimum
 * client severity level.
 *
 * @param int
 * @return void
 **/
function sybase_min_client_severity($severity) {}

/**
 * sybase_min_error_severity sets the minimum
 * error severity level.
 *
 * @param int
 * @return void
 **/
function sybase_min_error_severity($severity) {}

/**
 * sybase_min_message_severity sets the minimum
 * message severity level.
 *
 * @param int
 * @return void
 **/
function sybase_min_message_severity($severity) {}

/**
 * sybase_min_server_severity sets the minimum
 * server severity level.
 *
 * @param int
 * @return void
 **/
function sybase_min_server_severity($severity) {}

/**
 * sybase_num_fields returns the number of fields in a
 * result set.
 *
 * @param resource
 * @return int
 **/
function sybase_num_fields($result) {}

/**
 * sybase_num_rows returns the number of rows in a
 * result set.
 *
 * @param resource
 * @return int
 **/
function sybase_num_rows($result) {}

/**
 * sybase_pconnect acts very much like
 * sybase_connect with two major differences.
 *
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function sybase_pconnect($servername, $username, $password, $charset, $appname) {}

/**
 * sybase_query sends a query to the currently
 * active database on the server that's associated with the specified
 * link identifier.
 *
 * @param string
 * @param resource
 * @return mixed
 **/
function sybase_query($query, $link_identifier) {}

/**
 * Returns the contents of the cell at the row and offset in
 * the specified Sybase result set.
 *
 * @param resource
 * @param int
 * @param mixed
 * @return string
 **/
function sybase_result($result, $row, $field) {}

/**
 * sybase_select_db sets the current active
 * database on the server that's associated with the specified link
 * identifier.
 *
 * @param string
 * @param resource
 * @return bool
 **/
function sybase_select_db($database_name, $link_identifier) {}

/**
 * sybase_set_message_handler sets a user function to
 * handle messages generated by the server. You may specify the name of a
 * global function, or use an array to specify an object reference and a
 * method name.
 *
 * @param callback
 * @param resource
 * @return bool
 **/
function sybase_set_message_handler($handler, $connection) {}

/**
 * sybase_unbuffered_query sends a query to the
 * currently active database on the server that's associated with the specified
 * link identifier. If the link identifier isn't specified, the last
 * opened link is assumed. If no link is open, the function tries to
 * establish a link as if sybase_connect was
 * called, and use it.
 *
 * @param string
 * @param resource
 * @param bool
 * @return resource
 **/
function sybase_unbuffered_query($query, $link_identifier, $store_result) {}

/**
 * This function consults the /etc/hosts.allow and 
 * /etc/hosts.deny files to check if access to service 
 * daemon should be granted or denied for a client.
 *
 * @param string
 * @param string
 * @param string
 * @param bool
 * @return bool
 **/
function tcpwrap_check($daemon, $address, $user, $nodns) {}

/**
 * ob_tidyhandler is intended to be used as a
 * callback function for ob_start to repair the buffer.
 *
 * @param string
 * @param int
 * @return string
 **/
function ob_tidyhandler($input, $mode) {}

/**
 * tidy_access_count returns the number of
 * accessibility warnings found for the specified document.
 *
 * @param tidy
 * @return int
 **/
function tidy_access_count($object) {}

/**
 * Procedural style:
 *
 * @param tidy
 * @return bool
 **/
function tidy_clean_repair($object) {}

/**
 * tidy_config_count returns the number of errors
 * encountered in the configuration of the specified tidy
 * object.
 *
 * @param tidy
 * @return int
 **/
function tidy_config_count($object) {}

/**
 * Procedural style:
 *
 * @param tidy
 * @return bool
 **/
function tidy_diagnose($object) {}

/**
 * tidy_error_count returns the number of Tidy errors
 * encountered for the specified document.
 *
 * @param tidy
 * @return int
 **/
function tidy_error_count($object) {}

/**
 * Procedural style:
 *
 * @param tidy
 * @return tidyNode
 **/
function tidy_get_body($object) {}

/**
 * Procedural style:
 *
 * @param tidy
 * @return array
 **/
function tidy_get_config($object) {}

/**
 * Procedural style:
 *
 * @param tidy
 * @return string
 **/
function tidy_get_error_buffer($object) {}

/**
 * Procedural style:
 *
 * @param tidy
 * @return tidyNode
 **/
function tidy_get_head($object) {}

/**
 * Procedural style:
 *
 * @param tidy
 * @return int
 **/
function tidy_get_html_ver($object) {}

/**
 * Procedural style:
 *
 * @param tidy
 * @return tidyNode
 **/
function tidy_get_html($object) {}

/**
 * Procedural style:
 *
 * @param tidy
 * @param string
 * @return string
 **/
function tidy_get_opt_doc($object, $optname) {}

/**
 * Gets a string with the repaired html.
 *
 * @param tidy
 * @return string
 **/
function tidy_get_output($object) {}

/**
 * Procedural style:
 *
 * @return string
 **/
function tidy_get_release() {}

/**
 * Procedural style:
 *
 * @param tidy
 * @return tidyNode
 **/
function tidy_get_root($object) {}

/**
 * Procedural style:
 *
 * @param tidy
 * @return int
 **/
function tidy_get_status($object) {}

/**
 * Procedural style:
 *
 * @param tidy
 * @param string
 * @return mixed
 **/
function tidy_getopt($object, $option) {}

/**
 * Procedural style:
 *
 * @param tidy
 * @return bool
 **/
function tidy_is_xhtml($object) {}

/**
 * Procedural style:
 *
 * @param tidy
 * @return bool
 **/
function tidy_is_xml($object) {}

/**
 * This function loads a Tidy configuration file, with the specified
 * encoding.
 *
 * @param string
 * @param string
 * @return void
 **/
function tidy_load_config($filename, $encoding) {}

/**
 * Procedural style:
 *
 * @param string
 * @param mixed
 * @param string
 * @param bool
 * @return tidy
 **/
function tidy_parse_file($filename, $config, $encoding, $use_include_path) {}

/**
 * Procedural style:
 *
 * @param string
 * @param mixed
 * @param string
 * @return tidy
 **/
function tidy_parse_string($input, $config, $encoding) {}

/**
 * This function repairs the given file and returns it as a string.
 *
 * @param string
 * @param mixed
 * @param string
 * @param bool
 * @return string
 **/
function tidy_repair_file($filename, $config, $encoding, $use_include_path) {}

/**
 * This function repairs the given string.
 *
 * @param string
 * @param mixed
 * @param string
 * @return string
 **/
function tidy_repair_string($data, $config, $encoding) {}

/**
 * This function restores the Tidy configuration to the default values.
 *
 * @return bool
 **/
function tidy_reset_config() {}

/**
 * Saves current settings to the specified file. Only non-default values are
 * written.
 *
 * @param string
 * @return bool
 **/
function tidy_save_config($filename) {}

/**
 * Sets the encoding for input/output documents.
 *
 * @param string
 * @return bool
 **/
function tidy_set_encoding($encoding) {}

/**
 * tidy_setopt updates the specified
 * option with a new value.
 * You will find a list with each configuration option at: .
 *
 * @param string
 * @param mixed
 * @return bool
 **/
function tidy_setopt($option, $value) {}

/**
 * tidy_warning_count returns the number of Tidy warnings
 * encountered for the specified document.
 *
 * @param tidy
 * @return int
 **/
function tidy_warning_count($object) {}

/**
 * token_get_all parses the given source 
 * string into PHP language tokens using the Zend engines lexical scanner.
 *
 * @param string
 * @return array
 **/
function token_get_all($source) {}

/**
 * token_name gets the symbolic name for a PHP 
 * token value.
 *
 * @param int
 * @return string
 **/
function token_name($token) {}

/**
 * Convert a binary string encoded in encoding to a 
 * unicode string.
 *
 * @param string
 * @param string
 * @param int
 * @return unicode
 **/
function unicode_decode($input, $encoding, $errmode) {}

/**
 * Takes a unicode string and converts it to a string in 
 * the specified encoding.
 *
 * @param unicode
 * @param string
 * @param int
 * @return string
 **/
function unicode_encode($input, $encoding, $errmode) {}

/**
 * Return the current error mode for string conversions in 
 * direction.
 *
 * @param int
 * @return int
 **/
function unicode_get_error_mode($direction) {}

/**
 * Return the substitution character for string conversion errors set by 
 * unicode_set_subst_char.
 *
 * @return unicode
 **/
function unicode_get_subst_char() {}

/**
 * This function sets the error mode for string conversions between different
 * encodings. An error can occur during conversion when an illegal character 
 * is encountered or if a character cannot be represented into the new encoding.
 * By default, when an error is encountered, the conversion stops.
 *
 * @param int
 * @param int
 * @return bool
 **/
function unicode_set_error_mode($direction, $mode) {}

/**
 * When converting a string from or to unicode, an invalid or unconvertable
 * character may be encountered. When the conversion error mode is set to 
 * U_CONV_ERROR_SUBST, the character that caused the 
 * error is substituted by a character set by this function. The default 
 * substitution character is ?.
 *
 * @param unicode
 * @return bool
 **/
function unicode_set_subst_char($character) {}

/**
 * Toggles autocommit behaviour.
 *
 * @param resource
 * @param bool
 * @return mixed
 **/
function odbc_autocommit($connection_id, $OnOff) {}

/**
 * Enables handling of binary column data. ODBC SQL types affected are
 * BINARY, VARBINARY, and LONGVARBINARY.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function odbc_binmode($result_id, $mode) {}

/**
 * odbc_close_all will close down all
 * connections to database server(s).
 *
 * @return void
 **/
function odbc_close_all() {}

/**
 * Closes down the connection to the database server.
 *
 * @param resource
 * @return void
 **/
function odbc_close($connection_id) {}

/**
 * Lists columns and associated privileges for the given table.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function odbc_columnprivileges($connection_id, $qualifier, $owner, $table_name, $column_name) {}

/**
 * Lists all columns in the requested range.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function odbc_columns($connection_id, $qualifier, $schema, $table_name, $column_name) {}

/**
 * Commits all pending transactions on the connection.
 *
 * @param resource
 * @return bool
 **/
function odbc_commit($connection_id) {}

/**
 * @param string
 * @param string
 * @param string
 * @param int
 * @return resource
 **/
function odbc_connect($dsn, $user, $password, $cursor_type) {}

/**
 * Gets the cursorname for the given result_id.
 *
 * @param resource
 * @return string
 **/
function odbc_cursor($result_id) {}

/**
 * This function will return the list of available DNS (after calling it
 * several times).
 *
 * @param resource
 * @param int
 * @return array
 **/
function odbc_data_source($connection_id, $fetch_type) {}

/**
 * @param resource
 * @return string
 **/
function odbc_error($connection_id) {}

/**
 * @param resource
 * @return string
 **/
function odbc_errormsg($connection_id) {}

/**
 * Sends an SQL statement to the database server.
 *
 * @param resource
 * @param string
 * @param int
 * @return resource
 **/
function odbc_exec($connection_id, $query_string, $flags) {}

/**
 * Executes a statement prepared with odbc_prepare.
 *
 * @param resource
 * @param array
 * @return bool
 **/
function odbc_execute($result_id, $parameters_array) {}

/**
 * Fetch an associative array from an ODBC query. See the 
 * changelog below for when this function is available.
 *
 * @param resource
 * @param int
 * @return array
 **/
function odbc_fetch_array($result, $rownumber) {}

/**
 * Fetch one result row into array.
 *
 * @param resource
 * @param array
 * @param int
 * @return int
 **/
function odbc_fetch_into($result_id, $result_array, $rownumber) {}

/**
 * Fetch an object from an ODBC query. See the changelog below
 * for when this function is available.
 *
 * @param resource
 * @param int
 * @return object
 **/
function odbc_fetch_object($result, $rownumber) {}

/**
 * Fetches a row of the data that was returned by odbc_do
 * or odbc_exec. After odbc_fetch_row
 * is called, the fields of that row can be accessed with
 * odbc_result.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function odbc_fetch_row($result_id, $row_number) {}

/**
 * Gets the length of the field referenced by number in the given result
 * identifier.
 *
 * @param resource
 * @param int
 * @return int
 **/
function odbc_field_len($result_id, $field_number) {}

/**
 * Gets the name of the field occupying the given column number in the given
 * result identifier.
 *
 * @param resource
 * @param int
 * @return string
 **/
function odbc_field_name($result_id, $field_number) {}

/**
 * Gets the number of the column slot that corresponds to the named field in
 * the given result identifier.
 *
 * @param resource
 * @param string
 * @return int
 **/
function odbc_field_num($result_id, $field_name) {}

/**
 * Gets the scale of the field referenced by number in the given result
 * identifier.
 *
 * @param resource
 * @param int
 * @return int
 **/
function odbc_field_scale($result_id, $field_number) {}

/**
 * Gets the SQL type of the field referenced by number in the given result
 * identifier.
 *
 * @param resource
 * @param int
 * @return string
 **/
function odbc_field_type($result_id, $field_number) {}

/**
 * Retrieves a list of foreign keys in the specified table or a list of
 * foreign keys in other tables that refer to the primary key in the
 * specified table
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function odbc_foreignkeys($connection_id, $pk_qualifier, $pk_owner, $pk_table, $fk_qualifier, $fk_owner, $fk_table) {}

/**
 * Free resources associated with a result.
 *
 * @param resource
 * @return bool
 **/
function odbc_free_result($result_id) {}

/**
 * Retrieves information about data types supported by the data source.
 *
 * @param resource
 * @param int
 * @return resource
 **/
function odbc_gettypeinfo($connection_id, $data_type) {}

/**
 * Enables handling of LONG and LONGVARBINARY columns.
 *
 * @param resource
 * @param int
 * @return bool
 **/
function odbc_longreadlen($result_id, $length) {}

/**
 * Checks if there are more result sets available as well as allowing access
 * to the next result set via odbc_fetch_array,
 * odbc_fetch_row, odbc_result, etc.
 *
 * @param resource
 * @return bool
 **/
function odbc_next_result($result_id) {}

/**
 * Gets the number of fields (columns) in an ODBC result.
 *
 * @param resource
 * @return int
 **/
function odbc_num_fields($result_id) {}

/**
 * Gets the number of rows in a result. For INSERT, UPDATE and DELETE
 * statements odbc_num_rows returns the number of rows
 * affected. For a SELECT clause this can be the number
 * of rows available.
 *
 * @param resource
 * @return int
 **/
function odbc_num_rows($result_id) {}

/**
 * Opens a persistent database connection.
 *
 * @param string
 * @param string
 * @param string
 * @param int
 * @return resource
 **/
function odbc_pconnect($dsn, $user, $password, $cursor_type) {}

/**
 * Prepares a statement for execution. The result identifier can be used
 * later to execute the statement with odbc_execute.
 *
 * @param resource
 * @param string
 * @return resource
 **/
function odbc_prepare($connection_id, $query_string) {}

/**
 * Returns a result identifier that can be used to fetch the column names
 * that comprise the primary key for a table.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function odbc_primarykeys($connection_id, $qualifier, $owner, $table) {}

/**
 * Retrieve information about parameters to procedures.
 *
 * @param resource
 * @return resource
 **/
function odbc_procedurecolumns($connection_id) {}

/**
 * Lists all procedures in the requested range.
 *
 * @param resource
 * @return resource
 **/
function odbc_procedures($connection_id) {}

/**
 * Prints all rows from a result identifier produced by
 * odbc_exec. The result is printed in HTML table format.
 *
 * @param resource
 * @param string
 * @return int
 **/
function odbc_result_all($result_id, $format) {}

/**
 * Get result data
 *
 * @param resource
 * @param mixed
 * @return mixed
 **/
function odbc_result($result_id, $field) {}

/**
 * Rolls back all pending statements on the connection.
 *
 * @param resource
 * @return bool
 **/
function odbc_rollback($connection_id) {}

/**
 * This function allows fiddling with the ODBC options for a
 * particular connection or query result. It was written to help
 * find work around to problems in quirky ODBC drivers. You should
 * probably only use this function if you are an ODBC programmer and
 * understand the effects the various options will have. You will
 * certainly need a good ODBC reference to explain all the different
 * options and values that can be used. Different driver versions
 * support different options.
 *
 * @param resource
 * @param int
 * @param int
 * @param int
 * @return bool
 **/
function odbc_setoption($id, $function, $option, $param) {}

/**
 * Retrieves either the optimal set of columns that uniquely identifies a
 * row in the table, or columns that are automatically updated when any
 * value in the row is updated by a transaction.
 *
 * @param resource
 * @param int
 * @param string
 * @param string
 * @param string
 * @param int
 * @param int
 * @return resource
 **/
function odbc_specialcolumns($connection_id, $type, $qualifier, $owner, $table, $scope, $nullable) {}

/**
 * Get statistics about a table and its indexes.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param int
 * @param int
 * @return resource
 **/
function odbc_statistics($connection_id, $qualifier, $owner, $table_name, $unique, $accuracy) {}

/**
 * Lists tables in the requested range and the privileges associated
 * with each table.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function odbc_tableprivileges($connection_id, $qualifier, $owner, $name) {}

/**
 * Lists all tables in the requested range.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param string
 * @return resource
 **/
function odbc_tables($connection_id, $qualifier, $owner, $name, $types) {}

/**
 * Decodes a base64 encoded data.
 *
 * @param string
 * @param bool
 * @return string
 **/
function base64_decode($data, $strict) {}

/**
 * Encodes the given data with base64.
 *
 * @param string
 * @return string
 **/
function base64_encode($data) {}

/**
 * get_headers returns an array with the headers sent
 * by the server in response to a HTTP request.
 *
 * @param string
 * @param int
 * @return array
 **/
function get_headers($url, $format) {}

/**
 * Opens filename and parses it line by line for
 * meta tags in the file. The parsing stops at
 * /head.
 *
 * @param string
 * @param bool
 * @return array
 **/
function get_meta_tags($filename, $use_include_path) {}

/**
 * Generates a URL-encoded query string from the associative (or indexed)
 * array provided.
 *
 * @param array
 * @param string
 * @param string
 * @return string
 **/
function http_build_query($formdata, $numeric_prefix, $arg_separator) {}

/**
 * This function parses a URL and returns an associative array containing any
 * of the various components of the URL that are present.
 *
 * @param string
 * @param int
 * @return mixed
 **/
function parse_url($url, $component) {}

/**
 * Returns a string in which the sequences with percent
 * (%) signs followed by two hex digits have been replaced
 * with literal characters.
 *
 * @param string
 * @return string
 **/
function rawurldecode($str) {}

/**
 * Encodes the given string according to RFC 1738.
 *
 * @param string
 * @return string
 **/
function rawurlencode($str) {}

/**
 * Decodes any %##
 * encoding in the given string.
 *
 * @param string
 * @return string
 **/
function urldecode($str) {}

/**
 * This function is convenient when encoding a string to be used in a query
 * part of a URL, as a convenient way to pass variables to the next page.
 *
 * @param string
 * @return string
 **/
function urlencode($str) {}

/**
 * Dumps a string representation of an internal zend value to output.
 *
 * @param mixed
 * @return void
 **/
function debug_zval_dump($variable) {}

/**
 * Gets the float value of var.
 *
 * @param mixed
 * @return float
 **/
function floatval($var) {}

/**
 * This function returns a multidimensional array containing a list of
 * all defined variables, be them environment, server or user-defined
 * variables, within the scope that get_defined_vars is
 * called.
 *
 * @return array
 **/
function get_defined_vars() {}

/**
 * This function gets the type of the given resource.
 *
 * @param resource
 * @return string
 **/
function get_resource_type($handle) {}

/**
 * Returns the type of the PHP variable
 * var.
 *
 * @param mixed
 * @return string
 **/
function gettype($var) {}

/**
 * Imports GET/POST/Cookie variables into the global scope. It is useful if
 * you disabled register_globals,
 * but would like to see some variables in the global scope.
 *
 * @param string
 * @param string
 * @return bool
 **/
function import_request_variables($types, $prefix) {}

/**
 * Returns the integer value of var,
 * using the specified base for the conversion 
 * (the default is base 10).
 *
 * @param mixed
 * @param int
 * @return int
 **/
function intval($var, $base) {}

/**
 * Finds whether the given variable is an array.
 *
 * @param mixed
 * @return bool
 **/
function is_array($var) {}

/**
 * Finds whether the given variable is a native binary string.
 *
 * @param mixed
 * @return bool
 **/
function is_binary($var) {}

/**
 * Finds whether the given variable is a boolean.
 *
 * @param mixed
 * @return bool
 **/
function is_bool($var) {}

/**
 * Finds whether the given variable is a native unicode or 
 * binary string.
 *
 * @param mixed
 * @return bool
 **/
function is_buffer($var) {}

/**
 * Verify that the contents of a variable can be called as a function.
 * This can check that a simple variable contains the name of a valid
 * function, or that an array contains a properly encoded object and
 * function name.
 *
 * @param mixed
 * @param bool
 * @param string
 * @return bool
 **/
function is_callable($var, $syntax_only, $callable_name) {}

/**
 * Finds whether the type of the given variable is float.
 *
 * @param mixed
 * @return bool
 **/
function is_float($var) {}

/**
 * Finds whether the type of the given variable is integer.
 *
 * @param mixed
 * @return bool
 **/
function is_int($var) {}

/**
 * Finds whether the given variable is .
 *
 * @param mixed
 * @return bool
 **/
function is_null($var) {}

/**
 * Finds whether the given variable is numeric. Numeric strings consist of
 * optional sign, any number of digits, optional decimal part and optional
 * exponential part. Thus +0123.45e6 is a valid numeric
 * value. Hexadecimal notation (0xFF) is allowed too but
 * only without sign, decimal and exponential part.
 *
 * @param mixed
 * @return bool
 **/
function is_numeric($var) {}

/**
 * Finds whether the given variable is an object.
 *
 * @param mixed
 * @return bool
 **/
function is_object($var) {}

/**
 * Finds whether the given variable is a resource.
 *
 * @param mixed
 * @return bool
 **/
function is_resource($var) {}

/**
 * Finds whether the given variable is a scalar.
 *
 * @param mixed
 * @return bool
 **/
function is_scalar($var) {}

/**
 * Finds whether the type given variable is string.
 *
 * @param mixed
 * @return bool
 **/
function is_string($var) {}

/**
 * Finds whether the given variable is a unicode string.
 *
 * @param mixed
 * @return bool
 **/
function is_unicode($var) {}

/**
 * print_r displays information about a variable
 * in a way that's readable by humans.
 *
 * @param mixed
 * @param bool
 * @return mixed
 **/
function print_r($expression, $return) {}

/**
 * Generates a storable representation of a value
 *
 * @param mixed
 * @return string
 **/
function serialize($value) {}

/**
 * Set the type of variable var to
 * type.
 *
 * @param mixed
 * @param string
 * @return bool
 **/
function settype($var, $type) {}

/**
 * @param mixed
 * @return string
 **/
function strval($var) {}

/**
 * @param string
 * @return mixed
 **/
function unserialize($str) {}

/**
 * @param mixed
 * @param mixed
 * @return void
 **/
function var_dump($expression, $expression) {}

/**
 * @param mixed
 * @param bool
 * @return mixed
 **/
function var_export($expression, $return) {}

/**
 * @param string
 * @param string
 * @return bool
 **/
function vpopmail_add_alias_domain_ex($olddomain, $newdomain) {}

/**
 * @param string
 * @param string
 * @return bool
 **/
function vpopmail_add_alias_domain($domain, $aliasdomain) {}

/**
 * @param string
 * @param string
 * @param string
 * @param string
 * @param bool
 * @return bool
 **/
function vpopmail_add_domain_ex($domain, $passwd, $quota, $bounce, $apop) {}

/**
 * @param string
 * @param string
 * @param int
 * @param int
 * @return bool
 **/
function vpopmail_add_domain($domain, $dir, $uid, $gid) {}

/**
 * @param string
 * @param string
 * @param string
 * @param string
 * @param bool
 * @return bool
 **/
function vpopmail_add_user($user, $domain, $password, $gecos, $apop) {}

/**
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function vpopmail_alias_add($user, $domain, $alias) {}

/**
 * @param string
 * @return bool
 **/
function vpopmail_alias_del_domain($domain) {}

/**
 * @param string
 * @param string
 * @return bool
 **/
function vpopmail_alias_del($user, $domain) {}

/**
 * @param string
 * @return array
 **/
function vpopmail_alias_get_all($domain) {}

/**
 * @param string
 * @param string
 * @return array
 **/
function vpopmail_alias_get($alias, $domain) {}

/**
 * @param string
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function vpopmail_auth_user($user, $domain, $password, $apop) {}

/**
 * @param string
 * @return bool
 **/
function vpopmail_del_domain_ex($domain) {}

/**
 * @param string
 * @return bool
 **/
function vpopmail_del_domain($domain) {}

/**
 * @param string
 * @param string
 * @return bool
 **/
function vpopmail_del_user($user, $domain) {}

/**
 * @return string
 **/
function vpopmail_error() {}

/**
 * @param string
 * @param string
 * @param string
 * @param bool
 * @return bool
 **/
function vpopmail_passwd($user, $domain, $password, $apop) {}

/**
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function vpopmail_set_user_quota($user, $domain, $quota) {}

/**
 * You need to call this function if you would like to define a type for a
 * w32api call.
 *
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function w32api_deftype($typename, $member1_type, $member1_name) {}

/**
 * This function creates an instance of the data type named
 * typename, filling in the values of the data type.
 *
 * @param string
 * @param mixed
 * @return resource
 **/
function w32api_init_dtype($typename, $value) {}

/**
 * w32api_invoke_function tries to find the previously
 * registered function, passing the parameters you provided.
 *
 * @param string
 * @param mixed
 * @return mixed
 **/
function w32api_invoke_function($funcname, $argument) {}

/**
 * This function tries to find the function_name function
 * in libary, and tries to import it into PHP.
 *
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function w32api_register_function($library, $function_name, $return_type) {}

/**
 * This function sets the method call type.
 *
 * @param int
 * @return void
 **/
function w32api_set_call_method($method) {}

/**
 * Serializes the passed variables and add the result to the fiven packet.
 *
 * @param resource
 * @param mixed
 * @return bool
 **/
function wddx_add_vars($packet_id, $var_name) {}

/**
 * Ends and returns the given WDDX packet.
 *
 * @param resource
 * @return string
 **/
function wddx_packet_end($packet_id) {}

/**
 * Start a new WDDX packet for incremental addition of variables.
 * It automatically creates a structure definition inside the packet to
 * contain the variables.
 *
 * @param string
 * @return resource
 **/
function wddx_packet_start($comment) {}

/**
 * Creates a WDDX packet from a single given value.
 *
 * @param mixed
 * @param string
 * @return string
 **/
function wddx_serialize_value($var, $comment) {}

/**
 * Creates a WDDX packet with a structure that contains the serialized
 * representation of the passed variables.
 *
 * @param mixed
 * @return string
 **/
function wddx_serialize_vars($var_name) {}

/**
 * Unserializes a WDDX packet.
 *
 * @param string
 * @return mixed
 **/
function wddx_unserialize($packet) {}

/**
 * Retrieves statistics about all running processes.
 *
 * @return array
 **/
function win32_ps_list_procs() {}

/**
 * Retrieves statistics about the global memory utilization.
 *
 * @return array
 **/
function win32_ps_stat_mem() {}

/**
 * Retrieves statistics about the process with the process id pid.
 *
 * @param int
 * @return array
 **/
function win32_ps_stat_proc($pid) {}

/**
 * @param array
 * @param string
 * @return mixed
 **/
function win32_create_service($details, $machine) {}

/**
 * Attempts to delete a service from the SCM database. Administrative
 * privileges are required for this to succeed.
 *
 * @param string
 * @param string
 * @return int
 **/
function win32_delete_service($servicename, $machine) {}

/**
 * Returns the control code that was last sent to this service process.
 * When running as a service you should periodically check this to determine if
 * your service needs to stop running.
 *
 * @return int
 **/
function win32_get_last_control_message() {}

/**
 * Queries the current status for a service, returning an array of
 * information.
 *
 * @param string
 * @param string
 * @return mixed
 **/
function win32_query_service_status($servicename, $machine) {}

/**
 * Informs the SCM of the current status of a running service.
 * This call is only valid for a running service process.
 *
 * @param int
 * @return bool
 **/
function win32_set_service_status($status) {}

/**
 * When launched via the Service Control Manager, a service process is
 * required to "check-in" with it to establish service monitoring and
 * communication facilities. This function performs the check-in by spawning
 * a thread to handle the lower-level communication with the service control
 * manager.
 *
 * @param string
 * @return mixed
 **/
function win32_start_service_ctrl_dispatcher($name) {}

/**
 * Attempts to start the named service. Usually requires administrative
 * privileges.
 *
 * @param string
 * @param string
 * @return int
 **/
function win32_start_service($servicename, $machine) {}

/**
 * Stops a named service. Requires administrative privileges.
 *
 * @param string
 * @param string
 * @return int
 **/
function win32_stop_service($servicename, $machine) {}

/**
 * This function gets the value of an extended attribute of a file.
 *
 * @param string
 * @param string
 * @param int
 * @return string
 **/
function xattr_get($filename, $name, $flags) {}

/**
 * This functions gets a list of names of extended attributes of a file.
 *
 * @param string
 * @param int
 * @return array
 **/
function xattr_list($filename, $flags) {}

/**
 * This function removes an extended attribute of a file.
 *
 * @param string
 * @param string
 * @param int
 * @return bool
 **/
function xattr_remove($filename, $name, $flags) {}

/**
 * This function sets the value of an extended attribute of a file.
 *
 * @param string
 * @param string
 * @param string
 * @param int
 * @return bool
 **/
function xattr_set($filename, $name, $value, $flags) {}

/**
 * This functions checks if the filesystem holding the given file supports 
 * extended attributes. Read access to the file is required.
 *
 * @param string
 * @param int
 * @return bool
 **/
function xattr_supported($filename, $flags) {}

/**
 * Returns a size of a result file that would be created after applying binary patch from file
 * file to the original file.
 *
 * @param string
 * @return int
 **/
function xdiff_file_bdiff_size($file) {}

/**
 * Makes a binary diff of two files and stores the result in a patch file.
 * This function works with both text and binary files. Resulting patch
 * file can be later applied using xdiff_file_bpatch/xdiff_string_bpatch.
 *
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function xdiff_file_bdiff($old_file, $new_file, $dest) {}

/**
 * Patches a file with a binary
 * patch and stores the result in a file dest. 
 * This function accepts patches created both via xdiff_file_bdiff 
 * and xdiff_file_rabdiff functions or their string counterparts.
 *
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function xdiff_file_bpatch($file, $patch, $dest) {}

/**
 * Makes a binary diff of two files and stores the result in a patch file.
 * This function works with both text and binary files. Resulting patch
 * file can be later applied using xdiff_file_bpatch.
 *
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function xdiff_file_diff_binary($old_file, $new_file, $dest) {}

/**
 * Makes an unified diff containing differences between old_file and
 * new_file and stores it in dest file. The
 * resulting file is human-readable. An optional context parameter
 * specifies how many lines of context should be added around each change (with default value of 3).
 * Setting minimal parameter to true will result in outputting the shortest
 * patch file possible (can take a long time).
 *
 * @param string
 * @param string
 * @param string
 * @param int
 * @param bool
 * @return bool
 **/
function xdiff_file_diff($old_file, $new_file, $dest, $context, $minimal) {}

/**
 * Merges three files into one and stores the result in a file dest. 
 * The old_file is an original version while new_file1
 * and new_file2 are modified versions of an original.
 *
 * @param string
 * @param string
 * @param string
 * @param string
 * @return mixed
 **/
function xdiff_file_merge3($old_file, $new_file1, $new_file2, $dest) {}

/**
 * Patches a file with a binary
 * patch and stores the result in a file dest. 
 * This function accepts patches created both via xdiff_file_bdiff 
 * or xdiff_file_rabdiff functions or their string counterparts.
 *
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function xdiff_file_patch_binary($file, $patch, $dest) {}

/**
 * Patches a file with a patch and stores the result in a file.
 * patch has to be an unified diff created by 
 * xdiff_file_diff/xdiff_string_diff function. 
 * An optional flags parameter specifies mode of operation.
 *
 * @param string
 * @param string
 * @param string
 * @param int
 * @return mixed
 **/
function xdiff_file_patch($file, $patch, $dest, $flags) {}

/**
 * Makes a binary diff of two files and stores the result in a patch file.
 * The difference between this function and xdiff_file_bdiff is different
 * algorithm used which should result in faster execution and smaller diff produced.
 * This function works with both text and binary files. Resulting patch
 * file can be later applied using xdiff_file_bpatch/xdiff_string_bpatch.
 *
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function xdiff_file_rabdiff($old_file, $new_file, $dest) {}

/**
 * Returns a size of a result file that would be created after applying binary patch to
 * the original file.
 *
 * @param string
 * @return int
 **/
function xdiff_string_bdiff_size($patch) {}

/**
 * Makes a binary diff of two strings and returns the result.
 * This function works with both text and binary data. Resulting patch
 * can be later applied using xdiff_string_bpatch/xdiff_file_bpatch.
 *
 * @param string
 * @param string
 * @return string
 **/
function xdiff_string_bdiff($old_data, $new_data) {}

/**
 * Patches a string str with a binary patch.
 * This function accepts patches created both via xdiff_string_bdiff 
 * and xdiff_string_rabdiff functions or their file counterparts.
 *
 * @param string
 * @param string
 * @return string
 **/
function xdiff_string_bpatch($str, $patch) {}

/**
 * Makes an unified diff containing differences between old_data string and
 * new_data string and returns it. The resulting diff is human-readable. 
 * An optional context parameter specifies how many lines of context should be
 * added around each change (with default value of 3). Setting minimal parameter 
 * to true will result in outputting the shortest patch file possible (can take a long time).
 *
 * @param string
 * @param string
 * @param int
 * @param bool
 * @return string
 **/
function xdiff_string_diff($old_data, $new_data, $context, $minimal) {}

/**
 * Merges three strings into one and returns the result.
 * The old_data is an original version of data 
 * while new_file1 and new_file2 are modified 
 * versions of an original. An optional error is used to pass any
 * rejected parts during merging process.
 *
 * @param string
 * @param string
 * @param string
 * @param string
 * @return mixed
 **/
function xdiff_string_merge3($old_data, $new_data1, $new_data2, $error) {}

/**
 * Patches a string str with a binary patch.
 * This function accepts patches created both via xdiff_string_bdiff 
 * and xdiff_string_rabdiff functions or their file counterparts.
 *
 * @param string
 * @param string
 * @return string
 **/
function xdiff_string_patch_binary($str, $patch) {}

/**
 * Patches a str string with an unified patch in patch parameter 
 * and returns the result. patch has to be an unified diff created by 
 * xdiff_file_diff/xdiff_string_diff function. 
 * An optional flags parameter specifies mode of operation. Any
 * rejected parts of the patch will be stored inside error variable if 
 * it is provided.
 *
 * @param string
 * @param string
 * @param int
 * @param string
 * @return string
 **/
function xdiff_string_patch($str, $patch, $flags, $error) {}

/**
 * This function decodes data, assumed to be
 * UTF-8 encoded, to ISO-8859-1.
 *
 * @param string
 * @return string
 **/
function utf8_decode($data) {}

/**
 * This function encodes the string data to
 * UTF-8, and returns the encoded version.
 * UTF-8 is a standard mechanism used by
 * Unicode for encoding wide
 * character values into a byte stream.
 * UTF-8 is transparent to plain ASCII
 * characters, is self-synchronized (meaning it is possible for a program to
 * figure out where in the bytestream characters start) and can be used with
 * normal string comparison functions for sorting and such. PHP encodes
 * UTF-8 characters in up to four bytes, like this:
 * 
 * UTF-8 encoding
 * 
 * 
 * 
 * bytes
 * bits
 * representation
 * 
 * 
 * 
 * 
 * 1
 * 7
 * 0bbbbbbb
 * 
 * 
 * 2
 * 11
 * 110bbbbb 10bbbbbb
 * 
 * 
 * 3
 * 16
 * 1110bbbb 10bbbbbb 10bbbbbb
 * 
 * 
 * 4
 * 21
 * 11110bbb 10bbbbbb 10bbbbbb 10bbbbbb
 * 
 * 
 * 
 * 
 * Each b represents a bit that can be
 * used to store character data.
 *
 * @param string
 * @return string
 **/
function utf8_encode($data) {}

/**
 * Gets the XML parser error string associated with the given 
 * code.
 *
 * @param int
 * @return string
 **/
function xml_error_string($code) {}

/**
 * Gets the current byte index of the given XML parser.
 *
 * @param resource
 * @return int
 **/
function xml_get_current_byte_index($parser) {}

/**
 * Gets the current column number of the given XML parser.
 *
 * @param resource
 * @return int
 **/
function xml_get_current_column_number($parser) {}

/**
 * Gets the current line number for the given XML parser.
 *
 * @param resource
 * @return int
 **/
function xml_get_current_line_number($parser) {}

/**
 * Gets the XML parser error code.
 *
 * @param resource
 * @return int
 **/
function xml_get_error_code($parser) {}

/**
 * This function parses an XML file into 2 parallel array structures, one
 * (index) containing pointers to the location of the
 * appropriate values in the values array. These last
 * two parameters must be passed by reference.
 *
 * @param resource
 * @param string
 * @param array
 * @param array
 * @return int
 **/
function xml_parse_into_struct($parser, $data, $values, $index) {}

/**
 * xml_parse parses an XML document. The handlers for
 * the configured events are called as many times as necessary.
 *
 * @param resource
 * @param string
 * @param bool
 * @return int
 **/
function xml_parse($parser, $data, $is_final) {}

/**
 * xml_parser_create_ns creates a new XML parser
 * with XML namespace support and returns a resource handle referencing 
 * it to be used by the other XML functions.
 *
 * @param string
 * @param string
 * @return resource
 **/
function xml_parser_create_ns($encoding, $separator) {}

/**
 * xml_parser_create creates a new XML parser
 * and returns a resource handle referencing it to be used by the
 * other XML functions.
 *
 * @param string
 * @return resource
 **/
function xml_parser_create($encoding) {}

/**
 * Frees the given XML parser.
 *
 * @param resource
 * @return bool
 **/
function xml_parser_free($parser) {}

/**
 * Gets an option value from an XML parser.
 *
 * @param resource
 * @param int
 * @return mixed
 **/
function xml_parser_get_option($parser, $option) {}

/**
 * Sets an option in an XML parser.
 *
 * @param resource
 * @param int
 * @param mixed
 * @return bool
 **/
function xml_parser_set_option($parser, $option, $value) {}

/**
 * Sets the character data handler function for the XML parser
 * parser.
 *
 * @param resource
 * @param callback
 * @return bool
 **/
function xml_set_character_data_handler($parser, $handler) {}

/**
 * Sets the default handler function for the XML parser
 * parser.
 *
 * @param resource
 * @param callback
 * @return bool
 **/
function xml_set_default_handler($parser, $handler) {}

/**
 * Sets the element handler functions for the XML parser.
 * start_element_handler and
 * end_element_handler are strings containing
 * the names of functions that must exist when xml_parse
 * is called for parser.
 *
 * @param resource
 * @param callback
 * @param callback
 * @return bool
 **/
function xml_set_element_handler($parser, $start_element_handler, $end_element_handler) {}

/**
 * Set a handler to be called when leaving the scope of a namespace
 * declaration. This will be called, for each namespace declaration, after
 * the handler for the end tag of the element in which the namespace was
 * declared.
 *
 * @param resource
 * @param callback
 * @return bool
 **/
function xml_set_end_namespace_decl_handler($parser, $handler) {}

/**
 * Sets the external entity reference handler function for the XML parser
 * parser.
 *
 * @param resource
 * @param callback
 * @return bool
 **/
function xml_set_external_entity_ref_handler($parser, $handler) {}

/**
 * Sets the notation declaration handler function for the XML parser
 * parser.
 *
 * @param resource
 * @param callback
 * @return bool
 **/
function xml_set_notation_decl_handler($parser, $handler) {}

/**
 * This function allows to use parser inside
 * object. All callback functions could be set with
 * xml_set_element_handler etc and assumed to be
 * methods of object.
 *
 * @param resource
 * @param object
 * @return bool
 **/
function xml_set_object($parser, $object) {}

/**
 * Sets the processing instruction (PI) handler function for the XML parser
 * parser.
 *
 * @param resource
 * @param callback
 * @return bool
 **/
function xml_set_processing_instruction_handler($parser, $handler) {}

/**
 * Set a handler to be called when a namespace is declared. Namespace
 * declarations occur inside start tags. But the namespace declaration start
 * handler is called before the start tag handler for each namespace declared
 * in that start tag.
 *
 * @param resource
 * @param callback
 * @return bool
 **/
function xml_set_start_namespace_decl_handler($parser, $handler) {}

/**
 * Sets the unparsed entity declaration handler function for the XML parser
 * parser.
 *
 * @param resource
 * @param callback
 * @return bool
 **/
function xml_set_unparsed_entity_decl_handler($parser, $handler) {}

/**
 * @param string
 * @param string
 * @param string
 * @return mixed
 **/
function xmlrpc_decode_request($xml, $method, $encoding) {}

/**
 * @param string
 * @param string
 * @return mixed
 **/
function xmlrpc_decode($xml, $encoding) {}

/**
 * @param string
 * @param mixed
 * @param array
 * @return string
 **/
function xmlrpc_encode_request($method, $params, $output_options) {}

/**
 * @param mixed
 * @return string
 **/
function xmlrpc_encode($value) {}

/**
 * This function is especially useful for base64 and datetime strings.
 *
 * @param mixed
 * @return string
 **/
function xmlrpc_get_type($value) {}

/**
 * @param array
 * @return bool
 **/
function xmlrpc_is_fault($arg) {}

/**
 * @param string
 * @return array
 **/
function xmlrpc_parse_method_descriptions($xml) {}

/**
 * @param resource
 * @param array
 * @return int
 **/
function xmlrpc_server_add_introspection_data($server, $desc) {}

/**
 * @param resource
 * @param string
 * @param mixed
 * @param array
 * @return string
 **/
function xmlrpc_server_call_method($server, $xml, $user_data, $output_options) {}

/**
 * @return resource
 **/
function xmlrpc_server_create() {}

/**
 * @param resource
 * @return int
 **/
function xmlrpc_server_destroy($server) {}

/**
 * @param resource
 * @param string
 * @return bool
 **/
function xmlrpc_server_register_introspection_callback($server, $function) {}

/**
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function xmlrpc_server_register_method($server, $method_name, $function) {}

/**
 * @param string
 * @param string
 * @return bool
 **/
function xmlrpc_set_type($value, $type) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @return bool
 **/
function xmlwriter_end_attribute($xmlwriter) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @return bool
 **/
function xmlwriter_end_cdata($xmlwriter) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @return bool
 **/
function xmlwriter_end_comment($xmlwriter) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @return bool
 **/
function xmlwriter_end_document($xmlwriter) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @return bool
 **/
function xmlwriter_end_dtd_attlist($xmlwriter) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @return bool
 **/
function xmlwriter_end_dtd_element($xmlwriter) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @return bool
 **/
function xmlwriter_end_dtd_entity($xmlwriter) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @return bool
 **/
function xmlwriter_end_dtd($xmlwriter) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @return bool
 **/
function xmlwriter_end_element($xmlwriter) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @return bool
 **/
function xmlwriter_end_pi($xmlwriter) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @param bool
 * @return mixed
 **/
function xmlwriter_flush($xmlwriter, $empty) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @return bool
 **/
function xmlwriter_full_end_element($xmlwriter) {}

/**
 * Object oriented style:
 *
 * @return resource
 **/
function xmlwriter_open_memory() {}

/**
 * Object oriented style:
 *
 * @param string
 * @return resource
 **/
function xmlwriter_open_uri($uri) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @param bool
 * @return string
 **/
function xmlwriter_output_memory($xmlwriter, $flush) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @param string
 * @return bool
 **/
function xmlwriter_set_indent_string($xmlwriter, $indentString) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @param bool
 * @return bool
 **/
function xmlwriter_set_indent($xmlwriter, $indent) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function xmlwriter_start_attribute_ns($xmlwriter, $prefix, $name, $uri) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @param string
 * @return bool
 **/
function xmlwriter_start_attribute($xmlwriter, $name) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @return bool
 **/
function xmlwriter_start_cdata($xmlwriter) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @return bool
 **/
function xmlwriter_start_comment($xmlwriter) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function xmlwriter_start_document($xmlwriter, $version, $encoding, $standalone) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @param string
 * @return bool
 **/
function xmlwriter_start_dtd_attlist($xmlwriter, $name) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @param string
 * @return bool
 **/
function xmlwriter_start_dtd_element($xmlwriter, $qualifiedName) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @param string
 * @param bool
 * @return bool
 **/
function xmlwriter_start_dtd_entity($xmlwriter, $name, $isparam) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function xmlwriter_start_dtd($xmlwriter, $qualifiedName, $publicId, $systemId) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function xmlwriter_start_element_ns($xmlwriter, $prefix, $name, $uri) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @param string
 * @return bool
 **/
function xmlwriter_start_element($xmlwriter, $name) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @param string
 * @return bool
 **/
function xmlwriter_start_pi($xmlwriter, $target) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @param string
 * @return bool
 **/
function xmlwriter_text($xmlwriter, $content) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function xmlwriter_write_attribute_ns($xmlwriter, $prefix, $name, $uri, $content) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function xmlwriter_write_attribute($xmlwriter, $name, $value) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @param string
 * @return bool
 **/
function xmlwriter_write_cdata($xmlwriter, $content) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @param string
 * @return bool
 **/
function xmlwriter_write_comment($xmlwriter, $content) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function xmlwriter_write_dtd_attlist($xmlwriter, $name, $content) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function xmlwriter_write_dtd_element($xmlwriter, $name, $content) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function xmlwriter_write_dtd_entity($xmlwriter, $name, $content) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function xmlwriter_write_dtd($xmlwriter, $name, $publicId, $systemId, $subset) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param string
 * @return bool
 **/
function xmlwriter_write_element_ns($xmlwriter, $prefix, $name, $uri, $content) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function xmlwriter_write_element($xmlwriter, $name, $content) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function xmlwriter_write_pi($xmlwriter, $target, $content) {}

/**
 * Object oriented style:
 *
 * @param resource
 * @param string
 * @return bool
 **/
function xmlwriter_write_raw($xmlwriter, $content) {}

/**
 * xslt_backend_info gets information about the
 * compilation settings of the backend.
 *
 * @return string
 **/
function xslt_backend_info() {}

/**
 * xslt_backend_name gets the name of the backend.
 *
 * @return string
 **/
function xslt_backend_name() {}

/**
 * xslt_backend_version gets the version
 * number of Sablotron.
 *
 * @return string
 **/
function xslt_backend_version() {}

/**
 * Create and return a new XSLT processor resource for manipulation by the
 * other XSLT functions.
 *
 * @return resource
 **/
function xslt_create() {}

/**
 * Returns an error code describing the last error that occurred on the
 * passed XSLT processor.
 *
 * @param resource
 * @return int
 **/
function xslt_errno($xh) {}

/**
 * Returns a string describing the last error that occurred on the
 * passed XSLT processor.
 *
 * @param resource
 * @return string
 **/
function xslt_error($xh) {}

/**
 * Free the XSLT processor identified by the given handle.
 *
 * @param resource
 * @return void
 **/
function xslt_free($xh) {}

/**
 * xslt_getopt returns the options on the given
 * processor.
 *
 * @param resource
 * @return int
 **/
function xslt_getopt($processor) {}

/**
 * The xslt_process function is the crux of the XSLT
 * extension. It allows you to perform an XSLT transformation using
 * almost any type of input source - the containers. This is accomplished
 * through the use of argument buffers -- a concept taken from the Sablotron
 * XSLT processor (currently the only XSLT processor this extension supports).
 * The input containers default to a filename 'containing' the document to be
 * processed.
 *
 * @param resource
 * @param string
 * @param string
 * @param string
 * @param array
 * @param array
 * @return mixed
 **/
function xslt_process($xh, $xmlcontainer, $xslcontainer, $resultcontainer, $arguments, $parameters) {}

/**
 * Sets the base URI for all XSLT transformations, the base URI is used
 * with Xpath instructions to resolve document() and other commands which
 * access external resources. It is also used to resolve URIs for the xsl:include
 * and xsl:import elements.
 *
 * @param resource
 * @param string
 * @return void
 **/
function xslt_set_base($xh, $uri) {}

/**
 * Set the output encoding for the XSLT transformations. When using the
 * Sablotron backend, this option is only
 * available when you compile Sablotron with
 * encoding support.
 *
 * @param resource
 * @param string
 * @return void
 **/
function xslt_set_encoding($xh, $encoding) {}

/**
 * Set an error handler function for the XSLT processor given by
 * xh, this function will be called whenever an
 * error occurs in the XSLT transformation (this function is also called
 * for notices).
 *
 * @param resource
 * @param mixed
 * @return void
 **/
function xslt_set_error_handler($xh, $handler) {}

/**
 * This function allows you to set the file in which you want XSLT log
 * messages to, XSLT log messages are different than error messages, in
 * that log messages are not actually error messages but rather messages
 * related to the state of the XSLT processor. They are useful for
 * debugging XSLT, when something goes wrong.
 *
 * @param resource
 * @param mixed
 * @return void
 **/
function xslt_set_log($xh, $log) {}

/**
 * This function allows to use the processor inside
 * an object and to resolve all callback functions
 * in it.
 *
 * @param resource
 * @param object
 * @return bool
 **/
function xslt_set_object($processor, $obj) {}

/**
 * Set SAX handlers on the resource handle given by
 * xh.
 *
 * @param resource
 * @param array
 * @return void
 **/
function xslt_set_sax_handler($xh, $handlers) {}

/**
 * xslt_set_sax_handlers registers the SAX
 * handlers for the document, given a XSLT
 * processor resource.
 *
 * @param resource
 * @param array
 * @return void
 **/
function xslt_set_sax_handlers($processor, $handlers) {}

/**
 * Set Scheme handlers on the resource handle given by
 * xh.
 *
 * @param resource
 * @param array
 * @return void
 **/
function xslt_set_scheme_handler($xh, $handlers) {}

/**
 * Registers the scheme handlers (XPath handlers) for the document.
 *
 * @param resource
 * @param array
 * @return void
 **/
function xslt_set_scheme_handlers($xh, $handlers) {}

/**
 * xslt_setopt sets the options specified by
 * newmask on the given processor.
 *
 * @param resource
 * @param int
 * @return mixed
 **/
function xslt_setopt($processor, $newmask) {}

/**
 * Returns additional error information for the last request on the server.
 *
 * @param resource
 * @return string
 **/
function yaz_addinfo($id) {}

/**
 * This function configures the CCL query parser for a server with 
 * definitions of access points (CCL qualifiers) and their mapping to RPN.
 *
 * @param resource
 * @param array
 * @return void
 **/
function yaz_ccl_conf($id, $config) {}

/**
 * This function invokes a CCL parser. It converts a given CCL FIND query to
 * an RPN query which may be passed to the yaz_search 
 * function to perform a search.
 *
 * @param resource
 * @param string
 * @param array
 * @return bool
 **/
function yaz_ccl_parse($id, $query, $result) {}

/**
 * Closes the connection given by parameter id.
 *
 * @param resource
 * @return bool
 **/
function yaz_close($id) {}

/**
 * This function returns a connection resource on success, zero on
 * failure.
 *
 * @param string
 * @param mixed
 * @return mixed
 **/
function yaz_connect($zurl, $options) {}

/**
 * This function allows you to change databases within a session by 
 * specifying one or more databases to be used in search, retrieval, etc.
 * - overriding databases specified in call to 
 * yaz_connect.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function yaz_database($id, $databases) {}

/**
 * This function sets the element set name for retrieval.
 *
 * @param resource
 * @param string
 * @return bool
 **/
function yaz_element($id, $elementset) {}

/**
 * Returns an error number for the server (last request) identified by
 * id.
 *
 * @param resource
 * @return int
 **/
function yaz_errno($id) {}

/**
 * yaz_error returns an English text message
 * corresponding to the last error number as returned by
 * yaz_errno.
 *
 * @param resource
 * @return string
 **/
function yaz_error($id) {}

/**
 * This function inspects the last returned Extended Service
 * result from a server. An Extended Service is initiated
 * by either yaz_item_order or
 * yaz_es.
 *
 * @param resource
 * @return array
 **/
function yaz_es_result($id) {}

/**
 * This function prepares for an Extended Service Request.
 * Extended Services is family of various Z39.50 facilities, such
 * as Record Update, Item Order, Database administration etc.
 *
 * @param resource
 * @param string
 * @param array
 * @return void
 **/
function yaz_es($id, $type, $args) {}

/**
 * Returns the value of the option specified with name.
 *
 * @param resource
 * @param string
 * @return string
 **/
function yaz_get_option($id, $name) {}

/**
 * yaz_hits returns the number of hits for the last
 * search.
 *
 * @param resource
 * @param array
 * @return int
 **/
function yaz_hits($id, $searchresult) {}

/**
 * This function prepares for an Extended Services request using the
 * Profile for the Use of Z39.50 Item Order Extended Service to
 * Transport ILL (Profile/1). See this
 * and the specification.
 *
 * @param resource
 * @param array
 * @return void
 **/
function yaz_itemorder($id, $args) {}

/**
 * This function prepares for retrieval of records after a successful search.
 *
 * @param resource
 * @return bool
 **/
function yaz_present($id) {}

/**
 * Specifies a range of records to retrieve.
 *
 * @param resource
 * @param int
 * @param int
 * @return void
 **/
function yaz_range($id, $start, $number) {}

/**
 * The yaz_record function inspects a record in the
 * current result set at the position specified by parameter
 * pos.
 *
 * @param resource
 * @param int
 * @param string
 * @return string
 **/
function yaz_record($id, $pos, $type) {}

/**
 * yaz_scan_result returns terms and associated
 * information as received from the server in the last performed
 * yaz_scan.
 *
 * @param resource
 * @param array
 * @return array
 **/
function yaz_scan_result($id, $result) {}

/**
 * This function prepares for a Z39.50 Scan Request on the specified 
 * connection.
 *
 * @param resource
 * @param string
 * @param string
 * @param array
 * @return void
 **/
function yaz_scan($id, $type, $startterm, $flags) {}

/**
 * yaz_schema specifies the schema for retrieval.
 *
 * @param resource
 * @param string
 * @return void
 **/
function yaz_schema($id, $schema) {}

/**
 * yaz_search prepares for a search on the given 
 * connection.
 *
 * @param resource
 * @param string
 * @param string
 * @return bool
 **/
function yaz_search($id, $type, $query) {}

/**
 * Sets one or more options on the given connection.
 *
 * @param resource
 * @param string
 * @param string
 * @return void
 **/
function yaz_set_option($id, $name, $value) {}

/**
 * This function sets sorting criteria and enables Z39.50 Sort.
 *
 * @param resource
 * @param string
 * @return void
 **/
function yaz_sort($id, $criteria) {}

/**
 * yaz_syntax specifies the preferred record syntax for
 * retrieval
 *
 * @param resource
 * @param string
 * @return void
 **/
function yaz_syntax($id, $syntax) {}

/**
 * This function carries out networked (blocked) activity for outstanding
 * requests which have been prepared by the functions 
 * yaz_connect, yaz_search, 
 * yaz_present, yaz_scan and 
 * yaz_itemorder.
 *
 * @param array
 * @return mixed
 **/
function yaz_wait($options) {}

/**
 * Closes the given ZIP file archive.
 *
 * @param resource
 * @return void
 **/
function zip_close($zip) {}

/**
 * Closes the specified directory entry.
 *
 * @param resource
 * @return bool
 **/
function zip_entry_close($zip_entry) {}

/**
 * Returns the compressed size of the specified directory entry.
 *
 * @param resource
 * @return int
 **/
function zip_entry_compressedsize($zip_entry) {}

/**
 * Returns the compression method of the directory entry specified
 * by zip_entry.
 *
 * @param resource
 * @return string
 **/
function zip_entry_compressionmethod($zip_entry) {}

/**
 * Returns the actual size of the specified directory entry.
 *
 * @param resource
 * @return int
 **/
function zip_entry_filesize($zip_entry) {}

/**
 * Returns the name of the specified directory entry.
 *
 * @param resource
 * @return string
 **/
function zip_entry_name($zip_entry) {}

/**
 * Opens a directory entry in a zip file for reading.
 *
 * @param resource
 * @param resource
 * @param string
 * @return bool
 **/
function zip_entry_open($zip, $zip_entry, $mode) {}

/**
 * Reads from an open directory entry.
 *
 * @param resource
 * @param int
 * @return string
 **/
function zip_entry_read($zip_entry, $length) {}

/**
 * Opens a new zip archive for reading.
 *
 * @param string
 * @return mixed
 **/
function zip_open($filename) {}

/**
 * Reads the next entry in a zip file archive.
 *
 * @param resource
 * @return mixed
 **/
function zip_read($zip) {}

/**
 * Closes the given gz-file pointer.
 *
 * @param resource
 * @return bool
 **/
function gzclose($zp) {}

/**
 * This function compress the given string using the ZLIB
 * data format.
 *
 * @param string
 * @param int
 * @return string
 **/
function gzcompress($data, $level) {}

/**
 * This function returns a decoded version of the input
 * data.
 *
 * @param string
 * @param int
 * @return string
 **/
function gzdecode($data, $length) {}

/**
 * This function compress the given string using the DEFLATE
 * data format.
 *
 * @param string
 * @param int
 * @return string
 **/
function gzdeflate($data, $level) {}

/**
 * This function returns a compressed version of the input
 * data compatible with the output of the
 * gzip program.
 *
 * @param string
 * @param int
 * @param int
 * @return string
 **/
function gzencode($data, $level, $encoding_mode) {}

/**
 * Tests the given GZ file pointer for EOF (end-of-file).
 *
 * @param resource
 * @return int
 **/
function gzeof($zp) {}

/**
 * This function is identical to readgzfile, except that
 * it returns the file in an array.
 *
 * @param string
 * @param int
 * @return array
 **/
function gzfile($filename, $use_include_path) {}

/**
 * Returns a string containing a single (uncompressed) character
 * read from the given gz-file pointer.
 *
 * @param resource
 * @return string
 **/
function gzgetc($zp) {}

/**
 * Gets a (uncompressed) string of up to length - 1 bytes read from the given
 * file pointer. Reading ends when length - 1 bytes have been read, on a 
 * newline, or on EOF (whichever comes first).
 *
 * @param resource
 * @param int
 * @return string
 **/
function gzgets($zp, $length) {}

/**
 * Identical to gzgets, except that
 * gzgetss attempts to strip any HTML and PHP
 * tags from the text it reads.
 *
 * @param resource
 * @param int
 * @param string
 * @return string
 **/
function gzgetss($zp, $length, $allowable_tags) {}

/**
 * This function inflate a deflated string.
 *
 * @param string
 * @param int
 * @return string
 **/
function gzinflate($data, $length) {}

/**
 * Opens a gzip (.gz) file for reading or writing.
 *
 * @param string
 * @param string
 * @param int
 * @return resource
 **/
function gzopen($filename, $mode, $use_include_path) {}

/**
 * Reads to EOF on the given gz-file pointer from the current position and
 * writes the (uncompressed) results to standard output.
 *
 * @param resource
 * @return int
 **/
function gzpassthru($zp) {}

/**
 * gzread reads up to length bytes
 * from the given gz-file pointer. Reading stops when
 * length (uncompressed) bytes have been read
 * or EOF is reached, whichever comes first.
 *
 * @param resource
 * @param int
 * @return string
 **/
function gzread($zp, $length) {}

/**
 * Sets the file position indicator of the given gz-file pointer to the 
 * beginning of the file stream.
 *
 * @param resource
 * @return bool
 **/
function gzrewind($zp) {}

/**
 * Sets the file position indicator for the given file pointer to the
 * given offset byte into the file stream. Equivalent to calling (in C)
 * gzseek(zp, offset, SEEK_SET).
 *
 * @param resource
 * @param int
 * @return int
 **/
function gzseek($zp, $offset) {}

/**
 * Gets the position of the given file pointer; i.e., its offset into the
 * uncompressed file stream.
 *
 * @param resource
 * @return int
 **/
function gztell($zp) {}

/**
 * This function uncompress a compressed string.
 *
 * @param string
 * @param int
 * @return string
 **/
function gzuncompress($data, $length) {}

/**
 * gzwrite writes the contents of
 * string to the given gz-file.
 *
 * @param resource
 * @param string
 * @param int
 * @return int
 **/
function gzwrite($zp, $string, $length) {}

/**
 * Reads a file, decompresses it and writes it to standard output.
 *
 * @param string
 * @param int
 * @return int
 **/
function readgzfile($filename, $use_include_path) {}

/**
 * Returns the coding type used for output compression.
 *
 * @return string
 **/
function zlib_get_coding_type() {}

class Directory {
    /**
     * A pseudo-object oriented mechanism for reading a directory. The
     * given directory is opened. Two properties
     * are available once the directory has been opened. The handle
     * property can be used with other directory functions such as
     * readdir, rewinddir and
     * closedir. The path property is set to path
     * the directory that was opened. Three methods are available:
     * read, rewind and close.
     *
     * @return string
     **/
    function read() {}

}
class DomAttr {
    /**
     * Creates a new DOMAttr object. This object is read only. 
     * It may be appended to a document, but additional nodes may not be appended to this node until 
     * the node is associated with a document. To create a writeable node, use 
     * .
     *
     * @param string
     * @param string
     **/
    function __construct($name, $value) {}

    /**
     * This function checks if the attribute is a defined ID.
     *
     * @return bool
     **/
    function isId() {}

}
class DomCharacterData {
    /**
     * Append the string data to the end of the character data of the node.
     *
     * @param string
     * @return void
     **/
    function appendData($data) {}

    /**
     * Deletes count characters starting from position 
     * offset.
     *
     * @param int
     * @param int
     * @return void
     **/
    function deleteData($offset, $count) {}

    /**
     * Inserts string data at position offset.
     *
     * @param int
     * @param string
     * @return void
     **/
    function insertData($offset, $data) {}

    /**
     * Replace count characters starting from position 
     * offset with data.
     *
     * @param int
     * @param int
     * @param string
     * @return void
     **/
    function replaceData($offset, $count, $data) {}

    /**
     * Returns the specified substring.
     *
     * @param int
     * @param int
     * @return string
     **/
    function substringData($offset, $count) {}

}
class DomComment {
    /**
     * Creates a new DOMComment object. This object is read only. 
     * It may be appended to a document, but additional nodes may not be appended to this node until 
     * the node is associated with a document. To create a writeable node, use 
     * .
     *
     * @param string
     **/
    function __construct($value) {}

}
class DomDocument {
    /**
     * Creates a new DOMDocument object.
     *
     * @param string
     * @param string
     **/
    function __construct($version, $encoding) {}

    /**
     * This function creates a new instance of class DOMAttr.
     *
     * @param string
     * @return DOMAttr
     **/
    function createAttribute($name) {}

    /**
     * This function creates a new instance of class
     * DOMAttr.
     *
     * @param string
     * @param string
     * @return DOMAttr
     **/
    function createAttributeNS($namespaceURI, $qualifiedName) {}

    /**
     * This function creates a new instance of class
     * DOMCDATASection.
     *
     * @param string
     * @return DOMCDATASection
     **/
    function createCDATASection($data) {}

    /**
     * This function creates a new instance of class
     * DOMComment.
     *
     * @param string
     * @return DOMComment
     **/
    function createComment($data) {}

    /**
     * This function creates a new instance of class 
     * DOMDocumentFragment.
     *
     * @return DOMDocumentFragment
     **/
    function createDocumentFragment() {}

    /**
     * This function creates a new instance of class
     * DOMElement.
     *
     * @param string
     * @param string
     * @return DOMElement
     **/
    function createElement($name, $value) {}

    /**
     * This function creates a new element node with an associated namespace.
     *
     * @param string
     * @param string
     * @param string
     * @return DOMElement
     **/
    function createElementNS($namespaceURI, $qualifiedName, $value) {}

    /**
     * This function creates a new instance of class
     * DOMEntityReference.
     *
     * @param string
     * @return DOMEntityReference
     **/
    function createEntityReference($name) {}

    /**
     * This function creates a new instance of class
     * DOMProcessingInstruction.
     *
     * @param string
     * @param string
     * @return DOMProcessingInstruction
     **/
    function createProcessingInstruction($target, $data) {}

    /**
     * This function creates a new instance of class
     * DOMText.
     *
     * @param string
     * @return DOMText
     **/
    function createTextNode($content) {}

    /**
     * This function is similar to
     * but 
     * searches for an element with a given id.
     *
     * @param string
     * @return DOMElement
     **/
    function getElementById($elementId) {}

    /**
     * This function returns a new instance of class
     * DOMNodeList containing the elements with a given
     * tag name.
     *
     * @param string
     * @return DOMNodeList
     **/
    function getElementsByTagName($name) {}

    /**
     * Returns a DOMNodeList of all elements with a given 
     * local name and a namespace URI.
     *
     * @param string
     * @param string
     * @return DOMNodeList
     **/
    function getElementsByTagNameNS($namespaceURI, $localName) {}

    /**
     * This function returns a copy of the node to import and associates it with 
     * the current document.
     *
     * @param DOMNode
     * @param bool
     * @return DOMNode
     **/
    function importNode($importedNode, $deep) {}

    /**
     * Loads an XML document from a file.
     *
     * @param string
     * @param int
     * @return mixed
     **/
    function load($filename, $options) {}

    /**
     * The function parses the HTML contained in the string source. 
     * Unlike loading XML, HTML does not have to be well-formed to load. This 
     * function may also be called statically to load and create a 
     * DOMDocument object. The static invocation may be 
     * used when no DOMDocument properties need to be 
     * set prior to loading.
     *
     * @param string
     * @return bool
     **/
    function loadHTML($source) {}

    /**
     * The function parses the HTML document in the file named
     * filename. Unlike loading XML, HTML does not have 
     * to be well-formed to load.
     *
     * @param string
     * @return bool
     **/
    function loadHTMLFile($filename) {}

    /**
     * Loads an XML document from a string.
     *
     * @param string
     * @param int
     * @return mixed
     **/
    function loadXML($source, $options) {}

    /**
     * This method acts as if you saved and then loaded the document, putting the
     * document in a "normal" form.
     *
     * @return void
     **/
    function normalizeDocument() {}

    /**
     * This method allows you to register your own extended DOM class to be used
     * afterward by the PHP DOM extension.
     *
     * @param string
     * @param string
     * @return bool
     **/
    function registerNodeClass($baseclass, $extendedclass) {}

    /**
     * Performs relaxNG validation on the document
     * based on the given RNG schema.
     *
     * @param string
     * @return bool
     **/
    function relaxNGValidate($filename) {}

    /**
     * Performs relaxNG validation on the document
     * based on the given RNG source.
     *
     * @param string
     * @return bool
     **/
    function relaxNGValidateSource($source) {}

    /**
     * Creates an XML document from the DOM representation. This function is usually 
     * called after building a new dom document from scratch as in the example below.
     *
     * @param string
     * @param int
     * @return int
     **/
    function save($filename, $options) {}

    /**
     * Creates an HTML document from the DOM representation. This function is usually 
     * called after building a new dom document from scratch as in the example below.
     *
     * @return string
     **/
    function saveHTML() {}

    /**
     * Creates an HTML document from the DOM representation. This function is usually 
     * called after building a new dom document from scratch as in the example below.
     *
     * @param string
     * @return int
     **/
    function saveHTMLFile($filename) {}

    /**
     * Creates an XML document from the DOM representation. This function is usually 
     * called after building a new dom document from scratch as in the example below.
     *
     * @param DOMNode
     * @param int
     * @return string
     **/
    function saveXML($node, $options) {}

    /**
     * Validates a document based on the given schema file.
     *
     * @param string
     * @return bool
     **/
    function schemaValidate($filename) {}

    /**
     * Validates a document based on a schema defined in the given string.
     *
     * @param string
     * @return bool
     **/
    function schemaValidateSource($source) {}

    /**
     * Validates the document based on its DTD.
     *
     * @return bool
     **/
    function validate() {}

    /**
     * This method substitutes XIncludes in a DOMDocument object.
     *
     * @param int
     * @return int
     **/
    function xinclude($options) {}

    /**
     * Adds a root element node to a dom document and returns the new node.
     * The element name is given in the passed parameter.
     *
     * @param string
     * @return domelement
     **/
    function add_root($name) {}

    /**
     * This function returns a new instance of class
     * DomAttribute. The name of the attribute is the
     * value of the first parameter. The value of the attribute is the value of
     * the second parameter.
     *
     * @param string
     * @param string
     * @return domattribute
     **/
    function create_attribute($name, $value) {}

    /**
     * This function returns a new instance of class
     * DomCData. The content of the cdata is the
     * value of the passed parameter.
     *
     * @param string
     * @return domcdata
     **/
    function create_cdata_section($content) {}

    /**
     * This function returns a new instance of class
     * DomComment. The content of the comment is the
     * value of the passed parameter.
     *
     * @param string
     * @return domcomment
     **/
    function create_comment($content) {}

    /**
     * This function returns a new instance of class
     * DomElement. The tag name of the element is the
     * value of the passed parameter name. The URI of the
     * namespace is the value of the passed parameter uri.
     * If there is already a namespace declaration with the same uri in the root-node 
     * of the document, the prefix of this is taken, otherwise it will take the one provided 
     * in the optional parameter prefix or generate a random one.
     *
     * @param string
     * @param string
     * @param string
     * @return domelement
     **/
    function create_element_ns($uri, $name, $prefix) {}

    /**
     * This function returns a new instance of class
     * DomElement. The tag name of the element is the
     * value of the passed parameter.
     *
     * @param string
     * @return domelement
     **/
    function create_element($name) {}

    /**
     * This function returns a new instance of class
     * DomEntityReference. The content of the entity
     * reference is the value of the passed parameter.
     *
     * @param string
     * @return domentityreference
     **/
    function create_entity_reference($content) {}

    /**
     * This function returns a new instance of class
     * DomCData. The content of the pi is the
     * value of the passed parameter.
     *
     * @param string
     * @return domprocessinginstruction
     **/
    function create_processing_instruction($content) {}

    /**
     * This function returns a new instance of class
     * DomText. The content of the text is the value of
     * the passed parameter.
     *
     * @param string
     * @return domtext
     **/
    function create_text_node($content) {}

    /**
     * This function returns an object of class
     * DomDocumentType. In versions of
     * PHP before 4.3 this has been the class Dtd,
     * but the DOM Standard does not know such a class.
     *
     * @return domdocumenttype
     **/
    function doctype() {}

    /**
     * This function returns the root element node of a document.
     *
     * @return domelement
     **/
    function document_element() {}

    /**
     * Creates an XML document from the dom representation. This function
     * usually is called after building a new dom document from scratch
     * as in the example below. The
     * format specifies whether the output should be
     * neatly formatted, or not. The first parameter specifies the name of the
     * filename and the second parameter, whether it should be compressed or not.
     *
     * @param string
     * @param bool
     * @param bool
     * @return string
     **/
    function dump_file($filename, $compressionmode, $format) {}

    /**
     * Creates an XML document from the dom representation. This function
     * usually is called after building a new dom document from scratch
     * as in the example below. The
     * format specifies whether the output should be
     * neatly formatted, or not.
     *
     * @param bool
     * @param string
     * @return string
     **/
    function dump_mem($format, $encoding) {}

    /**
     * This function is similar to
     * domdocument_get_elements_by_tagname but searches for
     * an element with a given id. According to the DOM standard this requires a
     * DTD which defines the attribute ID to be of type ID, though the current
     * implementation simply does an xpath search for "//*[@ID = '%s']". This
     * does not comply to the DOM standard which requires to return null if it
     * is not known which attribute is of type id. This behaviour is likely to
     * be fixed, so do not rely on the current behaviour.
     *
     * @param string
     * @return domelement
     **/
    function get_element_by_id($id) {}

    /**
     * @param string
     * @return array
     **/
    function get_elements_by_tagname($name) {}

    /**
     * Creates an HTML document from the dom representation. This function
     * usually is called after building a new dom document from scratch
     * as in the example below.
     *
     * @return string
     **/
    function html_dump_mem() {}

}
class DomDocumentFragment {
    /**
     * Appends raw XML data to a DOMDocumentFragment.
     *
     * @param string
     * @return bool
     **/
    function appendXML($data) {}

}
class DomElement {
    /**
     * Creates a new DOMElement object. This object is read only. 
     * It may be appended to a document, but additional nodes may not be appended to this node until 
     * the node is associated with a document. To create a writeable node, use 
     * or 
     * .
     *
     * @param string
     * @param string
     * @param string
     **/
    function __construct($name, $value, $namespaceURI) {}

    /**
     * Gets the value of the attribute with name name 
     * for the current node.
     *
     * @param string
     * @return string
     **/
    function getAttribute($name) {}

    /**
     * Returns the attribute node with name name for the
     * current element.
     *
     * @param string
     * @return DOMAttr
     **/
    function getAttributeNode($name) {}

    /**
     * Returns the attribute node in namespace namespaceURI 
     * with local name localName for the current node.
     *
     * @param string
     * @param string
     * @return DOMAttr
     **/
    function getAttributeNodeNS($namespaceURI, $localName) {}

    /**
     * Gets the value of the attribute in namespace namespaceURI 
     * with local name localName for the current node.
     *
     * @param string
     * @param string
     * @return string
     **/
    function getAttributeNS($namespaceURI, $localName) {}

    /**
     * This function returns a new instance of the class
     * DOMNodeList of all descendant elements with a
     * given tag name, in the order in which they are
     * encountered in a preorder traversal of this element tree.
     *
     * @param string
     * @return DOMNodeList
     **/
    function getElementsByTagName($name) {}

    /**
     * This function fetch all the descendant elements with a given 
     * localName and namespaceURI.
     *
     * @param string
     * @param string
     * @return DOMNodeList
     **/
    function getElementsByTagNameNS($namespaceURI, $localName) {}

    /**
     * Indicates whether attribute named name 
     * exists as a member of the element.
     *
     * @param string
     * @return bool
     **/
    function hasAttribute($name) {}

    /**
     * Indicates whether attribute in namespace namespaceURI 
     * named localName exists as a member of the element.
     *
     * @param string
     * @param string
     * @return bool
     **/
    function hasAttributeNS($namespaceURI, $localName) {}

    /**
     * Removes attribute named name from the element.
     *
     * @param string
     * @return bool
     **/
    function removeAttribute($name) {}

    /**
     * Removes attribute oldnode from the element.
     *
     * @param DOMAttr
     * @return bool
     **/
    function removeAttributeNode($oldnode) {}

    /**
     * Removes attribute is namespace namespaceURI 
     * named localName from the element.
     *
     * @param string
     * @param string
     * @return bool
     **/
    function removeAttributeNS($namespaceURI, $localName) {}

    /**
     * Sets an attribute with name name to the given
     * value. If the attribute does not exist, it will be created.
     *
     * @param string
     * @param string
     * @return DOMAttr
     **/
    function setAttribute($name, $value) {}

    /**
     * Adds new attribute node attr to element.
     *
     * @param DOMAttr
     * @return DOMAttr
     **/
    function setAttributeNode($attr) {}

    /**
     * Adds new attribute node attr to element.
     *
     * @param DOMAttr
     * @return DOMAttr
     **/
    function setAttributeNodeNS($attr) {}

    /**
     * Sets an attribute with namespace namespaceURI and 
     * name name to the given value. If the attribute 
     * does not exist, it will be created.
     *
     * @param string
     * @param string
     * @param string
     * @return void
     **/
    function setAttributeNS($namespaceURI, $qualifiedName, $value) {}

    /**
     * Declares the attribute name to be of type ID.
     *
     * @param string
     * @param bool
     * @return void
     **/
    function setIdAttribute($name, $isId) {}

    /**
     * Declares the attribute specified by attr to be of
     * type ID.
     *
     * @param DOMAttr
     * @param bool
     * @return void
     **/
    function setIdAttributeNode($attr, $isId) {}

    /**
     * Declares the attribute specified by localName and 
     * namespaceURI to be of type ID.
     *
     * @param string
     * @param string
     * @param bool
     * @return void
     **/
    function setIdAttributeNS($namespaceURI, $localName, $isId) {}

    /**
     * Returns the node of the given attribute in the current element.
     *
     * @param string
     * @return DomAttribute
     **/
    function get_attribute_node($name) {}

    /**
     * Returns the value of the given attribute in the current element.
     *
     * @param string
     * @return string
     **/
    function get_attribute($name) {}

    /**
     * Gets all the sub elements with the specific name
     * within the current element.
     *
     * @param string
     * @return array
     **/
    function get_elements_by_tagname($name) {}

    /**
     * This functions checks to see if an attribute named
     * name exists in the current node.
     *
     * @param string
     * @return bool
     **/
    function has_attribute($name) {}

    /**
     * Removes an attribute from the current DomElement
     * node.
     *
     * @param string
     * @return bool
     **/
    function remove_attribute($name) {}

    /**
     * @param DomNode
     * @return DomNode
     **/
    function set_attribute_node($attr) {}

    /**
     * Sets an attribute with name name to the given
     * value.
     *
     * @param string
     * @param string
     * @return DomAttribute
     **/
    function set_attribute($name, $value) {}

    /**
     * Returns the name of the current node. Calling this function is the same
     * as accessing the tagname property, or calling
     * on the current node.
     *
     * @return string
     **/
    function tagname() {}

}
class DomEntityReference {
    /**
     * Creates a new DOMEntityReference object.
     *
     * @param string
     **/
    function __construct($name) {}

}
class DomImplementation {
    /**
     * Creates a new DOMImplementation object.
     *
     **/
    function __construct() {}

    /**
     * Creates a DOMDocument object of the specified type
     * with its document element.
     *
     * @param string
     * @param string
     * @param DOMDocumentType
     * @return DOMDocument
     **/
    function createDocument($namespaceURI, $qualifiedName, $doctype) {}

    /**
     * Creates an empty DOMDocumentType object. Entity 
     * declarations and notations are not made available. Entity reference 
     * expansions and default attribute additions do not occur.
     *
     * @param string
     * @param string
     * @param string
     * @return DOMDocumentType
     **/
    function createDocumentType($qualifiedName, $publicId, $systemId) {}

    /**
     * Test if the DOM implementation implements a specific 
     * feature.
     *
     * @param string
     * @param string
     * @return bool
     **/
    function hasFeature($feature, $version) {}

}
class DomNamedNodeMap {
    /**
     * Retrieves a node specified by its nodeName.
     *
     * @param string
     * @return DOMNode
     **/
    function getNamedItem($name) {}

    /**
     * Retrieves a node specified by localName and 
     * namespaceURI.
     *
     * @param string
     * @param string
     * @return DOMNode
     **/
    function getNamedItemNS($namespaceURI, $localName) {}

    /**
     * Retrieves a node specified by index within the 
     * DOMNamedNodeMap object.
     *
     * @param int
     * @return DOMNode
     **/
    function item($index) {}

}
class DomNode {
    /**
     * This functions appends a child to an existing list of children or creates
     * a new list of children. The child can be created with e.g. , etc. or simply by using
     * any other node.
     *
     * @param DOMNode
     * @return DOMNode
     **/
    function appendChild($newnode) {}

    /**
     * Creates a copy of the node.
     *
     * @param bool
     * @return DOMNode
     **/
    function cloneNode($deep) {}

    /**
     * This method checks if the node has attributes. The tested node have to be
     * an XML_ELEMENT_NODE.
     *
     * @return bool
     **/
    function hasAttributes() {}

    /**
     * This function checks if the node has children.
     *
     * @return bool
     **/
    function hasChildNodes() {}

    /**
     * This function inserts a new node right before the reference node.
     * If you plan to do further modifications on the appended child you must use
     * the returned node.
     *
     * @param DOMNode
     * @param DOMNode
     * @return DOMNode
     **/
    function insertBefore($newnode, $refnode) {}

    /**
     * Tells whether namespaceURI is the default namespace.
     *
     * @param string
     * @return bool
     **/
    function isDefaultNamespace($namespaceURI) {}

    /**
     * This function indicates if two nodes are the same node.
     * The comparison is not based on content
     *
     * @param DOMNode
     * @return bool
     **/
    function isSameNode($node) {}

    /**
     * Checks if the asked feature is supported for the 
     * specified version.
     *
     * @param string
     * @param string
     * @return bool
     **/
    function isSupported($feature, $version) {}

    /**
     * Gets the namespace URI of the node based on the 
     * prefix.
     *
     * @param string
     * @return string
     **/
    function lookupNamespaceURI($prefix) {}

    /**
     * Gets the namespace prefix of the node based on the namespace URI.
     *
     * @param string
     * @return string
     **/
    function lookupPrefix($namespaceURI) {}

    /**
     * Normalizes the node.
     *
     * @return void
     **/
    function normalize() {}

    /**
     * This functions removes a child from a list of children.
     *
     * @param DOMNode
     * @return DOMNode
     **/
    function removeChild($oldnode) {}

    /**
     * This function replaces the child oldnode 
     * with the passed new node. If the new node is already a child it 
     * will not be added a second time. If the replacement succeeds the 
     * old node is returned.
     *
     * @param DOMNode
     * @param DOMNode
     * @return DOMNode
     **/
    function replaceChild($newnode, $oldnode) {}

    /**
     * This method adds a namespace declaration to a node.
     *
     * @param string
     * @param string
     * @return bool
     **/
    function add_namespace($uri, $prefix) {}

    /**
     * This functions appends a child to an existing list of children or creates
     * a new list of children.
     *
     * @param DOMNode
     * @return DOMNode
     **/
    function append_child($newnode) {}

    /**
     * This functions appends a sibling to an existing node.
     * The child can be created with e.g.
     * domdocument_create_element,
     * domdocument_create_text etc. or simply by using any
     * other node.
     *
     * @param domelement
     * @return domelement
     **/
    function append_sibling($newnode) {}

    /**
     * This function only returns an array of attributes if the node is of
     * type XML_ELEMENT_NODE.
     *
     * @return array
     **/
    function attributes() {}

    /**
     * Returns all children of the node.
     *
     * @return array
     **/
    function child_nodes() {}

    /**
     * @return domelement
     **/
    function clone_node() {}

    /**
     * @return string
     **/
    function dump_node() {}

    /**
     * Returns the first child of the node.
     *
     * @return domelement
     **/
    function first_child() {}

    /**
     * This function returns the content of the actual node.
     *
     * @return string
     **/
    function get_content() {}

    /**
     * This function checks if the node has attributes.
     *
     * @return bool
     **/
    function has_attributes() {}

    /**
     * This function checks if the node has children.
     *
     * @return bool
     **/
    function has_child_nodes() {}

    /**
     * This function inserts the new node newnode right
     * before the node refnode. The return value is the 
     * inserted node. If you plan to do further modifications on the appended 
     * child you must use the returned node.
     *
     * @param domelement
     * @param domelement
     * @return domelement
     **/
    function insert_before($newnode, $refnode) {}

    /**
     * @return bool
     **/
    function is_blank_node() {}

    /**
     * Returns the last child of the node.
     *
     * @return domelement
     **/
    function last_child() {}

    /**
     * This function returns the next sibling of the current node. If there is
     * no next sibling it returns ( 4.3) or null (= 4.3). You can 
     * use this function to iterate over all children of a node as shown in the 
     * example.
     *
     * @return domelement
     **/
    function next_sibling() {}

    /**
     * Returns name of the node. The name has different meanings
     * for the different types of nodes as illustrated in the following table.
     * 
     * Meaning of value
     * 
     * 
     * 
     * Type
     * Meaning
     * 
     * 
     * 
     * 
     * DomAttribute
     * value of attribute
     * 
     * 
     * DomAttribute
     * 
     * 
     * 
     * DomCDataSection
     * #cdata-section
     * 
     * 
     * DomComment
     * #comment
     * 
     * 
     * DomDocument
     * #document
     * 
     * 
     * DomDocumentType
     * document type name
     * 
     * 
     * DomElement
     * tag name
     * 
     * 
     * DomEntity
     * name of entity
     * 
     * 
     * DomEntityReference
     * name of entity reference
     * 
     * 
     * DomNotation
     * notation name
     * 
     * 
     * DomProcessingInstruction
     * target
     * 
     * 
     * DomText
     * #text
     *
     * @return string
     **/
    function node_name() {}

    /**
     * Returns the type of the node. All possible types are listed in
     * the table in the introduction.
     *
     * @return int
     **/
    function node_type() {}

    /**
     * Returns value of the node. The value has different meanings
     * for the different types of nodes as illustrated in the following table.
     * 
     * Meaning of value
     * 
     * 
     * 
     * Type
     * Meaning
     * 
     * 
     * 
     * 
     * DomAttribute
     * value of attribute
     * 
     * 
     * DomAttribute
     * 
     * 
     * 
     * DomCDataSection
     * content
     * 
     * 
     * DomComment
     * content of comment
     * 
     * 
     * DomDocument
     * null
     * 
     * 
     * DomDocumentType
     * null
     * 
     * 
     * DomElement
     * null
     * 
     * 
     * DomEntity
     * null
     * 
     * 
     * DomEntityReference
     * null
     * 
     * 
     * DomNotation
     * null
     * 
     * 
     * DomProcessingInstruction
     * entire content without target
     * 
     * 
     * DomText
     * content of text
     *
     * @return string
     **/
    function node_value() {}

    /**
     * This function returns the document the current node belongs to.
     *
     * @return domdocument
     **/
    function owner_document() {}

    /**
     * This function returns the parent node.
     *
     * @return domnode
     **/
    function parent_node() {}

    /**
     * Returns the name space prefix of the node.
     *
     * @return string
     **/
    function prefix() {}

    /**
     * This function returns the previous sibling of the current node. If there 
     * is no previous sibling it returns ( 4.3) or (= 4.3). You 
     * can use this function to iterate over all children of a node as shown in 
     * the example.
     *
     * @return domelement
     **/
    function previous_sibling() {}

    /**
     * This functions removes a child from a list of children. If child cannot
     * be removed or is not a child the function will return .
     * If the child could be removed the functions returns the old child.
     *
     * @param domtext
     * @return domtext
     **/
    function remove_child($oldchild) {}

    /**
     * (PHP 4.2) This function replaces the child oldnode
     * with the passed new node. If the new node is already a child it
     * will not be added a second time. If the old node cannot be found
     * the function returns . If the replacement succeeds the old node
     * is returned.
     *
     * @param domelement
     * @param domelement
     * @return domelement
     **/
    function replace_child($newnode, $oldnode) {}

    /**
     * (PHP 4.2) This function replaces an existing node with the passed
     * new node. Before the replacement
     * newnode is copied if it has a parent to
     * make sure a node which is
     * already in the document will not be inserted a second time. This
     * behaviour enforces doing all modifications on the node before the
     * replacement or to refetch the inserted node afterwards with functions like
     * domnode_first_child,
     * domnode_child_nodes etc..
     *
     * @param domelement
     * @return domelement
     **/
    function replace_node($newnode) {}

    /**
     * @param string
     * @return bool
     **/
    function set_content($content) {}

    /**
     * Sets name of node.
     *
     * @return bool
     **/
    function set_name() {}

    /**
     * Sets the namespace of a node to uri.
     * If there is already a namespace declaration with the same uri in one of the parent nodes
     * of the node, the prefix of this is taken, otherwise it will take the one provided 
     * in the optional parameter prefix or generate a random one.
     *
     * @param string
     * @param string
     * @return void
     **/
    function set_namespace($uri, $prefix) {}

    /**
     * @return void
     **/
    function unlink_node() {}

}
class DomNodelist {
    /**
     * Retrieves a node specified by index within the 
     * DOMNodeList object.
     *
     * @param int
     * @return DOMNode
     **/
    function item($index) {}

}
class DomProcessingInstruction {
    /**
     * Creates a new DOMProcessingInstruction object. This object is read only. 
     * It may be appended to a document, but additional nodes may not be appended to this node until 
     * the node is associated with a document. To create a writeable node, use 
     * .
     *
     * @param string
     * @param string
     **/
    function __construct($name, $value) {}

    /**
     * This method gets the data of the ProcessingInstruction node.
     *
     * @return string
     **/
    function data() {}

    /**
     * This method gets the target of the ProcessingInstruction node.
     *
     * @return string
     **/
    function target() {}

}
class DomText {
    /**
     * Creates a new DOMText object.
     *
     * @param string
     **/
    function __construct($value) {}

    /**
     * Indicates whether this text node contains whitespace. The text node is 
     * determined to contain whitespace in element content during the load of the 
     * document.
     *
     * @return bool
     **/
    function isWhitespaceInElementContent() {}

    /**
     * Breaks this node into two nodes at the specified offset, 
     * keeping both in the tree as siblings.
     *
     * @param int
     * @return DOMText
     **/
    function splitText($offset) {}

}
class DomXPath {
    /**
     * Creates a new DOMXPath object.
     *
     * @param DOMDocument
     **/
    function __construct($doc) {}

    /**
     * Executes the given XPath expression and returns
     * a typed result if possible.
     *
     * @param string
     * @param DOMNode
     * @return mixed
     **/
    function evaluate($expression, $contextnode) {}

    /**
     * Executes the given XPath expression.
     *
     * @param string
     * @param DOMNode
     * @return DOMNodeList
     **/
    function query($expression, $contextnode) {}

    /**
     * Registers the namespaceURI and 
     * prefix with the DOMXPath object.
     *
     * @param string
     * @param string
     * @return bool
     **/
    function registerNamespace($prefix, $namespaceURI) {}

}
class DomAttribute {
    /**
     * Gets the name of the attribute.
     *
     * @return string
     **/
    function name() {}

    /**
     * This function sets the value of an attribute.
     *
     * @param string
     * @return bool
     **/
    function set_value($content) {}

    /**
     * Checks if the attribute was explicitly given a value in the original
     * document.
     *
     * @return bool
     **/
    function specified() {}

    /**
     * This function returns the value of the attribute.
     *
     * @return string
     **/
    function value() {}

}
class DomDocumentType {
    /**
     * @return array
     **/
    function entities() {}

    /**
     * @return bool
     **/
    function internal_subset() {}

    /**
     * This function returns the name of the document type.
     *
     * @return string
     **/
    function name() {}

    /**
     * @return array
     **/
    function notations() {}

    /**
     * This function returns the public id of the document type.
     *
     * @return string
     **/
    function public_id() {}

    /**
     * Returns the system id of the document type.
     *
     * @return string
     **/
    function system_id() {}

}
class DomXsltStylesheet {
    /**
     * Applies an XSLT Transformation on the given 
     * DomDocument object.
     *
     * @param DomDocument
     * @param array
     * @param bool
     * @param string
     * @return DomDocument
     **/
    function process($xml_doc, $xslt_params, $is_xpath_param, $profile_filename) {}

    /**
     * Since always returns a 
     * well-formed XML DomDocument, no matter what output method was declared in 
     * and similar attributes/elements, it's of not much use, 
     * if you want to output HTML 4 or text data.
     *
     * @param DomDocument
     * @param string
     * @return string
     **/
    function result_dump_file($xmldoc, $filename) {}

    /**
     * Since always returns
     * a well-formed XML DomDocument, no matter what output method was declared 
     * in and similar attributes/elements, it's of not 
     * much use, if you want to output HTML 4 or text data.
     *
     * @param DomDocument
     * @return string
     **/
    function result_dump_mem($xmldoc) {}

}
class HaruAnnotation {
    /**
     * Defines the style of the border of the annotation.
     * This function may be used with link annotations only.
     *
     * @param float
     * @param int
     * @param int
     * @return bool
     **/
    function setBorderStyle($width, $dash_on, $dash_off) {}

    /**
     * Defines the appearance of the annotation when clicked.
     * This function may be used with link annotations only.
     *
     * @param int
     * @return bool
     **/
    function setHighlightMode($mode) {}

    /**
     * Defines the style of the annotation icon.
     * This function may be used with text annotations only.
     *
     * @param int
     * @return bool
     **/
    function setIcon($icon) {}

    /**
     * Defines whether the annotation is initially displayed open.
     * This function may be used with text annotations only.
     *
     * @param bool
     * @return bool
     **/
    function setOpened($opened) {}

}
class HaruDestination {
    /**
     * Defines the appearance of the page to fit the window.
     *
     * @return bool
     **/
    function setFit() {}

    /**
     * Defines the appearance of the page to fit the bounding box of the page within
     * the window.
     *
     * @return bool
     **/
    function setFitB() {}

    /**
     * Defines the appearance of the page to magnifying to fit the width of the
     * bounding box and setting the top position of the page to the value of
     * top.
     *
     * @param float
     * @return bool
     **/
    function setFitBH($top) {}

    /**
     * Defines the appearance of the page to magnifying to fit the height of the
     * bounding box and setting the left position of the page to the value of
     * left.
     *
     * @param float
     * @return bool
     **/
    function setFitBV($left) {}

    /**
     * Defines the appearance of the page to fit the window width and sets the top
     * position of the page to the value of top.
     *
     * @param float
     * @return bool
     **/
    function setFitH($top) {}

    /**
     * Defines the appearance of the page to fit the rectangle by the parameters.
     *
     * @param float
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function setFitR($left, $bottom, $right, $top) {}

    /**
     * Defines the appearance of the page to fit the window height.
     *
     * @param float
     * @return bool
     **/
    function setFitV($left) {}

    /**
     * Defines the appearance of the page using three parameters:
     * left, top and
     * zoom.
     *
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function setXYZ($left, $top, $zoom) {}

}
class HaruDoc {
    /**
     * Adds a new page to the document.
     *
     * @return object
     **/
    function addPage() {}

    /**
     * Set the numbering style for the specified range of pages.
     *
     * @param int
     * @param int
     * @param int
     * @param string
     * @return bool
     **/
    function addPageLabel($first_page, $style, $first_num, $prefix) {}

    /**
     * Constructs new HaruDoc instance.
     *
     * @return void
     **/
    function __construct() {}

    /**
     * Create a HaruOutline instance.
     *
     * @param string
     * @param object
     * @param object
     * @return object
     **/
    function createOutline($title, $parent_outline, $encoder) {}

    /**
     * Get the HaruEncoder currently used in the document.
     *
     * @return object
     **/
    function getCurrentEncoder() {}

    /**
     * Get current page of the document.
     *
     * @return object
     **/
    function getCurrentPage() {}

    /**
     * Get the HaruEncoder instance for the specified encoding.
     *
     * @param string
     * @return object
     **/
    function getEncoder($encoding) {}

    /**
     * Get a HaruFont instance.
     *
     * @param string
     * @param string
     * @return object
     **/
    function getFont($fontname, $encoding) {}

    /**
     * Get the current value of the specified document attribute.
     *
     * @param int
     * @return string
     **/
    function getInfoAttr($type) {}

    /**
     * Get the current page layout. 
     * See HaruDoc::setPageLayout
     * for the list of possible values.
     *
     * @return int
     **/
    function getPageLayout() {}

    /**
     * Get the current page mode. 
     * See HaruDoc::setPageMode
     * for the list of possible values.
     *
     * @return int
     **/
    function getPageMode() {}

    /**
     * Get the size of the temporary stream.
     *
     * @return int
     **/
    function getStreamSize() {}

    /**
     * Creates a new page and inserts just before the specified page.
     *
     * @param object
     * @return object
     **/
    function insertPage($page) {}

    /**
     * Loads the specified JPEG image.
     *
     * @param string
     * @return object
     **/
    function loadJPEG($filename) {}

    /**
     * Loads a PNG image.
     *
     * @param string
     * @param bool
     * @return object
     **/
    function loadPNG($filename, $deferred) {}

    /**
     * Loads a RAW image.
     *
     * @param string
     * @param int
     * @param int
     * @param int
     * @return object
     **/
    function loadRaw($filename, $width, $height, $color_space) {}

    /**
     * Loads the TrueType font with the specified index from a TrueType collection
     * file.
     *
     * @param string
     * @param int
     * @param bool
     * @return string
     **/
    function loadTTC($fontfile, $index, $embed) {}

    /**
     * Loads the given TTF file and (optionally) embed its data into the document.
     *
     * @param string
     * @param bool
     * @return string
     **/
    function loadTTF($fontfile, $embed) {}

    /**
     * Loads Type1 font from the given file and registers it in the PDF document.
     *
     * @param string
     * @param string
     * @return string
     **/
    function loadType1($afmfile, $pfmfile) {}

    /**
     * Writes the document data into standard output.
     *
     * @return bool
     **/
    function output() {}

    /**
     * Read data from the temporary stream.
     *
     * @param int
     * @return string
     **/
    function readFromStream($bytes) {}

    /**
     * Once an error code is set, most of the operations, including I/O processing
     * functions cannot be performed. In case if you want to continue after the cause 
     * of the error has been fixed, you have to invoke this function in order to
     * reset the document error state.
     *
     * @return bool
     **/
    function resetError() {}

    /**
     * Rewinds the temporary stream of the document.
     *
     * @return bool
     **/
    function resetStream() {}

    /**
     * Saves the document into the specified file.
     *
     * @param string
     * @return bool
     **/
    function save($file) {}

    /**
     * Saves the document data into a temporary stream.
     *
     * @return bool
     **/
    function saveToStream() {}

    /**
     * Defines compression mode for the document. In case when libharu was
     * compiled without Zlib support this function will always throw
     * HaruException.
     *
     * @param int
     * @return bool
     **/
    function setCompressionMode($mode) {}

    /**
     * Defines the encoder currently used in the document.
     *
     * @param string
     * @return bool
     **/
    function setCurrentEncoder($encoding) {}

    /**
     * Defines encryption mode for the document. The encryption mode cannot be set
     * before setting the password.
     *
     * @param int
     * @param int
     * @return bool
     **/
    function setEncryptionMode($mode, $key_len) {}

    /**
     * Defines an info attribute. Uses the current encoding of the document.
     *
     * @param int
     * @param string
     * @return bool
     **/
    function setInfoAttr($type, $info) {}

    /**
     * Sets the datetime info attributes of the document.
     *
     * @param int
     * @param int
     * @param int
     * @param int
     * @param int
     * @param int
     * @param int
     * @param string
     * @param int
     * @param int
     * @return bool
     **/
    function setInfoDateAttr($type, $year, $month, $day, $hour, $min, $sec, $ind, $off_hour, $off_min) {}

    /**
     * Defines wich page should be shown when the document is opened.
     *
     * @param object
     * @return bool
     **/
    function setOpenAction($destination) {}

    /**
     * Defines how pages should be displayed.
     *
     * @param int
     * @return bool
     **/
    function setPageLayout($layout) {}

    /**
     * Defines how the document should be displayed.
     *
     * @param int
     * @return bool
     **/
    function setPageMode($mode) {}

    /**
     * By default the document has one pages object as a root for all pages.
     * All page objects are create as branches of this object. One pages object
     * can contain only 8191, therefore the maximum number of pages per document
     * is 8191. But you can change that fact by setting
     * page_per_pages parameter, so that the root pages
     * object contains 8191 more pages (not page) objects, which in turn contain
     * 8191 pages each. So the maximum number of pages in the document becomes
     * 8191*page_per_pages.
     *
     * @param int
     * @return bool
     **/
    function setPagesConfiguration($page_per_pages) {}

    /**
     * Defines owner and user passwords for the document.
     * Setting the passwords makes the document contents encrypted.
     *
     * @param string
     * @param string
     * @return bool
     **/
    function setPassword($owner_password, $user_password) {}

    /**
     * Defines permissions for the document.
     *
     * @param int
     * @return bool
     **/
    function setPermission($permission) {}

    /**
     * Enables Chinese simplified encodings.
     *
     * @return bool
     **/
    function useCNSEncodings() {}

    /**
     * Enables builtin Chinese simplified fonts.
     *
     * @return bool
     **/
    function useCNSFonts() {}

    /**
     * Enables Chinese traditional encodings.
     *
     * @return bool
     **/
    function useCNTEncodings() {}

    /**
     * Enables builtin Chinese traditional fonts.
     *
     * @return bool
     **/
    function useCNTFonts() {}

    /**
     * Enables Japanese encodings.
     *
     * @return bool
     **/
    function useJPEncodings() {}

    /**
     * Enables builtin Japanese fonts.
     *
     * @return bool
     **/
    function useJPFonts() {}

    /**
     * Enables Korean encodings.
     *
     * @return bool
     **/
    function useKREncodings() {}

    /**
     * Enables builtin Korean fonts.
     *
     * @return bool
     **/
    function useKRFonts() {}

}
class HaruEncoder {
    /**
     * Get the type of the byte in the text.
     *
     * @param string
     * @param int
     * @return int
     **/
    function getByteType($text, $index) {}

    /**
     * Get the type of the encoder.
     *
     * @return int
     **/
    function getType() {}

    /**
     * Converts the specified character to unicode.
     *
     * @param int
     * @return int
     **/
    function getUnicode($character) {}

    /**
     * Get the writing mode of the encoder.
     *
     * @return int
     **/
    function getWritingMode() {}

}
class HaruFont {
    /**
     * Get the vertical ascent of the font.
     *
     * @return int
     **/
    function getAscent() {}

    /**
     * Get the distance from the baseline of uppercase letters.
     *
     * @return int
     **/
    function getCapHeight() {}

    /**
     * Get the vertical descent of the font.
     *
     * @return int
     **/
    function getDescent() {}

    /**
     * Get the name of the font encoding.
     *
     * @return string
     **/
    function getEncodingName() {}

    /**
     * Get the name of the font.
     *
     * @return string
     **/
    function getFontName() {}

    /**
     * Get the total width of the text, number of characters, number of words and
     * number of spaces.
     *
     * @param string
     * @return array
     **/
    function getTextWidth($text) {}

    /**
     * Get the width of the character in the font.
     *
     * @param int
     * @return int
     **/
    function getUnicodeWidth($character) {}

    /**
     * Gets the distance from the baseline of lowercase letters.
     *
     * @return int
     **/
    function getXHeight() {}

    /**
     * Calculate the number of characters which can be included within the
     * specified width.
     *
     * @param string
     * @param float
     * @param float
     * @param float
     * @param float
     * @param bool
     * @return int
     **/
    function measureText($text, $width, $font_size, $char_space, $word_space, $word_wrap) {}

}
class HaruImage {
    /**
     * Gets the number of bits used to describe each color component of the
     * image.
     *
     * @return int
     **/
    function getBitsPerComponent() {}

    /**
     * Get the name of the color space.
     *
     * @return string
     **/
    function getColorSpace() {}

    /**
     * Get the height of the image.
     *
     * @return int
     **/
    function getHeight() {}

    /**
     * Get the size of the image.
     *
     * @return array
     **/
    function getSize() {}

    /**
     * Get the width of the image.
     *
     * @return int
     **/
    function getWidth() {}

    /**
     * Defines the transparent color of the image using the RGB range values.
     * The color within the range is displayed as a transparent color.
     * The color space of the image must be RGB.
     *
     * @param int
     * @param int
     * @param int
     * @param int
     * @param int
     * @param int
     * @return bool
     **/
    function setColorMask($rmin, $rmax, $gmin, $gmax, $bmin, $bmax) {}

    /**
     * Sets the image used as image-mask. It must be 1bit gray-scale color image.
     *
     * @param object
     * @return bool
     **/
    function setMaskImage($mask_image) {}

}
class HaruOutline {
    /**
     * Sets a destination object which becomes a target to jump to when the
     * outline is clicked.
     *
     * @param object
     * @return bool
     **/
    function setDestination($destination) {}

    /**
     * Defines whether this node is opened or not when the outline is
     * displayed for the first time.
     *
     * @param bool
     * @return bool
     **/
    function setOpened($opened) {}

}
class HaruPage {
    /**
     * Appends a circle to the current path.
     *
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function circle($x, $y, $ray) {}

    /**
     * Appends an arc to the current path.
     *
     * @param float
     * @param float
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function arc($x, $y, $ray, $ang1, $ang2) {}

    /**
     * Begins new text object and sets the current text position to (0,0).
     *
     * @return bool
     **/
    function beginText() {}

    /**
     * Appends a straight line from the current point to the start point of the
     * path.
     *
     * @return bool
     **/
    function closePath() {}

    /**
     * Concatenates current transformation matrix of the page and the specified
     * matrix.
     *
     * @param float
     * @param float
     * @param float
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function concat($a, $b, $c, $d, $x, $y) {}

    /**
     * Create a new HaruDestination instance.
     *
     * @return object
     **/
    function createDestination() {}

    /**
     * Creates a new HaruAnnotation instance.
     *
     * @param array
     * @param object
     * @return object
     **/
    function createLinkAnnotation($rectangle, $destination) {}

    /**
     * Creates a new HaruAnnotation instance.
     *
     * @param array
     * @param string
     * @param object
     * @return object
     **/
    function createTextAnnotation($rectangle, $text, $encoder) {}

    /**
     * Creates a new HaruAnnotation instance.
     *
     * @param array
     * @param string
     * @return object
     **/
    function createURLAnnotation($rectangle, $url) {}

    /**
     * Append a Bezier curve to the current path.
     * The point (x1, y1) and the point (x2, y2) are used as the control points
     * for a Bezier curve and current point is moved to the point (x3, y3).
     *
     * @param float
     * @param float
     * @param float
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function curveTo($x1, $y1, $x2, $y2, $x3, $y3) {}

    /**
     * Appends a Bezier curve to the current path.
     * The current point and the point (x2, y2) are used as the control points for
     * the Bezier curve and current point is moved to the point (x3, y3).
     *
     * @param float
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function curveTo2($x2, $y2, $x3, $y3) {}

    /**
     * Appends a Bezier curve to the current path.
     * The point (x1, y1) and the point (x3, y3) are used as the control points
     * for a Bezier curve and current point is moved to the point (x3, y3).
     *
     * @param float
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function curveTo3($x1, $y1, $x3, $y3) {}

    /**
     * Show image at the page.
     *
     * @param object
     * @param float
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function drawImage($image, $x, $y, $width, $height) {}

    /**
     * Appends an ellipse to the current path.
     *
     * @param float
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function ellipse($x, $y, $xray, $yray) {}

    /**
     * Ends current path object without performing filling and painting operations.
     *
     * @return bool
     **/
    function endPath() {}

    /**
     * Finalizes current text object.
     *
     * @return bool
     **/
    function endText() {}

    /**
     * Fills current path using even-odd rule.
     *
     * @return bool
     **/
    function eofill() {}

    /**
     * Fills current path using even-odd rule, then paints the path.
     *
     * @param bool
     * @return bool
     **/
    function eoFillStroke($close_path) {}

    /**
     * Fills current path using nonzero winding number rule.
     *
     * @return bool
     **/
    function fill() {}

    /**
     * Fills current path using nonzero winding number rule, then paints the path.
     *
     * @param bool
     * @return bool
     **/
    function fillStroke($close_path) {}

    /**
     * Get the current value of character spacing.
     *
     * @return float
     **/
    function getCharSpace() {}

    /**
     * Returns the current filling color.
     *
     * @return array
     **/
    function getCMYKFill() {}

    /**
     * Get the current stroking color.
     *
     * @return array
     **/
    function getCMYKStroke() {}

    /**
     * Get the currently used font.
     *
     * @return object
     **/
    function getCurrentFont() {}

    /**
     * Get the current font size.
     *
     * @return float
     **/
    function getCurrentFontSize() {}

    /**
     * Get the current position for path painting.
     *
     * @return array
     **/
    function getCurrentPos() {}

    /**
     * Get the current position for text printing.
     *
     * @return array
     **/
    function getCurrentTextPos() {}

    /**
     * Get the current dash pattern. See 
     * HaruPage::setDash 
     * for more information on dash patterns.
     *
     * @return array
     **/
    function getDash() {}

    /**
     * Get the current filling color space.
     *
     * @return int
     **/
    function getFillingColorSpace() {}

    /**
     * Get the flatness of the page.
     *
     * @return float
     **/
    function getFlatness() {}

    /**
     * Get the current graphics mode.
     *
     * @return int
     **/
    function getGMode() {}

    /**
     * Get the current filling color.
     *
     * @return float
     **/
    function getGrayFill() {}

    /**
     * Get the current stroking color.
     *
     * @return float
     **/
    function getGrayStroke() {}

    /**
     * Get the height of the page.
     *
     * @return float
     **/
    function getHeight() {}

    /**
     * Get the current value of the horizontal scaling.
     *
     * @return float
     **/
    function getHorizontalScaling() {}

    /**
     * Get the current line cap style.
     *
     * @return int
     **/
    function getLineCap() {}

    /**
     * Get the current line join style.
     *
     * @return int
     **/
    function getLineJoin() {}

    /**
     * Get the current line width.
     *
     * @return float
     **/
    function getLineWidth() {}

    /**
     * Get the value of the miter limit.
     *
     * @return float
     **/
    function getMiterLimit() {}

    /**
     * Get the current filling color.
     *
     * @return array
     **/
    function getRGBFill() {}

    /**
     * Get the current stroking color.
     *
     * @return array
     **/
    function getRGBStroke() {}

    /**
     * Get the current stroking color space.
     *
     * @return int
     **/
    function getStrokingColorSpace() {}

    /**
     * Get the current value of line spacing.
     *
     * @return float
     **/
    function getTextLeading() {}

    /**
     * Get the current text transformation matrix of the page.
     *
     * @return array
     **/
    function getTextMatrix() {}

    /**
     * Get the current text rendering mode.
     *
     * @return int
     **/
    function getTextRenderingMode() {}

    /**
     * Get the current value of text rising.
     *
     * @return float
     **/
    function getTextRise() {}

    /**
     * Get the width of the text using current fontsize, character spacing and word spacing
     *
     * @param string
     * @return float
     **/
    function getTextWidth($text) {}

    /**
     * Get the current transformation matrix of the page.
     *
     * @return array
     **/
    function getTransMatrix() {}

    /**
     * Get the width of the page.
     *
     * @return float
     **/
    function getWidth() {}

    /**
     * Get the current value of word spacing.
     *
     * @return float
     **/
    function getWordSpace() {}

    /**
     * Draws a line from the current point to the specified point.
     *
     * @param float
     * @param float
     * @return bool
     **/
    function lineTo($x, $y) {}

    /**
     * Get the number of characters which can be included within the specified width.
     *
     * @param string
     * @param float
     * @param bool
     * @return int
     **/
    function measureText($text, $width, $wordwrap) {}

    /**
     * Moves text position to the specified offset. If the start position of the current 
     * line is (x1, y1), the start of the next line is (x1 + x, 
     * y1 + y).
     *
     * @param float
     * @param float
     * @param bool
     * @return bool
     **/
    function moveTextPos($x, $y, $set_leading) {}

    /**
     * Defines starting point for new drawing path.
     *
     * @param float
     * @param float
     * @return bool
     **/
    function moveTo($x, $y) {}

    /**
     * Moves text position to the start of the next line.
     *
     * @return bool
     **/
    function moveToNextLine() {}

    /**
     * Appends a rectangle to the current drawing path.
     *
     * @param float
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function rectangle($x, $y, $width, $height) {}

    /**
     * Defines character spacing for the page.
     *
     * @param float
     * @return bool
     **/
    function setCharSpace($char_space) {}

    /**
     * Defines filling color for the page.
     *
     * @param float
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function setCMYKFill($c, $m, $y, $k) {}

    /**
     * Defines stroking color for the page.
     *
     * @param float
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function setCMYKStroke($c, $m, $y, $k) {}

    /**
     * Defines the dash pattern for the page.
     *
     * @param array
     * @param int
     * @return bool
     **/
    function setDash($pattern, $phase) {}

    /**
     * Defines flatness for the page.
     *
     * @param float
     * @return bool
     **/
    function setFlatness($flatness) {}

    /**
     * Defines current font and its size for the page.
     *
     * @param object
     * @param float
     * @return bool
     **/
    function setFontAndSize($font, $size) {}

    /**
     * Defines filling color for the page.
     *
     * @param float
     * @return bool
     **/
    function setGrayFill($value) {}

    /**
     * Defines stroking color for the page.
     *
     * @param float
     * @return bool
     **/
    function setGrayStroke($value) {}

    /**
     * Defines height of the page.
     *
     * @param float
     * @return bool
     **/
    function setHeight($height) {}

    /**
     * Set the horizontal scaling for the page.
     *
     * @param float
     * @return bool
     **/
    function setHorizontalScaling($scaling) {}

    /**
     * Defines the shape to be used at the ends of lines.
     *
     * @param int
     * @return bool
     **/
    function setLineCap($cap) {}

    /**
     * Defines line join style for the page.
     *
     * @param int
     * @return bool
     **/
    function setLineJoin($join) {}

    /**
     * Defines line width for the page.
     *
     * @param float
     * @return bool
     **/
    function setLineWidth($width) {}

    /**
     * Set the current value of the miter limit of the page.
     *
     * @param float
     * @return bool
     **/
    function setMiterLimit($limit) {}

    /**
     * Defines filling color for the page. All values must be between 0 and 1.
     *
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function setRGBFill($r, $g, $b) {}

    /**
     * Defines stroking color for the page. All values must be between 0 and 1.
     *
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function setRGBStroke($r, $g, $b) {}

    /**
     * Defines rotation angle of the page.
     *
     * @param int
     * @return bool
     **/
    function setRotate($angle) {}

    /**
     * Changes size and direction of the page to a predefined format.
     *
     * @param int
     * @param int
     * @return bool
     **/
    function setSize($size, $direction) {}

    /**
     * Defines transition style for the page.
     *
     * @param int
     * @param float
     * @param float
     * @return bool
     **/
    function setSlideShow($type, $disp_time, $trans_time) {}

    /**
     * Set the text leading (line spacing) for the page.
     *
     * @param float
     * @return bool
     **/
    function setTextLeading($text_leading) {}

    /**
     * Defines the text transformation matrix of the page.
     *
     * @param float
     * @param float
     * @param float
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function setTextMatrix($a, $b, $c, $d, $x, $y) {}

    /**
     * Defines text rendering mode for the page.
     *
     * @param int
     * @return bool
     **/
    function setTextRenderingMode($mode) {}

    /**
     * Set the current value of text rising.
     *
     * @param float
     * @return bool
     **/
    function setTextRise($rise) {}

    /**
     * Set the width of the page.
     *
     * @param float
     * @return bool
     **/
    function setWidth($width) {}

    /**
     * Set the word spacing for the page.
     *
     * @param float
     * @return bool
     **/
    function setWordSpace($word_space) {}

    /**
     * Prints out the text at the current position of the page.
     *
     * @param string
     * @return bool
     **/
    function showText($text) {}

    /**
     * Moves the current position to the start of the next line and print out the text.
     *
     * @param string
     * @param float
     * @param float
     * @return bool
     **/
    function showTextNextLine($text, $word_space, $char_space) {}

    /**
     * Paints the current path.
     *
     * @param bool
     * @return bool
     **/
    function stroke($close_path) {}

    /**
     * Prints the text on the specified position.
     *
     * @param float
     * @param float
     * @param string
     * @return bool
     **/
    function textOut($x, $y, $text) {}

    /**
     * Prints the text inside the specified region.
     *
     * @param float
     * @param float
     * @param float
     * @param float
     * @param string
     * @param int
     * @return bool
     **/
    function textRect($left, $top, $right, $bottom, $text, $align) {}

}
class HttpMessage {
    /**
     * Add headers. If append is true, headers with the same name will be separated, else overwritten.
     *
     * @param array
     * @param bool
     * @return void
     **/
    function addHeaders($headers, $append = FALSE) {}

    /**
     * Instantiate a new HttpMessage object.
     *
     * @param string
     * @return void
     **/
    function __construct($message) {}

    /**
     * Returns a clone of an HttpMessage object detached from any parent messages.
     *
     * @return HttpMessage
     **/
    function detach() {}

    /**
     * Create an HttpMessage object from a string.
     *
     * @param string
     * @param string
     * @return HttpMessage
     **/
    function factory($raw_message, $class_name = 'HttpMessage') {}

    /**
     * Create an HttpMessage object from script environment.
     *
     * @param int
     * @param string
     * @return HttpMessage
     **/
    function fromEnv($message_type, $class_name = 'HttpMessage') {}

    /**
     * Create an HttpMessage object from a string.
     *
     * @param string
     * @param string
     * @return HttpMessage
     **/
    function fromString($raw_message, $class_name = 'HttpMessage') {}

    /**
     * Get the body of the parsed HttpMessage.
     *
     * @return string
     **/
    function getBody() {}

    /**
     * Get message header.
     *
     * @param string
     * @return string
     **/
    function getHeader($header) {}

    /**
     * Get message headers.
     *
     * @return array
     **/
    function getHeaders() {}

    /**
     * Get the HTTP Protocol Version of the Message.
     *
     * @return string
     **/
    function getHttpVersion() {}

    /**
     * Get parent Message.
     *
     * @return HttpMessage
     **/
    function getParentMessage() {}

    /**
     * Get the Request Method of the Message.
     *
     * @return string
     **/
    function getRequestMethod() {}

    /**
     * Get the Request URL of the Message.
     *
     * @return string
     **/
    function getRequestUrl() {}

    /**
     * Get the Response Code of the Message.
     *
     * @return int
     **/
    function getResponseCode() {}

    /**
     * Get the Response Status of the message (i.e. the string following the response code).
     *
     * @return string
     **/
    function getResponseStatus() {}

    /**
     * Get Message Type.
     * Either HTTP_MSG_NONE, HTTP_MSG_REQUEST or HTTP_MSG_RESPONSE.
     *
     * @return int
     **/
    function getType() {}

    /**
     * Attempts to guess the content type of the message body through libmagic.
     *
     * @param string
     * @param int
     * @return string
     **/
    function guessContentType($magic_file, $magic_mode = MAGIC_MIME) {}

    /**
     * Prepends message(s) to the HTTP message.
     *
     * @param HttpMessage
     * @param bool
     * @return void
     **/
    function prepend($message, $top = TRUE) {}

    /**
     * Reorders the message chain in reverse order.
     *
     * @return HttpMessage
     **/
    function reverse() {}

    /**
     * Send the Message according to its type as Response or Request.
     *
     * @return bool
     **/
    function send() {}

    /**
     * Set the body of the HttpMessage.
     *
     * @param string
     * @return void
     **/
    function setBody($body) {}

    /**
     * Sets new headers.
     *
     * @param array
     * @return void
     **/
    function setHeaders($headers) {}

    /**
     * Set the HTTP Protocol version of the Message.
     *
     * @param string
     * @return bool
     **/
    function setHttpVersion($version) {}

    /**
     * Set the Request Method of the HTTP Message.
     *
     * @param string
     * @return bool
     **/
    function setRequestMethod($method) {}

    /**
     * Set the Request URL of the HTTP Message.
     *
     * @param string
     * @return bool
     **/
    function setRequestUrl($url) {}

    /**
     * Set the response code of an HTTP Response Message.
     *
     * @param int
     * @return bool
     **/
    function setResponseCode($code) {}

    /**
     * Set the Response Status of the HTTP message (i.e. the string following the response code).
     *
     * @param string
     * @return bool
     **/
    function setResponseStatus($status) {}

    /**
     * Set Message Type.
     * Either HTTP_MSG_NONE, HTTP_MSG_REQUEST or HTTP_MSG_RESPONSE.
     *
     * @param int
     * @return void
     **/
    function setType($type) {}

    /**
     * Creates an object regarding to the type of the message.
     *
     * @return HttpRequest|HttpResponse
     **/
    function toMessageTypeObject() {}

    /**
     * Get the string representation of the Message.
     *
     * @param bool
     * @return string
     **/
    function toString($include_parent = FALSE) {}

}
class HttpDeflateStream {
    /**
     * Creates a new HttpDeflateStream object instance.
     *
     * @param int
     * @return void
     **/
    function __construct($flags = 0) {}

    /**
     * Creates a new HttpDeflateStream object instance.
     *
     * @param int
     * @param string
     * @return HttpDeflateStream
     **/
    function factory($flags = 0, $class_name = 'HttpDeflateStream') {}

    /**
     * Finalizes the deflate stream. The deflate stream can be reused after finalizing.
     *
     * @param string
     * @return string
     **/
    function finish($data) {}

    /**
     * Flushes the deflate stream.
     *
     * @param string
     * @return string
     **/
    function flush($data) {}

    /**
     * Passes more data through the deflate stream.
     *
     * @param string
     * @return string
     **/
    function update($data) {}

}
class HttpInflateStream {
    /**
     * Creates a new HttpInflateStream object instance.
     *
     * @param int
     * @return void
     **/
    function __construct($flags = 0) {}

    /**
     * Creates a new HttpInflateStream object instance.
     *
     * @param int
     * @param string
     * @return HttpInflateStream
     **/
    function factory($flags = 0, $class_name = 'HttpInflateStream') {}

    /**
     * Finalizes the inflate stream. The inflate stream can be reused after finalizing.
     *
     * @param string
     * @return string
     **/
    function finish($data) {}

    /**
     * Flushes the inflate stream.
     *
     * @param string
     * @return string
     **/
    function flush($data) {}

    /**
     * Passes more data through the inflate stream.
     *
     * @param string
     * @return string
     **/
    function update($data) {}

}
class HttpQueryString {
    /**
     * Creates a new HttpQueryString object instance.
     *
     * @param bool
     * @param mixed
     * @return void
     **/
    function __construct($global = TRUE, $add) {}

    /**
     * Get (part of) the query string.
     *
     * @param string
     * @param mixed
     * @param mixed
     * @param bool
     * @return mixed
     **/
    function get($key, $type = 0, $defval = NULL, $delete = FALSE) {}

    /**
     * Copies the query string object and sets provided params at the clone.
     *
     * @param mixed
     * @return HttpQueryString
     **/
    function mod($params) {}

    /**
     * Set query string entry/entries. NULL values will unset the variable.
     *
     * @param mixed
     * @return string
     **/
    function set($params) {}

    /**
     * Get a single instance (differentiates between the global setting).
     *
     * @param bool
     * @return HttpQueryString
     **/
    function singleton($global = TRUE) {}

    /**
     * Get the query string represented as associative array.
     *
     * @return array
     **/
    function toArray() {}

    /**
     * Get the query string.
     *
     * @return string
     **/
    function toString() {}

    /**
     * Converts the query string from the source encoding ie to the target encoding oe.
     *
     * @param string
     * @param string
     * @return bool
     **/
    function xlate($ie, $oe) {}

}
class HttpRequest {
    /**
     * Add custom cookies.
     *
     * @param array
     * @return bool
     **/
    function addCookies($cookies) {}

    /**
     * Add request header name/value pairs.
     *
     * @param array
     * @return bool
     **/
    function addHeaders($headers) {}

    /**
     * Adds POST data entries, leaving previously set unchanged, unless a
     * post entry with the same name already exists.
     *
     * @param array
     * @return bool
     **/
    function addPostFields($post_data) {}

    /**
     * Add a file to the POST request, leaving previously set files unchanged.
     *
     * @param string
     * @param string
     * @param string
     * @return bool
     **/
    function addPostFile($name, $file, $content_type = 'applicationxoctetstream') {}

    /**
     * Add PUT data, leaving previously set PUT data unchanged.
     *
     * @param string
     * @return bool
     **/
    function addPutData($put_data) {}

    /**
     * Add parameters to the query parameter list, leaving previously set unchanged.
     *
     * @param array
     * @return bool
     **/
    function addQueryData($query_params) {}

    /**
     * Add raw post data, leaving previously set raw post data unchanged.
     *
     * @param string
     * @return bool
     **/
    function addRawPostData($raw_post_data) {}

    /**
     * Set additional SSL options.
     *
     * @param array
     * @return bool
     **/
    function addSslOptions($options) {}

    /**
     * Clears all history messages.
     *
     * @return void
     **/
    function clearHistory() {}

    /**
     * Instantiate a new HttpRequest object.
     *
     * @param string
     * @param int
     * @param array
     * @return void
     **/
    function __construct($url, $request_method = HTTP_METH_GET, $options) {}

    /**
     * Enable automatic sending of received cookies.
     *
     * @return bool
     **/
    function enableCookies() {}

    /**
     * Get the previously set content type.
     *
     * @return string
     **/
    function getContentType() {}

    /**
     * Get previously set cookies.
     *
     * @return array
     **/
    function getCookies() {}

    /**
     * Get previously set request headers.
     *
     * @return array
     **/
    function getHeaders() {}

    /**
     * Get all sent requests and received responses as an HttpMessage object.
     *
     * @return HttpMessage
     **/
    function getHistory() {}

    /**
     * Get the previously set request method.
     *
     * @return int
     **/
    function getMethod() {}

    /**
     * Get currently set options.
     *
     * @return array
     **/
    function getOptions() {}

    /**
     * Get previously set POST data.
     *
     * @return array
     **/
    function getPostFields() {}

    /**
     * Get all previously added POST files.
     *
     * @return array
     **/
    function getPostFiles() {}

    /**
     * Get previously set PUT data.
     *
     * @return string
     **/
    function getPutData() {}

    /**
     * Get previously set put file.
     *
     * @return string
     **/
    function getPutFile() {}

    /**
     * Get the current query data in form of an urlencoded query string.
     *
     * @return string
     **/
    function getQueryData() {}

    /**
     * Get previously set raw post data.
     *
     * @return string
     **/
    function getRawPostData() {}

    /**
     * Get sent HTTP message.
     *
     * @return string
     **/
    function getRawRequestMessage() {}

    /**
     * Get the entire HTTP response.
     *
     * @return string
     **/
    function getRawResponseMessage() {}

    /**
     * Get sent HTTP message.
     *
     * @return HttpMessage
     **/
    function getRequestMessage() {}

    /**
     * Get the response body after the request has been sent.
     *
     * @return string
     **/
    function getResponseBody() {}

    /**
     * Get the response code after the request has been sent.
     *
     * @return int
     **/
    function getResponseCode() {}

    /**
     * Get response cookie(s) after the request has been sent.
     *
     * @param int
     * @param array
     * @return array
     **/
    function getResponseCookies($flags, $allowed_extras) {}

    /**
     * * Get all response data after the request has been sent.
     *
     * @return array
     **/
    function getResponseData() {}

    /**
     * Get response header(s) after the request has been sent.
     *
     * @param string
     * @return mixed
     **/
    function getResponseHeader($name) {}

    /**
     * Get response info after the request has been sent.
     *
     * @param string
     * @return mixed
     **/
    function getResponseInfo($name) {}

    /**
     * Get the full response as HttpMessage object after the request has been sent.
     *
     * @return HttpMessage
     **/
    function getResponseMessage() {}

    /**
     * Get the response status (i.e. the string after the response code) after the message has been sent.
     *
     * @return string
     **/
    function getResponseStatus() {}

    /**
     * Get previously set SSL options.
     *
     * @return array
     **/
    function getSslOptions() {}

    /**
     * Get the previously set request URL.
     *
     * @return string
     **/
    function getUrl() {}

    /**
     * Reset all automatically received/sent cookies.
     *
     * @param bool
     * @return bool
     **/
    function resetCookies($session_only = FALSE) {}

    /**
     * Send the HTTP request.
     *
     * @return HttpMessage
     **/
    function send() {}

    /**
     * Set the content type the post request should have.
     *
     * @param string
     * @return bool
     **/
    function setContentType($content_type) {}

    /**
     * Set custom cookies.
     *
     * @param array
     * @return bool
     **/
    function setCookies($cookies) {}

    /**
     * Set request header name/value pairs.
     *
     * @param array
     * @return bool
     **/
    function setHeaders($headers) {}

    /**
     * Set the request method.
     *
     * @param int
     * @return bool
     **/
    function setMethod($request_method) {}

    /**
     * Set the request options to use.
     *
     * @param array
     * @return bool
     **/
    function setOptions($options) {}

    /**
     * Set the POST data entries, overwriting previously set POST data.
     *
     * @param array
     * @return bool
     **/
    function setPostFields($post_data) {}

    /**
     * Set files to post, overwriting previously set post files.
     *
     * @param array
     * @return bool
     **/
    function setPostFiles($post_files) {}

    /**
     * Set PUT data to send, overwriting previously set PUT data.
     *
     * @param string
     * @return bool
     **/
    function setPutData($put_data) {}

    /**
     * Set file to put. Affects only PUT requests.
     *
     * @param string
     * @return bool
     **/
    function setPutFile($file) {}

    /**
     * Set the URL query parameters to use, overwriting previously set query parameters.
     *
     * @param mixed
     * @return bool
     **/
    function setQueryData($query_data) {}

    /**
     * Set raw post data to send, overwriting previously set raw post data. Don't 
     * forget to specify a content type. Affects only POST and custom requests.
     *
     * @param string
     * @return bool
     **/
    function setRawPostData($raw_post_data) {}

    /**
     * Set SSL options.
     *
     * @param array
     * @return bool
     **/
    function setSslOptions($options) {}

    /**
     * Set the request URL.
     *
     * @param string
     * @return bool
     **/
    function setUrl($url) {}

}
class HttpRequestPool {
    /**
     * Attach an HttpRequest object to this HttpRequestPool.
     *
     * @param HttpRequest
     * @return bool
     **/
    function attach($request) {}

    /**
     * Instantiate a new HttpRequestPool object. An HttpRequestPool is
     * able to send several HttpRequests in parallel.
     *
     * @param HttpRequest
     * @return void
     **/
    function __construct($request) {}

    /**
     * Clean up HttpRequestPool object.
     *
     * @return void
     **/
    function __destruct() {}

    /**
     * Detach an HttpRequest object from this HttpRequestPool.
     *
     * @param HttpRequest
     * @return bool
     **/
    function detach($request) {}

    /**
     * Get attached HttpRequest objects.
     *
     * @return array
     **/
    function getAttachedRequests() {}

    /**
     * Get attached HttpRequest objects that already have finished their work.
     *
     * @return array
     **/
    function getFinishedRequests() {}

    /**
     * Detach all attached HttpRequest objects.
     *
     * @return void
     **/
    function reset() {}

    /**
     * Send all attached HttpRequest objects in parallel.
     *
     * @return bool
     **/
    function send() {}

    /**
     * Returns TRUE until each request has finished its transaction.
     *
     * @return bool
     **/
    function socketPerform() {}

    /**
     * @return bool
     **/
    function socketSelect() {}

}
class HttpResponse {
    /**
     * Capture script output.
     *
     * @return void
     **/
    function capture() {}

    /**
     * Get current buffer size.
     *
     * @return int
     **/
    function getBufferSize() {}

    /**
     * Get current caching setting.
     *
     * @return bool
     **/
    function getCache() {}

    /**
     * Get current Cache-Control header setting.
     *
     * @return string
     **/
    function getCacheControl() {}

    /**
     * Get current Content-Disposition setting.
     *
     * @return string
     **/
    function getContentDisposition() {}

    /**
     * Get current Content-Type header setting.
     *
     * @return string
     **/
    function getContentType() {}

    /**
     * Get the previously set data to be sent.
     *
     * @return string
     **/
    function getData() {}

    /**
     * Get calculated or previously set custom ETag.
     *
     * @return string
     **/
    function getETag() {}

    /**
     * Get the previously set file to be sent.
     *
     * @return string
     **/
    function getFile() {}

    /**
     * Get current gzip'ing setting.
     *
     * @return bool
     **/
    function getGzip() {}

    /**
     * Get header(s) about to be sent.
     *
     * @param string
     * @return mixed
     **/
    function getHeader($name) {}

    /**
     * Get calculated or previously set custom Last-Modified date.
     *
     * @return int
     **/
    function getLastModified() {}

    /**
     * http_get_request_body.
     *
     * @return string
     **/
    function getRequestBody() {}

    /**
     * http_get_request_body_stream.
     *
     * @return resource
     **/
    function getRequestBodyStream() {}

    /**
     * http_get_request_headers.
     *
     * @return array
     **/
    function getRequestHeaders() {}

    /**
     * Get the previously set resource to be sent.
     *
     * @return resource
     **/
    function getStream() {}

    /**
     * Get the current throttle delay.
     *
     * @return double
     **/
    function getThrottleDelay() {}

    /**
     * Attempts to guess the content type of supplied payload through libmagic.
     *
     * @param string
     * @param int
     * @return string
     **/
    function guessContentType($magic_file, $magic_mode=MAGIC_MIME) {}

    /**
     * http_redirect.
     *
     * @param string
     * @param array
     * @param bool
     * @param int
     * @return void
     **/
    function redirect($url, $params, $session = FALSE, $status) {}

    /**
     * Finally send the entity.
     *
     * @param bool
     * @return bool
     **/
    function send($clean_ob = TRUE) {}

    /**
     * Sets the send buffer size of the throttling mechanism.
     *
     * @param int
     * @return bool
     **/
    function setBufferSize($bytes) {}

    /**
     * Whether it should be attempted to cache the entity.
     *
     * @param bool
     * @return bool
     **/
    function setCache($cache) {}

    /**
     * Define a custom Cache-Control header, usually being private or public;
     *
     * @param string
     * @param int
     * @param bool
     * @return bool
     **/
    function setCacheControl($control, $max_age = 0, $must_revalidate = TRUE) {}

    /**
     * Set the Content-Disposition.
     *
     * @param string
     * @param bool
     * @return bool
     **/
    function setContentDisposition($filename, $inline = FALSE) {}

    /**
     * Set the Content-Type of the sent entity.
     *
     * @param string
     * @return bool
     **/
    function setContentType($content_type) {}

    /**
     * Set the data to be sent.
     *
     * @param mixed
     * @return bool
     **/
    function setData($data) {}

    /**
     * Set a custom ETag. Use this only if you know what you're doing.
     *
     * @param string
     * @return bool
     **/
    function setETag($etag) {}

    /**
     * Set the file to be sent.
     *
     * @param string
     * @return bool
     **/
    function setFile($file) {}

    /**
     * Enable on-thy-fly gzip'ing of the sent entity.
     *
     * @param bool
     * @return bool
     **/
    function setGzip($gzip) {}

    /**
     * Send an HTTP header.
     *
     * @param string
     * @param mixed
     * @param bool
     * @return bool
     **/
    function setHeader($name, $value, $replace = TRUE) {}

    /**
     * Set a custom Last-Modified date.
     *
     * @param int
     * @return bool
     **/
    function setLastModified($timestamp) {}

    /**
     * Set the resource to be sent.
     *
     * @param resource
     * @return bool
     **/
    function setStream($stream) {}

    /**
     * Sets the throttle delay.
     *
     * @param float
     * @return bool
     **/
    function setThrottleDelay($seconds) {}

    /**
     * http_send_status.
     *
     * @param int
     * @return bool
     **/
    function status($status) {}

}
class hw_api_attribute {
    /**
     * Returns the name of the attribute.
     *
     * @return string
     **/
    function key() {}

    /**
     * Returns the value in the given language of the attribute.
     *
     * @param string
     * @return string
     **/
    function langdepvalue($language) {}

    /**
     * Gets the value of the attribute.
     *
     * @return string
     **/
    function value() {}

    /**
     * Gets all values of the attribute.
     *
     * @return array
     **/
    function values() {}

}
class hw_api {
    /**
     * This function checks in an object or a whole hierarchy of objects.
     * The parameters array contains the required element
     * 'objectIdentifier' and the optional element 'version', 'comment', 'mode'
     * and
     * 'objectQuery'. 'version' sets the version of the object. It consists of
     * the major and minor version separated by a period. If the version is not
     * set, the minor version is incremented. 'mode' can be one of the following
     * values:
     * 
     * 
     * HW_API_CHECKIN_NORMAL
     * 
     * 
     * Checks in and commits the object. The object must be a document.
     * 
     * 
     * 
     * 
     * HW_API_CHECKIN_RECURSIVE
     * 
     * 
     * If the object to check in is a collection, all children will be
     * checked in recursively if they are documents. Trying to check in
     * a collection would result in an error.
     * 
     * 
     * 
     * 
     * HW_API_CHECKIN_FORCE_VERSION_CONTROL
     * 
     * 
     * Checks in an object even if it is not under version control.
     * 
     * 
     * 
     * 
     * HW_API_CHECKIN_REVERT_IF_NOT_CHANGED
     * 
     * 
     * Check if the new version is different from the last version. Unless
     * this is the case the object will be checked in.
     * 
     * 
     * 
     * 
     * HW_API_CHECKIN_KEEP_TIME_MODIFIED
     * 
     * 
     * Keeps the time modified from the most recent object.
     * 
     * 
     * 
     * 
     * HW_API_CHECKIN_NO_AUTO_COMMIT
     * 
     * 
     * The object is not automatically committed on check-in.
     *
     * @param array
     * @return bool
     **/
    function checkin($parameter) {}

    /**
     * This function checks out an object or a whole hierarchy of objects.
     *
     * @param array
     * @return bool
     **/
    function checkout($parameter) {}

    /**
     * Retrieves the children of a collection or the attributes of a document.
     * The children can be further filtered by specifying an object query.
     *
     * @param array
     * @return array
     **/
    function children($parameter) {}

    /**
     * This function returns the content of a document as an object of type
     * hw_api_content.
     *
     * @param array
     * @return HW_API_Content
     **/
    function content($parameter) {}

    /**
     * This function will make a physical copy including the content if it
     * exists and returns the new object or an error object.
     *
     * @param array
     * @return hw_api_content
     **/
    function copy($parameter) {}

    /**
     * Returns statistics about database server.
     *
     * @param array
     * @return hw_api_object
     **/
    function dbstat($parameter) {}

    /**
     * Returns statistics about document cache server.
     *
     * @param array
     * @return hw_api_object
     **/
    function dcstat($parameter) {}

    /**
     * Retrieves all destination anchors of an object.
     *
     * @param array
     * @return array
     **/
    function dstanchors($parameter) {}

    /**
     * Retrieves the destination object pointed by the specified source anchors.
     * The destination object can either be a destination anchor or a whole
     * document.
     *
     * @param array
     * @return hw_api_object
     **/
    function dstofsrcanchor($parameter) {}

    /**
     * This functions searches for objects either by executing a key or/and full
     * text query. The found objects can further be filtered by an optional
     * object query. They are sorted by their importance. The second search
     * operation is relatively slow and its result can be limited to a certain
     * number of hits. This allows to perform an incremental search, each
     * returning just a subset of all found documents, starting at a given
     * index.
     *
     * @param array
     * @return array
     **/
    function find($parameter) {}

    /**
     * Returns statistics about fulltext server.
     *
     * @param array
     * @return hw_api_object
     **/
    function ftstat($parameter) {}

    /**
     * Returns statistics about Hyperwave server.
     *
     * @param array
     * @return hw_api_object
     **/
    function hwstat($parameter) {}

    /**
     * Logs into the Hyperwave Server.
     *
     * @param array
     * @return bool
     **/
    function identify($parameter) {}

    /**
     * Returns information about server configuration.
     *
     * @param array
     * @return array
     **/
    function info($parameter) {}

    /**
     * Insert a new object. The object type can be user, group, document or
     * anchor. Depending on the type other object attributes has to be set.
     *
     * @param array
     * @return hw_api_object
     **/
    function insert($parameter) {}

    /**
     * This function is a shortcut for hwapi_insert. It
     * inserts an object of type anchor and sets some of the attributes
     * required for an anchor.
     *
     * @param array
     * @return hw_api_object
     **/
    function insertanchor($parameter) {}

    /**
     * This function is a shortcut for hwapi_insert. It
     * inserts an object of type collection and sets some of the attributes
     * required for a collection.
     *
     * @param array
     * @return hw_api_object
     **/
    function insertcollection($parameter) {}

    /**
     * This function is a shortcut for hwapi_insert. It
     * inserts an object with content and sets some of the attributes required
     * for a document.
     *
     * @param array
     * @return hw_api_object
     **/
    function insertdocument($parameter) {}

    /**
     * Creates a link to an object. Accessing this link is like accessing the
     * object to links points to.
     *
     * @param array
     * @return bool
     **/
    function link($parameter) {}

    /**
     * Locks an object for exclusive editing by the user calling this function.
     * The object can be only unlocked by this user or the system user.
     *
     * @param array
     * @return bool
     **/
    function lock($parameter) {}

    /**
     * Moves object between collections.
     *
     * @param array
     * @return bool
     **/
    function move($parameter) {}

    /**
     * This function retrieves the attribute information of an object of any
     * version. It will not return the document content.
     *
     * @param array
     * @return hw_api_object
     **/
    function object($parameter) {}

    /**
     * This function retrieves an object the specified anchor belongs to.
     *
     * @param array
     * @return hw_api_object
     **/
    function objectbyanchor($parameter) {}

    /**
     * Retrieves the parents of an object. The parents can be further filtered by
     * specifying an object query.
     *
     * @param array
     * @return array
     **/
    function parents($parameter) {}

    /**
     * Removes an object from the specified parent. Collections
     * will be removed recursively.
     *
     * @param array
     * @return bool
     **/
    function remove($parameter) {}

    /**
     * Replaces the attributes and the content of an object.
     *
     * @param array
     * @return hw_api_object
     **/
    function replace($parameter) {}

    /**
     * Commits a version of a document. The committed version is the one which is
     * visible to users with read access. By default the last version is the
     * committed version.
     *
     * @param array
     * @return hw_api_object
     **/
    function setcommittedversion($parameter) {}

    /**
     * Retrieves all source anchors of an object.
     *
     * @param array
     * @return array
     **/
    function srcanchors($parameter) {}

    /**
     * Retrieves all the source anchors pointing to the specified destination.
     * The destination object can either be a destination anchor or a whole
     * document.
     *
     * @param array
     * @return array
     **/
    function srcsofdst($parameter) {}

    /**
     * Unlocks a locked object. Only the user who has locked the object and the
     * system user may unlock an object.
     *
     * @param array
     * @return bool
     **/
    function unlock($parameter) {}

    /**
     * Returns the own user object.
     *
     * @param array
     * @return hw_api_object
     **/
    function user($parameter) {}

    /**
     * Returns a list of all logged in users.
     *
     * @param array
     * @return array
     **/
    function userlist($parameter) {}

}
class hw_api_content {
    /**
     * Returns the mimetype of the content.
     *
     * @return string
     **/
    function mimetype() {}

    /**
     * Reads len bytes from the content into the given
     * buffer.
     *
     * @param string
     * @param int
     * @return string
     **/
    function read($buffer, $len) {}

}
class hw_api_error {
    /**
     * Returns the number of error reasons.
     *
     * @return int
     **/
    function count() {}

    /**
     * Returns the first error reason.
     *
     * @return HW_API_Reason
     **/
    function reason() {}

}
class hw_api_object {
    /**
     * Clones the attributes of an object.
     *
     * @param array
     * @return bool
     **/
    function assign($parameter) {}

    /**
     * Checks whether an attribute is editable.
     *
     * @param array
     * @return bool
     **/
    function attreditable($parameter) {}

    /**
     * Returns the number of attributes.
     *
     * @param array
     * @return int
     **/
    function count($parameter) {}

    /**
     * Adds an attribute to the object.
     *
     * @param HW_API_Attribute
     * @return bool
     **/
    function insert($attribute) {}

    /**
     * Removes the attribute with the given name.
     *
     * @param string
     * @return bool
     **/
    function remove($name) {}

    /**
     * Returns the title attribute.
     *
     * @param array
     * @return string
     **/
    function title($parameter) {}

    /**
     * Returns value of an attribute.
     *
     * @param string
     * @return string
     **/
    function value($name) {}

}
class hw_api_reason {
    /**
     * Returns the description of a reason
     *
     * @return string
     **/
    function description() {}

    /**
     * Returns the type of a reason.
     *
     * @return HW_API_Reason
     **/
    function type() {}

}
class Imagick {
    /**
     * Adds an adaptive blur filter to image. The intensity of an adaptive blur
     * depends is dramatically decreased at edge of the image, whereas a standard
     * blur is uniform across the image.
     *
     * @param float
     * @param float
     * @param int
     * @return bool
     **/
    function adaptiveBlurImage($radius, $sigma, $channel) {}

    /**
     * Adaptively resize image with data-dependent triangulation. Avoids
     * blurring across sharp color changes. Most useful when used to shrink
     * images slightly to a slightly smaller "web size"; may not look good
     * when a full-sized image is adaptively resized to a thumbnail.
     *
     * @param int
     * @param int
     * @param bool
     * @return bool
     **/
    function adaptiveResizeImage($columns, $rows, $fit) {}

    /**
     * Adaptively sharpen the image by sharpening more intensely
     * near image edges and less intensely far from edges.
     *
     * @param float
     * @param float
     * @param int
     * @return bool
     **/
    function adaptiveSharpenImage($radius, $sigma, $channel) {}

    /**
     * Selects an individual threshold for each pixel based on the
     * range of intensity values in its local neighborhood. This
     * allows for thresholding of an image whose global intensity
     * histogram doesn't contain distinctive peaks.
     *
     * @param int
     * @param int
     * @param int
     * @return bool
     **/
    function adaptiveThresholdImage($width, $height, $offset) {}

    /**
     * Adds new image to Imagick object from the current position of the source object.
     * After the operation iterator position is moved at the end of the list.
     *
     * @param Imagick
     * @return bool
     **/
    function addImage($source) {}

    /**
     * Adds random noise to the image.
     *
     * @param int
     * @param int
     * @return bool
     **/
    function addNoiseImage($noise_type, $channel) {}

    /**
     * Transforms an image as dictated by the affine matrix.
     *
     * @param ImagickDraw
     * @return bool
     **/
    function affineTransformImage($matrix) {}

    /**
     * Annotates an image with text.
     *
     * @param ImagickDraw
     * @param float
     * @param float
     * @param float
     * @param string
     * @return bool
     **/
    function annotateImage($draw_settings, $x, $y, $angle, $text) {}

    /**
     * Append a set of images.
     *
     * @param bool
     * @return Imagick
     **/
    function appendImages($stack) {}

    /**
     * Average a set of images.
     *
     * @return Imagick
     **/
    function averageImages() {}

    /**
     * Is like Imagick::thresholdImage() but forces all pixels below the threshold
     * into black while leaving all pixels above the threshold unchanged.
     *
     * @param mixed
     * @return bool
     **/
    function blackThresholdImage($threshold) {}

    /**
     * Adds blur filter to image. Optional third parameter to blur a specific
     * channel.
     *
     * @param float
     * @param float
     * @param int
     * @return bool
     **/
    function blurImage($radius, $sigma, $channel) {}

    /**
     * Surrounds the image with a border of the color defined by the bordercolor ImagickPixel object.
     *
     * @param mixed
     * @param int
     * @param int
     * @return bool
     **/
    function borderImage($bordercolor, $width, $height) {}

    /**
     * Simulates a charcoal drawing.
     *
     * @param float
     * @param float
     * @return bool
     **/
    function charcoalImage($radius, $sigma) {}

    /**
     * Removes a region of an image and collapses the image to occupy the removed portion.
     *
     * @param int
     * @param int
     * @param int
     * @param int
     * @return bool
     **/
    function chopImage($width, $height, $x, $y) {}

    /**
     * Clears all resources associated to Imagick object
     *
     * @return bool
     **/
    function clear() {}

    /**
     * Clips along the first path from the 8BIM profile, if present.
     *
     * @return bool
     **/
    function clipImage() {}

    /**
     * Clips along the named paths from the 8BIM profile, if
     * present. Later operations take effect inside the path.
     * It may be a number if preceded with #, to work on a
     * numbered path, e.g., "#1" to use the first path.
     *
     * @param string
     * @param bool
     * @return bool
     **/
    function clipPathImage($pathname, $inside) {}

    /**
     * Replaces colors in the image from a color lookup table. Optional second
     * parameter to replace colors in a specific channel. This method is available
     * if Imagick is compiled against ImageMagick 6.3.5-7 or newer.
     *
     * @param Imagick
     * @param int
     * @return bool
     **/
    function clutImage($lookup_table, $channel) {}

    /**
     * Composites a set of images while respecting any page offsets
     * and disposal methods. GIF, MIFF, and MNG animation sequences
     * typically start with an image background and each subsequent
     * image varies in size and offset. Returns a new Imagick object
     * where each image in the sequence is the same size as the first
     * and composited with the next image in the sequence.
     *
     * @return Imagick
     **/
    function coalesceImages() {}

    /**
     * Changes the color value of any pixel that matches target and is an
     * immediate neighbor.
     *
     * @param mixed
     * @param float
     * @param mixed
     * @param int
     * @param int
     * @return bool
     **/
    function colorFloodfillImage($fill, $fuzz, $bordercolor, $x, $y) {}

    /**
     * Blends the fill color with each pixel in the image.
     *
     * @param mixed
     * @param mixed
     * @return bool
     **/
    function colorizeImage($colorize, $opacity) {}

    /**
     * Combines one or more images into a single image. The grayscale
     * value of the pixels of each image in the sequence is assigned
     * in order to the specified channels of the combined image. The
     * typical ordering would be image 1 = Red, 2 = Green,
     * 3 = Blue, etc.
     *
     * @param int
     * @return Imagick
     **/
    function combineImages($channelType) {}

    /**
     * Adds a comment to your image.
     *
     * @param string
     * @return bool
     **/
    function commentImage($comment) {}

    /**
     * Compares one or more images and returns the difference image.
     *
     * @param Imagick
     * @param int
     * @param int
     * @return Imagick
     **/
    function compareImageChannels($image, $channelType, $metricType) {}

    /**
     * Compares each image with the next in a sequence and returns the
     * maximum bounding region of any pixel differences it discovers.
     *
     * @param int
     * @return Imagick
     **/
    function compareImageLayers($method) {}

    /**
     * Returns an array containing a reconstructed image and the difference between images.
     *
     * @param Imagick
     * @param int
     * @return array
     **/
    function compareImages($compare, $metric) {}

    /**
     * Composite one image onto another at the specified offset.
     *
     * @param Imagick
     * @param int
     * @param int
     * @param int
     * @param int
     * @return bool
     **/
    function compositeImage($composite_object, $composite, $x, $y, $channel) {}

    /**
     * The Imagick constructor
     *
     * @param mixed
     * @return Imagick
     **/
    function __construct($files) {}

    /**
     * Enhances the intensity differences between the lighter and
     * darker elements of the image. Set sharpen to a value other
     * than 0 to increase the image contrast otherwise the contrast
     * is reduced.
     *
     * @param bool
     * @return bool
     **/
    function contrastImage($sharpen) {}

    /**
     * Enhances the contrast of a color image by adjusting the pixels
     * color to span the entire range of colors available
     *
     * @param float
     * @param float
     * @param int
     * @return bool
     **/
    function contrastStretchImage($black_point, $white_point, $channel) {}

    /**
     * Applies a custom convolution kernel to the image.
     *
     * @param array
     * @param int
     * @return bool
     **/
    function convolveImage($kernel, $channel) {}

    /**
     * Extracts a region of the image.
     *
     * @param int
     * @param int
     * @param int
     * @param int
     * @return bool
     **/
    function cropImage($width, $height, $x, $y) {}

    /**
     * Creates a fixed size thumbnail by first scaling the image down and cropping a specified
     * area from the center.
     *
     * @param int
     * @param int
     * @return bool
     **/
    function cropThumbnailImage($width, $height) {}

    /**
     * Returns reference to the current imagick object with image pointer at the correct sequence.
     *
     * @return Imagick
     **/
    function current() {}

    /**
     * Displaces an image's colormap by a given number of positions. If you
     * cycle the colormap a number of times you can produce a psychedelic
     * effect.
     *
     * @param int
     * @return bool
     **/
    function cycleColormapImage($displace) {}

    /**
     * Compares each image with the next in a sequence and returns the maximum
     * bounding region of any pixel differences it discovers.
     *
     * @return bool
     **/
    function deconstructImages() {}

    /**
     * Reduces the speckle noise in an image while perserving the edges of the original image.
     *
     * @return bool
     **/
    function despeckleImage() {}

    /**
     * Destroys the Imagick object and frees all resources associated with it.
     *
     * @return bool
     **/
    function destroy() {}

    /**
     * This method displays an image on a X server.
     *
     * @param string
     * @return bool
     **/
    function displayImage($servername) {}

    /**
     * Displays an image or image sequence on a X server.
     *
     * @param string
     * @return bool
     **/
    function displayImages($servername) {}

    /**
     * Distorts an image using various distortion methods, by mapping color
     * lookups of the source image to a new destination image usally of the same
     * size as the source image, unless 'bestfit' is set to .
     *
     * @param int
     * @param array
     * @param bool
     * @return bool
     **/
    function distortImage($method, $arguments, $bestfit) {}

    /**
     * Renders the ImagickDraw object on the current image.
     *
     * @param ImagickDraw
     * @return bool
     **/
    function drawImage($draw) {}

    /**
     * Enhance edges within the image with a convolution filter of the given
     * radius. Use radius 0 and it will be auto-selected.
     *
     * @param float
     * @return bool
     **/
    function edgeImage($radius) {}

    /**
     * Returns a grayscale image with a three-dimensional effect. We convolve
     * the image with a Gaussian operator of the given radius and standard 
     * deviation (sigma). For reasonable results, radius should be larger than 
     * sigma. Use a radius of 0 and it will choose a suitable radius for you.
     *
     * @param float
     * @param float
     * @return bool
     **/
    function embossImage($radius, $sigma) {}

    /**
     * Applies a digital filter that improves the quality of a noisy image.
     *
     * @return bool
     **/
    function enhanceImage() {}

    /**
     * Equalizes the image histogram.
     *
     * @return bool
     **/
    function equalizeImage() {}

    /**
     * Applys an arithmetic, relational, or logical expression to an image. Use
     * these operators to lighten or darken an image, to increase or decrease
     * contrast in an image, or to produce the "negative" of an image.
     *
     * @param int
     * @param float
     * @param int
     * @return bool
     **/
    function evaluateImage($op, $constant, $channel) {}

    /**
     * Merges a sequence of images. This is useful for combining Photoshop layers into a single image.
     *
     * @return Imagick
     **/
    function flattenImages() {}

    /**
     * Creates a vertical mirror image by reflecting the pixels around the central x-axis.
     *
     * @return bool
     **/
    function flipImage() {}

    /**
     * Creates a horizontal mirror image by reflecting the pixels around the central y-axis.
     *
     * @return bool
     **/
    function flopImage() {}

    /**
     * Adds a simulated three-dimensional border around the image.
     * The width and height specify the border width of the vertical
     * and horizontal sides of the frame. The inner and outer
     * bevels indicate the width of the inner and outer shadows of
     * the frame.
     *
     * @param mixed
     * @param int
     * @param int
     * @param int
     * @param int
     * @return bool
     **/
    function frameImage($matte_color, $width, $height, $inner_bevel, $outer_bevel) {}

    /**
     * Evaluate expression for each pixel in the image. Consult The Fx Special Effects Image
     * Operator for more information.
     *
     * @param string
     * @param int
     * @return Imagick
     **/
    function fxImage($expression, $channel) {}

    /**
     * Gamma-corrects an image. The same image viewed on different devices will
     * have perceptual differences in the way the image's intensities are
     * represented on the screen. Specify individual gamma levels for the red,
     * green, and blue channels, or adjust all three with the gamma parameter.
     * Values typically range from 0.8 to 2.3.
     *
     * @param float
     * @param int
     * @return bool
     **/
    function gammaImage($gamma, $channel) {}

    /**
     * Blurs an image. We convolve the image with a Gaussian operator of the
     * given radius and standard deviation (sigma). For reasonable results, the
     * radius should be larger than sigma. Use a radius of 0 and selects a
     * suitable radius for you.
     *
     * @param float
     * @param float
     * @param int
     * @return bool
     **/
    function gaussianBlurImage($radius, $sigma, $channel) {}

    /**
     * Gets the object compression type.
     *
     * @return int
     **/
    function getCompression() {}

    /**
     * Gets the object compression quality.
     *
     * @return int
     **/
    function getCompressionQuality() {}

    /**
     * Returns the ImageMagick API copyright as a string.
     *
     * @return string
     **/
    function getCopyright() {}

    /**
     * Returns the filename associated with an image sequence.
     *
     * @return string
     **/
    function getFilename() {}

    /**
     * Returns the format of the Imagick object.
     *
     * @return string
     **/
    function getFormat() {}

    /**
     * Returns the ImageMagick home URL.
     *
     * @return string
     **/
    function getHomeURL() {}

    /**
     * Returns a new Imagick object with the current image sequence.
     *
     * @return Imagick
     **/
    function getImage() {}

    /**
     * Returns the image background color.
     *
     * @return ImagickPixel
     **/
    function getImageBackgroundColor() {}

    /**
     * Implements direct to memory image formats. It returns the image
     * sequence as a string. The format of the image determines the
     * format of the returned blob (GIF, JPEG, PNG, etc.). To return a
     * different image format, use Imagick::setImageFormat().
     *
     * @return string
     **/
    function getImageBlob() {}

    /**
     * Returns the chromaticy blue primary point for the image.
     *
     * @param float
     * @param float
     * @return ImagickPixel
     **/
    function getImageBluePrimary($x, $y) {}

    /**
     * Returns the image border color.
     *
     * @return ImagickPixel
     **/
    function getImageBorderColor() {}

    /**
     * Gets the depth for a particular image channel.
     *
     * @param int
     * @return int
     **/
    function getImageChannelDepth($channelType) {}

    /**
     * Compares one or more image channels of an image to a reconstructed image
     * and returns the specified distortion metric.
     *
     * @param Imagick
     * @param int
     * @param int
     * @return float
     **/
    function getImageChannelDistortion($reference, $channel, $metric) {}

    /**
     * Gets the extrema for one or more image channels. Return value is an
     * associative array with the keys "minima" and "maxima".
     *
     * @param int
     * @return array
     **/
    function getImageChannelExtrema($channel) {}

    /**
     * Gets the mean and standard deviation of one or more image channels.
     * Return value is an associative array with the keys "mean" and
     * "standardDeviation".
     *
     * @param int
     * @return array
     **/
    function getImageChannelMean($channel) {}

    /**
     * Returns statistics for each channel in the image. The statistics include
     * the channel depth, its minima and maxima, the mean, and the standard
     * deviation. You can access the red channel mean, for example, like this:
     *
     * @return array
     **/
    function getImageChannelStatistics() {}

    /**
     * Returns the color of the specified colormap index.
     *
     * @param int
     * @return ImagickPixel
     **/
    function getImageColormapColor($index) {}

    /**
     * Gets the number of unique colors in the image.
     *
     * @return int
     **/
    function getImageColors() {}

    /**
     * Gets the image colorspace.
     *
     * @return int
     **/
    function getImageColorspace() {}

    /**
     * Returns the composite operator associated with the image.
     *
     * @return int
     **/
    function getImageCompose() {}

    /**
     * Gets the image delay.
     *
     * @return int
     **/
    function getImageDelay() {}

    /**
     * Gets the image depth.
     *
     * @return int
     **/
    function getImageDepth() {}

    /**
     * Gets the image disposal method.
     *
     * @return int
     **/
    function getImageDispose() {}

    /**
     * Compares an image to a reconstructed image and returns the specified distortion
     * metric.
     *
     * @param MagickWand
     * @param int
     * @return float
     **/
    function getImageDistortion($reference, $metric) {}

    /**
     * Gets the extrema for the image. Returns an associative array with the keys "min" and "max".
     *
     * @return array
     **/
    function getImageExtrema() {}

    /**
     * Returns the filename of a particular image in a sequence.
     *
     * @return string
     **/
    function getImageFilename() {}

    /**
     * Returns the format of a particular image in a sequence.
     *
     * @return string
     **/
    function getImageFormat() {}

    /**
     * Gets the image gamma.
     *
     * @return float
     **/
    function getImageGamma() {}

    /**
     * Returns the width and height as an associative array.
     *
     * @return array
     **/
    function getImageGeometry() {}

    /**
     * Returns the chromaticy green primary point. Returns an array with the keys "x" and "y".
     *
     * @return array
     **/
    function getImageGreenPrimary() {}

    /**
     * Returns the image height.
     *
     * @return int
     **/
    function getImageHeight() {}

    /**
     * Returns the image histogram as an array of ImagickPixel objects.
     *
     * @return array
     **/
    function getImageHistogram() {}

    /**
     * Returns the index of the current active image within the Imagick object.
     * This method has been deprecated. See Imagick::getIteratorIndex
     *
     * @return int
     **/
    function getImageIndex() {}

    /**
     * Gets the image interlace scheme.
     *
     * @return int
     **/
    function getImageInterlaceScheme() {}

    /**
     * Returns the interpolation method for the sepcified image.
     *
     * @return int
     **/
    function getImageInterpolateMethod() {}

    /**
     * Gets the image iterations.
     *
     * @return int
     **/
    function getImageIterations() {}

    /**
     * Returns the image length in bytes
     *
     * @return int
     **/
    function getImageLength() {}

    /**
     * Returns a string containing the ImageMagick license
     *
     * @return string
     **/
    function getImageMagickLicense() {}

    /**
     * Returns if the image has a matte channel otherwise false.
     *
     * @return int
     **/
    function getImageMatte() {}

    /**
     * Returns the image matte color.
     *
     * @return ImagickPixel
     **/
    function getImageMatteColor() {}

    /**
     * Gets the image orientation. The return value is one of the orientation constants.
     *
     * @return int
     **/
    function getImageOrientation() {}

    /**
     * Returns the page geometry associated with the image in an array with the
     * keys "width", "height", "x", and "y".
     *
     * @return array
     **/
    function getImagePage() {}

    /**
     * Returns the color of the specified pixel.
     *
     * @param int
     * @param int
     * @return ImagickPixel
     **/
    function getImagePixelColor($x, $y) {}

    /**
     * Returns the named image profile.
     *
     * @param string
     * @return string
     **/
    function getImageProfile($name) {}

    /**
     * Returns all associated profiles that match the pattern. If is passed as second parameter
     * only the profile names are returned. This method is present if Imagick is compiled against
     * ImageMagick 6.3.5-9 or later.
     *
     * @param string
     * @param bool
     * @return array
     **/
    function getImageProfiles($pattern, $only_names) {}

    /**
     * Returns all associated properties that match the pattern. If is passed as second parameter
     * only the property names are returned. This method is present if Imagick is compiled against 
     * ImageMagick 6.3.5-9 or later.
     *
     * @param string
     * @param bool
     * @return array
     **/
    function getImageProperties($pattern, $only_names) {}

    /**
     * Returns the named image profile.
     *
     * @param string
     * @return string
     **/
    function getImageProperty($name) {}

    /**
     * Returns the chromaticy red primary point as an array with the keys "x" and "y".
     *
     * @return array
     **/
    function getImageRedPrimary() {}

    /**
     * Extracts a region of the image and returns it as a a new Imagick object.
     *
     * @param int
     * @param int
     * @param int
     * @param int
     * @return Imagick
     **/
    function getImageRegion($width, $height, $x, $y) {}

    /**
     * Gets the image rendering intent.
     *
     * @return int
     **/
    function getImageRenderingIntent() {}

    /**
     * Gets the image X and Y resolution.
     *
     * @return array
     **/
    function getImageResolution() {}

    /**
     * Gets the image scene.
     *
     * @return int
     **/
    function getImageScene() {}

    /**
     * Generates an SHA-256 message digest for the image pixel stream.
     *
     * @return string
     **/
    function getImageSignature() {}

    /**
     * Returns the image length in bytes
     *
     * @return int
     **/
    function getImageSize() {}

    /**
     * Gets the image ticks-per-second.
     *
     * @return int
     **/
    function getImageTicksPerSecond() {}

    /**
     * Gets the image total ink density.
     *
     * @return float
     **/
    function getImageTotalInkDensity() {}

    /**
     * Gets the potential image type.
     *
     * @return int
     **/
    function getImageType() {}

    /**
     * Gets the image units of resolution.
     *
     * @return int
     **/
    function getImageUnits() {}

    /**
     * Returns the virtual pixel method for the specified image.
     *
     * @return int
     **/
    function getImageVirtualPixelMethod() {}

    /**
     * Returns the chromaticy white point as an associative array with the keys "x" and "y".
     *
     * @return array
     **/
    function getImageWhitePoint() {}

    /**
     * Returns the image width.
     *
     * @return int
     **/
    function getImageWidth() {}

    /**
     * Gets the object interlace scheme.
     *
     * @return int
     **/
    function getInterlaceScheme() {}

    /**
     * Returns the index of the current active image within the Imagick object.
     *
     * @return int
     **/
    function getIteratorIndex() {}

    /**
     * Returns the number of images associated with Imagick object.
     *
     * @return int
     **/
    function getNumberImages() {}

    /**
     * Returns a value associated within the object for the specified key.
     *
     * @param string
     * @return string
     **/
    function getOption($key) {}

    /**
     * Returns the ImageMagick package name.
     *
     * @return string
     **/
    function getPackageName() {}

    /**
     * Returns the page geometry associated with the Imagick object in
     * an associative array with the keys "width", "height", "x", and "y".
     *
     * @return array
     **/
    function getPage() {}

    /**
     * Returns a MagickPixelIterator.
     *
     * @return ImagickPixelIterator
     **/
    function getPixelIterator() {}

    /**
     * Get an ImagickPixelIterator for an image section.
     *
     * @param int
     * @param int
     * @param int
     * @param int
     * @return ImagickPixelIterator
     **/
    function getPixelRegionIterator($x, $y, $columns, $rows) {}

    /**
     * Returns the Imagick quantum depth as a string.
     *
     * @return array
     **/
    function getQuantumDepth() {}

    /**
     * Returns the Imagick quantum range as a string.
     *
     * @return array
     **/
    function getQuantumRange() {}

    /**
     * Returns the ImageMagick release date as a string.
     *
     * @return string
     **/
    function getReleaseDate() {}

    /**
     * Returns the specified resource's memory usage in megabytes.
     *
     * @param int
     * @return int
     **/
    function getResource($type) {}

    /**
     * Returns the specified resource limit in megabytes.
     *
     * @param int
     * @return int
     **/
    function getResourceLimit($type) {}

    /**
     * Gets the horizontal and vertical sampling factor.
     *
     * @return array
     **/
    function getSamplingFactors() {}

    /**
     * Returns the size associated with the Imagick object as an array with the
     * keys "columns" and "rows".
     *
     * @return array
     **/
    function getSize() {}

    /**
     * Returns the size offset associated with the Imagick object.
     *
     * @return int
     **/
    function getSizeOffset() {}

    /**
     * Returns the ImageMagick API version as a string and as a number.
     *
     * @return array
     **/
    function getVersion() {}

    /**
     * Returns if the object has more images when traversing the list in the forward direction.
     *
     * @return bool
     **/
    function hasNextImage() {}

    /**
     * Returns if the object has more images when traversing the list in the reverse direction
     *
     * @return bool
     **/
    function hasPreviousImage() {}

    /**
     * Identifies an image and returns the attributes. Attributes include
     * the image width, height, size, and others.
     *
     * @param bool
     * @return array
     **/
    function identifyImage($appendRawOutput) {}

    /**
     * Creates a new image that is a copy of an existing one with the image pixels
     * "imploded" by the specified percentage.
     *
     * @param float
     * @return bool
     **/
    function implodeImage($radius) {}

    /**
     * Adds a label to an image.
     *
     * @param string
     * @return bool
     **/
    function labelImage($label) {}

    /**
     * Adjusts the levels of an image by scaling the colors falling
     * between specified white and black points to the full
     * available quantum range. The parameters provided represent
     * the black, mid, and white points. The black point specifies
     * the darkest color in the image. Colors darker than the black
     * point are set to zero. Mid point specifies a gamma
     * correction to apply to the image. White point specifies the
     * lightest color in the image. Colors brighter than the white
     * point are set to the maximum quantum value.
     *
     * @param float
     * @param float
     * @param float
     * @param int
     * @return bool
     **/
    function levelImage($blackPoint, $gamma, $whitePoint, $channel) {}

    /**
     * Stretches with saturation the image intensity.
     *
     * @param float
     * @param float
     * @return bool
     **/
    function linearStretchImage($blackPoint, $whitePoint) {}

    /**
     * Is a convenience method that scales an image proportionally to twice its original size.
     *
     * @return bool
     **/
    function magnifyImage() {}

    /**
     * @param Imagick
     * @param bool
     * @return bool
     **/
    function mapImage($map, $dither) {}

    /**
     * Changes the transparency value of any pixel that matches
     * target and is an immediate neighbor. If the method
     * FillToBorderMethod is specified, the transparency value
     * is changed for any neighbor pixel that does not match
     * the bordercolor member of image.
     *
     * @param float
     * @param float
     * @param mixed
     * @param int
     * @param int
     * @return bool
     **/
    function matteFloodfillImage($alpha, $fuzz, $bordercolor, $x, $y) {}

    /**
     * Applies a digital filter that improves the quality of a
     * noisy image. Each pixel is replaced by the median in a
     * set of neighboring pixels as defined by radius.
     *
     * @param float
     * @return bool
     **/
    function medianFilterImage($radius) {}

    /**
     * Is a convenience method that scales an image proportionally to one-half its original size
     *
     * @return bool
     **/
    function minifyImage() {}

    /**
     * Lets you control the brightness, saturation, and hue of an image. Hue
     * is the percentage of absolute rotation from the current position. For
     * example 50 results in a counter-clockwise rotation of 90 degrees, 150
     * results in a clockwise rotation of 90 degrees, with 0 and 200 both
     * resulting in a rotation of 180 degrees.
     *
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function modulateImage($brightness, $saturation, $hue) {}

    /**
     * Creates a composite image by combining several separate images.
     * he images are tiled on the composite image with the name of the
     * image optionally appearing just below the individual tile.
     *
     * @param ImagickDraw
     * @param string
     * @param string
     * @param int
     * @param string
     * @return Imagick
     **/
    function montageImage($draw, $tile_geometry, $thumbnail_geometry, $mode, $frame) {}

    /**
     * Method morphs a set of images. Both the image pixels and size
     * are linearly interpolated to give the appearance of a
     * meta-morphosis from one image to the next.
     *
     * @param int
     * @return Imagick
     **/
    function morphImages($number_frames) {}

    /**
     * Inlays an image sequence to form a single coherent picture. It
     * returns a wand with each image in the sequence composited at
     * the location defined by the page offset of the image.
     *
     * @return Imagick
     **/
    function mosaicImages() {}

    /**
     * Simulates motion blur. We convolve the image with a Gaussian
     * operator of the given radius and standard deviation (sigma).
     * For reasonable results, radius should be larger than sigma.
     * Use a radius of 0 and MotionBlurImage() selects a suitable
     * radius for you. Angle gives the angle of the blurring motion.
     *
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function motionBlurImage($radius, $sigma, $angle) {}

    /**
     * Negates the colors in the reference image. The Grayscale
     * option means that only grayscale values within the image
     * are negated.
     *
     * @param bool
     * @param int
     * @return bool
     **/
    function negateImage($gray, $channel) {}

    /**
     * Creates a new image and associates ImagickPixel value as background color
     *
     * @param int
     * @param int
     * @param mixed
     * @param string
     * @return bool
     **/
    function newImage($cols, $rows, $background, $format) {}

    /**
     * Creates a new image using ImageMagick pseudo-formats.
     *
     * @param int
     * @param int
     * @param string
     * @return bool
     **/
    function newPseudoImage($columns, $rows, $pseudoString) {}

    /**
     * Associates the next image in the image list with an Imagick object.
     *
     * @return bool
     **/
    function nextImage() {}

    /**
     * Enhances the contrast of a color image by adjusting the pixels
     * color to span the entire range of colors available.
     *
     * @param int
     * @return bool
     **/
    function normalizeImage($channel) {}

    /**
     * Applies a special effect filter that simulates an oil painting.
     * Each pixel is replaced by the most frequent color occurring in
     * a circular region defined by radius.
     *
     * @param float
     * @return bool
     **/
    function oilPaintImage($radius) {}

    /**
     * Compares each image the GIF disposed forms of the previous image
     * in the sequence. From this it attempts to select the smallest
     * cropped image to replace each frame, while preserving the results
     * of the animation.
     *
     * @return bool
     **/
    function optimizeImageLayers() {}

    /**
     * Changes the color value of any pixel that matches target and is an
     * immediate neighbor.
     *
     * @param mixed
     * @param float
     * @param mixed
     * @param int
     * @param int
     * @return bool
     **/
    function paintFloodfillImage($fill, $fuzz, $bordercolor, $x, $y) {}

    /**
     * Changes any pixel that matches color with the color defined by fill.
     *
     * @param mixed
     * @param mixed
     * @param float
     * @param int
     * @return bool
     **/
    function paintOpaqueImage($target, $fill, $fuzz, $channel) {}

    /**
     * Changes any pixel that matches color with the color defined by fill.
     *
     * @param mixed
     * @param float
     * @param float
     * @return bool
     **/
    function paintTransparentImage($target, $alpha, $fuzz) {}

    /**
     * This method can be used to query image width, height, size, and
     * format without reading the whole image in to memory.
     *
     * @param string
     * @return bool
     **/
    function pingImage($filename) {}

    /**
     * This method can be used to query image width, height, size, and
     * format without reading the whole image to memory.
     *
     * @param string
     * @return bool
     **/
    function pingImageBlob($image) {}

    /**
     * This method can be used to query image width, height, size, and
     * format without reading the whole image to memory.
     *
     * @param resource
     * @param string
     * @return bool
     **/
    function pingImageFile($filehandle, $fileName) {}

    /**
     * Simulates a Polaroid picture. This method is available if you compile
     * Imagick against ImageMagick 6.3.2 or later.
     *
     * @param ImagickDraw
     * @param float
     * @return bool
     **/
    function polaroidImage($properties, $angle) {}

    /**
     * Reduces the image to a limited number of color level.
     *
     * @param int
     * @param bool
     * @return bool
     **/
    function posterizeImage($levels, $dither) {}

    /**
     * Tiles 9 thumbnails of the specified image with an image processing
     * operation applied at varying strengths. This is helpful to quickly
     * pin-point an appropriate parameter for an image processing operation.
     *
     * @param int
     * @return bool
     **/
    function previewImages($preview) {}

    /**
     * Assocates the previous image in an image list with the Imagick object.
     *
     * @return bool
     **/
    function previousImage() {}

    /**
     * Adds or removes a ICC, IPTC, or generic profile from an image.
     * If the profile is NULL, it is removed from the image otherwise
     * added. Use a name of '*' and a profile of NULL to remove all
     * profiles from the image.
     *
     * @param string
     * @param string
     * @return bool
     **/
    function profileImage($name, $profile) {}

    /**
     * @param int
     * @param int
     * @param int
     * @param bool
     * @param bool
     * @return bool
     **/
    function quantizeImage($numberColors, $colorspace, $treedepth, $dither, $measureError) {}

    /**
     * @param int
     * @param int
     * @param int
     * @param bool
     * @param bool
     * @return bool
     **/
    function quantizeImages($numberColors, $colorspace, $treedepth, $dither, $measureError) {}

    /**
     * Returns a multi-dimensional array representing the font metrics.
     *
     * @param ImagickDraw
     * @param string
     * @param bool
     * @return array
     **/
    function queryFontMetrics($properties, $text, $multiline) {}

    /**
     * Returns formats supported by Imagick.
     *
     * @param string
     * @return array
     **/
    function queryFonts($pattern) {}

    /**
     * Returns formats supported by Imagick.
     *
     * @param string
     * @return array
     **/
    function queryFormats($pattern) {}

    /**
     * Radial blurs an image.
     *
     * @param float
     * @param int
     * @return bool
     **/
    function radialBlurImage($angle, $channel) {}

    /**
     * Creates a simulated three-dimensional button-like effect
     * by lightening and darkening the edges of the image.
     * Members width and height of raise_info define the width
     * of the vertical and horizontal edge of the effect.
     *
     * @param int
     * @param int
     * @param int
     * @param int
     * @param bool
     * @return bool
     **/
    function raiseImage($width, $height, $x, $y, $raise) {}

    /**
     * Changes the value of individual pixels based on the
     * intensity of each pixel compared to threshold. The
     * result is a high-contrast, two color image.
     *
     * @param float
     * @param float
     * @param int
     * @return bool
     **/
    function randomThresholdImage($low, $high, $channel) {}

    /**
     * Reads image from filename
     *
     * @param string
     * @return bool
     **/
    function readImage($filename) {}

    /**
     * Reads image from a binary string
     *
     * @param string
     * @param string
     * @return bool
     **/
    function readImageBlob($image, $filename) {}

    /**
     * Reads image from open filehandle
     *
     * @param resource
     * @param string
     * @return bool
     **/
    function readImageFile($filehandle, $fileName) {}

    /**
     * Smooths the contours of an image while still preserving edge
     * information. The algorithm works by replacing each pixel with
     * its neighbor closest in value. A neighbor is defined by radius.
     * Use a radius of 0 and Imagick::reduceNoiseImage() selects a
     * suitable radius for you.
     *
     * @param float
     * @return bool
     **/
    function reduceNoiseImage($radius) {}

    /**
     * Removes an image from the image list.
     *
     * @return bool
     **/
    function removeImage() {}

    /**
     * Removes the named image profile and returns it.
     *
     * @param string
     * @return string
     **/
    function removeImageProfile($name) {}

    /**
     * Renders all preceding drawing commands.
     *
     * @return bool
     **/
    function render() {}

    /**
     * Resample image to desired resolution.
     *
     * @param float
     * @param float
     * @param int
     * @param float
     * @return bool
     **/
    function resampleImage($x_resolution, $y_resolution, $filter, $blur) {}

    /**
     * Scales an image to the desired dimensions with a
     * filter.
     *
     * @param int
     * @param int
     * @param int
     * @param float
     * @param bool
     * @return bool
     **/
    function resizeImage($columns, $rows, $filter, $blur, $fit) {}

    /**
     * Offsets an image as defined by x and y.
     *
     * @param int
     * @param int
     * @return bool
     **/
    function rollImage($x, $y) {}

    /**
     * Rotates an image the specified number of degrees. Empty
     * triangles left over from rotating the image are filled
     * with the background color.
     *
     * @param mixed
     * @param float
     * @return bool
     **/
    function rotateImage($background, $degrees) {}

    /**
     * Rounds image corners. Three last parameters are optional and rarely
     * needed.
     *
     * @param float
     * @param float
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function roundCorners($x_rounding, $y_rounding, $stroke_width, $displace, $size_correction) {}

    /**
     * Scales an image to the desired dimensions with pixel sampling.
     * Unlike other scaling methods, this method does not introduce
     * any additional color into the scaled image.
     *
     * @param int
     * @param int
     * @return bool
     **/
    function sampleImage($columns, $rows) {}

    /**
     * Scales the size of an image to the given dimensions. The other parameter
     * will be calculated if 0 is passed as either param.
     *
     * @param int
     * @param int
     * @param bool
     * @return bool
     **/
    function scaleImage($cols, $rows, $fit) {}

    /**
     * Separates a channel from the image and returns a grayscale image. A channel
     * is a particular color component of each pixel in the image.
     *
     * @param int
     * @return bool
     **/
    function separateImageChannel($channel) {}

    /**
     * Applies a special effect to the image, similar to the effect achieved
     * in a photo darkroom by sepia toning. Threshold ranges from 0 to
     * QuantumRange and is a measure of the extent of the sepia toning. A
     * threshold of 80 is a good starting point for a reasonable tone.
     *
     * @param float
     * @return bool
     **/
    function sepiaToneImage($threshold) {}

    /**
     * Sets the object's default background color.
     *
     * @param mixed
     * @return bool
     **/
    function setBackgroundColor($background) {}

    /**
     * Sets the object's default compression type
     *
     * @param int
     * @return bool
     **/
    function setCompression($compression) {}

    /**
     * Sets the object's default compression quality.
     *
     * @param int
     * @return bool
     **/
    function setCompressionQuality($quality) {}

    /**
     * Sets the filename before you read or write an image file.
     *
     * @param string
     * @return bool
     **/
    function setFilename($filename) {}

    /**
     * Sets the Imagick iterator to the first image.
     *
     * @return bool
     **/
    function setFirstIterator() {}

    /**
     * Sets object's font property. This method can be used for example to set font for 
     * caption: pseudo-format. This method is available if Imagick is compile against
     * at least version 6.3.6-4 of ImageMagick.
     *
     * @param string
     * @return bool
     **/
    function setFont($font) {}

    /**
     * Sets the format of the Imagick object.
     *
     * @param string
     * @return bool
     **/
    function setFormat($format) {}

    /**
     * Replaces the current image sequence with the image from replace object.
     *
     * @param Imagick
     * @return bool
     **/
    function setImage($replace) {}

    /**
     * Sets the image background color.
     *
     * @param mixed
     * @return bool
     **/
    function setImageBackgroundColor($background) {}

    /**
     * Sets the image bias for any method that convolves an image (e.g. Imagick::ConvolveImage()).
     *
     * @param float
     * @return bool
     **/
    function setImageBias($bias) {}

    /**
     * Sets the image chromaticity blue primary point.
     *
     * @param float
     * @param float
     * @return bool
     **/
    function setImageBluePrimary($x, $y) {}

    /**
     * Sets the image border color.
     *
     * @param mixed
     * @return bool
     **/
    function setImageBorderColor($border) {}

    /**
     * Sets the depth of a particular image channel.
     *
     * @param int
     * @param int
     * @return bool
     **/
    function setImageChannelDepth($channel, $depth) {}

    /**
     * Sets the color of the specified colormap index.
     *
     * @param int
     * @param ImagickPixel
     * @return bool
     **/
    function setImageColormapColor($index, $color) {}

    /**
     * Sets the image colorspace.
     *
     * @param int
     * @return bool
     **/
    function setImageColorspace($colorspace) {}

    /**
     * Sets the image composite operator, useful for specifying how
     * to composite the image thumbnail when using the
     * Imagick::montageImage() method.
     *
     * @param int
     * @return bool
     **/
    function setImageCompose($compose) {}

    /**
     * Sets the image compression.
     *
     * @param int
     * @return bool
     **/
    function setImageCompression($compression) {}

    /**
     * Sets the image delay.
     *
     * @param int
     * @return bool
     **/
    function setImageDelay($delay) {}

    /**
     * Sets the image depth.
     *
     * @param int
     * @return bool
     **/
    function setImageDepth($depth) {}

    /**
     * Sets the image disposal method.
     *
     * @param int
     * @return bool
     **/
    function setImageDispose($dispose) {}

    /**
     * Sets the image size (i.e. columns rows).
     *
     * @param int
     * @param int
     * @return bool
     **/
    function setImageExtent($columns, $rows) {}

    /**
     * Sets the filename of a particular image in a sequence.
     *
     * @param string
     * @return bool
     **/
    function setImageFilename($filename) {}

    /**
     * Sets the format of a particular image in a sequence.
     *
     * @param string
     * @return bool
     **/
    function setImageFormat($format) {}

    /**
     * Sets the image gamma.
     *
     * @param float
     * @return bool
     **/
    function setImageGamma($gamma) {}

    /**
     * Sets the image chromaticity green primary point.
     *
     * @param float
     * @param float
     * @return bool
     **/
    function setImageGreenPrimary($x, $y) {}

    /**
     * Set the iterator to the position in the image list specified with the index
     * parameter.
     *
     * @param int
     * @return bool
     **/
    function setImageIndex($index) {}

    /**
     * Sets the image compression.
     *
     * @param int
     * @return bool
     **/
    function setImageInterlaceScheme($interlace_scheme) {}

    /**
     * Sets the image interpolate pixel method.
     *
     * @param int
     * @return bool
     **/
    function setImageInterpolateMethod($method) {}

    /**
     * Sets the image iterations.
     *
     * @param int
     * @return bool
     **/
    function setImageIterations($iterations) {}

    /**
     * Sets the image matte channel.
     *
     * @param bool
     * @return bool
     **/
    function setImageMatte($matte) {}

    /**
     * Sets the image matte color.
     *
     * @param mixed
     * @return bool
     **/
    function setImageMatteColor($matte) {}

    /**
     * Sets the image to the specified opacity level. This method is present if
     * Imagick is compiled against
     * ImageMagick 6.3.1 or later.
     *
     * @param float
     * @return bool
     **/
    function setImageOpacity($opacity) {}

    /**
     * Sets the image orientation.
     *
     * @param int
     * @return bool
     **/
    function setImageOrientation($orientation) {}

    /**
     * Sets the page geometry of the image.
     *
     * @param int
     * @param int
     * @param int
     * @param int
     * @return bool
     **/
    function setImagePage($width, $height, $x, $y) {}

    /**
     * Adds a named profile to the Imagick object. If a profile
     * with the same name already exists, it is replaced. This
     * method differs from the Imagick::ProfileImage() method in
     * that it does not apply any CMS color profiles.
     *
     * @param string
     * @param string
     * @return bool
     **/
    function setImageProfile($name, $profile) {}

    /**
     * Sets a named property to the image.
     *
     * @param string
     * @param string
     * @return bool
     **/
    function setImageProperty($name, $value) {}

    /**
     * Sets the image chromaticity red primary point.
     *
     * @param float
     * @param float
     * @return bool
     **/
    function setImageRedPrimary($x, $y) {}

    /**
     * Sets the image rendering intent.
     *
     * @param int
     * @return bool
     **/
    function setImageRenderingIntent($rendering_intent) {}

    /**
     * Sets the image resolution.
     *
     * @param float
     * @param float
     * @return bool
     **/
    function setImageResolution($x_resolution, $y_resolution) {}

    /**
     * Sets the image scene.
     *
     * @param int
     * @return bool
     **/
    function setImageScene($scene) {}

    /**
     * Sets the image ticks-per-second.
     *
     * @param int
     * @return bool
     **/
    function setImageTicksPerSecond($ticks_persecond) {}

    /**
     * Sets the image type.
     *
     * @param int
     * @return bool
     **/
    function setImageType($image_type) {}

    /**
     * Sets the image units of resolution.
     *
     * @param int
     * @return bool
     **/
    function setImageUnits($units) {}

    /**
     * Sets the image virtual pixel method.
     *
     * @param int
     * @return bool
     **/
    function setImageVirtualPixelMethod($method) {}

    /**
     * Sets the image chromaticity white point.
     *
     * @param float
     * @param float
     * @return bool
     **/
    function setImageWhitePoint($x, $y) {}

    /**
     * Sets the image compression.
     *
     * @param int
     * @return bool
     **/
    function setInterlaceScheme($interlace_scheme) {}

    /**
     * Set the iterator to the position in the image list specified with the index parameter
     *
     * @param int
     * @return bool
     **/
    function setIteratorIndex($index) {}

    /**
     * Sets the Imagick iterator to the last image.
     *
     * @return bool
     **/
    function setLastIterator() {}

    /**
     * Associates one or options with the wand.
     *
     * @param string
     * @param string
     * @return bool
     **/
    function setOption($key, $value) {}

    /**
     * Sets the page geometry of the Imagick object.
     *
     * @param int
     * @param int
     * @param int
     * @param int
     * @return bool
     **/
    function setPage($width, $height, $x, $y) {}

    /**
     * Sets the image resolution.
     *
     * @param float
     * @param float
     * @return bool
     **/
    function setResolution($x_resolution, $y_resolution) {}

    /**
     * Sets the limit for a particular resource in megabytes.
     *
     * @param int
     * @param int
     * @return bool
     **/
    function setResourceLimit($type, $limit) {}

    /**
     * Sets the image sampling factors.
     *
     * @param array
     * @return bool
     **/
    function setSamplingFactors($factors) {}

    /**
     * Sets the size of the Imagick object. Set it before you read a raw image
     * format such as RGB, GRAY, or CMYK.
     *
     * @param int
     * @param int
     * @return bool
     **/
    function setSize($columns, $rows) {}

    /**
     * Sets the size and offset of the Imagick object. Set it before you read a
     * raw image format such as RGB, GRAY, or CMYK.
     *
     * @param int
     * @param int
     * @param int
     * @return bool
     **/
    function setSizeOffset($columns, $rows, $offset) {}

    /**
     * Sets the image type attribute.
     *
     * @param int
     * @return bool
     **/
    function setType($image_type) {}

    /**
     * Shines a distant light on an image to create a three-dimensional effect.
     * You control the positioning of the light with azimuth and elevation;
     * azimuth is measured in degrees off the x axis and elevation is measured
     * in pixels above the Z axis.
     *
     * @param bool
     * @param float
     * @param float
     * @return bool
     **/
    function shadeImage($gray, $azimuth, $elevation) {}

    /**
     * Simulates an image shadow.
     *
     * @param float
     * @param float
     * @param int
     * @param int
     * @return bool
     **/
    function shadowImage($opacity, $sigma, $x, $y) {}

    /**
     * Sharpens an image. We convolve the image with a Gaussian operator
     * of the given radius and standard deviation (sigma). For reasonable
     * results, the radius should be larger than sigma. Use a radius of
     * 0 and selects a suitable radius for you.
     *
     * @param float
     * @param float
     * @param int
     * @return bool
     **/
    function sharpenImage($radius, $sigma, $channel) {}

    /**
     * Shaves pixels from the image edges. It allocates the memory necessary for
     * the new Image structure and returns a pointer to the new image.
     *
     * @param int
     * @param int
     * @return bool
     **/
    function shaveImage($columns, $rows) {}

    /**
     * Slides one edge of an image along the X or Y axis, creating a parallelogram.
     * An X direction shear slides an edge along the X axis, while a Y direction
     * shear slides an edge along the Y axis. The amount of the shear is controlled
     * by a shear angle. For X direction shears, x_shear is measured relative to
     * the Y axis, and similarly, for Y direction shears y_shear is measured
     * relative to the X axis. Empty triangles left over from shearing the image
     * are filled with the background color.
     *
     * @param mixed
     * @param float
     * @param float
     * @return bool
     **/
    function shearImage($background, $x_shear, $y_shear) {}

    /**
     * Adjusts the contrast of an image with a non-linear sigmoidal contrast
     * algorithm. Increase the contrast of the image using a sigmoidal transfer
     * function without saturating highlights or shadows. Contrast indicates
     * how much to increase the contrast (0 is none; 3 is typical; 20 is
     * pushing it); mid-point indicates where midtones fall in the resultant
     * image (0 is white; 50 is middle-gray; 100 is black). Set sharpen to
     * to increase the image contrast otherwise the contrast is reduced.
     *
     * @param bool
     * @param float
     * @param float
     * @param int
     * @return bool
     **/
    function sigmoidalContrastImage($sharpen, $alpha, $beta, $channel) {}

    /**
     * Simulates a pencil sketch. We convolve the image with a Gaussian operator
     * of the given radius and standard deviation (sigma). For reasonable
     * results, radius should be larger than sigma. Use a radius of 0 and
     * Imagick::sketchImage() selects a suitable radius for you. Angle gives the
     * angle of the blurring motion.
     *
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function sketchImage($radius, $sigma, $angle) {}

    /**
     * Applies a special effect to the image, similar to the effect achieved in
     * a photo darkroom by selectively exposing areas of photo sensitive paper
     * to light. Threshold ranges from 0 to QuantumRange and is a measure of the
     * extent of the solarization.
     *
     * @param int
     * @return bool
     **/
    function solarizeImage($threshold) {}

    /**
     * Splices a solid color into the image.
     *
     * @param int
     * @param int
     * @param int
     * @param int
     * @return bool
     **/
    function spliceImage($width, $height, $x, $y) {}

    /**
     * Special effects method that randomly displaces each pixel in a block
     * defined by the radius parameter.
     *
     * @param float
     * @return bool
     **/
    function spreadImage($radius) {}

    /**
     * Hides a digital watermark within the image. Recover the hidden watermark
     * later to prove that the authenticity of an image. Offset defines the start
     * position within the image to hide the watermark.
     *
     * @param Imagick
     * @param int
     * @return Imagick
     **/
    function steganoImage($watermark_wand, $offset) {}

    /**
     * Composites two images and produces a single image that is the composite
     * of a left and right image of a stereo pair.
     *
     * @param Imagick
     * @return bool
     **/
    function stereoImage($offset_wand) {}

    /**
     * Strips an image of all profiles and comments.
     *
     * @return bool
     **/
    function stripImage() {}

    /**
     * Swirls the pixels about the center of the image, where degrees indicates
     * the sweep of the arc through which each pixel is moved. You get a more
     * dramatic effect as the degrees move from 1 to 360.
     *
     * @param float
     * @return bool
     **/
    function swirlImage($degrees) {}

    /**
     * Repeatedly tiles the texture image across and down the image canvas.
     *
     * @param Imagick
     * @return bool
     **/
    function textureImage($texture_wand) {}

    /**
     * Changes the value of individual pixels based on the intensity of each pixel
     * compared to threshold. The result is a high-contrast, two color image.
     *
     * @param float
     * @param int
     * @return bool
     **/
    function thresholdImage($threshold, $channel) {}

    /**
     * Changes the size of an image to the given dimensions and removes any
     * associated profiles. The goal is to produce small low cost thumbnail
     * images suited for display on the Web. 
     * 
     * If is given as a third parameter then columns and rows parameters
     * are used as maximums for each side. Both sides will be scaled down until
     * the match or are smaller than the parameter given for the side.
     *
     * @param int
     * @param int
     * @param bool
     * @return bool
     **/
    function thumbnailImage($columns, $rows, $fit) {}

    /**
     * Applies a color vector to each pixel in the image. The length of the vector
     * is 0 for black and white and at its maximum for the midtones. The vector
     * weighing function is f(x)=(1-(4.0*((x-0.5)*(x-0.5)))).
     *
     * @param mixed
     * @param mixed
     * @return bool
     **/
    function tintImage($tint, $opacity) {}

    /**
     * A convenience method for setting crop size and the image geometry from strings
     *
     * @param string
     * @param string
     * @return Imagick
     **/
    function transformImage($crop, $geometry) {}

    /**
     * Creates a horizontal mirror image by reflecting the pixels around the
     * central y-axis while rotating them 270-degrees.
     *
     * @return bool
     **/
    function transverseImage() {}

    /**
     * Remove edges that are the background color from the image.
     *
     * @param float
     * @return bool
     **/
    function trimImage($fuzz) {}

    /**
     * Discards all but one of any pixel color.
     *
     * @return bool
     **/
    function uniqueImageColors() {}

    /**
     * Sharpens an image. We convolve the image with a Gaussian operator of the given
     * radius and standard deviation (sigma). For reasonable results, radius should be
     * larger than sigma. Use a radius of 0 and Imagick::UnsharpMaskImage() selects a
     * suitable radius for you.
     *
     * @param float
     * @param float
     * @param float
     * @param float
     * @param int
     * @return bool
     **/
    function unsharpMaskImage($radius, $sigma, $amount, $threshold, $channel) {}

    /**
     * Checks if the current item is valid.
     *
     * @return bool
     **/
    function valid() {}

    /**
     * Adds vignette filter to the image.
     *
     * @param float
     * @param float
     * @param int
     * @param int
     * @return bool
     **/
    function vignetteImage($blackPoint, $whitePoint, $x, $y) {}

    /**
     * Adds wave filter to the image.
     *
     * @param float
     * @param float
     * @return bool
     **/
    function waveImage($amplitude, $length) {}

    /**
     * Is like Imagick::ThresholdImage() but force all pixels above the threshold
     * into white while leaving all pixels below the threshold unchanged.
     *
     * @param mixed
     * @return bool
     **/
    function whiteThresholdImage($threshold) {}

    /**
     * Writes an image to the specified filename. If the filename parameter is NULL,
     * the image is written to the filename set by Imagick::ReadImage() or
     * Imagick::SetImageFilename().
     *
     * @param string
     * @return bool
     **/
    function writeImage($filename) {}

    /**
     * Writes an image or image sequence.
     *
     * @param string
     * @param bool
     * @return bool
     **/
    function writeImages($filename, $adjoin) {}

}
class ImagickDraw {
    /**
     * Adjusts the current affine transformation matrix with the specified affine
     * transformation matrix.
     *
     * @param array
     * @return bool
     **/
    function affine($affine) {}

    /**
     * Draws text on the image.
     *
     * @param float
     * @param float
     * @param string
     * @return bool
     **/
    function annotation($x, $y, $text) {}

    /**
     * Draws an arc falling within a specified bounding rectangle on the image.
     *
     * @param float
     * @param float
     * @param float
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function arc($sx, $sy, $ex, $ey, $sd, $ed) {}

    /**
     * Draws a bezier curve through a set of points on the image.
     *
     * @param array
     * @return bool
     **/
    function bezier($coordinates) {}

    /**
     * Draws a circle on the image.
     *
     * @param float
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function circle($ox, $oy, $px, $py) {}

    /**
     * Clears the ImagickDraw object of any accumulated commands, and resets the
     * settings it contains to their defaults.
     *
     * @return bool
     **/
    function clear() {}

    /**
     * Draws color on image using the current fill color, starting at specified
     * position, and using specified paint method.
     *
     * @param float
     * @param float
     * @param int
     * @return bool
     **/
    function color($x, $y, $paintMethod) {}

    /**
     * Adds a comment to a vector output stream.
     *
     * @param string
     * @return bool
     **/
    function comment($comment) {}

    /**
     * Composites an image onto the current image, using the specified
     * composition operator, specified position, and at the specified size.
     *
     * @param int
     * @param float
     * @param float
     * @param float
     * @param float
     * @param Imagick
     * @return bool
     **/
    function composite($compose, $x, $y, $width, $height, $compositeWand) {}

    /**
     * The ImagickDraw constructor
     *
     * @return ImagickDraw
     **/
    function __construct() {}

    /**
     * Frees all resources associated with the ImagickDraw object.
     *
     * @return bool
     **/
    function destroy() {}

    /**
     * Draws an ellipse on the image.
     *
     * @param float
     * @param float
     * @param float
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function ellipse($ox, $oy, $rx, $ry, $start, $end) {}

    /**
     * Obtains the current clipping path ID.
     *
     * @return string
     **/
    function getClipPath() {}

    /**
     * Returns the current polygon fill rule to be used by the clipping path.
     *
     * @return int
     **/
    function getClipRule() {}

    /**
     * Returns the interpretation of clip path units.
     *
     * @return int
     **/
    function getClipUnits() {}

    /**
     * Returns the fill color used for drawing filled objects.
     *
     * @return ImagickPixel
     **/
    function getFillColor() {}

    /**
     * Returns the opacity used when drawing using the fill color or fill
     * texture. Fully opaque is 1.0.
     *
     * @return float
     **/
    function getFillOpacity() {}

    /**
     * Returns the fill rule used while drawing polygons.
     *
     * @return int
     **/
    function getFillRule() {}

    /**
     * Returns a string specifying the font used when annotating with text.
     *
     * @return string
     **/
    function getFont() {}

    /**
     * Returns the font family to use when annotating with text.
     *
     * @return string
     **/
    function getFontFamily() {}

    /**
     * Returns the font pointsize used when annotating with text.
     *
     * @return float
     **/
    function getFontSize() {}

    /**
     * Returns the font style used when annotating with text.
     *
     * @return int
     **/
    function getFontStyle() {}

    /**
     * Returns the font weight used when annotating with text.
     *
     * @return int
     **/
    function getFontWeight() {}

    /**
     * Returns the text placement gravity used when annotating with text.
     *
     * @return int
     **/
    function getGravity() {}

    /**
     * Returns the current stroke antialias setting. Stroked outlines are
     * antialiased by default. When antialiasing is disabled stroked pixels are
     * thresholded to determine if the stroke color or underlying canvas color
     * should be used.
     *
     * @return bool
     **/
    function getStrokeAntialias() {}

    /**
     * Returns the color used for stroking object outlines.
     *
     * @param ImagickPixel
     * @return ImagickPixel
     **/
    function getStrokeColor($stroke_color) {}

    /**
     * Returns an array representing the pattern of dashes and gaps used to
     * stroke paths.
     *
     * @return array
     **/
    function getStrokeDashArray() {}

    /**
     * Returns the offset into the dash pattern to start the dash.
     *
     * @return float
     **/
    function getStrokeDashOffset() {}

    /**
     * Returns the shape to be used at the end of open subpaths when they are
     * stroked.
     *
     * @return int
     **/
    function getStrokeLineCap() {}

    /**
     * Returns the shape to be used at the corners of paths (or other vector
     * shapes) when they are stroked.
     *
     * @return int
     **/
    function getStrokeLineJoin() {}

    /**
     * Returns the miter limit. When two line segments meet at a sharp angle and
     * miter joins have been specified for 'lineJoin', it is possible for the
     * miter to extend far beyond the thickness of the line stroking the path.
     * The miterLimit' imposes a limit on the ratio of the miter length to the
     * 'lineWidth'.
     *
     * @return int
     **/
    function getStrokeMiterLimit() {}

    /**
     * Returns the opacity of stroked object outlines.
     *
     * @return float
     **/
    function getStrokeOpacity() {}

    /**
     * Returns the width of the stroke used to draw object outlines.
     *
     * @return float
     **/
    function getStrokeWidth() {}

    /**
     * Returns the alignment applied when annotating with text.
     *
     * @return int
     **/
    function getTextAlignment() {}

    /**
     * Returns the current text antialias setting, which determines whether text
     * is antialiased. Text is antialiased by default.
     *
     * @return bool
     **/
    function getTextAntialias() {}

    /**
     * Returns the decoration applied when annotating with text.
     *
     * @return int
     **/
    function getTextDecoration() {}

    /**
     * Returns a string which specifies the code set used for text annotations.
     *
     * @return string
     **/
    function getTextEncoding() {}

    /**
     * Returns the color of a background rectangle to place under text annotations.
     *
     * @return ImagickPixel
     **/
    function getTextUnderColor() {}

    /**
     * Returns a string which specifies the vector graphics generated by any
     * graphics calls made since the ImagickDraw object was instantiated.
     *
     * @return string
     **/
    function getVectorGraphics() {}

    /**
     * Draws a line on the image using the current stroke color, stroke opacity, and stroke width.
     *
     * @param float
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function line($sx, $sy, $ex, $ey) {}

    /**
     * Paints on the image's opacity channel in order to set effected pixels to
     * transparent. to influence the opacity of pixels.
     *
     * @param float
     * @param float
     * @param int
     * @return bool
     **/
    function matte($x, $y, $paintMethod) {}

    /**
     * Adds a path element to the current path which closes the current subpath
     * by drawing a straight line from the current point to the current subpath's
     * most recent starting point (usually, the most recent moveto point).
     *
     * @return bool
     **/
    function pathClose() {}

    /**
     * Draws a cubic Bezier curve from the current point to (x,y) using (x1,y1)
     * as the control point at the beginning of the curve and (x2,y2) as the
     * control point at the end of the curve using absolute coordinates. At the
     * end of the command, the new current point becomes the final (x,y)
     * coordinate pair used in the polybezier.
     *
     * @param float
     * @param float
     * @param float
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function pathCurveToAbsolute($x1, $y1, $x2, $y2, $x, $y) {}

    /**
     * Draws a quadratic Bezier curve from the current point to (x,y) using
     * (x1,y1) as the control point using absolute coordinates. At the end of the
     * command, the new current point becomes the final (x,y) coordinate pair
     * used in the polybezier.
     *
     * @param float
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function pathCurveToQuadraticBezierAbsolute($x1, $y1, $x, $y) {}

    /**
     * Draws a quadratic Bezier curve from the current point to (x,y) using
     * (x1,y1) as the control point using relative coordinates. At the end of the
     * command, the new current point becomes the final (x,y) coordinate pair
     * used in the polybezier.
     *
     * @param float
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function pathCurveToQuadraticBezierRelative($x1, $y1, $x, $y) {}

    /**
     * Draws a quadratic Bezier curve (using relative coordinates) from the
     * current point to (x,y). The control point is assumed to be the reflection
     * of the control point on the previous command relative to the current point.
     * (If there is no previous command or if the previous command was not a
     * DrawPathCurveToQuadraticBezierAbsolute,
     * DrawPathCurveToQuadraticBezierRelative,
     * DrawPathCurveToQuadraticBezierSmoothAbsolut or
     * DrawPathCurveToQuadraticBezierSmoothRelative, assume the control point is
     * coincident with the current point.). At the end of the command, the new
     * current point becomes the final (x,y) coordinate pair used in the polybezier.
     *
     * @param float
     * @param float
     * @return bool
     **/
    function pathCurveToQuadraticBezierSmoothAbsolute($x, $y) {}

    /**
     * Draws a quadratic Bezier curve (using relative coordinates) from the
     * current point to (x, y). The control point is assumed to be the reflection
     * of the control point on the previous command relative to the current point.
     * (If there is no previous command or if the previous command was not a
     * DrawPathCurveToQuadraticBezierAbsolute, 
     * DrawPathCurveToQuadraticBezierRelative, 
     * DrawPathCurveToQuadraticBezierSmoothAbsolut or 
     * DrawPathCurveToQuadraticBezierSmoothRelative, assume the control point is
     * coincident with the current point). At the end of the command, the new
     * current point becomes the final (x, y) coordinate pair used in the
     * polybezier.
     *
     * @param float
     * @param float
     * @return bool
     **/
    function pathCurveToQuadraticBezierSmoothRelative($x, $y) {}

    /**
     * Draws a cubic Bezier curve from the current point to (x,y) using (x1,y1)
     * as the control point at the beginning of the curve and (x2,y2) as the
     * control point at the end of the curve using relative coordinates. At the
     * end of the command, the new current point becomes the final (x,y) 
     * coordinate pair used in the polybezier.
     *
     * @param float
     * @param float
     * @param float
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function pathCurveToRelative($x1, $y1, $x2, $y2, $x, $y) {}

    /**
     * Draws a cubic Bezier curve from the current point to (x,y) using absolute
     * coordinates. The first control point is assumed to be the reflection of the
     * second control point on the previous command relative to the current point.
     * (If there is no previous command or if the previous command was not an 
     * DrawPathCurveToAbsolute, DrawPathCurveToRelative, 
     * DrawPathCurveToSmoothAbsolute or DrawPathCurveToSmoothRelative, assume the
     * first control point is coincident with the current point.) (x2,y2) is the
     * second control point (i.e., the control point at the end of the curve).
     * At the end of the command, the new current point becomes the final (x,y)
     * coordinate pair used in the polybezier.
     *
     * @param float
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function pathCurveToSmoothAbsolute($x2, $y2, $x, $y) {}

    /**
     * Draws a cubic Bezier curve from the current point to (x,y) using relative
     * coordinates. The first control point is assumed to be the reflection of
     * the second control point on the previous command relative to the current
     * point. (If there is no previous command or if the previous command was not
     * an DrawPathCurveToAbsolute, DrawPathCurveToRelative, 
     * DrawPathCurveToSmoothAbsolute or DrawPathCurveToSmoothRelative, assume the
     * first control point is coincident with the current point.) (x2,y2) is the
     * second control point (i.e., the control point at the end of the curve). At
     * the end of the command, the new current point becomes the final (x,y)
     * coordinate pair used in the polybezier.
     *
     * @param float
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function pathCurveToSmoothRelative($x2, $y2, $x, $y) {}

    /**
     * Draws an elliptical arc from the current point to (x, y) using absolute
     * coordinates. The size and orientation of the ellipse are defined by two
     * radii (rx, ry) and an xAxisRotation, which indicates how the ellipse as
     * a whole is rotated relative to the current coordinate system. The center
     * (cx, cy) of the ellipse is calculated automatically to satisfy the
     * constraints imposed by the other parameters. largeArcFlag and sweepFlag
     * contribute to the automatic calculations and help determine how the arc
     * is drawn. If largeArcFlag is then draw the larger of the available
     * arcs. If sweepFlag is true, then draw the arc matching a clock-wise
     * rotation.
     *
     * @param float
     * @param float
     * @param float
     * @param bool
     * @param bool
     * @param float
     * @param float
     * @return bool
     **/
    function pathEllipticArcAbsolute($rx, $ry, $x_axis_rotation, $large_arc_flag, $sweep_flag, $x, $y) {}

    /**
     * Draws an elliptical arc from the current point to (x, y) using relative
     * coordinates. The size and orientation of the ellipse are defined by two
     * radii (rx, ry) and an xAxisRotation, which indicates how the ellipse as
     * a whole is rotated relative to the current coordinate system. The center
     * (cx, cy) of the ellipse is calculated automatically to satisfy the
     * constraints imposed by the other parameters. largeArcFlag and sweepFlag
     * contribute to the automatic calculations and help determine how the arc
     * is drawn. If largeArcFlag is then draw the larger of the available
     * arcs. If sweepFlag is true, then draw the arc matching a clock-wise
     * rotation.
     *
     * @param float
     * @param float
     * @param float
     * @param bool
     * @param bool
     * @param float
     * @param float
     * @return bool
     **/
    function pathEllipticArcRelative($rx, $ry, $x_axis_rotation, $large_arc_flag, $sweep_flag, $x, $y) {}

    /**
     * Terminates the current path.
     *
     * @return bool
     **/
    function pathFinish() {}

    /**
     * Draws a line path from the current point to the given coordinate using
     * absolute coordinates. The coordinate then becomes the new current point.
     *
     * @param float
     * @param float
     * @return bool
     **/
    function pathLineToAbsolute($x, $y) {}

    /**
     * Draws a horizontal line path from the current point to the target point
     * using absolute coordinates. The target point then becomes the new
     * current point.
     *
     * @param float
     * @return bool
     **/
    function pathLineToHorizontalAbsolute($x) {}

    /**
     * Draws a horizontal line path from the current point to the target point
     * using relative coordinates. The target point then becomes the new
     * current point.
     *
     * @param float
     * @return bool
     **/
    function pathLineToHorizontalRelative($x) {}

    /**
     * Draws a line path from the current point to the given coordinate using
     * relative coordinates. The coordinate then becomes the new current point.
     *
     * @param float
     * @param float
     * @return bool
     **/
    function pathLineToRelative($x, $y) {}

    /**
     * Draws a vertical line path from the current point to the target point using
     * absolute coordinates. The target point then becomes the new current point.
     *
     * @param float
     * @return bool
     **/
    function pathLineToVerticalAbsolute($y) {}

    /**
     * Draws a vertical line path from the current point to the target point using
     * relative coordinates. The target point then becomes the new current point.
     *
     * @param float
     * @return bool
     **/
    function pathLineToVerticalRelative($y) {}

    /**
     * Starts a new sub-path at the given coordinate using absolute coordinates.
     * The current point then becomes the specified coordinate.
     *
     * @param float
     * @param float
     * @return bool
     **/
    function pathMoveToAbsolute($x, $y) {}

    /**
     * Starts a new sub-path at the given coordinate using relative coordinates.
     * The current point then becomes the specified coordinate.
     *
     * @param float
     * @param float
     * @return bool
     **/
    function pathMoveToRelative($x, $y) {}

    /**
     * Declares the start of a path drawing list which is terminated by a matching
     * DrawPathFinish() command. All other DrawPath commands must be enclosed
     * between a and a DrawPathFinish() command. This is because path drawing
     * commands are subordinate commands and they do not function by themselves.
     *
     * @return bool
     **/
    function pathStart() {}

    /**
     * Draws a point using the current stroke color and stroke thickness at the specified coordinates.
     *
     * @param float
     * @param float
     * @return bool
     **/
    function point($x, $y) {}

    /**
     * Draws a polygon using the current stroke, stroke width, and fill color or
     * texture, using the specified array of coordinates.
     *
     * @param array
     * @return bool
     **/
    function polygon($coordinates) {}

    /**
     * Draws a polyline using the current stroke, stroke width, and fill color or
     * texture, using the specified array of coordinates.
     *
     * @param array
     * @return bool
     **/
    function polyline($coordinates) {}

    /**
     * Destroys the current ImagickDraw in the stack, and returns to the
     * previously pushed ImagickDraw. Multiple ImagickDraws may exist. It is an
     * error to attempt to pop more ImagickDraws than have been pushed, and it is
     * proper form to pop all ImagickDraws which have been pushed.
     *
     * @return bool
     **/
    function pop() {}

    /**
     * Terminates a clip path definition.
     *
     * @return bool
     **/
    function popClipPath() {}

    /**
     * Terminates a definition list.
     *
     * @return bool
     **/
    function popDefs() {}

    /**
     * Terminates a pattern definition.
     *
     * @return bool
     **/
    function popPattern() {}

    /**
     * Clones the current ImagickDraw to create a new ImagickDraw, which is then
     * added to the ImagickDraw stack. The original drawing ImagickDraw(s) may be
     * returned to by invoking pop(). The ImagickDraws are stored on a
     * ImagickDraw stack. For every Pop there must have already been an equivalent
     * Push.
     *
     * @return bool
     **/
    function push() {}

    /**
     * Starts a clip path definition which is comprized of any number of drawing
     * commands and terminated by a ImagickDraw::popClipPath() command.
     *
     * @param string
     * @return bool
     **/
    function pushClipPath($clip_mask_id) {}

    /**
     * Indicates that commands up to a terminating ImagickDraw::popDefs()
     * command create named elements (e.g. clip-paths, textures, etc.) which
     * may safely be processed earlier for the sake of efficiency.
     *
     * @return bool
     **/
    function pushDefs() {}

    /**
     * Indicates that subsequent commands up to a DrawPopPattern() command
     * comprise the definition of a named pattern. The pattern space is assigned
     * top left corner coordinates, a width and height, and becomes its own
     * drawing space. Anything which can be drawn may be used in a pattern
     * definition. Named patterns may be used as stroke or brush definitions.
     *
     * @param string
     * @param float
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function pushPattern($pattern_id, $x, $y, $width, $height) {}

    /**
     * Draws a rectangle given two coordinates and using the current stroke,
     * stroke width, and fill settings.
     *
     * @param float
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function rectangle($x1, $y1, $x2, $y2) {}

    /**
     * Renders all preceding drawing commands onto the image.
     *
     * @return bool
     **/
    function render() {}

    /**
     * Applies the specified rotation to the current coordinate space.
     *
     * @param float
     * @return bool
     **/
    function rotate($degrees) {}

    /**
     * Draws a rounted rectangle given two coordinates, x y corner radiuses
     * and using the current stroke, stroke width, and fill settings.
     *
     * @param float
     * @param float
     * @param float
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function roundRectangle($x1, $y1, $x2, $y2, $rx, $ry) {}

    /**
     * Adjusts the scaling factor to apply in the horizontal and vertical
     * directions to the current coordinate space.
     *
     * @param float
     * @param float
     * @return bool
     **/
    function scale($x, $y) {}

    /**
     * Associates a named clipping path with the image. Only the areas drawn on
     * by the clipping path will be modified as long as it remains in effect.
     *
     * @param string
     * @return bool
     **/
    function setClipPath($clip_mask) {}

    /**
     * Set the polygon fill rule to be used by the clipping path.
     *
     * @param int
     * @return bool
     **/
    function setClipRule($fill_rule) {}

    /**
     * Sets the interpretation of clip path units.
     *
     * @param int
     * @return bool
     **/
    function setClipUnits($clip_units) {}

    /**
     * Sets the opacity to use when drawing using the fill color or fill texture.
     * Fully opaque is 1.0.
     *
     * @param float
     * @return bool
     **/
    function setFillAlpha($opacity) {}

    /**
     * Sets the fill color to be used for drawing filled objects.
     *
     * @param ImagickPixel
     * @return bool
     **/
    function setFillColor($fill_pixel) {}

    /**
     * Sets the opacity to use when drawing using the fill color or fill texture.
     * Fully opaque is 1.0.
     *
     * @param float
     * @return bool
     **/
    function setFillOpacity($fillOpacity) {}

    /**
     * Sets the URL to use as a fill pattern for filling objects. Only local URLs
     * ("#identifier") are supported at this time. These local URLs are normally
     * created by defining a named fill pattern with DrawPushPattern/DrawPopPattern.
     *
     * @param string
     * @return bool
     **/
    function setFillPatternURL($fill_url) {}

    /**
     * Sets the fill rule to use while drawing polygons.
     *
     * @param int
     * @return bool
     **/
    function setFillRule($fill_rule) {}

    /**
     * Sets the fully-specified font to use when annotating with text.
     *
     * @param string
     * @return bool
     **/
    function setFont($font_name) {}

    /**
     * Sets the font family to use when annotating with text.
     *
     * @param string
     * @return bool
     **/
    function setFontFamily($font_family) {}

    /**
     * Sets the font pointsize to use when annotating with text.
     *
     * @param float
     * @return bool
     **/
    function setFontSize($pointsize) {}

    /**
     * Sets the font stretch to use when annotating with text. The AnyStretch
     * enumeration acts as a wild-card "don't care" option.
     *
     * @param int
     * @return bool
     **/
    function setFontStretch($fontStretch) {}

    /**
     * Sets the font style to use when annotating with text. The AnyStyle
     * enumeration acts as a wild-card "don't care" option.
     *
     * @param int
     * @return bool
     **/
    function setFontStyle($style) {}

    /**
     * Sets the font weight to use when annotating with text.
     *
     * @param int
     * @return bool
     **/
    function setFontWeight($font_weight) {}

    /**
     * Sets the text placement gravity to use when annotating with text.
     *
     * @param int
     * @return bool
     **/
    function setGravity($gravity) {}

    /**
     * Specifies the opacity of stroked object outlines.
     *
     * @param float
     * @return bool
     **/
    function setStrokeAlpha($opacity) {}

    /**
     * Controls whether stroked outlines are antialiased. Stroked outlines are
     * antialiased by default. When antialiasing is disabled stroked pixels are
     * thresholded to determine if the stroke color or underlying canvas color
     * should be used.
     *
     * @param bool
     * @return bool
     **/
    function setStrokeAntialias($stroke_antialias) {}

    /**
     * Sets the color used for stroking object outlines.
     *
     * @param ImagickPixel
     * @return bool
     **/
    function setStrokeColor($stroke_pixel) {}

    /**
     * Specifies the pattern of dashes and gaps used to stroke paths. The
     * strokeDashArray represents an array of numbers that specify the lengths of
     * alternating dashes and gaps in pixels. If an odd number of values is
     * provided, then the list of values is repeated to yield an even number of
     * values. To remove an existing dash array, pass a zero number_elements
     * argument and null dash_array. A typical strokeDashArray_ array might
     * contain the members 5 3 2.
     *
     * @param array
     * @return bool
     **/
    function setStrokeDashArray($dashArray) {}

    /**
     * Specifies the offset into the dash pattern to start the dash.
     *
     * @param float
     * @return bool
     **/
    function setStrokeDashOffset($dash_offset) {}

    /**
     * Specifies the shape to be used at the end of open subpaths when they
     * are stroked.
     *
     * @param int
     * @return bool
     **/
    function setStrokeLineCap($linecap) {}

    /**
     * Specifies the shape to be used at the corners of paths (or other vector 
     * shapes) when they are stroked.
     *
     * @param int
     * @return bool
     **/
    function setStrokeLineJoin($linejoin) {}

    /**
     * Specifies the miter limit. When two line segments meet at a sharp angle
     * and miter joins have been specified for 'lineJoin', it is possible for
     * the miter to extend far beyond the thickness of the line stroking the 
     * path. The miterLimit' imposes a limit on the ratio of the miter length to
     * the 'lineWidth'.
     *
     * @param int
     * @return bool
     **/
    function setStrokeMiterLimit($miterlimit) {}

    /**
     * Specifies the opacity of stroked object outlines.
     *
     * @param float
     * @return bool
     **/
    function setStrokeOpacity($stroke_opacity) {}

    /**
     * Sets the pattern used for stroking object outlines.
     *
     * @param string
     * @return bool
     **/
    function setStrokePatternURL($stroke_url) {}

    /**
     * Sets the width of the stroke used to draw object outlines.
     *
     * @param float
     * @return bool
     **/
    function setStrokeWidth($stroke_width) {}

    /**
     * Specifies a text alignment to be applied when annotating with text.
     *
     * @param int
     * @return bool
     **/
    function setTextAlignment($alignment) {}

    /**
     * Controls whether text is antialiased. Text is antialiased by default.
     *
     * @param bool
     * @return bool
     **/
    function setTextAntialias($antiAlias) {}

    /**
     * Specifies a decoration to be applied when annotating with text.
     *
     * @param int
     * @return bool
     **/
    function setTextDecoration($decoration) {}

    /**
     * Specifies specifies the code set to use for text annotations. The only
     * character encoding which may be specified at this time is "UTF-8" for
     * representing Unicode as a sequence of bytes. Specify an empty string to
     * set text encoding to the system's default. Successful text annotation
     * using Unicode may require fonts designed to support Unicode.
     *
     * @param string
     * @return bool
     **/
    function setTextEncoding($encoding) {}

    /**
     * Specifies the color of a background rectangle to place under text annotations.
     *
     * @param ImagickPixel
     * @return bool
     **/
    function setTextUnderColor($under_color) {}

    /**
     * Sets the vector graphics associated with the specified ImagickDraw
     * object. Use this method with ImagickDraw::getVectorGraphics() as a method
     * to persist the vector graphics state.
     *
     * @param string
     * @return bool
     **/
    function setVectorGraphics($xml) {}

    /**
     * Sets the overall canvas size to be recorded with the drawing vector data.
     * Usually this will be specified using the same size as the canvas image.
     * When the vector data is saved to SVG or MVG formats, the viewbox is use to
     * specify the size of the canvas image that a viewer will render the vector
     * data on.
     *
     * @param int
     * @param int
     * @param int
     * @param int
     * @return bool
     **/
    function setViewbox($x1, $y1, $x2, $y2) {}

    /**
     * Skews the current coordinate system in the horizontal direction.
     *
     * @param float
     * @return bool
     **/
    function skewX($degrees) {}

    /**
     * Skews the current coordinate system in the vertical direction.
     *
     * @param float
     * @return bool
     **/
    function skewY($degrees) {}

    /**
     * Applies a translation to the current coordinate system which moves the
     * coordinate system origin to the specified coordinate.
     *
     * @param float
     * @param float
     * @return bool
     **/
    function translate($x, $y) {}

}
class ImagickPixel {
    /**
     * Clears the ImagickPixel object, leaving it in a fresh state. This also
     * unsets any color associated with the object.
     *
     * @return bool
     **/
    function clear() {}

    /**
     * Constructs an ImagickPixel object. If a color is specified, the object is
     * constructed and then initialised with that color before being returned.
     *
     * @param string
     * @return ImagickPixel
     **/
    function __construct($color) {}

    /**
     * Deallocates any resources used by the ImagickPixel object, and unsets any
     * associated color. The object should not be used after the destroy function
     * has been called.
     *
     * @return bool
     **/
    function destroy() {}

    /**
     * Returns the color described by the ImagickPixel object, as an array. If the color has an
     * opacity channel set, this is provided as a fourth value in the list.
     *
     * @param bool
     * @return array
     **/
    function getColor($normalized) {}

    /**
     * Returns the color of the ImagickPixel object as a string.
     *
     * @return string
     **/
    function getColorAsString() {}

    /**
     * Returns the color count associated with this color.
     *
     * @return int
     **/
    function getColorCount() {}

    /**
     * Retrieves the value of the color channel specified, as a floating-point
     * number between 0 and 1.
     *
     * @param int
     * @return float
     **/
    function getColorValue($color) {}

    /**
     * Returns the normalized HSL color described by the ImagickPixel object,
     * with each of the three values as floating point numbers between 0.0
     * and 1.0.
     *
     * @return array
     **/
    function getHSL() {}

    /**
     * Checks the distance between the color described by this ImagickPixel
     * object and that of the provided object, by plotting their RGB values
     * on the color cube. If the distance between the two points is less than
     * the fuzz value given, the colors are similar.
     *
     * @param ImagickPixel
     * @param float
     * @return bool
     **/
    function isSimilar($color, $fuzz) {}

    /**
     * Sets the color described by the ImagickPixel object, with a string
     * (e.g. "blue", "#0000ff", "rgb(0,0,255)", "cmyk(100,100,100,10)", etc.).
     *
     * @param string
     * @return bool
     **/
    function setColor($color) {}

    /**
     * Sets the value of the specified channel of this object to the provided
     * value, which should be between 0 and 1. This function can be used to
     * provide an opacity channel to an ImagickPixel object.
     *
     * @param int
     * @param float
     * @return bool
     **/
    function setColorValue($color, $value) {}

    /**
     * Sets the color described by the ImagickPixel object using normalized
     * values for hue, saturation and luminosity.
     *
     * @param float
     * @param float
     * @param float
     * @return bool
     **/
    function setHSL($hue, $saturation, $luminosity) {}

}
class ImagickPixelIterator {
    /**
     * Clear resources associated with a PixelIterator.
     *
     * @return bool
     **/
    function clear() {}

    /**
     * The ImagickPixelIterator constructor
     *
     * @param Imagick
     * @return ImagickPixelIterator
     **/
    function __construct($wand) {}

    /**
     * Deallocates resources associated with a PixelIterator.
     *
     * @return bool
     **/
    function destroy() {}

    /**
     * Returns the current row as an array of ImagickPixel objects from the pixel iterator.
     *
     * @return array
     **/
    function getCurrentIteratorRow() {}

    /**
     * Returns the current pixel iterator row.
     *
     * @return int
     **/
    function getIteratorRow() {}

    /**
     * Returns the next row as an array of pixel wands from the pixel iterator.
     *
     * @return array
     **/
    function getNextIteratorRow() {}

    /**
     * Returns the previous row as an array of pixel wands from the pixel iterator.
     *
     * @return array
     **/
    function getPreviousIteratorRow() {}

    /**
     * Returns a new pixel iterator.
     *
     * @param Imagick
     * @return bool
     **/
    function newPixelIterator($wand) {}

    /**
     * Returns a new pixel iterator.
     *
     * @param Imagick
     * @param int
     * @param int
     * @param int
     * @param int
     * @return bool
     **/
    function newPixelRegionIterator($wand, $x, $y, $columns, $rows) {}

    /**
     * Resets the pixel iterator. Use it in conjunction with
     * ImagickPixelIterator::getNextIteratorRow() to iterate over all the pixels
     * in a pixel container.
     *
     * @return bool
     **/
    function resetIterator() {}

    /**
     * Sets the pixel iterator to the first pixel row.
     *
     * @return bool
     **/
    function setIteratorFirstRow() {}

    /**
     * Sets the pixel iterator to the last pixel row.
     *
     * @return bool
     **/
    function setIteratorLastRow() {}

    /**
     * Set the pixel iterator row.
     *
     * @param int
     * @return bool
     **/
    function setIteratorRow($row) {}

    /**
     * Syncs the pixel iterator.
     *
     * @return bool
     **/
    function syncIterator() {}

}
class Collator {
    /**
     * Object oriented style
     *
     * @param array
     * @param integer
     * @return bool
     **/
    function asort($arr, $sort_flag) {}

    /**
     * Object oriented style
     *
     * @param string
     * @param string
     * @return integer
     **/
    function compare($str1, $str2) {}

    /**
     * Object oriented style
     *
     * @param string
     * @return Collator
     **/
    function create($locale) {}

    /**
     * Object oriented style
     *
     * @param integer
     * @return integer
     **/
    function getAttribute($attr) {}

    /**
     * Object oriented style
     *
     * @return integer
     **/
    function getErrorCode() {}

    /**
     * Object oriented style
     *
     * @return string
     **/
    function getErrorMessage() {}

    /**
     * Object oriented style
     *
     * @param integer
     * @return string
     **/
    function getLocale($type) {}

    /**
     * Object oriented style
     *
     * @return integer
     **/
    function getStrength() {}

    /**
     * Object oriented style
     *
     * @param integer
     * @param integer
     * @return bool
     **/
    function setAttribute($attr, $val) {}

    /**
     * Object oriented style
     *
     * @param integer
     * @return bool
     **/
    function setStrength($strength) {}

    /**
     * Object oriented style
     *
     * @param array
     * @return bool
     **/
    function sortWithSortKeys($arr) {}

    /**
     * Object oriented style
     *
     * @param array
     * @param integer
     * @return bool
     **/
    function sort($arr, $sort_flag) {}

}
class IntlDateFormatter {
    /**
     * Object oriented style
     *
     * @param string
     * @param integer
     * @param integer
     * @param string
     * @param integer
     * @param string
     * @return IntlDateFormatter
     **/
    function create($locale, $datetype, $timetype, $timezone, $calendar, $pattern) {}

    /**
     * Object oriented style
     *
     * @param mixed
     * @return string
     **/
    function format($value) {}

    /**
     * Object oriented style
     *
     * @return integer
     **/
    function getCalendar() {}

    /**
     * Object oriented style
     *
     * @return integer
     **/
    function getDateType() {}

    /**
     * Object oriented style
     *
     * @return integer
     **/
    function getErrorCode() {}

    /**
     * Object oriented style
     *
     * @return string
     **/
    function getErrorMessage() {}

    /**
     * Object oriented style
     *
     * @param integer
     * @return string
     **/
    function getLocale($which) {}

    /**
     * Object oriented style
     *
     * @return string
     **/
    function getPattern() {}

    /**
     * Object oriented style
     *
     * @return integer
     **/
    function getTimeType() {}

    /**
     * Object oriented style
     *
     * @return string
     **/
    function getTimeZoneId() {}

    /**
     * Object oriented style
     *
     * @return boolean
     **/
    function isLenient() {}

    /**
     * Object oriented style
     *
     * @param string
     * @param integer
     * @return array
     **/
    function localtime($value, $position) {}

    /**
     * Object oriented style
     *
     * @param string
     * @param integer
     * @return integer
     **/
    function parse($value, $position) {}

    /**
     * Object oriented style
     *
     * @param integer
     * @return boolean
     **/
    function setCalendar($which) {}

    /**
     * Object oriented style
     *
     * @param boolean
     * @return boolean
     **/
    function setLenient($lenient) {}

    /**
     * Object oriented style
     *
     * @param string
     * @return boolean
     **/
    function setPattern($pattern) {}

    /**
     * Object oriented style
     *
     * @param string
     * @return boolean
     **/
    function setTimeZoneId($zone) {}

}
class Locale {
    /**
     * Object oriented style
     *
     * @param string
     * @return string
     **/
    function acceptFromHttp($header) {}

    /**
     * Object oriented style
     *
     * @param array
     * @return string
     **/
    function composeLocale($subtags) {}

    /**
     * Object oriented style
     *
     * @param string
     * @param string
     * @return boolean
     **/
    function filterMatches($langtag, $locale) {}

    /**
     * Object oriented style
     *
     * @param string
     * @return array
     **/
    function getAllVariants($locale) {}

    /**
     * Object oriented style
     *
     * @return string
     **/
    function getDefault() {}

    /**
     * Object oriented style
     *
     * @param string
     * @param string
     * @return string
     **/
    function getDisplayLanguage($locale, $in_locale) {}

    /**
     * Object oriented style
     *
     * @param string
     * @param string
     * @return string
     **/
    function getDisplayName($locale, $in_locale) {}

    /**
     * Object oriented style
     *
     * @param string
     * @param string
     * @return string
     **/
    function getDisplayRegion($locale, $in_locale) {}

    /**
     * Object oriented style
     *
     * @param string
     * @param string
     * @return string
     **/
    function getDisplayScript($locale, $in_locale) {}

    /**
     * Object oriented style
     *
     * @param string
     * @param string
     * @return string
     **/
    function getDisplayVariant($locale, $in_locale) {}

    /**
     * Object oriented style
     *
     * @param string
     * @return array
     **/
    function getKeywords($locale) {}

    /**
     * Object oriented style
     *
     * @param string
     * @return string
     **/
    function getPrimaryLanguage($locale) {}

    /**
     * Object oriented style
     *
     * @param string
     * @return string
     **/
    function getRegion($locale) {}

    /**
     * Object oriented style
     *
     * @param string
     * @return string
     **/
    function getScript($locale) {}

    /**
     * Object oriented style
     *
     * @param array
     * @param string
     * @param string
     * @return string
     **/
    function lookup($langtag, $locale, $default) {}

    /**
     * Object oriented style
     *
     * @param string
     * @return array
     **/
    function parseLocale($locale) {}

    /**
     * Object oriented style
     *
     * @param string
     * @return boolean
     **/
    function setDefault($locale) {}

}
class MessageFormatter {
    /**
     * Object oriented style (method)
     *
     * @param string
     * @param string
     * @return MessageFormatter
     **/
    function create($locale, $pattern) {}

    /**
     * Object oriented style
     *
     * @param string
     * @param string
     * @param array
     * @return string
     **/
    function formatMessage($locale, $pattern, $args) {}

    /**
     * Object oriented style
     *
     * @param array
     * @return string
     **/
    function format($args) {}

    /**
     * Object oriented style
     *
     * @return integer
     **/
    function getErrorCode() {}

    /**
     * Object oriented style
     *
     * @return string
     **/
    function getErrorMessage() {}

    /**
     * Object oriented style
     *
     * @return string
     **/
    function getLocale() {}

    /**
     * Object oriented style
     *
     * @return string
     **/
    function getPattern() {}

    /**
     * Object oriented style
     *
     * @param string
     * @param string
     * @return array
     **/
    function parseMessage($locale, $value) {}

    /**
     * Object oriented style
     *
     * @param string
     * @return array
     **/
    function parse($value) {}

    /**
     * Object oriented style
     *
     * @param string
     * @return boolean
     **/
    function setPattern($pattern) {}

}
class Normalizer {
    /**
     * Object oriented style
     *
     * @param string
     * @param string
     * @return boolean
     **/
    function isNormalized($input, $form) {}

    /**
     * Object oriented style
     *
     * @param string
     * @param string
     * @return string
     **/
    function normalize($input, $form) {}

}
class NumberFormatter {
    /**
     * Object oriented style (method)
     *
     * @param string
     * @param integer
     * @param string
     * @return NumberFormatter
     **/
    function create($locale, $style, $pattern) {}

    /**
     * Object oriented style
     *
     * @param double
     * @param string
     * @return string
     **/
    function formatCurrency($value, $currency) {}

    /**
     * Object oriented style
     *
     * @param number
     * @param integer
     * @return string
     **/
    function format($value, $type) {}

    /**
     * Object oriented style
     *
     * @param integer
     * @return integer
     **/
    function getAttribute($attr) {}

    /**
     * Object oriented style
     *
     * @return integer
     **/
    function getErrorCode() {}

    /**
     * Object oriented style
     *
     * @return string
     **/
    function getErrorMessage() {}

    /**
     * Object oriented style
     *
     * @param integer
     * @return string
     **/
    function getLocale($type) {}

    /**
     * Object oriented style
     *
     * @return string
     **/
    function getPattern() {}

    /**
     * Object oriented style
     *
     * @param integer
     * @return string
     **/
    function getSymbol($attr) {}

    /**
     * Object oriented style
     *
     * @param integer
     * @return string
     **/
    function getTextAttribute($attr) {}

    /**
     * Object oriented style
     *
     * @param string
     * @param string
     * @param integer
     * @return double
     **/
    function parseCurrency($value, $currency, $position) {}

    /**
     * Object oriented style
     *
     * @param string
     * @param integer
     * @param integer
     * @return mixed
     **/
    function parse($value, $type, $position) {}

    /**
     * Object oriented style
     *
     * @param integer
     * @param integer
     * @return bool
     **/
    function setAttribute($attr, $value) {}

    /**
     * Object oriented style
     *
     * @param string
     * @return bool
     **/
    function setPattern($pattern) {}

    /**
     * Object oriented style
     *
     * @param integer
     * @param string
     * @return bool
     **/
    function setSymbol($attr, $value) {}

    /**
     * Object oriented style
     *
     * @param integer
     * @param string
     * @return bool
     **/
    function setTextAttribute($attr, $value) {}

}
class Memcache {
    /**
     * Memcache::add stores variable
     * var with key only if such 
     * key doesn't exist at the server yet.
     * Also you can use memcache_add function.
     *
     * @param string
     * @param mixed
     * @param int
     * @param int
     * @return bool
     **/
    function add($key, $var, $flag, $expire) {}

    /**
     * Memcache::addServer adds a server to the connection 
     * pool. The connection, which was opened using Memcache::addServer 
     * will be automatically closed at the end of script execution, you can also close it 
     * manually with Memcache::close. 
     * You can also use the memcache_add_server function.
     *
     * @param string
     * @param int
     * @param bool
     * @param int
     * @param int
     * @param int
     * @param bool
     * @param callback
     * @return bool
     **/
    function addServer($host, $port, $persistent, $weight, $timeout, $retry_interval, $status, $failure_callback) {}

    /**
     * Memcache::close closes connection to memcached
     * server. This function doesn't close persistent connections, which are
     * closed only during web-server shutdown/restart.
     * Also you can use memcache_close function.
     *
     * @return bool
     **/
    function close() {}

    /**
     * Memcache::connect establishes a connection to the
     * memcached server.
     * The connection, which was opened using
     * Memcache::connect will be automatically closed at the
     * end of script execution. Also you can close it with
     * Memcache::close.
     * Also you can use memcache_connect function.
     *
     * @param string
     * @param int
     * @param int
     * @return bool
     **/
    function connect($host, $port, $timeout) {}

    /**
     * Memcache::decrement decrements value of the 
     * item by value. Similarly to 
     * Memcache::increment, current value of the item is
     * being converted to numerical and after that value
     * is substracted. 
     * 
     * 
     * New item's value will not be less than zero.
     * 
     * 
     * 
     * 
     * Do not use Memcache::decrement with item, which was
     * stored compressed, because consequent call to 
     * Memcache::get will fail.
     * 
     * 
     * Memcache::decrement does not
     * create an item if it didn't exist.
     * Also you can use memcache_decrement function.
     *
     * @param string
     * @param int
     * @return int
     **/
    function decrement($key, $value) {}

    /**
     * Memcache::delete deletes item with the 
     * key. If parameter timeout
     * is specified, the item will expire after
     * timeout seconds.
     * Also you can use memcache_delete function.
     *
     * @param string
     * @param int
     * @return bool
     **/
    function delete($key, $timeout) {}

    /**
     * Memcache::flush immediately invalidates all 
     * existing items. Memcache::flush doesn't
     * actually free any resources, it only marks all the items as expired, so
     * occupied memory will be overwritten by new items.
     * Also you can use memcache_flush function.
     *
     * @return bool
     **/
    function flush() {}

    /**
     * Memcache::get returns previously stored data if
     * an item with such key exists on the server at this
     * moment.
     *
     * @param string
     * @param int
     * @return string
     **/
    function get($key, $flags) {}

    /**
     * Memcache::getExtendedStats returns a two-dimensional
     * associative array with server statistics. Array keys correspond to 
     * host:port of server and values contain the individual server statistics.
     * A failed server will have its corresponding entry set to .
     * You can also use the memcache_get_extended_stats function.
     *
     * @param string
     * @param int
     * @param int
     * @return array
     **/
    function getExtendedStats($type, $slabid, $limit) {}

    /**
     * Memcache::getServerStatus returns a the servers 
     * online/offline status. You can also use memcache_get_server_status 
     * function.
     *
     * @param string
     * @param int
     * @return int
     **/
    function getServerStatus($host, $port) {}

    /**
     * Memcache::getStats returns an associative array 
     * with server's statistics. Array keys correspond to stats parameters and 
     * values to parameter's values.
     * Also you can use memcache_get_stats function.
     *
     * @param string
     * @param int
     * @param int
     * @return array
     **/
    function getStats($type, $slabid, $limit) {}

    /**
     * Memcache::getVersion returns a string with server's
     * version number.
     * Also you can use memcache_get_version function.
     *
     * @return string
     **/
    function getVersion() {}

    /**
     * Memcache::increment increments value of the item on
     * the specified value. If item with key 
     * key was not numeric and cannot be converted to
     * number, it will change it's value to value.
     * Memcache::increment does not
     * create an item if it didn't exist.
     * 
     * 
     * Do not use Memcache::increment with item, which was 
     * stored compressed, because consequent call to 
     * Memcache::get will fail.
     * 
     * 
     * Also you can use memcache_increment function.
     *
     * @param string
     * @param int
     * @return int
     **/
    function increment($key, $value) {}

    /**
     * Memcache::pconnect is similar to
     * Memcache::connect with the difference, that 
     * the connection it establishes is persistent.
     * This connection is not closed after the end of script execution and 
     * by Memcache::close function.
     * Also you can use memcache_pconnect function.
     *
     * @param string
     * @param int
     * @param int
     * @return bool
     **/
    function pconnect($host, $port, $timeout) {}

    /**
     * Memcache::replace should be used to replace value of
     * existing item with key. In case if item with such
     * key doesn't exists, Memcache::replace returns
     * . For the rest Memcache::replace behaves
     * similarly to Memcache::set.
     * Also you can use memcache_replace function.
     *
     * @param string
     * @param mixed
     * @param int
     * @param int
     * @return bool
     **/
    function replace($key, $var, $flag, $expire) {}

    /**
     * Memcache::set stores an item 
     * var with key on the 
     * memcached server. Parameter expire is expiration 
     * time in seconds. If it's 0, the item never expires (but memcached server 
     * doesn't guarantee this item to be stored all the time, it could be deleted 
     * from the cache to make place for other items).
     * You can use MEMCACHE_COMPRESSED constant as 
     * flag value if you want to use on-the-fly
     * compression (uses zlib).
     * 
     * 
     * Remember that resource variables (i.e. file and connection descriptors)
     * cannot be stored in the cache, because they cannot be adequately
     * represented in serialized state.
     * 
     * 
     * Also you can use memcache_set function.
     *
     * @param string
     * @param mixed
     * @param int
     * @param int
     * @return bool
     **/
    function set($key, $var, $flag, $expire) {}

    /**
     * Memcache::setCompressThreshold enables automatic
     * compression of large values.
     * You can also use the memcache_set_compress_threshold function.
     *
     * @param int
     * @param float
     * @return bool
     **/
    function setCompressThreshold($threshold, $min_savings) {}

    /**
     * Memcache::setServerParams changes server parameters at runtime.
     * You can also use the memcache_set_server_params function.
     *
     * @param string
     * @param int
     * @param int
     * @param int
     * @param bool
     * @param callback
     * @return bool
     **/
    function setServerParams($host, $port, $timeout, $retry_interval, $status, $failure_callback) {}

}
class SWFAction {
    /**
     * Creates a new SWFAction and compiles the given script
     * in it.
     *
     * @param string
     * @return SWFAction
     **/
    function __construct($script) {}

}
class SWFBitmap {
    /**
     * Creates the new SWFBitmap object from the given
     * file.
     *
     * @param mixed
     * @param mixed
     * @return SWFBitmap
     **/
    function __construct($file, $alphafile) {}

    /**
     * Returns the bitmap's height.
     *
     * @return float
     **/
    function getHeight() {}

    /**
     * Returns the bitmap's width.
     *
     * @return float
     **/
    function getWidth() {}

}
class SWFButton {
    /**
     * Adds the given action to the button for the given
     * conditions.
     *
     * @param SWFAction
     * @param int
     * @return void
     **/
    function addAction($action, $flags) {}

    /**
     * @param SWFSound
     * @param int
     * @return SWFSoundInstance
     **/
    function addASound($sound, $flags) {}

    /**
     * Adds the given shape to the button.
     *
     * @param SWFShape
     * @param int
     * @return void
     **/
    function addShape($shape, $flags) {}

    /**
     * Creates a new Button.
     *
     * @return SWFButton
     **/
    function __construct() {}

    /**
     * Sets the action to be performed when the button is clicked.
     *
     * @param SWFAction
     * @return void
     **/
    function setAction($action) {}

    /**
     * swfbutton-&gt;setdown alias for addShape(shape, SWFBUTTON_DOWN).
     *
     * @param SWFShape
     * @return void
     **/
    function setDown($shape) {}

    /**
     * swfbutton-&gt;sethit alias for addShape(shape, SWFBUTTON_HIT).
     *
     * @param SWFShape
     * @return void
     **/
    function setHit($shape) {}

    /**
     * @param int
     * @return void
     **/
    function setMenu($flag) {}

    /**
     * swfbutton-&gt;setover alias for addShape(shape, SWFBUTTON_OVER).
     *
     * @param SWFShape
     * @return void
     **/
    function setOver($shape) {}

    /**
     * swfbutton-&gt;setup alias for addShape(shape, SWFBUTTON_UP).
     *
     * @param SWFShape
     * @return void
     **/
    function setUp($shape) {}

}
class SWFDisplayItem {
    /**
     * @param SWFAction
     * @param int
     * @return void
     **/
    function addAction($action, $flags) {}

    /**
     * swfdisplayitem-&gt;addcolor adds the color to 
     * this item's color transform. The color is given in its RGB form.
     *
     * @param int
     * @param int
     * @param int
     * @param int
     * @return void
     **/
    function addColor($red, $green, $blue, $a) {}

    /**
     * @return void
     **/
    function endMask() {}

    /**
     * @return float
     **/
    function getRot() {}

    /**
     * @return float
     **/
    function getX() {}

    /**
     * @return float
     **/
    function getXScale() {}

    /**
     * @return float
     **/
    function getXSkew() {}

    /**
     * @return float
     **/
    function getY() {}

    /**
     * @return float
     **/
    function getYScale() {}

    /**
     * @return float
     **/
    function getYSkew() {}

    /**
     * swfdisplayitem-&gt;move moves the current object by 
     * (dx,dy) from its
     * current position.
     *
     * @param int
     * @param int
     * @return void
     **/
    function move($dx, $dy) {}

    /**
     * swfdisplayitem-&gt;moveto moves the current object to 
     * (x,y) in global coordinates.
     *
     * @param int
     * @param int
     * @return void
     **/
    function moveTo($x, $y) {}

    /**
     * swfdisplayitem-&gt;multcolor multiplies the item's 
     * color transform by the given values.
     *
     * @param int
     * @param int
     * @param int
     * @param int
     * @return void
     **/
    function multColor($red, $green, $blue, $a) {}

    /**
     * swfdisplayitem-&gt;remove removes this object from
     * the movie's display list.
     *
     * @return void
     **/
    function remove() {}

    /**
     * swfdisplayitem-&gt;rotate rotates the current object
     * by angle degrees from its current rotation.
     *
     * @param float
     * @return void
     **/
    function rotate($angle) {}

    /**
     * swfdisplayitem-&gt;rotateto set the current object
     * rotation to angle degrees in global coordinates.
     *
     * @param float
     * @return void
     **/
    function rotateTo($angle) {}

    /**
     * swfdisplayitem-&gt;scale scales the current object by 
     * (dx,dy) from its
     * current size.
     *
     * @param int
     * @param int
     * @return void
     **/
    function scale($dx, $dy) {}

    /**
     * swfdisplayitem-&gt;scaleto scales the current object to 
     * (x,y) in global coordinates.
     *
     * @param int
     * @param int
     * @return void
     **/
    function scaleTo($x, $y) {}

    /**
     * swfdisplayitem-&gt;setdepth sets the object's
     * z-order to depth. Depth defaults to the 
     * order in which instances are created (by adding a shape/text to 
     * a movie)- newer ones are on top of older ones. If two objects are 
     * given the same depth, only the later-defined one can be moved.
     *
     * @param float
     * @return void
     **/
    function setDepth($depth) {}

    /**
     * @param int
     * @return void
     **/
    function setMaskLevel($level) {}

    /**
     * @param float
     * @param float
     * @param float
     * @param float
     * @param float
     * @param float
     * @return void
     **/
    function setMatrix($a, $b, $c, $d, $x, $y) {}

    /**
     * swfdisplayitem-&gt;setname sets the object's name to 
     * name, for targetting with action script. 
     * Only useful on sprites.
     *
     * @param string
     * @return void
     **/
    function setName($name) {}

    /**
     * swfdisplayitem-&gt;setratio sets the object's ratio
     * to ratio. Obviously only useful for morphs.
     *
     * @param float
     * @return void
     **/
    function setRatio($ratio) {}

    /**
     * swfdisplayitem-&gt;skewx adds ddegrees
     * to current x-skew.
     *
     * @param float
     * @return void
     **/
    function skewX($ddegrees) {}

    /**
     * swfdisplayitem-&gt;skewxto sets the
     * x-skew to degrees. For degrees
     * is 1.0, it means a 45-degree forward slant. More is more forward, 
     * less is more backward.
     *
     * @param float
     * @return void
     **/
    function skewXTo($degrees) {}

    /**
     * swfdisplayitem-&gt;skewy adds ddegrees
     * to current y-skew.
     *
     * @param float
     * @return void
     **/
    function skewY($ddegrees) {}

    /**
     * swfdisplayitem-&gt;skewyto sets the
     * y-skew to degrees. For degrees
     * is 1.0, it means a 45-degree forward slant. More is more upward, 
     * less is more downward.
     *
     * @param float
     * @return void
     **/
    function skewYTo($degrees) {}

}
class SWFFill {
    /**
     * Moves the fill origin to the given global coordinates.
     *
     * @param int
     * @param int
     * @return void
     **/
    function moveTo($x, $y) {}

    /**
     * Sets the fill rotation to the given angle.
     *
     * @param float
     * @return void
     **/
    function rotateTo($angle) {}

    /**
     * Sets the fill scale to the given coordinates.
     *
     * @param int
     * @param int
     * @return void
     **/
    function scaleTo($x, $y) {}

    /**
     * Sets the fill x-skew to x.
     *
     * @param float
     * @return void
     **/
    function skewXTo($x) {}

    /**
     * Sets the fill y-skew to y.
     *
     * @param float
     * @return void
     **/
    function skewYTo($y) {}

}
class SWFFont {
    /**
     * If filename is the name of an FDB file 
     * (i.e., it ends in ".fdb"), load the font definition found in said 
     * file. Otherwise, create a browser-defined font reference.
     *
     * @param string
     * @return SWFFont
     **/
    function __construct($filename) {}

    /**
     * @return float
     **/
    function getAscent() {}

    /**
     * @return float
     **/
    function getDescent() {}

    /**
     * @return float
     **/
    function getLeading() {}

    /**
     * @param int
     * @return string
     **/
    function getShape($code) {}

    /**
     * @param string
     * @return float
     **/
    function getUTF8Width($string) {}

    /**
     * swffont-&gt;getwidth returns the string 
     * string's width, using font's default scaling. 
     * You'll probably want to use the swftext version of this method which
     * uses the text object's scale.
     *
     * @param string
     * @return float
     **/
    function getWidth($string) {}

}
class SWFFontChar {
    /**
     * @param string
     * @return void
     **/
    function addChars($char) {}

    /**
     * @param string
     * @return void
     **/
    function addUTF8Chars($char) {}

}
class SWFGradient {
    /**
     * swfgradient-&gt;addentry adds an entry to the gradient list. 
     * ratio is a number between 0 and 1 indicating where in 
     * the gradient this color appears. Thou shalt add entries in order of increasing ratio.
     *
     * @param float
     * @param int
     * @param int
     * @param int
     * @param int
     * @return void
     **/
    function addEntry($ratio, $red, $green, $blue, $a) {}

    /**
     * swfgradient creates a new SWFGradient object.
     *
     * @return SWFGradient
     **/
    function __construct() {}

}
class SWFMorph {
    /**
     * Creates a new SWFMorph object.
     *
     * @return SWFMorph
     **/
    function __construct() {}

    /**
     * Gets the morph's starting shape.
     *
     * @return SWFShape
     **/
    function getShape1() {}

    /**
     * Gets the morph's ending shape.
     *
     * @return SWFShape
     **/
    function getShape2() {}

}
class SWFMovie {
    /**
     * @param SWFFont
     * @return mixed
     **/
    function addFont($font) {}

    /**
     * Adds an SWF object instance to the current movie.
     *
     * @param object
     * @return mixed
     **/
    function add($instance) {}

    /**
     * @param SWFCharacter
     * @param string
     * @return void
     **/
    function addExport($char, $name) {}

    /**
     * Creates a new movie object, representing an SWF movie.
     *
     * @param int
     * @return SWFMovie
     **/
    function __construct($version) {}

    /**
     * @param string
     * @param string
     * @return SWFSprite
     **/
    function importChar($libswf, $name) {}

    /**
     * @param string
     * @param string
     * @return SWFFontChar
     **/
    function importFont($libswf, $name) {}

    /**
     * @param string
     * @return void
     **/
    function labelFrame($label) {}

    /**
     * Moves to the next frame of the animation.
     *
     * @return void
     **/
    function nextFrame() {}

    /**
     * Dumps the SWFMovie.
     *
     * @param int
     * @return int
     **/
    function output($compression) {}

    /**
     * Removes the given object instance from the display
     * list.
     *
     * @param object
     * @return void
     **/
    function remove($instance) {}

    /**
     * Saves the SWF movie to the specified filename.
     *
     * @param string
     * @param int
     * @return int
     **/
    function save($filename, $compression) {}

    /**
     * @param stream
     * @param int
     * @return int
     **/
    function saveToFile($x, $compression) {}

    /**
     * Sets the background color.
     *
     * @param int
     * @param int
     * @param int
     * @return void
     **/
    function setbackground($red, $green, $blue) {}

    /**
     * Sets the movie's dimension to the specified width
     * and height.
     *
     * @param int
     * @param int
     * @return void
     **/
    function setDimension($width, $height) {}

    /**
     * Sets the total number of frames in the animation to the given 
     * number.
     *
     * @param int
     * @return void
     **/
    function setFrames($number) {}

    /**
     * Sets the frame rate to the specified rate.
     *
     * @param int
     * @return void
     **/
    function setRate($rate) {}

    /**
     * @param SWFSound
     * @return SWFSoundInstance
     **/
    function startSound($sound) {}

    /**
     * @param SWFSound
     * @return void
     **/
    function stopSound($sound) {}

    /**
     * Streams the given MP3 file mp3file.
     *
     * @param mixed
     * @param float
     * @return int
     **/
    function streamMP3($mp3file, $skip) {}

    /**
     * @return void
     **/
    function writeExports() {}

}
class SWFPrebuiltClip {
    /**
     * @param string
     * @return SWFPrebuiltClip
     **/
    function __construct($file) {}

}
class SWFShape {
    /**
     * SWFShape-&gt;addFill adds a solid fill to the shape's list 
     * of fill styles. SWFShape-&gt;addFill accepts three different
     * types of arguments.
     *
     * @param int
     * @param int
     * @param int
     * @param int
     * @return SWFFill
     **/
    function addFill($red, $green, $blue, $a) {}

    /**
     * Created a new SWFShape object.
     *
     * @return SWFShape
     **/
    function __construct() {}

    /**
     * @param float
     * @param float
     * @param float
     * @return void
     **/
    function drawArc($r, $startAngle, $endAngle) {}

    /**
     * @param float
     * @return void
     **/
    function drawCircle($r) {}

    /**
     * @param float
     * @param float
     * @param float
     * @param float
     * @param float
     * @param float
     * @return int
     **/
    function drawCubic($bx, $by, $cx, $cy, $dx, $dy) {}

    /**
     * @param float
     * @param float
     * @param float
     * @param float
     * @param float
     * @param float
     * @return int
     **/
    function drawCubicTo($bx, $by, $cx, $cy, $dx, $dy) {}

    /**
     * @param int
     * @param int
     * @param int
     * @param int
     * @param int
     * @param int
     * @return int
     **/
    function drawCurve($controldx, $controldy, $anchordx, $anchordy, $targetdx, $targetdy) {}

    /**
     * @param int
     * @param int
     * @param int
     * @param int
     * @param int
     * @param int
     * @return int
     **/
    function drawCurveTo($controlx, $controly, $anchorx, $anchory, $targetx, $targety) {}

    /**
     * @param SWFFont
     * @param string
     * @param int
     * @return void
     **/
    function drawGlyph($font, $character, $size) {}

    /**
     * @param int
     * @param int
     * @return void
     **/
    function drawLine($dx, $dy) {}

    /**
     * @param int
     * @param int
     * @return void
     **/
    function drawLineTo($x, $y) {}

    /**
     * @param int
     * @param int
     * @return void
     **/
    function movePen($dx, $dy) {}

    /**
     * @param int
     * @param int
     * @return void
     **/
    function movePenTo($x, $y) {}

    /**
     * What this nonsense is about is, every edge segment borders at most two fills. 
     * When rasterizing the object, it's pretty handy to know what those fills are 
     * ahead of time, so the swf format requires these to be specified.
     *
     * @param SWFGradient
     * @return void
     **/
    function setLeftFill($fill) {}

    /**
     * swfshape-&gt;setline sets the shape's line style. 
     * width is the line's width. If width
     * is 0, the line's style is removed (then, all other arguments are ignored).
     * If width &gt; 0, then line's color is set to
     * red, green, blue.
     * Last parameter a is optional.
     *
     * @param SWFShape
     * @return void
     **/
    function setLine($shape) {}

    /**
     * @param SWFGradient
     * @return void
     **/
    function setRightFill($fill) {}

}
class SWFSound {
    /**
     * @param string
     * @param int
     * @return SWFSound
     **/
    function __construct($filename, $flags) {}

}
class SWFSoundInstance {
    /**
     * @param int
     * @return void
     **/
    function loopCount($point) {}

    /**
     * @param int
     * @return void
     **/
    function loopInPoint($point) {}

    /**
     * @param int
     * @return void
     **/
    function loopOutPoint($point) {}

    /**
     * @return void
     **/
    function noMultiple() {}

}
class SWFSprite {
    /**
     * swfsprite-&gt;remove remove a swfshape, a 
     * swfbutton, a swftext, 
     * a swfaction or a swfsprite object
     * from the sprite.
     *
     * @param object
     * @return void
     **/
    function remove($object) {}

    /**
     * swfsprite-&gt;add adds a swfshape, a 
     * swfbutton, a swftext, 
     * a swfaction or a swfsprite object.
     *
     * @param object
     * @return void
     **/
    function add($object) {}

    /**
     * Creates a new SWFSprite object.
     *
     * @return SWFSprite
     **/
    function __construct() {}

    /**
     * @param string
     * @return void
     **/
    function labelFrame($label) {}

    /**
     * swfsprite-&gt;setframes moves to the next frame of 
     * the animation.
     *
     * @return void
     **/
    function nextFrame() {}

    /**
     * swfsprite-&gt;setframes sets the total number of frames 
     * in the animation to numberofframes.
     *
     * @param int
     * @return void
     **/
    function setFrames($number) {}

    /**
     * @param SWFSound
     * @return SWFSoundInstance
     **/
    function startSound($sount) {}

    /**
     * @param SWFSound
     * @return void
     **/
    function stopSound($sount) {}

}
class SWFText {
    /**
     * swftext-&gt;addstring draws the string string
     * at the current pen (cursor) location. Pen is at the baseline of the text; 
     * i.e., ascending text is in the -y direction.
     *
     * @param string
     * @return void
     **/
    function addString($string) {}

    /**
     * @param string
     * @return void
     **/
    function addUTF8String($text) {}

    /**
     * Creates a new SWFText object, fresh for 
     * manipulating.
     *
     * @return void
     **/
    function __construct() {}

    /**
     * @return float
     **/
    function getAscent() {}

    /**
     * @return float
     **/
    function getDescent() {}

    /**
     * @return float
     **/
    function getLeading() {}

    /**
     * @param string
     * @return float
     **/
    function getUTF8Width($string) {}

    /**
     * Returns the rendered width of the string at the
     * text object's current font, scale, and spacing settings.
     *
     * @param string
     * @return float
     **/
    function getWidth($string) {}

    /**
     * swftext-&gt;moveto moves the pen (or cursor, if 
     * that makes more sense) to (x,y)
     * in text object's coordinate space. If either is zero, though, value 
     * in that dimension stays the same. Annoying, should be fixed.
     *
     * @param int
     * @param int
     * @return void
     **/
    function moveTo($x, $y) {}

    /**
     * Changes the current text color.
     *
     * @param int
     * @param int
     * @param int
     * @param int
     * @return void
     **/
    function setColor($red, $green, $blue, $a) {}

    /**
     * swftext-&gt;setfont sets the current font to 
     * font.
     *
     * @param string
     * @return void
     **/
    function setFont($font) {}

    /**
     * swftext-&gt;setheight sets the current font height to 
     * height. Default is 240.
     *
     * @param int
     * @return void
     **/
    function setHeight($height) {}

    /**
     * swftext-&gt;setspacing sets the current font spacing to 
     * spacing. Default is 1.0. 
     * 0 is all of the letters written at the same point. This doesn't really work 
     * that well because it inflates the advance across the letter, doesn't add 
     * the same amount of spacing between the letters. I should try and explain 
     * that better, prolly. Or just fix the damn thing to do constant spacing. 
     * This was really just a way to figure out how letter advances work, 
     * anyway.. So nyah.
     *
     * @param float
     * @return void
     **/
    function setSpacing($spacing) {}

}
class SWFTextField {
    /**
     * @param string
     * @return void
     **/
    function addChars($chars) {}

    /**
     * swftextfield-&gt;setname concatenates the string
     * string to the text field.
     *
     * @param string
     * @return void
     **/
    function addString($string) {}

    /**
     * swftextfield-&gt;align sets the text field alignment
     * to alignement. Valid values for 
     * alignement are : SWFTEXTFIELD_ALIGN_LEFT, 
     * SWFTEXTFIELD_ALIGN_RIGHT, SWFTEXTFIELD_ALIGN_CENTER and 
     * SWFTEXTFIELD_ALIGN_JUSTIFY.
     *
     * @param int
     * @return void
     **/
    function align($alignement) {}

    /**
     * swftextfield creates a new text field object. 
     * Text Fields are less flexible than swftext objects- 
     * they can't be rotated, scaled non-proportionally, or skewed, but they can
     * be used as form entries, and they can use browser-defined fonts.
     *
     * @param int
     * @return SWFTextField
     **/
    function __construct($flags) {}

    /**
     * swftextfield-&gt;setbounds sets the text field width 
     * to width and height to height.
     * If you don't set the bounds yourself, Ming makes a poor guess at what 
     * the bounds are.
     *
     * @param int
     * @param int
     * @return void
     **/
    function setBounds($width, $height) {}

    /**
     * swftextfield-&gt;setcolor sets the color of the text field. 
     * Default is fully opaque black. Color is represented using RGB system.
     *
     * @param int
     * @param int
     * @param int
     * @param int
     * @return void
     **/
    function setColor($red, $green, $blue, $a) {}

    /**
     * swftextfield-&gt;setfont sets the text field font to 
     * the [browser-defined?] font font.
     *
     * @param string
     * @return void
     **/
    function setFont($font) {}

    /**
     * swftextfield-&gt;setheight sets the font height of this text field
     * font to the given height height. Default is 240.
     *
     * @param int
     * @return void
     **/
    function setHeight($height) {}

    /**
     * swftextfield-&gt;setindentation sets the indentation of 
     * the first line in the text field, to width.
     *
     * @param int
     * @return void
     **/
    function setIndentation($width) {}

    /**
     * swftextfield-&gt;setleftmargin sets the left margin width
     * of the text field to width. Default is 0.
     *
     * @param int
     * @return void
     **/
    function setLeftMargin($width) {}

    /**
     * swftextfield-&gt;setlinespacing sets the line spacing
     * of the text field to the height of height. Default is 40.
     *
     * @param int
     * @return void
     **/
    function setLineSpacing($height) {}

    /**
     * swftextfield-&gt;setmargins set both margins at once, 
     * for the man on the go.
     *
     * @param int
     * @param int
     * @return void
     **/
    function setMargins($left, $right) {}

    /**
     * swftextfield-&gt;setname sets the variable name of this
     * text field to name, for form posting and action 
     * scripting purposes.
     *
     * @param string
     * @return void
     **/
    function setName($name) {}

    /**
     * @param float
     * @return void
     **/
    function setPadding($padding) {}

    /**
     * swftextfield-&gt;setrightmargin sets the right margin width
     * of the text field to width. Default is 0.
     *
     * @param int
     * @return void
     **/
    function setRightMargin($width) {}

}
