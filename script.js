function changeView() {
  var signInBox = document.getElementById("signInBox");
  var signUpBox = document.getElementById("signUpBox");

  signInBox.classList.toggle("d-none");
  signUpBox.classList.toggle("d-none");
}

function signUp() {
  var fname = document.getElementById("fname");
  var lname = document.getElementById("lname");
  var email = document.getElementById("email");
  var mobile = document.getElementById("mobile");
  var username = document.getElementById("username");
  var password = document.getElementById("password");

  //alert (fname.value);

  var f = new FormData();
  f.append("f", fname.value);
  f.append("l", lname.value);
  f.append("e", email.value);
  f.append("m", mobile.value);
  f.append("u", username.value);
  f.append("p", password.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == 200) {
          var response = request.responseText;
          //alert(response);
          if (response == "Success") {
              document.getElementById("msg1").innerHTML = "Registration Successfully";
              document.getElementById("msg1").className = "alert alert-success";
              document.getElementById("msgDiv1").className = "d-block";

              fname.value = "";
              lname.value = "";
              email.value = "";
              mobile.value = "";
              username.value = "";
              password.value = "";

          } else {
          document.getElementById("msg1").innerHTML = response;
          document.getElementById("msgDiv1").className = "d-block";
          }
      }
  }

  request.open("POST", "signUpProcess.php", true);
  request.send(f);
}

function signIn() {

  var un = document.getElementById("un");
  var pw = document.getElementById("pw");
  var rm = document.getElementById("rm");

  //alert(un.value);

  var f = new FormData();
  f.append("u", un.value);
  f.append("p", pw.value);
  f.append("r", rm.value);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
      if (request.readyState == 4 & request.status == 200) {
          var response = request.responseText;
          //alert(response);
          if (response == "Success") {
              window.location = "index.php";
          }else {
              document.getElementById("msg2").innerHTML = response;
              document.getElementById("msgDiv2").className = "d-block";
          }
      }
  }

  request.open("POST", "signInProcess.php", true);
  request.send(f);

}

function adminSignIn(){
  
  var un = document.getElementById("un");
  var pw = document.getElementById("pw");

  // alert(un.value);

  var f = new FormData();
  f.append("u", un.value);
  f.append("p", pw.value);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function(){

    if(request.readyState == 4 & request.status == 200){
      var response = request.responseText;
      // alert(response);

      if (response == "Success") {
        window.location = "adminDashboard.php"
      } else {
        document.getElementById("msg").innerHTML = response;
        document.getElementById("msgDiv").className = "d-block";

      }
    }
  };

  request.open("POST", "adminSignInProcess.php", true);
  request.send(f);


}

function loadUser(){
  var request = new XMLHttpRequest();
  request.onreadystatechange = function(){

    if(request.readyState == 4 & request.status == 200){
      var response = request.responseText;
      // alert(response);
      document.getElementById("tb").innerHTML = response;
    }
  };

  request.open("POST", "loadUserProcess.php", true);
  request.send();
}

function updateUserStatus(){
  var userid = document.getElementById("uid");
  // alert(userid.value);

  var f =new FormData();
  f.append("u", userid.value);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function(){
    if (request.readyState == 4 & request.status == 200) {
      var response = request.responseText;
      // alert(response);

      if (response == "Deactive") {
        document.getElementById("msg").innerHTML = "User Deactivate Succefully";
        document.getElementById("msg").className = "alert alert-success";
        document.getElementById("msgDiv").className = "d-block";
        userid.value = "";
        loadUser();
        
      } else if (response == "Active") {
        document.getElementById("msg").innerHTML = "User Activate Succefully";
        document.getElementById("msg").className = "alert alert-success";
        document.getElementById("msgDiv").className = "d-block";
        userid.value = "";
        loadUser();
        
      }else {
        //Other responses
        document.getElementById("msg").innerHTML = response;
        document.getElementById("msg").className = "alert alert-danger";
        document.getElementById("msgDiv").className = "d-block";
      }
    }
  };

  request.open("POST", "updateUserStatusProcess.php", true);
  request.send(f);
}

function reload(){
  location.reload();
}

