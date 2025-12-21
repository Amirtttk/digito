<?php
function getOneUserForLogin($username, $password, $tblName)
{
    global $cn;
    $sql = "select * from $tblName where userName=?";
    $result = $cn->prepare($sql);
    $result->bindValue(1, $username);
    $result->execute();

    if ($result->rowCount() > 0) {
        $admin = $result->fetch(PDO::FETCH_ASSOC);
        if (password_verify($password, $admin['password'])) {
            return $admin;
        }
        return false;
    }
    return false;
}
function getOneUserByPassword($password, $tblName)
{
    global $cn;
    $sql = "select * from $tblName";
    $result = $cn->query($sql);

    if ($result->rowCount() > 0) {
        $admin = $result->fetch(PDO::FETCH_ASSOC);
        if (password_verify($password, $admin['password'])) {
            return $admin;
        }
        return false;
    }
    return false;
}
function getOneUser($userID)
{
    global $cn;
    $sql = "select * from users_info_public where userID=?";
    $result = $cn->prepare($sql);
    $result->bindValue(1, $userID);
    $result->execute();

    if ($result->rowCount() > 0) {
        return $result->fetch();
    }
    return false;
}
function getOneUserByMobile($userMobile)
{
    global $cn;
    $sql = "select * from users_info_public where userMobile=?";
    $result = $cn->prepare($sql);
    $result->bindValue(1, $userMobile);
    $result->execute();

    if ($result->rowCount() > 0) {
        return $result->fetch();
    }
    return false;
}
function getUserLastLogin($userID)
{
    global $cn;
    $sql = "select * from users_last_login where userID=?";
    $result = $cn->prepare($sql);
    $result->bindValue(1, $userID);
    $result->execute();

    if ($result->rowCount() > 0) {
        return $result->fetch();
    }
    return false;
}
function getAllInfoUser($tblName)
{
    global $cn;
    $sql = "SELECT * FROM users_info_public u JOIN $tblName d ON u.userID = d.userID order by u.userID desc";
    $result = $cn->query($sql);

    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
function getOneInfoUser($userID, $tblName)
{
    global $cn;
    $sql = "SELECT * FROM users_info_public u JOIN $tblName d ON u.userID = d.userID WHERE u.userID = ?";
    $result = $cn->prepare($sql);
    $result->bindValue(1, $userID);
    $result->execute();

    if ($result->rowCount() > 0) {
        return $result->fetch();
    }
    return false;
}
function getInfoUser($userID)
{
    global $cn;
    $sql = "SELECT * FROM users_info_public WHERE userID = ?";
    $result = $cn->prepare($sql);
    $result->bindValue(1, $userID);
    $result->execute();

    if ($result->rowCount() > 0) {
        return $result->fetch();
    }
    return false;
}
function getOneBlogCategories($id){
    global $cn;
    $sql="select * from blog_categories where id=? ";
    $result = $cn->prepare($sql);
    $result->bindValue(1,$id);
    $result->execute();
    if($result->rowCount()>0){
        return $result->fetch();
    }
    return false;
}
function getOneFaq($id){
    global $cn;
    $sql="select * from faq where id=? ";
    $result = $cn->prepare($sql);
    $result->bindValue(1,$id);
    $result->execute();
    if($result->rowCount()>0){
        return $result->fetch();
    }
    return false;
}
function getOneLink($id){
    global $cn;
    $sql="select * from link where id=? ";
    $result = $cn->prepare($sql);
    $result->bindValue(1,$id);
    $result->execute();
    if($result->rowCount()>0){
        return $result->fetch();
    }
    return false;
}
function changeStatusFaq($status, $id)
{
    try {
        global $cn;
        $sql = "update faq set status = ? where id = ?";
        $result = $cn->prepare($sql);
        $result->bindValue(1, $status);
        $result->bindValue(2, $id);
        $result->execute();
        return true;
    } catch (PDOException $e) {
        return false;
    }
}
function DeletedFaq($id){
    global $cn;
    $sql="delete from faq where id = ?";
    $resulte = $cn->prepare($sql);
    $resulte->bindValue(1,$id);
    $resulte->execute();
    if ($resulte->rowCount() > 0){
        return true;
    }
    return false;
}
function getAllaAboutUs()
{
    global $cn;
    $sql = "select * from aboutus ";
    $result = $cn->query($sql);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetch();
    }
    return false;
}
function changeStatusBrand($status, $id)
{
    try {
        global $cn;
        $sql = "update brand set status = ? where id = ?";
        $result = $cn->prepare($sql);
        $result->bindValue(1, $status);
        $result->bindValue(2, $id);
        $result->execute();
        return true;
    } catch (PDOException $e) {
        return false;
    }
}
function getOneBrand($id){
    global $cn;
    $sql="select * from brand where id=? ";
    $result = $cn->prepare($sql);
    $result->bindValue(1,$id);
    $result->execute();
    if($result->rowCount()>0){
        return $result->fetch();
    }
    return false;
}
function getOneBlog($id){
    global $cn;
    $sql="select * from blog where id=? ";
    $result = $cn->prepare($sql);
    $result->bindValue(1,$id);
    $result->execute();
    if($result->rowCount()>0){
        return $result->fetch();
    }
    return false;
}
function changeStatusBlog($status, $id)
{
    try {
        global $cn;
        $sql = "update blog set status = ? where id = ?";
        $result = $cn->prepare($sql);
        $result->bindValue(1, $status);
        $result->bindValue(2, $id);
        $result->execute();
        return true;
    } catch (PDOException $e) {
        return false;
    }
}
function changeStatusBanner($status, $id)
{
    try {
        global $cn;
        $sql = "update banner set status = ? where id = ?";
        $result = $cn->prepare($sql);
        $result->bindValue(1, $status);
        $result->bindValue(2, $id);
        $result->execute();
        return true;
    } catch (PDOException $e) {
        return false;
    }
}
function changeStatusAdvertising($status, $id)
{
    try {
        global $cn;
        $sql = "update advertising_banner set status = ? where id = ?";
        $result = $cn->prepare($sql);
        $result->bindValue(1, $status);
        $result->bindValue(2, $id);
        $result->execute();
        return true;
    } catch (PDOException $e) {
        return false;
    }
}
function DeletedBlog($id){
    global $cn;
    $sql="delete from blog where id = ?";
    $resulte = $cn->prepare($sql);
    $resulte->bindValue(1,$id);
    $resulte->execute();
    if ($resulte->rowCount() > 0){
        return true;
    }
    return false;
}
function DeletedBanner($id){
    global $cn;
    $sql="delete from banner where id = ?";
    $resulte = $cn->prepare($sql);
    $resulte->bindValue(1,$id);
    $resulte->execute();
    if ($resulte->rowCount() > 0){
        return true;
    }
    return false;
}
function getOneBanner($id){
    global $cn;
    $sql="select * from banner where id=? ";
    $result = $cn->prepare($sql);
    $result->bindValue(1,$id);
    $result->execute();
    if($result->rowCount()>0){
        return $result->fetch();
    }
    return false;
}
function getOneAdvertising($id){
    global $cn;
    $sql="select * from advertising_banner where id=? ";
    $result = $cn->prepare($sql);
    $result->bindValue(1,$id);
    $result->execute();
    if($result->rowCount()>0){
        return $result->fetch();
    }
    return false;
}
function getInformation()
{
    global $cn;
    $sql = "select * from information ";
    $result = $cn->query($sql);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetch();
    }
    return false;
}
function getAllCategories() {
    global $cn;
    $sql = "SELECT * FROM category ORDER BY title ASC";
    $result = $cn->query($sql);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return [];
}
function getCategoryById($id) {
    global $cn;
    $sql = "SELECT * FROM category WHERE id = ?";
    $result = $cn->prepare($sql);
    $result->bindValue(1, $id);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetch(); // برمی‌گردونه ردیف مربوط به دسته‌بندی
    }
    return false; // اگه دسته‌بندی پیدا نشد
}
function getOneProduct($id){
    global $cn;
    $sql="select * from products  where id=? ";
    $result = $cn->prepare($sql);
    $result->bindValue(1,$id);
    $result->execute();
    if($result->rowCount()>0){
        return $result->fetch();
    }
    return false;
}
function getChildCategoriesByParentId($parentId)
{
    global $cn;
    try {
        $sql = "SELECT * FROM category WHERE parent_id = :parent_id ORDER BY id DESC";
        $stmt = $cn->prepare($sql);
        $stmt->bindParam(':parent_id', $parentId, PDO::PARAM_INT); // جلوگیری از SQL Injection
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC); // استفاده از FETCH_ASSOC برای دریافت نتایج به عنوان آرایه‌های مرتبط
        }
        return []; // اگر هیچ زیر دسته‌ای وجود نداشت، یک آرایه خالی برگردانید
    } catch (PDOException $e) {
        // ثبت خطا یا مدیریت خطا
        error_log("Database error: " . $e->getMessage());
        return false; // در صورت بروز خطا، false برگردانید
    }
}
function DeletedForwarding($id){
    global $cn;
    $sql="delete from forwarding where id = ?";
    $resulte = $cn->prepare($sql);
    $resulte->bindValue(1,$id);
    $resulte->execute();
    if ($resulte->rowCount() > 0){
        return true;
    }
    return false;
}
function changeStatusContactUs($status, $id)
{
    try {
        global $cn;
        $sql = "update contactUs set status = ? where id = ?";
        $result = $cn->prepare($sql);
        $result->bindValue(1, $status);
        $result->bindValue(2, $id);
        $result->execute();
        return true;
    } catch (PDOException $e) {
        return false;
    }
}
function getCityAndProvinceByCityId($cityId){
    try {
        global $cn;
        $sql = "SELECT city.id as city_id, city.name as city_name, 
                       province.id as province_id, province.name as province_name
                FROM city
                JOIN province ON city.province_id = province.id
                WHERE city.id = ?";

        $stmt = $cn->prepare($sql);
        $stmt->bindParam(1, $cityId, PDO::PARAM_INT);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            return null;  // شهر پیدا نشد
        }
    } catch (PDOException $e) {
        // می‌تونی اینجا خطا رو لاگ کنی یا هندل کنی
        return false;
    }
}
function changeStatusLink($status, $id)
{
    try {
        global $cn;
        $sql = "update link set status = ? where id = ?";
        $result = $cn->prepare($sql);
        $result->bindValue(1, $status);
        $result->bindValue(2, $id);
        $result->execute();
        return true;
    } catch (PDOException $e) {
        return false;
    }
}
function getChatTicketsByIdAdmin($ticketId)
{
    global $cn;
    $sql = "select * from chat_tickets where id = ? AND sender = 1 ORDER BY id DESC ";
    $result = $cn->prepare($sql);
    $result->bindValue(1, $ticketId);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetch();
    }
    return false;
}
function getTicketById($id) {
    global $cn;
    $stmt = $cn->prepare("SELECT * FROM tickets WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
function changeStatusTicket($status, $id)
{
    try {
        global $cn;
        $sql = "update tickets set status = ? where id = ?";
        $result = $cn->prepare($sql);
        $result->bindValue(1, $status);
        $result->bindValue(2, $id);
        $result->execute();
        return true;
    } catch (PDOException $e) {
        return false;
    }
}
function changeStatusUser($status, $id)
{
    try {
        global $cn;
        $sql = "update users_info_public set status = ? where userID = ?";
        $result = $cn->prepare($sql);
        $result->bindValue(1, $status);
        $result->bindValue(2, $id);
        $result->execute();
        return true;
    } catch (PDOException $e) {
        return false;
    }
}