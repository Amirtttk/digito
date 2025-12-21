<?php
function getAllFaq($type)
{
    global $cn;
    $sql = "select * from faq where status = 1 AND type=?";
    $result = $cn->prepare($sql);
    $result->bindValue(1,$type);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
function selectMobileContactUs($id){
    try {
        global $cn;
        $sql="select * from contactus where mobile = ? order by id DESC ";
        $result = $cn->prepare($sql);
        $result->bindParam(1, $id);
        $result->execute();
        if($result->rowCount()>0){
            return $result->fetch();
        }
    }catch (PDOException $e){
        return false;
    }
}
function checkLoginAttempts($ip, $time, $type = 'sms')
{
    try {
        global $cn;
        $sql = "SELECT * FROM request_login WHERE userIp = ? AND time >= ? AND type = ?";
        $result = $cn->prepare($sql);
        $result->bindValue(1, $ip);
        $result->bindValue(2, $time - 600);
        $result->bindValue(3, $type);
        $result->execute();
        if ($result->rowCount() > 0) {
            return count($result->fetchAll());
        }
    } catch (\Throwable $e) {
        return false;
    }
}
function getUserByMobile($mobile)
{
    try {
        global $cn;
        $sql = "select * from users_info_public where userMobile = ? and userAccLvl = 4";
        $result = $cn->prepare($sql);
        $result->bindValue(1, $mobile);
        $result->execute();
        if ($result->rowCount() > 0) {
            return $result->fetch();
        }
    } catch (\Throwable $e) {
        return false;
    }
}
function selectAdressByUserId($id){
    try {
        global $cn;
        $sql="select * from address where userID = ? order by id DESC ";
        $result = $cn->prepare($sql);
        $result->bindParam(1, $id);
        $result->execute();
        if($result->rowCount()>0){
            return $result->fetchAll();
        }
    }catch (PDOException $e){
        return false;
    }
}
function getAllProvinces() {
    global $cn;  // کانکشن دیتابیس
    $sql = "SELECT * FROM province ORDER BY name ASC";
    $result = $cn->prepare($sql);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    return false;
}
function DeletedAddress($id){
    global $cn;
    $sql="delete from address where id = ?";
    $resulte = $cn->prepare($sql);
    $resulte->bindValue(1,$id);
    $resulte->execute();
    if ($resulte->rowCount() > 0){
        return true;
    }
    return false;
}
function getAllBlogCategories(){
    global $cn;
    $sql = "SELECT * FROM blog_categories where status = 1 ORDER BY id DESC";
    $result = $cn->query($sql);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
function getAllBlog()
{
    global $cn;
    $sql = "select * from blog where status = 1 ORDER BY id DESC LIMIT 20  ";
    $result = $cn->query($sql);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
function selectProductInCareqoryId($id)
{
    global $cn;
    $sql = "select * from blog where blog_categories_id =? and status = 1 ORDER BY id DESC";
    $result = $cn->prepare($sql);
    $result->bindValue(1,$id);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
function selectProductInCareqoryIdIsNull()
{
    global $cn;
    $sql = "select * from blog where status = 1 ORDER BY id DESC";
    $result = $cn->query($sql);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
function getAllBlogTop()
{
    global $cn;
    $sql = "select * from blog where status = 1 ORDER BY id LIMIT 10  ";
    $result = $cn->query($sql);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
function getOneBlogForSlug($slug,$id)
{
    try {
        global $cn;
        $sql = "select * from blog where slug = ? AND id=?";
        $result = $cn->prepare($sql);
        $result->bindValue(1, $slug);
        $result->bindValue(2, $id);
        $result->execute();
        if ($result->rowCount() > 0) {
            return $result->fetch();
        }
    } catch (PDOException $e) {
        return false;
    }
}
function getRelatedBlog($categories_id,$id){
    global $cn;
    $sql="select * from blog where blog_categories_id = ? and status = 1 and id != ?";
    $result = $cn->prepare($sql);
    $result->bindValue(1,$categories_id);
    $result->bindValue(2,$id);
    $result->execute();
    if($result->rowCount()>0){
        return $result->fetchAll();
    }
    return false;
}
function getAllBanner($type)
{
    global $cn;
    $sql = "SELECT * FROM `banner` WHERE status = 1 AND type = ? ORDER by id DESC ";
    $result = $cn->prepare($sql);
    $result->bindValue(1,$type);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
function getAllBaneerProduct()
{
    global $cn;
    $sql = "SELECT * FROM `advertising_banner` WHERE status = 1 ORDER by id DESC ";
    $result = $cn->query($sql);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
function getAllCategory() {
    global $cn;
    $sql = "SELECT * FROM category WHERE status = 1 AND (parent_id IS NULL OR parent_id = 0) ORDER BY id "; // فرض بر این است که نام جدول "categories" است
    $stmt = $cn->prepare($sql);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return [];
}
function getSubcategories($parentId) {
    global $cn;
    $sql = "SELECT * FROM category WHERE parent_id = :parentId AND status = 1 ORDER BY id ASC";
    $stmt = $cn->prepare($sql);
    $stmt->execute(['parentId' => $parentId]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function getAllBrand()
{
    global $cn;
    $sql = "select * from brand where status = 1 ORDER BY id DESC ";
    $result = $cn->query($sql);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
function getLatestProducts($limit = 10) {
    global $cn;
    $sql = "SELECT * FROM products WHERE status = 1 AND special = 2 ORDER BY created_at DESC LIMIT :limit";
    $stmt = $cn->prepare($sql);
    $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function getLatestProductsSpecial($limit = 10) {
    global $cn;
    $sql = "SELECT * FROM products WHERE status = 1 AND special = '1' ORDER BY created_at DESC LIMIT :limit";
    $stmt = $cn->prepare($sql);
    $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function getAllLink()
{
    global $cn;
    $sql = "select * from link where status = 1 ORDER BY id DESC ";
    $result = $cn->query($sql);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
function getOneProductBySlug($id,$slug){
    global $cn;
    $sql="select * from products where id=? and slug = ? ";
    $result = $cn->prepare($sql);
    $result->bindValue(1,$id);
    $result->bindValue(2,$slug);
    $result->execute();
    if($result->rowCount()>0){
        return $result->fetch();
    }
    return false;
}
function checkInProductFavourites($id)
{
    global $cn;
    $sql = "select * from favourtes where product_id = ? and user_id = ?";
    $resulte = $cn->prepare($sql);
    $resulte->bindValue(1, $id);
    $resulte->bindValue(2, $_SESSION['user_sending']);
    $resulte->execute();
    if ($resulte->rowCount() > 0) {
        return $resulte->fetch();
    }
    return false;
}
function removeFromFavourits($id)
{
    global $cn;
    $sql = "DELETE FROM `favourtes` WHERE id = ?";
    $resulte = $cn->prepare($sql);
    $resulte->bindValue(1, $id);
    $resulte->execute();
    if ($resulte->rowCount() > 0) {
        return $resulte->fetch();
    }
    return false;
}
function selectInProductFavouritesCount()
{
    global $cn;
    $sql = "select * from favourtes where user_id = ?";
    $resulte = $cn->prepare($sql);
    $resulte->bindValue(1, $_SESSION['user_sending']);
    $resulte->execute();
    if ($resulte->rowCount() > 0) {
        return $resulte->fetchAll();
    }
    return false;
}
function selectInProductFavourites()
{
    global $cn;
    $sql = "select * from favourtes where user_id = ?";
    $resulte = $cn->prepare($sql);
    $resulte->bindValue(1, $_SESSION['user_sending']);
    $resulte->execute();
    if ($resulte->rowCount() > 0) {
        return $resulte->fetchAll();
    }
    return false;
}
function getTickets($userID)
{
    global $cn;
    $sql = "SELECT t.*, 
                   COALESCE(ct.sender, 0) AS last_sender, 
                   COALESCE(ct.timeSend, '1970-01-01 00:00:00') AS last_message_time
            FROM tickets t
            LEFT JOIN (
                SELECT c1.ticketId, c1.sender, c1.timeSend
                FROM chat_tickets c1
                WHERE c1.id = (SELECT MAX(c2.id) FROM chat_tickets c2 WHERE c2.ticketId = c1.ticketId)
            ) ct ON t.id = ct.ticketId
            WHERE t.userID = ?
            ORDER BY (t.status = 1) DESC, (ct.sender = 1) DESC, ct.timeSend DESC";
    $result = $cn->prepare($sql);
    $result->bindValue(1, $userID);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
function getTicketsCode($ticketCode)
{
    global $cn;
    $sql = "select * from tickets where code_tickets=?";
    $result = $cn->prepare($sql);
    $result->bindValue(1, $ticketCode);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetch();
    }
    return false;
}
function getChatTickets($ticketId)
{
    global $cn;
    $sql = "select * from chat_tickets where ticketId=? ORDER BY ticketId DESC ";
    $result = $cn->prepare($sql);
    $result->bindValue(1, $ticketId);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
function getChatTicketsById($ticketId)
{
    global $cn;
    $sql = "select * from chat_tickets where id=? AND sender = 2 ORDER BY id DESC ";
    $result = $cn->prepare($sql);
    $result->bindValue(1, $ticketId);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetch();
    }
    return false;
}
function getFullCategoryPath($childId)
{
    global $cn;
    if (empty($childId)) {
        return null;
    }

    // --- مرحله ۱: دریافت دسته فرزند ---
    $stmt = $cn->prepare("SELECT * FROM category WHERE id = ?");
    $stmt->execute([$childId]);
    $child = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$child) {
        return null;
    }

    $result = [
        'main'   => null,
        'parent' => null,
        'child'  => $child,
    ];

    if (!empty($child['parent_id'])) {
        $stmt = $cn->prepare("SELECT * FROM category WHERE id = ?");
        $stmt->execute([$child['parent_id']]);
        $parent = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($parent) {
            $result['parent'] = $parent;

            if (!empty($parent['parent_id'])) {
                $stmt = $cn->prepare("SELECT * FROM category WHERE id = ?");
                $stmt->execute([$parent['parent_id']]);
                $main = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($main) {
                    $result['main'] = $main;
                }
            }
        }
    }

    return $result;
}
function getOneRecordFromCart($user_id, $product_id)
{
    try {
        global $cn;
        $sql = "select * from cart where user_id = ? and product_id = ?";
        $result = $cn->prepare($sql);
        $result->bindValue(1, $user_id);
        $result->bindValue(2, $product_id);
        $result->execute();
        if ($result->rowCount() > 0) {
            return $result->fetch();
        }
    } catch (PDOException $e) {
        return false;
    }
}