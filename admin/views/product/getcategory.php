<?php
//Sub Category
session_start();
require('../../../lib/Request.php');
require('../../../lib/Client.php');
$request = new Request();
$request->code = $_SESSION['user'];
$request->token = '';
$request->id = '';
$request->parent = $_GET['id'];
$request->data = '';
$request->remove = '';
$sub_categories = new Client('http://localhost/shoponline/service/Category/SubController.php?wsdl');
$response = $sub_categories->Check($request);
if($response->process == 1) {
    $sub_category = json_decode($response->data, true);
}
?>

<select name="sub_category_id" class="form-control" id="sub_category_id">
    <option></option>
    <?php foreach ($sub_category as $sub) {
        echo '<option value="' . $sub['id'] . '">' . $sub['name'] . '</option>';
    } ?>
</select>