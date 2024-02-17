<?php

function generateSignature($name, $role, $phone, $email, $companyInfo) {
    $html = '
        <table style="width:100%;">
            <tr>
                <td><img src="path/to/your/image.jpg" alt="Logo"></td>
                <td style="text-align:right; font-size:larger; font-weight:bold;">' . $name . '</td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align:right;">' . $role . '</td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align:right;">Tel: ' . $phone . ' | Email: ' . $email . '</td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align:right; font-style:italic;">' . $companyInfo . '</td>
            </tr>
        </table>
    ';

    return $html;
}

// Example usage for a specific user
$userName = "John Doe";
$userRole = "Sales Director";
$userPhone = "123-456-7890";
$userEmail = "john.doe@company.com";
$companyInfo = "Your Company Inc.";

$signature = generateSignature($userName, $userRole, $userPhone, $userEmail, $companyInfo);

echo $signature;



// Array of users data
$users = array(
    array("John Doe", "Sales Director", "123-456-7890", "john.doe@company.com", "Your Company Inc."),
    // put more users here
);

// file where save the signatures
$folder = 'signatures/';

// Generate and save the signatures for each one user
foreach ($users as $userData) {
    list($userName, $userRole, $userPhone, $userEmail, $companyInfo) = $userData;
    $signature = generateSignature($userName, $userRole, $userPhone, $userEmail, $companyInfo);

    // Create a file name based on the user's name
    $fileName = $folder . strtolower(str_replace(' ', '_', $userName)) . '_signature.html';

    // Save signature to file
    file_put_contents($fileName, $signature);
    echo "Signature for $userName generated and saved in $fileName<br>";
}


?>


