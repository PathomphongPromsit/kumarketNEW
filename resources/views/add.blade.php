<html>
<head>
  <title>nae</title>

  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css" rel="stylesheet">
  <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>


</head>
<body>

      <div class="ui card container" style="width:25%;margin:5%">
          <div class="content">
              <form class="ui form">
                <h4 class="ui dividing header">เพิ่มรายชื่อ</h4>
                  <div class="inline field">

                    <div class="two fields">
                      <div class="field">
                        <label>ชื่อ</label>
                        <input type="text" name="first-name" placeholder="ชื่อ">
                      </div>

                      <div class="field">
                        <label>นามสกุล</label>
                        <input type="text" name="last-name" placeholder="นามสกุล">
                      </div>
                    </div>
                    <br>

                    <div class="two fields">
                      <div class="field">
                        <label>เลขบัตรประชาชน</label>
                        <input type="text" name="id-card" placeholder="เลขประชาชน">
                      </div>

                      <div class="field">
                        <label>เบอร์โทรศัพท์</label>
                        <input type="text" name="phone" placeholder="เบอร์โทรศัพท์">
                      </div>
                    </div>

                    <div class="two fields">
                      <div class="field">
                        <label>ชื่อร้าน</label>
                        <input type="text" name="shop-name" placeholder="ชื่อร้าน">
                      </div>

                      <div class="field">
                        <label>เลขร้าน</label>
                        <input type="text" name="shop-number" placeholder="เลขร้าน">
                      </div>
                    </div>


                </div>
                  <br>
                  <div class="inline field">
                      <input id="submit" type="button" value="Submit"/>
                      <input type="reset" name="reset" value=" Reset "/>

                  </div>
              </form>
          </div>
      </div>



</body>
</html>
