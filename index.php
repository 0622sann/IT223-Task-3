<!DOCTYPE html>
<html lang="en">
<head>
    <title>TASK 3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container px-5 mt-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h4 class="mb-2"><b>MySQL String Functions</b></h4>
                <div class="table-responsive">
                    <table class="table align-middle mb-0 table-striped">
                        <thead>
                            <tr>
                                <th class="bg-primary">SQL Function</th>
                                <th class="bg-primary">Description</th>
                                <th class="bg-primary">Example Code</th>
                                <th class="bg-primary">Example Output</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ASCII</td>
                                <td>Returns the ASCII value for the specific character.</td>
                                <td><kbd>SELECT customer_name, ASCII(customer_name) AS ascii_value FROM customers</kbd></td>
                                <td><a href="string_functions/ascii_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span> Output</a></td>
                            </tr>
                            <tr>
                                <td>CHAR_LENGTH</td>
                                <td>Returns the length of a string (in characters).</td>
                                <td><kbd>SELECT customer_name, CHAR_LENGTH(customer_name) AS name_length FROM customers;</kbd></td>
                                <td><a href="string_functions/char_length_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>CHARACTER_LENGTH</td>
                                <td>Returns the length of a string (in characters).</td>
                                <td><kbd>SELECT customer_name, CHARACTER_LENGTH(customer_name) AS name_length FROM customers;</kbd></td>
                                <td><a href="string_functions/character_length_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>CONCAT</td>
                                <td>Adds two or more expressions together.</td>
                                <td><kbd>SELECT CONCAT('\"', comic_title, '\"', ' - ₱ ', comic_price) AS comic_price_list FROM comic;</kbd></td>
                                <td><a href="string_functions/concat_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>CONCAT_WS</td>
                                <td>Adds two or more expressions together.</td>
                                <td><kbd>SELECT CONCAT_WS(' - ', comic_title, comic_description) AS Comic List FROM comic;</kbd></td>
                                <td><a href="string_functions/concat_ws_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>FIELD</td>
                                <td>Returns the index position of a value in a list of values.</td>
                                <td><kbd>SELECT genre_name, FIELD(genre_name, 'Romance', 'Mystery', 'Fantasy') AS position FROM genre;</kbd></td>
                                <td><a href="string_functions/field_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>FIND_IN_SET</td>
                                <td>Returns the position of a string within a list of strings.</td>
                                <td><kbd>SELECT genre_name, FIND_IN_SET(genre_name, 'Romance,Mystery,Fantasy') AS position FROM genre;</kbd></td>
                                <td><a href="string_functions/find_in_set_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>FORMAT</td>
                                <td>Formats a number to a format like "#,###,###.##", rounded to a specified number of decimal places.</td>
                                <td><kbd>SELECT comic_title, FORMAT(comic_price, 2) AS formatted_price FROM comic;</kbd></td>
                                <td><a href="string_functions/format_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>INSERT</td>
                                <td>Inserts a string within a string at the specified position and for a certain number of characters.</td>
                                <td><kbd>SELECT comic_title, INSERT(comic_title, 1, 0, '[Comic] ') AS labeled_title FROM comic;</kbd></td>
                                <td><a href="string_functions/insert_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>                     
                            <tr>
                                <td>INSTR</td>
                                <td>Returns the position of the first occurrence of a string in another string.</td>
                                <td><kbd>SELECT comic_title, INSTR(comic_title, 'Romance') AS position FROM comic;</kbd></td>
                                <td><a href="string_functions/instr_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>LCASE</td>
                                <td>Converts a string to lower-case.</td>
                                <td><kbd>SELECT comic_title, LCASE(comic_title) AS lower_case FROM comic;</kbd></td>
                                <td><a href="string_functions/lcase_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>LEFT</td>
                                <td>Extracts a number of characters from a string (starting from left).</td>
                                <td><kbd>SELECT comic_title, LEFT(comic_title, 4) AS short_title FROM comic;</kbd></td>
                                <td><a href="string_functions/left_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>LENGTH</td>
                                <td>Returns the length of a string (in bytes).</td>
                                <td><kbd>SELECT comic_title, LENGTH(comic_title) AS byte_length FROM comic;</kbd></td>
                                <td><a href="string_functions/length_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>LOCATE</td>
                                <td>Returns the position of the first occurrence of a substring in a string.</td>
                                <td><kbd>SELECT comic_title, LOCATE('Man', comic_title) AS position FROM comic;</kbd></td>
                                <td><a href="string_functions/locate_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>LOWER</td>
                                <td>Converts a string to lower-case.</td>
                                <td><kbd>SELECT comic_title, LOWER(comic_title) AS lower_title FROM comic;</kbd></td>
                                <td><a href="string_functions/lower_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>LPAD</td>
                                <td>Left-pads a string with another string, to a certain length.</td>
                                <td><kbd>SELECT comic_title, comic_stock, LPAD(comic_stock, 4, '0') AS padded_stock FROM comic;</kbd></td>
                                <td><a href="string_functions/lpad_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>LTRIM</td>
                                <td>Removes leading spaces from a string.</td>
                                <td><kbd>SELECT comic_title, LTRIM(comic_title) AS trimmed_title FROM comic;</kbd></td>
                                <td><a href="string_functions/ltrim_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>MID</td>
                                <td>Extracts a substring from a string (starting at any position).</td>
                                <td><kbd>SELECT comic_title, MID(comic_title, -3, 3) AS last_three_chars FROM comic;</kbd></td>
                                <td><a href="string_functions/mid_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>POSITION</td>
                                <td>Returns the position of the first occurrence of a substring in a string.</td>
                                <td><kbd>SELECT comic_title, POSITION('Man' IN comic_title) AS position FROM comic;</kbd></td>
                                <td><a href="string_functions/position_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>REPEAT</td>
                                <td>Repeats a string as many times as specified.</td>
                                <td><kbd>SELECT genre_name, REPEAT(genre_name, 2) AS repeated_genre FROM comic;</kbd></td>
                                <td><a href="string_functions/repeat_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>REPLACE</td>
                                <td>Replaces all occurrences of a substring within a string, with a new substring.</td>
                                <td><kbd>SELECT email, REPLACE(email, 'gmail.com', 'dnsc.edu.ph') AS replaced_email FROM customers;</kbd></td>
                                <td><a href="string_functions/replace_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>REVERSE</td>
                                <td>Reverses a string and returns the result.</td>
                                <td><kbd>SELECT comic_title, REVERSE(comic_title) AS reversed_title FROM comic;</kbd></td>
                                <td><a href="string_functions/reverse_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>RIGHT</td>
                                <td>Extracts a number of characters from a string (starting from right).</td>
                                <td><kbd>SELECT comic_title, RIGHT(comic_title, 3) AS last_three_chars FROM comic;</kbd></td>
                                <td><a href="string_functions/right_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>RPAD</td>
                                <td>Right-pads a string with another string, to a certain length</td>
                                <td><kbd>SELECT comic_title, RPAD(comic_title, 15, '!') AS padded_title FROM comic;</kbd></td>
                                <td><a href="string_functions/rpad_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>RTRIM</td>
                                <td>Removes trailing spaces from a string.</td>
                                <td><kbd>SELECT comic_title, RTRIM(CONCAT(comic_title, '   ')) AS trimmed_title FROM comic;</kbd></td>
                                <td><a href="string_functions/rtrim_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>SPACE</td>
                                <td>Returns a string of the specified number of space characters.</td>
                                <td><kbd>SELECT comic_title, CONCAT(comic_title, SPACE(10), comic_description) AS formatted_output FROM comic;</kbd></td>
                                <td><a href="string_functions/space_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>STRCMP</td>
                                <td>Compares two strings.</td>
                                <td><kbd>SELECT genre_name, STRCMP(genre_name, 'Fantasy') AS comparison_result FROM genre;</kbd></td>
                                <td><a href="string_functions/strcmp_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>SUBSTR</td>
                                <td>Extracts a substring from a string (starting at any position).</td>
                                <td><kbd>SELECT comic_title, SUBSTR(comic_title, 1, 3) AS short_title FROM comic;</kbd></td>
                                <td><a href="string_functions/substr_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>SUBSTRING</td>
                                <td>Extracts a substring from a string (starting at any position).</td>
                                <td><kbd>SELECT comic_title, SUBSTRING(comic_title, 2, 4) AS extracted_text FROM comic;</kbd></td>
                                <td><a href="string_functions/substring_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>SUBSTRING_INDEX</td>
                                <td>Returns a substring of a string before a specified number of delimiter occurs.</td>
                                <td><kbd>SELECT customer_name, SUBSTRING_INDEX(customer_name, '-', 1) AS first_name FROM customers;</kbd></td>
                                <td><a href="string_functions/substring_index_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>TRIM</td>
                                <td>Removes leading and trailing spaces from a string.</td>
                                <td><kbd>SELECT comic_title, TRIM(CONCAT('   ', comic_title, '   ')) AS trimmed_title FROM comic;</kbd></td>
                                <td><a href="string_functions/trim_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>UCASE</td>
                                <td>Converts a string to upper-case.</td>
                                <td><kbd>SELECT address, UCASE(address) AS uppercase_address FROM customers;</kbd></td>
                                <td><a href="string_functions/ucase_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>UPPER</td>
                                <td>Converts a string to upper-case.</td>
                                <td><kbd>SELECT email, UPPER(email) AS uppercase_email FROM customers;</kbd></td>
                                <td><a href="string_functions/upper_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <!--NEW TABLE-->
        <div class="card shadow-sm" style="margin-top:30px;">
            <div class="card-body">
                <h4 class="mb-2"><b>MySQL Numeric Functions</b></h4>
                <div class="table-responsive">
                    <table class="table align-middle mb-0 table-striped">
                        <thead>
                            <tr>
                                <th class="bg-primary">SQL Function</th>
                                <th class="bg-primary">Description</th>
                                <th class="bg-primary">Example Code</th>
                                <th class="bg-primary">Example Output</th>
                            </tr>
                        </thead>
                        <tbody>
                             <tr>
                                <td>ABS</td>
                                <td>Returns the absolute value of a number.</td>
                                <td><kbd>SELECT comic_title, comic_stock, ABS(comic_stock) AS abs_stock FROM comic;</kbd></td>
                                <td><a href="numeric_functions/abs_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>ACOS</td>
                                <td>Returns the arc cosine of a number.</td>
                                <td><kbd>SELECT comic_title, comic_stock, comic_stock/100 AS normalized_stock, ACOS(comic_stock/100) AS arc_cosine FROM comic;</kbd></td>
                                <td><a href="numeric_functions/acos_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>ASIN</td>
                                <td>Returns the arc sine of a number.</td>
                                <td><kbd>SELECT comic_title, comic_stock, comic_stock/100 AS normalized_stock, ASIN(comic_stock/100) AS arc_sine FROM comic;</kbd></td>
                                <td><a href="numeric_functions/asin_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>ATAN</td>
                                <td>Returns the arc tangent of one or two numbers.</td>
                                <td><kbd>SELECT comic_title, comic_stock, ATAN(comic_stock) AS arc_tangent FROM comic;</kbd></td>
                                <td><a href="numeric_functions/atan_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>ATAN2</td>
                                <td>Returns the arc tangent of two numbers.</td>
                                <td><kbd>SELECT comic_title, comic_stock, comic_price, ATAN2(comic_stock, comic_price) AS arc_tangent2 FROM comic;</kbd></td>
                                <td><a href="numeric_functions/atan2_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>AVG</td>
                                <td>Returns the average value of an expression.</td>
                                <td><kbd>SELECT g.genre_name, AVG(c.comic_price) AS average_price FROM comic c JOIN genre g ON c.genre_id = g.genre_id GROUP BY g.genre_name;</kbd></td>
                                <td><a href="numeric_functions/avg_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>CEIL</td>
                                <td>Returns the smallest integer value that is >= to a number.</td>
                                <td><kbd>SELECT comic_title, comic_price, CEIL(comic_price) AS ceil_price FROM comic;</kbd></td>
                                <td><a href="numeric_functions/ceil_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>CEILING</td>
                                <td>Returns the smallest integer value that is >= to a number.</td>
                                <td><kbd>SELECT comic_title, comic_price, CEILING(comic_price) AS ceiling_price FROM comic;</kbd></td>
                                <td><a href="numeric_functions/ceiling_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>COS</td>
                                <td>Returns the cosine of a number.</td>
                                <td><kbd>SELECT comic_title, comic_stock, COS(comic_stock) AS cosine_val FROM comic;</kbd></td>
                                <td><a href="numeric_functions/cos_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>COT</td>
                                <td>Returns the cotangent of a number.</td>
                                <td><kbd>SELECT comic_title, comic_stock, COT(comic_stock) AS cot_value FROM comic;</kbd></td>
                                <td><a href="numeric_functions/cot_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>COUNT</td>
                                <td>Returns the number of records returned by a select query.</td>
                                <td><kbd>SELECT g.genre_name, COUNT(c.comic_id) AS total_comics FROM genre g LEFT JOIN comic c ON g.genre_id = c.genre_id GROUP BY g.genre_name;</kbd></td>
                                <td><a href="numeric_functions/count_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>DEGREES</td>
                                <td>Converts a value in radians to degrees.</td>
                                <td><kbd>SELECT comic_title, comic_stock, DEGREES(comic_stock) AS degrees_val FROM comic;</kbd></td>
                                <td><a href="numeric_functions/degrees_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>DIV</td>
                                <td>Used for integer division.</td>
                                <td><kbd>SELECT comic_title, comic_price, FORMAT(comic_price / 2, 2) AS half_price FROM comic;</kbd></td>
                                <td><a href="numeric_functions/div_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>EXP</td>
                                <td>Returns e raised to the power of a specified number.</td>
                                <td><kbd>SELECT comic_title,comic_stock, FORMAT(EXP(comic_stock), 4) AS exp_value FROM comic;</kbd></td>
                                <td><a href="numeric_functions/exp_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>FLOOR</td>
                                <td>Returns the largest integer value that is <= to a number.</td>
                                <td><kbd>SELECT comic_title, comic_price, comic_price / 2 AS half_price, FLOOR(comic_price / 2) AS floor_price FROM comic;</kbd></td>
                                <td><a href="numeric_functions/floor_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>GREATEST</td>
                                <td>Returns the greatest value of the list of arguments.</td>
                                <td><kbd>SELECT comic_title, comic_stock, comic_price, GREATEST(comic_stock, comic_price) AS highest_value FROM comic;</kbd></td>
                                <td><a href="numeric_functions/greatest_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>LEAST</td>
                                <td>Returns the smallest value of the list of arguments.</td>
                                <td><kbd>SELECT comic_title, comic_stock, comic_price, LEAST(comic_stock, comic_price) AS lowest_value FROM comic;</kbd></td>
                                <td><a href="numeric_functions/least_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>LN</td>
                                <td>Returns the natural logarithm of a number.</td>
                                <td><kbd>SELECT comic_title, comic_stock, ROUND(LN(comic_stock), 4) AS ln_stock FROM comic WHERE comic_stock > 0;</kbd></td>
                                <td><a href="numeric_functions/ln_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>LOG</td>
                                <td>Returns the natural logarithm of a number, or the logarithm of a number to a specified base.</td>
                                <td><kbd>SELECT comic_title, comic_stock, ROUND(LOG(comic_stock), 4) AS log_stock FROM comic WHERE comic_stock > 0;</kbd></td>
                                <td><a href="numeric_functions/log_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>LOG10</td>
                                <td>Returns the natural logarithm of a number to base 10.</td>
                                <td><kbd>SELECT comic_title, comic_stock, ROUND(LOG10(comic_stock), 4) AS log10_stock FROM comic WHERE comic_stock > 0;</kbd></td>
                                <td><a href="numeric_functions/log10_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>LOG2</td>
                                <td>Returns the natural logarithm of a number to base 2.</td>
                                <td><kbd>SELECT comic_title, comic_stock, ROUND(LOG2(comic_stock), 4) AS log2_stock FROM comic WHERE comic_stock > 0;</kbd></td>
                                <td><a href="numeric_functions/log2_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>MAX</td>
                                <td>Returns the maximum value in a set of values.</td>
                                <td><kbd>SELECT comic_title, comic_price FROM comic WHERE comic_price = ( SELECT MAX(comic_price) FROM comic );</kbd></td>
                                <td><a href="numeric_functions/max_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>MIN</td>
                                <td>Returns the minimum value in a set of values.</td>
                                <td><kbd>SELECT comic_title, comic_price FROM comic WHERE comic_price = ( SELECT MIN(comic_price) FROM comic );</kbd></td>
                                <td><a href="numeric_functions/min_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>MOD</td>
                                <td>Returns the remainder of a number divided by another number.</td>
                                <td><kbd>SELECT comic_title, comic_price, MOD(comic_price, 2) AS remainder FROM comic;</kbd></td>
                                <td><a href="numeric_functions/mod_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>PI</td>
                                <td>Returns the value of PI.</td>
                                <td><kbd>SELECT PI() AS pi_value;</kbd></td>
                                <td><a href="numeric_functions/pi_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>POW</td>
                                <td>Returns the value of a number raised to the power of another number.</td>
                                <td><kbd>SELECT comic_title, comic_stock, POW(comic_stock, 2) AS stock_squared FROM comic;</kbd></td>
                                <td><a href="numeric_functions/pow_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>POWER</td>
                                <td>Returns the value of a number raised to the power of another number.</td>
                                <td><kbd>SELECT comic_title, comic_stock, POWER(comic_stock, 2) AS stock_squared FROM comic;</kbd></td>
                                <td><a href="numeric_functions/power_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>RADIANS</td>
                                <td>Converts a degree value into radians.</td>
                                <td><kbd>SELECT comic_title, comic_stock, RADIANS(comic_stock) AS radians_value FROM comic;</kbd></td>
                                <td><a href="numeric_functions/radians_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>RAND</td>
                                <td>Returns a random number.</td>
                                <td><kbd>SELECT comic_title, comic_price, ROUND(RAND() * comic_price, 2) AS random_discount FROM comic;</kbd></td>
                                <td><a href="numeric_functions/rand_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>ROUND</td>
                                <td>Rounds a number to a specified number of decimal places.</td>
                                <td><kbd>SELECT comic_title, comic_price, ROUND(comic_price, 1) AS rounded_price FROM comic;</kbd></td>
                                <td><a href="numeric_functions/round_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>SIGN</td>
                                <td>Returns the sign of a number.</td>
                                <td><kbd>SELECT comic_title, comic_stock, SIGN(comic_stock) AS stock_sign FROM comic;</kbd></td>
                                <td><a href="numeric_functions/sign_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>SIN</td>
                                <td>Returns the sine of a number.</td>
                                <td><kbd>SELECT comic_title, comic_stock, SIN(RADIANS(comic_stock)) AS sine_value FROM comic;</kbd></td>
                                <td><a href="numeric_functions/sin_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>SQRT</td>
                                <td>Returns the square root of a number.</td>
                                <td><kbd>SELECT comic_title, comic_stock, SQRT(comic_stock) AS stock_sqrt FROM comic;</kbd></td>
                                <td><a href="numeric_functions/sqrt_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>SUM</td>
                                <td>Calculates the sum of a set of values.</td>
                                <td><kbd>SELECT g.genre_name, SUM(c.comic_stock) AS total_stock FROM comic c JOIN genre g ON c.genre_id = g.genre_id GROUP BY g.genre_name;</kbd></td>
                                <td><a href="numeric_functions/sum_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>TAN</td>
                                <td>Returns the tangent of a number.</td>
                                <td><kbd>SELECT comic_title, comic_stock, TAN(RADIANS(comic_stock)) AS tangent_value FROM comic;</kbd></td>
                                <td><a href="numeric_functions/tan_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>TRUNCATE</td>
                                <td>Truncates a number to the specified number of decimal places.</td>
                                <td><kbd>SELECT comic_title, comic_price, TRUNCATE(comic_price, 0) AS truncated_price FROM comic;</kbd></td>
                                <td><a href="numeric_functions/truncate_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        

        <!--NEW-->
          <div class="card shadow-sm" style="margin-top:30px; margin-bottom: 50px;">
            <div class="card-body">
                <h4 class="mb-2"><b>MySQL Date Functions</b></h4>
                <div class="table-responsive">
                    <table class="table align-middle mb-0 table-striped">
                        <thead>
                            <tr>
                                <th class="bg-primary">SQL Function</th>
                                <th class="bg-primary">Description</th>
                                <th class="bg-primary">Example Code</th>
                                <th class="bg-primary">Example Output</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ADDDATE</td> 
                                <td>Adds a time/date interval to a date.</td>
                                <td><kbd>SELECT comic_title, created_at, ADDDATE(created_at, INTERVAL 7 DAY) AS plus_7_days FROM comic;</kbd></td>
                                <td><a href="date_functions/adddate_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>ADDTIME</td> 
                                <td>Adds a time interval to a time/datetime.</td>
                                <td><kbd>SELECT comic_title, created_at, ADDTIME(created_at, '02:00:00') AS plus_2_hours FROM comic;</kbd></td>
                                <td><a href="date_functions/addtime_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>CURDATE</td> 
                                <td>Returns the current date.</td>
                                <td><kbd>SELECT comic_title, CURDATE() AS today_date FROM comic;</kbd></td>
                                <td><a href="date_functions/curdate_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>CURRENT_DATE</td> 
                                <td>Returns the current date.</td>
                                <td><kbd>SELECT comic_title, CURRENT_DATE() AS today_date FROM comic;</kbd></td>
                                <td><a href="date_functions/current_date_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>CURRENT_TIME</td>
                                <td>Returns the current time.</td>
                                <td><kbd>SELECT comic_title, CURRENT_TIME() AS time_now FROM comic;</kbd></td>
                                <td><a href="date_functions/current_time_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>CURRENT_TIMESTAMP</td>
                                <td>Returns the current date and time.</td>
                                <td><kbd>SELECT comic_title, CURRENT_TIMESTAMP() AS current_ts FROM comic;</kbd></td>
                                <td><a href="date_functions/current_timestamp_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>CURTIME</td>
                                <td>Returns the current time.</td>
                                <td><kbd>SELECT comic_title, CURTIME() AS cur_time FROM comic;</kbd></td>
                                <td><a href="date_functions/curtime_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>DATE</td>
                                <td>Extracts the date part from a datetime expression.</td>
                                <td><kbd>SELECT comic_title, DATE(created_at) AS created_date FROM comic;</kbd></td>
                                <td><a href="date_functions/date_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>DATEDIFF</td>
                                <td>Returns the number of days between two date values.</td>
                                <td><kbd>SELECT comic_title, created_at, DATEDIFF(CURDATE(), created_at) AS days_since_added FROM comic;</kbd></td>
                                <td><a href="date_functions/datediff_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>DATE_ADD</td>
                                <td>Adds a time/date interval to a date.</td>
                                <td><kbd>SELECT comic_title, created_at, DATE_ADD(created_at, INTERVAL 7 DAY) AS after_7_days FROM comic;</kbd></td>
                                <td><a href="date_functions/date_add_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>DATE_FORMAT</td>
                                <td>Formats a date.</td>
                                <td><kbd>SELECT comic_title, created_at, DATE_FORMAT(created_at, '%W, %M %d, %Y %H:%i:%s') AS formatted_date FROM comic;</kbd></td>
                                <td><a href="date_functions/date_format_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>DATE_SUB</td>
                                <td>Subtracts a time/date interval from a date.</td>
                                <td><kbd>SELECT comic_title, created_at, DATE_SUB(created_at, INTERVAL 7 DAY) AS before_7_days FROM comic;</kbd></td>
                                <td><a href="date_functions/date_sub_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>DAY</td>
                                <td>Returns the day of the month for a given date.</td>
                                <td><kbd>SELECT comic_title, created_at, DAY(created_at) AS day_of_month FROM comic;</kbd></td>
                                <td><a href="date_functions/day_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>DAYNAME</td>
                                <td>Returns the weekday name for a given date.</td>
                                <td><kbd>SELECT comic_title, created_at, DAYNAME(created_at) AS day_name FROM comic;</kbd></td>
                                <td><a href="date_functions/dayname_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>DAYOFMONTH</td>
                                <td>Returns the day of the month for a given date.</td>
                                <td><kbd>SELECT comic_title, created_at, DAYOFMONTH(created_at) AS day_of_month FROM comic;</kbd></td>
                                <td><a href="date_functions/dayofmonth_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>DAYOFWEEK</td>
                                <td>Returns the weekday index for a given date.</td>
                                <td><kbd>SELECT comic_title, created_at, DAYOFWEEK(created_at) AS day_of_week FROM comic;</kbd></td>
                                <td><a href="date_functions/dayofweek_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>DAYOFYEAR</td>
                                <td>Returns the day of the year for a given date.</td>
                                <td><kbd>SELECT comic_title, created_at, DAYOFYEAR(created_at) AS day_of_year FROM comic;</kbd></td>
                                <td><a href="date_functions/dayofyear_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>EXTRACT</td>
                                <td>Extracts a part from a given date.</td>
                                <td><kbd>SELECT comic_title, created_at, EXTRACT(YEAR FROM created_at) AS year, EXTRACT(MONTH FROM created_at) AS month, EXTRACT(DAY FROM created_at) AS day FROM comic;</kbd></td>
                                <td><a href="date_functions/extract_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>FROM_DAYS</td>
                                <td>Returns a date from a numeric datevalue.</td>
                                <td><kbd>SELECT comic_title, created_at, FROM_DAYS(TO_DAYS(created_at) + 3) AS plus_3_days FROM comic;</kbd></td>
                                <td><a href="date_functions/from_days_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>HOUR</td>
                                <td>Returns the hour part for a given date.</td>
                                <td><kbd>SELECT comic_title, created_at, HOUR(created_at) AS hour_added FROM comic;</kbd></td>
                                <td><a href="date_functions/hour_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>LAST_DAY</td>
                                <td>Extracts the last day of the month for a given date.</td>
                                <td><kbd>SELECT comic_title, created_at, LAST_DAY(created_at) AS last_day_of_month FROM comic;</kbd></td>
                                <td><a href="date_functions/last_day_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>LOCALTIME</td>
                                <td>Returns the current date and time.</td>
                                <td><kbd>SELECT comic_title, created_at, LOCALTIME() AS local_time FROM comic;</kbd></td>
                                <td><a href="date_functions/localtime_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>LOCALTIMESTAMP</td>
                                <td>Returns the current date and time.</td>
                                <td><kbd>SELECT comic_title, created_at, LOCALTIMESTAMP() AS local_timestamp FROM comic;</kbd></td>
                                <td><a href="date_functions/localtimestamp_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>MAKEDATE</td>
                                <td>Creates and returns a date based on a year and day-of-year.</td>
                                <td><kbd>SELECT comic_title, created_at, MAKEDATE(2045, 5) AS made_date FROM comic;</kbd></td>
                                <td><a href="date_functions/makedate_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>MAKETIME</td>
                                <td>Creates and returns a time based on hour, minute, second.</td>
                                <td><kbd>SELECT comic_title, created_at, MAKETIME(15, 30, 22) AS made_time FROM comic;</kbd></td>
                                <td><a href="date_functions/maketime_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>MICROSECOND</td>
                                <td>Returns the microsecond part of a time/datetime.</td>
                                <td><kbd>SELECT comic_title, created_at, MICROSECOND(created_at) AS microseconds FROM comic;</kbd></td>
                                <td><a href="date_functions/microsecond_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>MINUTE</td>
                                <td>Returns the minute part of a time/datetime.</td>
                                <td><kbd>SELECT comic_title, created_at, MINUTE(created_at) AS minute_added FROM comic;</kbd></td>
                                <td><a href="date_functions/minute_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>MONTH</td>
                                <td>Returns the month part for a given date.</td>
                                <td><kbd>SELECT comic_title, created_at, MONTH(created_at) AS month_added FROM comic;</kbd></td>
                                <td><a href="date_functions/month_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>MONTHNAME</td>
                                <td>Returns the name of the month for a given date.</td>
                                <td><kbd>SELECT comic_title, created_at, MONTHNAME(created_at) AS month_name FROM comic;</kbd></td>
                                <td><a href="date_functions/monthname_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>NOW</td>
                                <td>Returns the current date and time.</td>
                                <td><kbd>SELECT comic_title, created_at, NOW() AS current_datetime FROM comic;</kbd></td>
                                <td><a href="date_functions/now_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>PERIOD_ADD</td>
                                <td>Adds a specified number of months to a period.</td>
                                <td><kbd>SELECT comic_title, created_at, PERIOD_ADD(202602, 3) AS period_plus_3 FROM comic;</kbd></td>
                                <td><a href="date_functions/period_add_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>PERIOD_DIFF</td>
                                <td>Returns the difference between two periods.</td>
                                <td><kbd>SELECT comic_title, created_at, PERIOD_DIFF(202702, 202602) AS p_diff FROM comic;</kbd></td>
                                <td><a href="date_functions/period_diff_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>QUARTER</td>
                                <td>Returns the quarter of the year for a given date value.</td>
                                <td><kbd>SELECT comic_title, created_at, QUARTER(created_at) AS quarter_added FROM comic;</kbd></td>
                                <td><a href="date_functions/quarter_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>SECOND</td>
                                <td>Returns the seconds part of a time/datetime.</td>
                                <td><kbd>SELECT comic_title, created_at, SECOND(created_at) AS second_added FROM comic;</kbd></td>
                                <td><a href="date_functions/second_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>SEC_TO_TIME</td>
                                <td>Returns a time value based on the specified seconds.</td>
                                <td><kbd>SELECT comic_title, SEC_TO_TIME(7200) AS converted_time FROM comic;</kbd></td>
                                <td><a href="date_functions/sec_to_time_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>STR_TO_DATE</td>
                                <td>Returns a date based on a string and a format.</td>
                                <td><kbd>SELECT comic_title, comic_stock, STR_TO_DATE('01-07-2026', '%d-%m-%Y') AS restock_date FROM comic WHERE comic_id=1;</kbd></td>
                                <td><a href="date_functions/str_to_date_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>SUBDATE</td>
                                <td>Subtracts a time/date interval from a date.</td>
                                <td><kbd>SELECT comic_title, created_at, SUBDATE(created_at, INTERVAL 6 DAY) AS six_days_before FROM comic;</kbd></td>
                                <td><a href="date_functions/subdate_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>SUBTIME</td>
                                <td>Subtracts a time interval from a datetime.</td>
                                <td><kbd>SELECT comic_title, created_at, SUBTIME(created_at, '01:00:00') AS subtracted_time FROM comic;</kbd></td>
                                <td><a href="date_functions/subtime_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>SYSDATE</td>
                                <td>Returns the current date and time.</td>
                                <td><kbd>SELECT comic_title, created_at, SYSDATE() AS sys_date FROM comic;</kbd></td>
                                <td><a href="date_functions/sysdate_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>TIME</td>
                                <td>Extracts the time part from a given time/datetime.</td>
                                <td><kbd>SELECT comic_title, created_at, TIME(created_at) AS time_only FROM comic;</kbd></td>
                                <td><a href="date_functions/time_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>TIME_FORMAT</td>
                                <td>Formats a time by a specified format.</td>
                                <td><kbd>SELECT comic_title, created_at, TIME_FORMAT(created_at, '%h:%i %p') AS time_12hr FROM comic;</kbd></td>
                                <td><a href="date_functions/time_format_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>TIME_TO_SEC</td>
                                <td>Converts a time value into seconds.</td>
                                <td><kbd>SELECT comic_title, created_at, TIME_TO_SEC(created_at) AS secs FROM comic;</kbd></td>
                                <td><a href="date_functions/time_to_sec_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>TIMEDIFF</td>
                                <td>Returns the difference between two time/datetime expressions.</td>
                                <td><kbd>SELECT comic_title, created_at, TIMEDIFF(NOW(), created_at) AS time_difference FROM comic;</kbd></td>
                                <td><a href="date_functions/timediff_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>TIMESTAMP</td>
                                <td>Returns a datetime value based on a date or datetime.</td>
                                <td><kbd>SELECT comic_title, created_at, NOW() AS nowtime, TIMESTAMP(DATE(created_at), TIME(NOW())) AS combined_datetime FROM comic;</kbd></td>
                                <td><a href="date_functions/timestamp_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>TO_DAYS</td>
                                <td>Returns days between a date and year 0.</td>
                                <td><kbd>SELECT comic_title, created_at, TO_DAYS(created_at) AS dayss FROM comic;</kbd></td>
                                <td><a href="date_functions/to_days_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>WEEK</td>
                                <td>Returns the week number for a given date.</td>
                                <td><kbd>SELECT comic_title, created_at, WEEK(created_at) AS week_num FROM comic;</kbd></td>
                                <td><a href="date_functions/week_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>WEEKDAY</td>
                                <td>Returns the weekday number for a given date.</td>
                                <td><kbd>SELECT comic_title, created_at, WEEKDAY(created_at) AS weekday_num FROM comic;</kbd></td>
                                <td><a href="date_functions/weekday_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>WEEKOFYEAR</td>
                                <td>Returns the week number for a given date.</td>
                                <td><kbd>SELECT comic_title, created_at, WEEKOFYEAR(created_at) AS week_of_year FROM comic;</kbd></td>
                                <td><a href="date_functions/weekofyear_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>YEAR</td>
                                <td>Extracts the year part from a given date.</td>
                                <td><kbd>SELECT comic_title, created_at, YEAR(created_at) AS comic_year FROM comic;</kbd></td>
                                <td><a href="date_functions/year_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>YEARWEEK</td>
                                <td>Returns the year and week number for a given date.</td>
                                <td><kbd>SELECT comic_title, created_at, YEARWEEK(created_at) AS year_week FROM comic;</kbd></td>
                                <td><a href="date_functions/yearweek_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card shadow-sm" style="margin-top:30px;">
            <div class="card-body">
                <h4 class="mb-2"><b>MySQL Advanced Functions</b></h4>
                <div class="table-responsive">
                     <table class="table align-middle mb-0 table-striped">
                        <thead>
                            <tr>
                                <th class="bg-primary">SQL Function</th>
                                <th class="bg-primary">Description</th>
                                <th class="bg-primary">Example Code</th>
                                <th class="bg-primary">Example Output</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>BIN</td>
                                <td>Returns a binary representation of a number.</td>
                                <td><kbd>SELECT comic_title, comic_stock, BIN(comic_stock) AS binary_stock FROM comic;</kbd></td>
                                <td><a href="advanced_functions/bin_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>BINARY</td>
                                <td>Converts a value to a binary string.</td>
                                <td><kbd>SELECT comic_title, BINARY comic_title AS binary_title FROM comic;</kbd></td>
                                <td><a href="advanced_functions/binary_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>CASE</td>
                                <td>Goes through conditions and return a value when the first condition is met.</td>
                                <td><kbd>SELECT comic_title, comic_stock, CASE WHEN comic_stock <= 5 THEN 'Low Stock' WHEN comic_stock BETWEEN 6 AND 15 THEN 'Medium Stock' ELSE 'In Stock' END AS stock_status FROM comic;</kbd></td>
                                <td><a href="advanced_functions/case_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>CAST</td>
                                <td>Converts a value (of any type) into a specified datatype.</td>
                                <td><kbd>SELECT comic_title, comic_price, CAST(comic_price AS DECIMAL(10,2)) AS casted_price FROM comic;</kbd></td>
                                <td><a href="advanced_functions/cast_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>COALESCE</td>
                                <td>Returns the first non-null value in a list.</td>
                                <td><kbd>SELECT customer_name, COALESCE(address, 'Address not provided') AS address_output FROM customers;</kbd></td>
                                <td><a href="advanced_functions/coalesce_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>CONNECTION_ID</td>
                                <td>Returns the unique connection ID for the current connection.</td>
                                <td><kbd>SELECT CONNECTION_ID() AS connection_id;</kbd></td>
                                <td><a href="advanced_functions/connection_id_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>CONV</td>
                                <td>Converts a number from one numeric base system to another.</td>
                                <td><kbd>SELECT comic_title, comic_stock, CONV(comic_stock, 10, 2) AS binary_stock FROM comic;</kbd></td>
                                <td><a href="advanced_functions/conv_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>CONVERT</td>
                                <td>Converts a value into the specified datatype or character set.</td>
                                <td><kbd>SELECT comic_title, comic_price, CONVERT(comic_price, CHAR) AS price_as_text FROM comic;</kbd></td>
                                <td><a href="advanced_functions/convert_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>CURRENT_USER</td>
                                <td>Returns the user name and host name for the MySQL account that the server used to authenticate the current client.</td>
                                <td><kbd>SELECT CURRENT_USER() AS `current_user`;</kbd></td>
                                <td><a href="advanced_functions/current_user_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>DATABASE</td>
                                <td>Returns the name of the current database.</td>
                                <td><kbd>SELECT DATABASE() AS `current_database`;</kbd></td>
                                <td><a href="advanced_functions/database_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>IF</td>
                                <td>Returns a value if a condition is TRUE, or another value if a condition is FALSE.</td>
                                <td><kbd>SELECT comic_title, comic_stock, IF(comic_stock <= 5, 'Stock is low', 'Stock is sufficient') AS stock_status FROM comic;</kbd></td>
                                <td><a href="advanced_functions/if_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>IFNULL</td>
                                <td>Return a specified value if the expression is NULL, otherwise return the expression.</td>
                                <td><kbd>SELECT customer_name, IFNULL(address, 'No address provided') AS final_address FROM customers;</kbd></td>
                                <td><a href="advanced_functions/ifnull_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>ISNULL</td>
                                <td>Returns 1 or 0 depending on whether an expression is NULL.</td>
                                <td><kbd>SELECT customer_name, address, ISNULL(address) AS is_null FROM customers;</kbd></td>
                                <td><a href="advanced_functions/isnull_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>LAST_INSERT_ID</td>
                                <td>Returns the AUTO_INCREMENT id of the last row that has been inserted in a table.</td>
                                <td><kbd>SELECT LAST_INSERT_ID() AS last_id;</kbd></td>
                                <td><a href="advanced_functions/last_insert_id_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>NULLIF</td>
                                <td>Compares two expressions and returns NULL if they are equal. Otherwise, the first expression is returned.</td>
                                <td><kbd>SELECT comic_title, comic_stock, NULLIF(comic_stock, 5) AS stock_check FROM comic;</kbd></td>
                                <td><a href="advanced_functions/nullif_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>SESSION_USER</td>
                                <td>Returns the current MySQL user name and host name.</td>
                                <td><kbd>SELECT SESSION_USER() AS session_user;</kbd></td>
                                <td><a href="advanced_functions/session_user_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>SYSTEM_USER</td>
                                <td>Returns the current MySQL user name and host name.</td>
                                <td><kbd>SELECT SYSTEM_USER() AS system_user;</kbd></td>
                                <td><a href="advanced_functions/system_user_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>USER</td>
                                <td>Returns the current MySQL user name and host name.</td>
                                <td><kbd>SELECT USER() AS `current_user`;</kbd></td>
                                <td><a href="advanced_functions/user_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                            <tr>
                                <td>VERSION</td>
                                <td>Returns the current version of the MySQL database.</td>
                                <td><kbd>SELECT VERSION() AS db_version;</kbd></td>
                                <td><a href="advanced_functions/version_output.php"><span class="bi bi-arrow-right-square" style="padding-right: 15px;"></span>Output</a></td>
                            </tr>
                        </tbody>
                     </table>
                </div>
            </div>
        </div>


    </div>

</body>
</html>
