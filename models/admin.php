<?php
function getAllBanner()
{
    global $cn;
    $sql = "select * from banner ORDER BY id DESC";
    $result = $cn->query($sql);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
function getAllAdvertisingBanner()
{
    global $cn;
    $sql = "select * from advertising_banner ORDER BY id DESC";
    $result = $cn->query($sql);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
function getAllBlogCategories(){
    global $cn;
    $sql = "SELECT * FROM blog_categories ORDER BY id DESC";
    $result = $cn->query($sql);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
function getAllFaq()
{
    global $cn;
    $sql = "select * from faq";
    $result = $cn->query($sql);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
function getAllLink()
{
    global $cn;
    $sql = "select * from link";
    $result = $cn->query($sql);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
function getAllForwarding()
{
    global $cn;
    $sql = "select * from forwarding";
    $result = $cn->query($sql);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
function getAllBrand()
{
    global $cn;
    $sql = "select * from brand ORDER BY id DESC";
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
    $sql = "select * from blog ORDER BY id DESC";
    $result = $cn->query($sql);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
function getAllBlogCategoriesByStatus(){
    global $cn;
    $sql = "SELECT * FROM blog_categories where status = 1 ORDER BY id DESC";
    $result = $cn->query($sql);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
function getAllCategoriesByParentId()
{
    global $cn;
    $sql = "select * from category where parent_id is null ORDER BY id DESC";
    $result = $cn->query($sql);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
function getAllBrandsByStatus()
{
    global $cn;
    $sql = "select * from brands where status = 1 ORDER BY id DESC";
    $result = $cn->query($sql);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
function getAllProducts()
{
    global $cn;
    $sql = "select * from products ORDER BY id DESC";
    $result = $cn->query($sql);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
function getAllContactUs1()
{
    global $cn;
    $sql = "select * from contactUs where status = 1 ORDER BY id DESC";
    $result = $cn->query($sql);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
function getAllContactUs2()
{
    global $cn;
    $sql = "select * from contactUs where status = 2 ORDER BY id DESC";
    $result = $cn->query($sql);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
function getAllTickets()
{
    global $cn;
    $sql = "SELECT t.*, ct.sender AS last_sender, ct.timeSend AS last_message_time
FROM tickets t
LEFT JOIN (
    SELECT c1.ticketId, c1.sender, c1.timeSend
    FROM chat_tickets c1
    WHERE c1.id = (SELECT MAX(c2.id) FROM chat_tickets c2 WHERE c2.ticketId = c1.ticketId)
) ct ON t.id = ct.ticketId
WHERE t.status = 1
ORDER BY (ct.sender = 2) DESC, ct.timeSend DESC";
    $result = $cn->query($sql);
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
    $sql = "select * from chat_tickets where ticketId =? ORDER BY ticketId DESC";
    $result = $cn->prepare($sql);
    $result->bindValue(1, $ticketId);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
function getAllUsers()
{
    global $cn;
    $sql = "select * from users_info_public where userAccLvl = 4 ORDER BY userID DESC";
    $result = $cn->query($sql);
    $result->execute();
    if ($result->rowCount() > 0) {
        return $result->fetchAll();
    }
    return false;
}
