<!DOCTYPE html>
<html>
<head>
    <title> PHP-Hello World! </title>
    <meta charset = "utf-8" />
</head>
<body>
    <h1>My first PHP page</h1>
    <?php$first = "nancy..."; $last = "ACEMIAN";
echo (trim($first,".")."<br/>");
echo (strlen($first)."<br/>");
echo (strstr("Nancy Acemian","ncy").'<br/>');
echo (ucwords("nancyACEMIAN").'<br/>');echo (strcmp("Hello", "hello"));
?> 
</body>
</html>