function brandReg(){
  var brand = document.getElementById("brand");
  // alert(brand.value);

  var f = new FormData();
  f.append("b",brand.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function(){
    if (request.readyState == 4 & request.status == 200) {
      var response = request.responseText;
      // alert(response);
      if (response == "Success") {
        document.getElementById("msg1").innerHTML = "Brand Registation Successfully";
        document.getElementById("msg1").className = "alert alert-success";
        document.getElementById("msgDiv1").className = "d-block";
        brand.value = ""

      } else {
        document.getElementById("msg1").innerHTML = response;
        document.getElementById("msg1").className = "alert alert-danger";
        document.getElementById("msgDiv1").className = "d-block";
      }

    }
  };

  request.open("POST", "brandRegisterProcess.php", true);
  request.send(f);
}

function categoryReg(){
  var category = document.getElementById("cat");
  // alert(cat.value);

  var f = new FormData();
  f.append("c",cat.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function(){
    if (request.readyState == 4 & request.status == 200) {
      var response = request.responseText;
      // alert(response);
      if (response == "Success") {
        document.getElementById("msg2").innerHTML = "Category Registation Successfully";
        document.getElementById("msg2").className = "alert alert-success";
        document.getElementById("msgDiv2").className = "d-block";
        cat.value = ""

      } else {
        document.getElementById("msg2").innerHTML = response;
        document.getElementById("msg2").className = "alert alert-danger";
        document.getElementById("msgDiv2").className = "d-block";
      }

    }
  };

  request.open("POST", "categoryRegisterProcess.php", true);
  request.send(f);
}

function colorReg(){
  var color = document.getElementById("color");
  // alert(color.value);

  var f = new FormData();
  f.append("c",color.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function(){
    if (request.readyState == 4 & request.status == 200) {
      var response = request.responseText;
      // alert(response);
      if (response == "Success") {
        document.getElementById("msg3").innerHTML = "Color Registation Successfully";
        document.getElementById("msg3").className = "alert alert-success";
        document.getElementById("msgDiv3").className = "d-block";
        color.value = ""

      } else {
        document.getElementById("msg3").innerHTML = response;
        document.getElementById("msg3").className = "alert alert-danger";
        document.getElementById("msgDiv3").className = "d-block";
      }

    }
  };

  request.open("POST", "colorRegisterProcess.php", true);
  request.send(f);

}

function sizeReg(){
  var size = document.getElementById("size");
  // alert(size.value);

  var f = new FormData();
  f.append("s",size.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function(){
    if (request.readyState == 4 & request.status == 200) {
      var response = request.responseText;
      // alert(response);
      if (response == "Success") {
        document.getElementById("msg4").innerHTML = "Size Registation Successfully";
        document.getElementById("msg4").className = "alert alert-success";
        document.getElementById("msgDiv4").className = "d-block";
        size.value = ""

      } else {
        document.getElementById("msg4").innerHTML = response;
        document.getElementById("msg4").className = "alert alert-danger";
        document.getElementById("msgDiv4").className = "d-block";
      }

    }
  };

  request.open("POST", "sizeRegisterProcess.php", true);
  request.send(f);
}

function regProduct() {
  var pname = document.getElementById("pname");
  var brand = document.getElementById("brand");
  var cat = document.getElementById("cat");
  var color = document.getElementById("color");
  var size = document.getElementById("size");
  var desc = document.getElementById("desc");
  var img = document.getElementById("img");

  //alert (pname.value);

  var f = new FormData();
  f.append("p", pname.value);
  f.append("b", brand.value);
  f.append("c", cat.value);
  f.append("cl", color.value);
  f.append("s", size.value);
  f.append("de", desc.value);
  f.append("i", img.files[0]);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == 200) {
          var response = request.responseText;
          //alert(response);
          if (response == "Success") {
            alert("Product Registration Successfully");
            location.reload();
          } else {
            alert(response);
          }
      }
  };

  request.open("POST", "adminProductRegProcess.php", true);
  request.send(f);

}

function updateStock() {

  var pname = document.getElementById("selectProduct");
  var qty = document.getElementById("qty");
  var price = document.getElementById("uprice");

  // alert(pname.value);

  var f = new FormData();
  f.append("p", pname.value);
  f.append("q", qty.value);
  f.append("up", price.value);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function(){

    if(request.readyState == 4 & request.status == 200){
      var response = request.responseText;
      alert(response);
      location.reload();

      // if (response == "Success") {
      //   window.location = "adminDashboard.php"
      // } else {
      //   document.getElementById("msg").innerHTML = response;
      //   document.getElementById("msgDiv").className = "d-block";

      // }
    }
  };

  request.open("POST", "updateStockProcess.php", true);
  request.send(f);
  
}

function printDiv() {
  var fullContent = document.body.innerHTML;
  var printArea = document.getElementById("printArea").innerHTML;

  document.body.innerHTML = printArea;

  window.print();

  document.body.innerHTML = fullContent;
}

function loadProduct(x) {
  var page = x;

  var f = new FormData();
  f.append("p", page);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function(){

    if(request.readyState == 4 & request.status == 200){
      var response = request.responseText;
      // alert(response);
      document.getElementById("pid").innerHTML = response;
    }
  };

request.open("POST", "loadProductProcess.php", true);
request.send(f);

}

function searchProduct(x) {
  
  var page = x;
  var product = document.getElementById("product");

  // alert(page);
  // alert(product.value);

  var f = new FormData();
  f.append("p", product.value);
  f.append("pg", page);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function(){

    if(request.readyState == 4 & request.status == 200){
      var response = request.responseText;
      // alert(response);
      document.getElementById("pid").innerHTML = response;
    }
  };

request.open("POST", "searchProductProcess.php", true);
request.send(f);

}

function viewFilter() {
  document.getElementById("filterId");
  filterId.classList.toggle("d-none");

}

function advSearchProduct(x) {
  var page = x;
  var color = document.getElementById("color");
  var cat = document.getElementById("cat");
  var brand = document.getElementById("brand");
  var size = document.getElementById("size");
  var min = document.getElementById("min");
  var max = document.getElementById("max");

  //alert (pname.value);

  var f = new FormData();
  f.append("pg", page);
  f.append("co", color.value);
  f.append("cat", cat.value);
  f.append("b", brand.value);
  f.append("s", size.value);
  f.append("min", min.value);
  f.append("max", max.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == 200) {
          var response = request.responseText;
          // alert(response);
          document.getElementById("pid").innerHTML = response;
      }
  };

  request.open("POST", "advSearchProductProcess.php", true);
  request.send(f);


}

function uploadImg() {
  // alert("ok");
  var img = document.getElementById("imgUploader");

  var f = new FormData();
  f.append("i", img.files[0]);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == 200) {
          var response = request.responseText;
          // alert(response);
          if (response == "empty") {
            alert("Please select your Profile Image");
            
          } else {
            document.getElementById("i").src = response;
            img.value = "";
          }
      }
  };

  request.open("POST", "profileImgUploadProcess.php", true);
  request.send(f);

}

