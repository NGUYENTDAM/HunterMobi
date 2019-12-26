<form action="pages/qlTaiKhoan/xlThemMoi.php" method="get" onsubmit="return KiemTra();">
   <fieldset>
      <legend>Thêm mới tài khoản</legend>
      <div class="form-group">
         <span>Tên Đăng Nhập :</span>
         <input type="text" name="us" id="txtTen" />
      </div>
      <div class="form-group">
         <span>Mật Khẩu :</span>
         <input type="password" name="ps" id="txtPass" />
      </div>
      <div class="form-group">
         <span>Tên Hiển Thị :</span>
         <input type="text" name="name" id="txtTenHT" />
      </div>
      <div class="form-group">
         <span>Điện Thoại :</span>
         <input type="text" name="tel" id="txtDienThoai" />
      </div>
      <div class="form-group">
         <span>Email :</span>
         <input type="text" name="mail" id="txtEmail" />
      </div>
      <input type="submit" value="Thêm mới" />
      </div>
      <div id="error"></div>
   </fieldset>
</form>
<script type="text/javascript">
   function KiemTra() {
      var ten = document.getElementById("txtTen");
      var err = document.getElementById("error");
      if (ten.value == "") {
         err.innerHTML = "Tên không được rỗng";
         ten.focus();
         return false;
      } else
         err.innerHTML = "";

      return true;
   }
</script>