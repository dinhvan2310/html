var isBusying = false;

function quay() {
    if (!isBusying) {
        isBusying = true;
        var response = {
            Successfully: true,
            Status: null,
            GiftPart: {
                Id: 0,
                Point: 30,
                Name: Math.floor(Math.random() * 9) + 1, //"5",
                Label: "30",
                Frequency: 0,
                CampaignId: null,
            },
            TotalPoint: 0,
        };
        setTimeout(function() {
            if (1 == 1) {
                if (response.Successfully) {
                    hieu_ung.setStopPoint({
                        coupon_id: response.GiftPart.Name
                    });

                    $("#ketqua").html(".");
                    hieu_ung.play();

                    setTimeout(function() {
                        isBusying = false;
                        var messageResult = "Bạn vừa quay vào ô  ";

                        switch (response.GiftPart.Name) {
                            case 1:
                                messageResult =
                                    messageResult +
                                    "BALO THIÊN THƯ.  \n Hãy kiểm tra hòm thư sau 24h để nhận phần quà.";
                                break;
                            case 2:
                                messageResult =
                                    messageResult +
                                    "XM8 LÔI THẦN.  \n Hãy kiểm tra hòm thư sau 24h để nhận phần quà.";
                                break;
                            case 3:
                                messageResult =
                                    messageResult +
                                    "XE MCLAREN VÀNG.  \n Hãy kiểm tra hòm thư sau 24h để nhận phần quà.";
                                break;
                            case 4:
                                messageResult =
                                    messageResult +
                                    "ĐẠO CHÍCH LỤC.  \n   Hãy kiểm tra hòm thư sau 24h để nhận phần quà.";
                                break;
                            case 5:
                                messageResult =
                                    messageResult +
                                    "GÓI CHU TƯỚC.  \n Hãy kiểm tra hòm thư sau 24h để nhận phần quà.";
                                break;
                            case 6:
                                messageResult =
                                    messageResult +
                                    "M4A1 ĐỘC DƯỢC.  \n Hãy kiểm tra hòm thư sau 24h để nhận phần quà.";
                                break;
                            case 7:
                                messageResult =
                                    messageResult +
                                    "GÓI THANH LONG . \n  Hãy kiểm tra hòm thư sau 24h để nhận phần quà.";
                                break;
                            case 8:
                                messageResult =
                                    messageResult +
                                    "QUỶ DỌA XOA.  \n Hãy kiểm tra hòm thư sau 24h để nhận phần quà.";
                                break;
                            case 9:
                                messageResult =
                                    messageResult +
                                    "MOTO HỖN MÃNG. \n Hãy kiểm tra hòm thư sau 24h để nhận phần quà.";
                                break;
                            default:
                                messageResult = "Error!";
                                break;
                        }
                        var myText = messageResult;
                        Swal.fire(myText);

                        Swal.fire({
                            icon: "success",
                            title: "THÔNG BÁO", // tiêu đề
                            html: "<h3><b>" + myText + "</b></h3>",
                            showDenyButton: false,
                            confirmButtonText: `Xác Nhận`,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location = "hetluot.php";
                            }
                        });

                        // $('#ketqua').alert(messageResult);
                    }, 5000);
                } else {
                    var messageResult = "Không thành công!";
                    // if (response.Status === "Campaign_DoAction_BeLimitedMaximumPlayInDay") {
                    //     messageResult = "<p>Hôm nay bạn đã tham gia vòng quay may mắn</p> <p class='strong-title'>Vui lòng quay lại sau</p>";
                    // }
                    $("#ketqua").html(messageResult);
                    isBusying = false;
                }
            } else {
                isBusying = false;
            }
        }, 0);
    }
}