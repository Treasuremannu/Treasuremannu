// Register a helper named 'date'
Moji::helper('date', function($params) {
    return date($params['format']); 
});

// Template content
$content = "Today is {{date(format='Y-m-d')}}.";

// Parse the template
$parsedContent = Moji::parse($content); 

// Output: Today is 2024-07-05. 
echo $parsedContent; 
