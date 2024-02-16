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
?>