function updateData() {
  // alert("ok");
  var fname = document.getElementById("fname");
  var lname = document.getElementById("lname");
  var email = document.getElementById("email");
  var mobile = document.getElementById("mobile");
  var pw = document.getElementById("pw");
  var no = document.getElementById("no");
  var line1 = document.getElementById("line1");
  var line2 = document.getElementById("line2");
  // alert(fname.value);

  var f = new FormData();
  f.append("f", fname.value);
  f.append("l", lname.value);
  f.append("e", email.value);
  f.append("m", mobile.value);
  f.append("p", pw.value);
  f.append("n", no.value);
  f.append("l1", line1.value);
  f.append("l2", line2.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == 200) {
          var response = request.responseText;
          alert(response);
          reload();
      }
  };

  request.open("POST", "updateDataProcess.php", true);
  request.send(f);

}

function signOut() {
  // alert("ok");
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == 200) {
          var response = request.responseText;
          alert(response);
          window.location = "index.php"
      }
  };

  request.open("POST", "signOutProcess.php", true);
  request.send();


}

function addtoCart(x, indexQty) {
  var stockId = x;
  var qty = indexQty
  console.log(indexQty)

  if(qty == 0) {
    qty = document.getElementById("qty").value;
    console.log(qty)
  }

  if (qty > 0) {
    
    var f = new FormData();
    f.append("s", stockId);
    f.append("q", qty);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var response = request.responseText;
            // alert(response);
            if(response == "Cart Item Added Successfully"){
              swal("Success!", response, "success");
              document.getElementById("qty").value = "";
            } else {
              swal(response);
            }
        }
    };

    request.open("POST", "addtoCartProcess.php", true);
    request.send(f);

  } else {
    //empty qty
    alert("Please Enter Valid Quantity");
  }
}

