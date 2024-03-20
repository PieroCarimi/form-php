<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $companyName = $_POST["companyName"];
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $service = $_POST["service"];

    $errors = [];
    if (empty($companyName)) {
        $errors["companyName"] = "Company name is required";
    }
    if (empty($fullName)) {
        $errors["fullName"] = "Full Name is required";
    }
    if (empty($email)) {
        $errors["email"] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email format";
    }
    if (empty($phone)) {
        $errors["phone"] = "Phone is required";
    } elseif (!preg_match("/^\d+$/", $phone)) {
        $errors["phone"] = "Phone should contain only numbers";
    }
    if (empty($service)) {
        $errors["service"] = "Service is required";
    }

    if (empty($errors)) {
        $success_data = [
            'message' => "Message sent successfully!",
            'companyName' => $companyName,
            'fullName' => $fullName,
            'email' => $email,
            'phone' => $phone,
            'service' => $service
        ];
        echo json_encode($success_data);
    } else {
        http_response_code(400);
        header('Content-Type: application/json');
        echo json_encode($errors);
    }
}
?>
