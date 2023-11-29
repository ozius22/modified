<html>
    <head>
        <title>Class and Object Demo</title>
        <link rel="stylesheet" href="dist/output.css">
    </head>

    <body class="bg-gray-100">
        <div class="container mx-auto p-8">
            <form action="" method="POST" class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
                <div class="mb-4">
                    <label for="lastName" class="block text-gray-800 text-sm font-semibold mb-2">Last Name:</label>
                    <input type="text" name="lastName" id="lastName" class="w-full border rounded-md py-2 px-3" placeholder="*" required>
                </div>

                <div class="mb-4">
                    <label for="firstName" class="block text-gray-800 text-sm font-semibold mb-2">First Name:</label>
                    <input type="text" name="firstName" id="firstName" class="w-full border rounded-md py-2 px-3" placeholder="*" required>
                </div>

                <div class="mb-4">
                    <label for="middleInitial" class="block text-gray-800 text-sm font-semibold mb-2">Middle Initial:</label>
                    <input type="text" name="middleInitial" id="middleInitial" class="w-full border rounded-md py-2 px-3">
                </div>

                <div class="mb-4">
                    <label for="age" class="block text-gray-800 text-sm font-semibold mb-2">Age:</label>
                    <input type="number" name="age" id="age" class="w-full border rounded-md py-2 px-3" placeholder="*" required>
                </div>

                <div class="mb-4">
                    <label for="contactNo" class="block text-gray-800 text-sm font-semibold mb-2">Contact No:</label>
                    <input type="text" name="contactNo" id="contactNo" class="w-full border rounded-md py-2 px-3" placeholder="*" required>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-800 text-sm font-semibold mb-2">Email:</label>
                    <input type="email" name="email" id="email" class="w-full border rounded-md py-2 px-3" placeholder="*" required>
                </div>

                <div class="mb-4">
                    <label for="address" class="block text-gray-800 text-sm font-semibold mb-2">Address:</label>
                    <textarea name="address" id="address" class="w-full border rounded-md py-2 px-3" placeholder="*" required></textarea>
                </div>

                <div class="mt-6">
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-700">Submit</button>
                </div>
            </form>
        </div>
    </body>
</html>


<?php
class FormInfoClass {
    private $lastName;
    private $firstName;
    private $middleInitial;
    private $age;
    private $contactNo;
    private $email;
    private $address;

    // Setters
    public function setLastName($lastName){
        $this->lastName = $lastName;
    }
    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }
    public function setMiddleInitial($middleInitial){
        $this->middleInitial = $middleInitial;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function setContactNo($contactNo){
        $this->contactNo = $contactNo;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setAddress($address){
        $this->address = $address;
    }

    // Getters
    public function getLastName(){
        return $this->lastName;
    }
    public function getFirstName(){
        return $this->firstName;
    }
    public function getMiddleInitial(){
        return $this->middleInitial;
    }
    public function getAge(){
        return $this->age;
    }
    public function getContactNo(){
        return $this->contactNo;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getAddress(){
        return $this->address;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formInfo = new FormInfoClass();

    $formInfo->setLastName($_POST['lastName']);
    $formInfo->setFirstName($_POST['firstName']);
    $formInfo->setMiddleInitial($_POST['middleInitial']);
    $formInfo->setAge($_POST['age']);
    $formInfo->setContactNo($_POST['contactNo']);
    $formInfo->setEmail($_POST['email']);
    $formInfo->setAddress($_POST['address']);

    session_start();
    $_SESSION['formInfo'] = $formInfo;

    header("Location: user.php");
    exit();
}
?>