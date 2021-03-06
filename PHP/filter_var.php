<?php

// Filer_var------//

$email = 'biplob@gmail.com';

if (filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo 'This Email is valid';
}else{
    echo "This Email is not valid";
}


// PHP Filter Funciton-----/

#filter_has_var()	        Checks whether a variable of a specified input type exist
#filter_id()	            Returns the filter ID of a specified filter name
#filter_input()         	Gets an external variable (e.g. from form input) and optionally filters it
#filter_input_array()	    Gets external variables (e.g. from form input) and optionally filters them
#filter_list()	            Returns a list of all supported filter names
#filter_var()	            Filters a variable with a specified filter
#filter_var_array()	        Gets multiple variables and filter them



// Fiter Defalut Constant list-------/

#INPUT_POST	                            POST variables
#INPUT_GET	                            GET variables
#INPUT_COOKIE	                        COOKIE variables
#INPUT_ENV	                            ENV variables
#INPUT_SERVER	                        SERVER variables
#FILTER_DEFAULT	                        Do nothing, optionally strip/encode special characters. Equivalent to FILTER_UNSAFE_RAW
#FILTER_FLAG_NONE	                    Allows no flags
#FILTER_FLAG_ALLOW_OCTAL	            Only for inputs that starts with a zero (0) as octal numbers. This only allows the succeeding digits to be 0-7
#FILTER_FLAG_ALLOW_HEX	                Only for inputs that starts with 0x/0X as hexadecimal numbers. This only allows succeeding characters to be a-fA-F0-9
#FILTER_FLAG_STRIP_LOW	                Strip characters with ASCII value lower than 32
#FILTER_FLAG_STRIP_HIGH	                Strip characters with ASCII value greater than 127
#FILTER_FLAG_ENCODE_LOW	                Encode characters with ASCII value lower than 32
#FILTER_FLAG_ENCODE_HIGH	            Encode characters with ASCII value greater than 127
#FILTER_FLAG_ENCODE_AMP	                Encode &
#FILTER_FLAG_NO_ENCODE_QUOTES	        Do not encode ' and "
#FILTER_FLAG_EMPTY_STRING_NULL	        Not in use
#FILTER_FLAG_ALLOW_FRACTION	            Allows a period (.) as a fractional separator in numbers
#FILTER_FLAG_ALLOW_THOUSAND	            Allows a comma (,) as a thousands separator in numbers
#FILTER_FLAG_ALLOW_SCIENTIFIC	        Allows an e or E for scientific notation in numbers
#FILTER_FLAG_PATH_REQUIRED	            The URL must contain a path part
#FILTER_FLAG_QUERY_REQUIRED	            The URL must contain a query string
#FILTER_FLAG_IPV4	                    Allows the IP address to be in IPv4 format
#FILTER_FLAG_IPV6	                     Allows the IP address to be in IPv6 format
#FILTER_FLAG_NO_RES_RANGE	            Fails validation for the reserved IPv4 ranges: 0.0.0.0/8, 169.254.0.0/16, 127.0.0.0/8 and 240.0.0.0/4, and for the reserved IPv6 ranges: ::1/128, ::/128, ::ffff:0:0/96 and fe80::/10
#FILTER_FLAG_NO_PRIV_RANGE	            Fails validation for the private IPv4 ranges: 10.0.0.0/8, 172.16.0.0/12 and 192.168.0.0/16, and for the IPv6 addresses starting with FD or FC
#FILTER_FLAG_EMAIL_UNICODE	            Allows the local part of the email address to contain Unicode characters
#FILTER_REQUIRE_SCALAR	                The value must be a scalar
#FILTER_REQUIRE_ARRAY	                The value must be an array
#FILTER_FORCE_ARRAY	                    Treats a scalar value as array with the scalar value as only element
#FILTER_NULL_ON_FAILURE	                Return NULL on failure for unrecognized boolean values
#FILTER_VALIDATE_BOOLEAN	            Validates a boolean
#FILTER_VALIDATE_EMAIL	                Validates value as a valid e-mail address
#FILTER_VALIDATE_FLOAT	                Validates value as float
#FILTER_VALIDATE_INT	                Validates value as integer
#FILTER_VALIDATE_IP	                    Validates value as IP address
#FILTER_VALIDATE_MAC	                Validates value as MAC address
#FILTER_VALIDATE_REGEXP	                Validates value against a regular expression
#FILTER_VALIDATE_URL	                Validates value as URL
#FILTER_SANITIZE_EMAIL	                Removes all illegal characters from an e-mail address
#FILTER_SANITIZE_ENCODED	            Removes/Encodes special characters
#FILTER_SANITIZE_MAGIC_QUOTES	        Apply addslashes()
#FILTER_SANITIZE_NUMBER_FLOAT	        Remove all characters, except digits, +- signs, and optionally .,eE
#FILTER_SANITIZE_NUMBER_INT	            Removes all characters except digits and + - signs
#FILTER_SANITIZE_SPECIAL_CHARS	        Removes special characters
#FILTER_SANITIZE_STRING	                Removes tags/special characters from a string
#F#ILTER_SANITIZE_STRIPPED	            Alias of FILTER_SANITIZE_STRING
#FILTER_SANITIZE_URL	                Removes all illegal character from a URL
#FILTER_UNSAFE_RAW	                    Do nothing, optionally strip/encode special characters
#FILTER_CALLBACK	                    Call a user-defined function to filter data
