
<?php 
$path = $_SERVER['DOCUMENT_ROOT'].'/duan1_nhom13/';
include $path."Model/pdo.php";
include $path."Model/dayghe.php";
include $path."Model/ghe.php";
header('Content-Type: application/json');


// Lấy danh sách ghế

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id_lichchieu'];
    $seats = array();
    $listDayGhe = SelectDayGheBySuatChieu($id);
    foreach($listDayGhe as $dayGhe){
        $listGhe =  SelectGheByDayGhe($dayGhe['id_dayghe']);
        foreach($listGhe as $ghe){
            $seats[] = $ghe;
        }
    }

    echo json_encode($seats);
}

// Đặt ghế
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);

    $seatNumber = $data['seatNumber'];
    $customerName = $data['customerName'];

    $sql = "UPDATE seats SET status = 'reserved' WHERE seat_number = '$seatNumber' AND status = 'available'";
    $conn->query($sql);

    $seatId = $conn->insert_id;

    $sql = "INSERT INTO bookings (seat_id, customer_name) VALUES ('$seatId', '$customerName')";
    $conn->query($sql);

    echo json_encode(['message' => 'Seat booked successfully']);
}

?>