function loadCart() {


  var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var response = request.responseText;
            // alert(response);
            document.getElementById("cartBody").innerHTML = response;
        }
    };

    request.open("POST", "loadCartProcess.php", true);
    request.send();
  
}

function incrementCartQty(x) {
  var cartId = x;
  var qty = document.getElementById("qty" + x);
  var newQty = parseInt(qty.value) + 1;
  // alert(newQty);


  var f = new FormData();
    f.append("c", cartId);
    f.append("q", newQty);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var response = request.responseText;
            // alert(response);
            if (response == "Success") {
              qty.value = parseInt(qty.value) + 1;
              loadCart();
            } else {
              alert(response);
            }
        }
    };

    request.open("POST", "updateCartQtyProcess.php", true);
    request.send(f);

}

function decrementCartQty(x) {
  var cartId = x;
  var qty = document.getElementById("qty" + x);
  var newQty = parseInt(qty.value) - 1;
  // alert(newQty);


  var f = new FormData();
    f.append("c", cartId);
    f.append("q", newQty);

    if (newQty > 0) {
      var request = new XMLHttpRequest();

      request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var response = request.responseText;
            // alert(response);
            if (response == "Success") {
              qty.value = parseInt(qty.value) - 1;
              loadCart();
            } else {
              alert(response);
            }
        }
      };

      request.open("POST", "updateCartQtyProcess.php", true);
      request.send(f);
    }

}

function removeCart(x){

  if (confirm("Are you sure deleting this item?")) {
    var f = new FormData();
    f.append("c", x);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var response = request.responseText;
            alert(response);
            reload();
        }
    };

    request.open("POST", "removeCartProcess.php", true);
    request.send(f);
    }

  
}

function checkOut() {
  // alert ("ok");

  var f = new FormData();
  f.append("cart", true);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == 200) {
          var response = request.responseText;
          // alert(response);
          var payment = JSON.parse(response);
          doCheckout(payment, "checkoutProcess.php");
      }
  };

  request.open("POST", "paymentProcess.php", true);
  request.send(f);
}


function doCheckout(payment, path) {
  // Payment completed. It can be a successful failure.
  payhere.onCompleted = function onCompleted(orderId) {
    console.log("Payment completed. OrderID:" + orderId);
    // Note: validate the payment and show success or failure page to the customer

    var f = new FormData();
    f.append("payment", JSON.stringify(payment));

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == 200) {
          var response = request.responseText;
          // alert(response);
          if (response == "Success") {
            reload();
          } else {
            alert(response);
          }
      }
    };

    request.open("POST", path, true);
    request.send(f);
  };

  // Payment window closed
  payhere.onDismissed = function onDismissed() {
    // Note: Prompt user to pay again or show an error page
    console.log("Payment dismissed");
  };

  // Error occurred
  payhere.onError = function onError(error) {
    // Note: show an error page
    console.log("Error:"  + error);
  };

  // Show the payhere.js popup, when "PayHere Pay" is clicked
  // document.getElementById('payhere-payment').onclick = function (e) {
    payhere.startPayment(payment);
  // };

}

function buyNow(stockId) {
  
  var qty = document.getElementById("qty");

  if (qty.value > 0) {
    
    var f = new FormData();
    f.append("cart", false);
    f.append("stockId", stockId);
    f.append("qty", qty.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var response = request.responseText;
            // alert(response);
            var payment = JSON.parse(response);
            payment.stock_id = stockId;
            payment.qty = qty.value;
            doCheckout(payment, "buynowProcess.php");
        }
    };

    request.open("POST", "paymentProcess.php", true);
    request.send(f);

  } else {
    //empty qty
    alert("Please Enter Valid Quantity");
  }
}