@extends('covan.covan_nav')
@section('title','Trang duyệt bảng điểm chi tiết')
@section('noidung')
<div class="container">
	<h3 class="text-sm-center tieude" style="margin:0 auto -1% auto;">Bảng điểm chi tiết lần 2</h3>
	<div class="row justify-content-sm-center tieudebangthongke">
		<h5>
			<i style="font-size: 100%;" class="far fa-user"></i> {{$hocvien->hoten}}<br>
			&emsp;&emsp; MSSV: {{$hocvien->mssv}}
		</h5>
	</div>
<form action="{{asset('covan/updatediemlan2')}}" method="post">
	@csrf
	<input type="hidden" name="id_bangdiem_chitiet_lan2" value="{{$bangdiem_chitiet_hocvien->id}}">
	<div class="table-responsive">
<table class="table table-bordered" id="bangcham">
  <thead>
    <tr style="background-color:#014c7f;color: white; font-size: 11px;">
   		<th scope="col" class="align-middle text-center">Mục</th>
      	<th scope="col" class="align-middle text-center">Nội dung đánh giá</th>
      	<th scope="col" class="align-middle text-center">Mức điểm</th>
      	<th scope="col" class="align-middle text-center">Chấm lần 1</th>
      	<th scope="col" class="align-middle text-center" width="1%">CVHT chấm</th>
    </tr>
  </thead>
  <tbody style="font-size: 12px;">
    <tr>
    	<th rowspan="17" class="align-middle text-center" style="font-size: 20px;color:#014c7f;">1</th>
      	<th scope="row" colspan="4" style="background-color:#014c7f;color: white;"> Đánh giá về ý thức học tập  (Điều 5 – Quy chế đánh giá kết quả rèn luyện…)</th>
    </tr>
    <tr>
      	<th scope="row" colspan="4" style="background-color:#014c7f;color: white;">a.Tinh thần thái độ và kết quả học tập</th>
      	
    </tr>
    <tr>
	    <th scope="row">- Đi học đầy đủ, đúng giờ, nghiêm túc trong giờ học</th>
	    <td>10</td>
	    <td>{{$bangdiem_chitiet_hocvien->p1_a_1}}</td>
	    <td><input type="number" value="{{$bangdiem_chitiet_hocvien->p1_a_1}}" min="0" max="10" name="p1_a_1" id="p1_a_1"></td>
    </tr>
    <tr>
	    <th scope="row">- Không vi phạm quy chế về thi, kiểm tra</th>
	    <td>10</td>
	    <td>{{$bangdiem_chitiet_hocvien->p1_a_2}}</td>
	    <td><input type="number" value="{{$bangdiem_chitiet_hocvien->p1_a_2}}" min="0" max="10" name="p1_a_2" id="p1_a_2"></td>
    </tr>
    <tr>
	    <th scope="row" colspan="4" style="background-color:#014c7f;color: white;">- Kết quả học tập trong học kỳ: Điểm trung bình chung học kỳ (ĐTBCHK)</th>
    </tr>
    <tr>
	    <th scope="row">&emsp;&bull; ĐTBCHK đạt ≥ 3,60</th>
	    <td>8</td>
	    @if($bangdiem_chitiet_hocvien->p1_a_3 == 8)
	    <td>{{$bangdiem_chitiet_hocvien->p1_a_3}}</td>
	    @else
	    <td></td>
	    @endif
	    @if($bangdiem_chitiet_hocvien->p1_a_3 == 8)
	    <td><input checked="checked" type="radio" name="a" value="8"></td>
	    @else
	    <td><input type="radio" name="a" value="8"></td>
		@endif
    </tr>
    <tr>
	    <th scope="row">&emsp;&bull; ĐTBCHK đạt  từ  3,20 đến 3,59</th>
	    <td>6</td>
	    @if($bangdiem_chitiet_hocvien->p1_a_3 == 6)
	    <td>{{$bangdiem_chitiet_hocvien->p1_a_3}}</td>
	    @else
	    <td></td>
	    @endif
	    @if($bangdiem_chitiet_hocvien->p1_a_3 == 6)
	    <td><input checked="checked" type="radio" name="a" value="6"></td>
	    @else
	    <td><input type="radio" name="a" value="6"></td>
	    @endif
    </tr>
    <tr>
	    <th scope="row">&emsp;&bull; ĐTBCHK đạt  từ  2,50 đến 3,19</th>
	    <td>4</td>
	    @if($bangdiem_chitiet_hocvien->p1_a_3 == 4)
	    <td>{{$bangdiem_chitiet_hocvien->p1_a_3}}</td>
	    @else
	    <td></td>
	    @endif
	    @if($bangdiem_chitiet_hocvien->p1_a_3 == 4)
	    <td><input checked="checked" type="radio" name="a" value="4"></td>
	    @else
	    <td><input type="radio" name="a" value="4"></td>
	    @endif
    </tr>
    <tr>
	    <th scope="row">&emsp;&bull; ĐTBCHK đạt  từ  2,00 đến 2,49 </th>
	    <td>2</td>
	    @if($bangdiem_chitiet_hocvien->p1_a_3 == 2)
	    <td>{{$bangdiem_chitiet_hocvien->p1_a_3}}</td>
	    @else
	    <td></td>
	    @endif
	    @if($bangdiem_chitiet_hocvien->p1_a_3 == 2)
	    <td><input checked="checked" type="radio" name="a" value="2"></td>
	    @else
	    <td><input type="radio" name="a" value="2"></td>
	    @endif
    </tr>
    <tr>
	    <th scope="row">&emsp;&bull; ĐTBCHK dưới 2,00 </th>
	    <td>0</td>
	    @if($bangdiem_chitiet_hocvien->p1_a_3 == 0)
	    <td>{{$bangdiem_chitiet_hocvien->p1_a_3}}</td>
	    @else
	    <td></td>
	    @endif
	    @if($bangdiem_chitiet_hocvien->p1_a_3 == 0)
	    <td><input checked="checked" type="radio" name="a" value="0"></td>
	    @else
	    <td><input type="radio" name="a" value="0"></td>
	    @endif
    </tr>
    <tr>
	    <th scope="row">- Có cố gắng, vượt khó trong học tập (có ĐTB học kỳ sau lớn hơn học kỳ trước đó;  đối với SV năm thứ nhất,  học kỳ I  không có điểm F)</th>
	    <td>2</td>
	    <td>{{$bangdiem_chitiet_hocvien->p1_a_4}}</td>
	    <td><input type="number" value="{{$bangdiem_chitiet_hocvien->p1_a_4}}" min="0" max="2" name="p1_a_4" id="p1_a_4"></td>
    </tr>
    <tr>
      	<th scope="row" colspan="4" style="background-color:#014c7f;color: white;">b. Học tập  nâng cao trình độ ngoại ngữ, tin học </th>
    </tr>
    <tr>
	    <th scope="row" colspan="4" style="background-color:#014c7f;color: white;">- Hoàn thành chứng chỉ ngoại ngữ, tin học</th>
    </tr>
    <tr>
	    <th scope="row">&emsp;&bull; Chứng chỉ A (và  tương đương)</th>
	    <td>4</td>
	    <td>{{$bangdiem_chitiet_hocvien->chungchi_a}}</td>
	    <td><input type="number" value="{{$bangdiem_chitiet_hocvien->chungchi_a}}" min="0" max="4" name="chungchi_a" id="chungchi_a"></td>
    </tr>
    <tr>
	    <th scope="row">&emsp;&bull; Chứng chỉ B (và  tương đương)</th>
	    <td>5</td>
	    <td>{{$bangdiem_chitiet_hocvien->chungchi_b}}</td>
	    <td><input type="number" value="{{$bangdiem_chitiet_hocvien->chungchi_b}}" min="0" max="5" name="chungchi_b" id="chungchi_b"></td>
    </tr>
    <tr>
	    <th scope="row">&emsp;&bull; Chứng chỉ C (và tương đương)</th>
	    <td>6</td>
	    <td>{{$bangdiem_chitiet_hocvien->chungchi_c}}</td>
	    <td><input type="number" value="{{$bangdiem_chitiet_hocvien->chungchi_c}}" min="0" max="6" name="chungchi_c" id="chungchi_c"></td>
    </tr>
    <tr>
	    <th scope="row">- Riêng chứng chỉ ngoại ngữ, Chứng nhận Toefl  ≥ 450 điểm; IELTS ≥ 4,5; TOEIC ≥ 450 điểm.</th>
	    <td>10</td>
	    <td>{{$bangdiem_chitiet_hocvien->toeic}}</td>
	    <td><input type="number" value="{{$bangdiem_chitiet_hocvien->toeic}}" min="0" max="10" name="toeic" id="toeic"></td>
    </tr>
    <tr>
	    <th scope="row" colspan="3" style="font-size: 13px;color: red;">Điểm  cộng tối đa của mục 1 là 30 điểm</th>
	    <?php $tong_1 = $bangdiem_chitiet_hocvien->p1_a_1 + $bangdiem_chitiet_hocvien->p1_a_2 + $bangdiem_chitiet_hocvien->p1_a_3 + $bangdiem_chitiet_hocvien->p1_a_4 + $bangdiem_chitiet_hocvien->chungchi_a + $bangdiem_chitiet_hocvien->chungchi_b + $bangdiem_chitiet_hocvien->chungchi_c + $bangdiem_chitiet_hocvien->toeic?>
	    @if($tong_1 <= 30)
	    <td style="color: red">{{$tong_1}}</td>
	    @else
	    <td style="color: red">Số điểm vượt quá 30</td>
	    @endif
	    <td id="muc_1" style="color: red">{{$tong_1}}</td>
    </tr>
    <tr>
    	<th rowspan="5" class="align-middle text-center" style="font-size: 20px;color:#014c7f;">2</th>
      	<th scope="row" colspan="4" style="background-color:#014c7f;color: white;">Đánh giá về ý thức và kết quả chấp hành nội quy, quy chế trong nhà trường (Điều 6 – Quy chế đánh giá kết quả rèn luyện…)</th>
    </tr>
    <tr>
      	<th scope="row">- Không vi phạm và có ý thức tham gia thực hiện nghiêm túc các quy định của Lớp, nội quy, quy chế của Trường, Khoa và các tổ chức trong nhà trường</th>
      	<td>15</td>
      	<td>{{$bangdiem_chitiet_hocvien->p2_1}}</td>
      	<td><input type="number" value="{{$bangdiem_chitiet_hocvien->p2_1}}" min="0" max="15" name="p2_1" id="p2_1"></td>
    </tr>
    <tr>
	    <th scope="row" colspan="5" style="background-color:#014c7f;color: white;">- Sinh viên có tích cực tham gia các hoạt động tuyên truyền, vận động mọi người xung quanh thực hiện nghiêm túc nội quy, quy chế, các quy định của nhà trường về: </th>
    </tr>
    <tr>
	    <th scope="row">&emsp;&bull; Giữ gìn an ninh, trật tự nơi công cộng;</th>
	    <td>10</td>
	    <td>{{$bangdiem_chitiet_hocvien->p2_2_1}}</td>
	    <td><input type="number" value="{{$bangdiem_chitiet_hocvien->p2_2_1}}" min="0" max="10" name="p2_2_1" id="p2_2_1"></td>
    </tr>
    <tr>
	    <th scope="row">&emsp;&bull; Giữ gìn vệ sinh, bảo vệ cảnh quan môi trường, nếp sống văn minh (có xác nhận của đoàn thể, Khoa, Trường...).</th>
	    <td>10</td>
	    <td>{{$bangdiem_chitiet_hocvien->p2_2_2}}</td>
	    <td><input type="number" value="{{$bangdiem_chitiet_hocvien->p2_2_2}}" min="0" max="10" name="p2_2_2" id="p2_2_2"></td>
    </tr>
    <tr>
	    <th scope="row" colspan="3" style="font-size: 13px;color: red;">Điểm cộng tối đa của mục 2 là 25 điểm </th>
	    <?php $tong_2 = $bangdiem_chitiet_hocvien->p2_1 + $bangdiem_chitiet_hocvien->p2_2_1 +$bangdiem_chitiet_hocvien->p2_2_2 ?>
	    @if($tong_2 <= 25)
	    <td style="color: red">{{$tong_2}}</td>
	    @else
		<td style="color: red">Số điểm vượt quá 25</td>
		@endif
	    <td id="muc_2" style="color: red">{{$tong_2}}</td>
    </tr>
    <tr>
    	<th rowspan="9" class="align-middle text-center" style="font-size: 20px;color:#014c7f;">3</th>
      	<th scope="row" colspan="5" style="background-color:#014c7f;color: white;">Đánh giá về ý thức và kết quả tham gia các hoạt động chính trị - xã hội, văn hóa, văn nghệ, thể thao, phòng chống các tệ nạn xã hội (Điều 7 – Quy chế đánh giá kết quả rèn luyện…)</th>
    </tr>
    <tr>
      	<th scope="row">- Tham gia đầy đủ các hoạt động chính trị, xã hội, văn hóa, văn nghệ, thể thao các cấp từ Lớp, Chi hội, Chi đoàn trở lên tổ chức. </th>
      	<td>12</td>
      	<td>{{$bangdiem_chitiet_hocvien->p3_1}}</td>
      	<td><input type="number" value="{{$bangdiem_chitiet_hocvien->p3_1}}" min="0" max="12" name="p3_1" id="p3_1"></td>
    </tr>
    <tr>
	    <th scope="row" colspan="5" style="background-color:#014c7f;color: white;">- Là lực lượng nòng cốt trong các phong trào văn hóa, văn nghệ, thể thao:</th>
    </tr>
    <tr>
	    <th scope="row">&emsp;&bull; Cấp Chi đoàn, Chi hội, Đội, Nhóm, Câu lạc bộ.</th>
	    <td>4</td>
	    <td>{{$bangdiem_chitiet_hocvien->p3_2_1}}</td>
	    <td><input type="number" value="{{$bangdiem_chitiet_hocvien->p3_2_1}}" min="0" max="4" name="p3_2_1" id="p3_2_1"></td>
    </tr>
    <tr>
	    <th scope="row">&emsp;&bull; Cấp Khoa (và tương đương), Trường</th>
	    <td>5</td>
	    <td>{{$bangdiem_chitiet_hocvien->p3_2_2}}</td>
	    <td><input type="number" value="{{$bangdiem_chitiet_hocvien->p3_2_2}}" min="0" max="5" name="p3_2_2" id="p3_2_2"></td>
    </tr>
    <tr>
	    <th scope="row" colspan="5" style="background-color:#014c7f;color: white;">- Được khen thưởng trong các hoạt động phong trào</th>
    </tr>
    <tr>
	    <th scope="row">&emsp;&bull; Quyết định khen thưởng của Đoàn Khoa  (và tương đương)</th>
	    <td>6</td>
	    <td>{{$bangdiem_chitiet_hocvien->p3_3_1}}</td>
	    <td><input type="number" value="{{$bangdiem_chitiet_hocvien->p3_3_1}}" min="0" max="6" name="p3_3_1" id="p3_3_1"></td>
    </tr>
    <tr>
	    <th scope="row">&emsp;&bull; Giấy khen cấp Trường</th>
	    <td>8</td>
	    <td>{{$bangdiem_chitiet_hocvien->p3_3_2}}</td>
	    <td><input type="number" value="{{$bangdiem_chitiet_hocvien->p3_3_2}}" min="0" max="8" name="p3_3_2" id="p3_3_2"></td>
    </tr>
    <tr>
	    <th scope="row">&emsp;&bull; Giấy khen cấp cao hơn </th>
	    <td>10</td>
	    <td>{{$bangdiem_chitiet_hocvien->p3_3_3}}</td>
	    <td><input type="number" value="{{$bangdiem_chitiet_hocvien->p3_3_3}}" min="0" max="10" name="p3_3_3" id="p3_3_3"></td>
    </tr>
    <tr>
	    <th scope="row" colspan="3" style="font-size: 13px;color: red;">Điểm cộng tối đa của mục 3 là 20 điểm </th>
	    <?php $tong_3 = $bangdiem_chitiet_hocvien->p3_1 + $bangdiem_chitiet_hocvien->p3_2_1 + $bangdiem_chitiet_hocvien->p3_2_2 + $bangdiem_chitiet_hocvien->p3_3_1 + $bangdiem_chitiet_hocvien->p3_3_2 + $bangdiem_chitiet_hocvien->p3_3_3 ?>
	    @if($tong_3 <= 20)
	    <td style="color: red">{{$tong_3}}</td>
	    @else
		<td style="color: red">Số điểm vượt quá 20</td>
		@endif
	    <td id="muc_3" style="color: red">{{$tong_3}}</td>
    </tr>
    <tr>
    	<th rowspan="4" class="align-middle text-center" style="font-size: 20px;color:#014c7f;">4</th>
      	<th scope="row" colspan="5" style="background-color:#014c7f;color: white;">Đánh giá về phẩm chất công dân và quan hệ với cộng đồng (Điều 8 – Quy chế đánh giá kết quả rèn luyện…)</th>
    </tr>
    <tr>
      	<th scope="row">- Không vi phạm pháp luật của Nhà nước.</th>
      	<td>6</td>
      	<td>{{$bangdiem_chitiet_hocvien->p4_1}}</td>
      	<td><input type="number" value="{{$bangdiem_chitiet_hocvien->p4_1}}" min="0" max="6" name="p4_1" id="p4_1"></td>
    </tr>
    <tr>
	    <th scope="row">- Có tinh thần giúp đỡ bạn bè trong học tập, trong cuộc sống  </td>
	    <td>4</td>
	    <td>{{$bangdiem_chitiet_hocvien->p4_2}}</td>
	    <td><input type="number" value="{{$bangdiem_chitiet_hocvien->p4_2}}" min="0" max="4" name="p4_2" id="p4_2"></td>
    </tr>
    <tr>
	    <th scope="row">- Tham gia đội, nhóm, câu lạc bộ sinh hoạt hướng đến lợi ích cộng đồng (tham gia công tác xã hội ở Trường, nơi cư trú, địa phương).</td>
	    <td>10</td>
	    <td>{{$bangdiem_chitiet_hocvien->p4_3}}</td>
	    <td><input type="number" value="{{$bangdiem_chitiet_hocvien->p4_3}}" min="0" max="10" name="p4_3" id="p4_3"></td>
    </tr>
    <tr>
	    <th scope="row" colspan="3" style="font-size: 13px;color: red;">Điểm cộng tối đa của mục 4 là 15 điểm </th>
	    <?php $tong_4 = $bangdiem_chitiet_hocvien->p4_1 + $bangdiem_chitiet_hocvien->p4_2 + $bangdiem_chitiet_hocvien->p4_3 ?>
	    @if($tong_4 <= 15)
	    <td style="color: red">{{$tong_4}}</td>
	    @else
		<td style="color: red">Số điểm vượt quá 15</td>
		@endif
	    <td id="muc_4" style="color: red">{{$tong_4}}</td>
    </tr>
    <tr>
    	<th rowspan="4" class="align-middle text-center" style="font-size: 20px;color:#014c7f;">5</th>
      	<th scope="row" colspan="5" style="background-color:#014c7f;color: white;"> Đánh giá về ý thức và kết quả tham gia công tác phụ trách lớp, các đoàn thể, tổ chức trong Nhà trường … (Điều 9 – Quy chế đánh giá kết quả rèn luyện…)</th>
    </tr>
    <tr>
      	<th scope="row">- Là Lớp trưởng, Bí thư Chi đoàn, Ủy viên BCH Đoàn Trường, Ủy viên Ban Chấp hành Đoàn khoa, BCH Hội Sinh viên Trường, Liên Chi hội trưởng, Chi hội trưởng Hội Sinh viên, Đội trưởng các Đội, Nhóm, Chủ nhiệm các Câu lạc bộ thuộc Hội Sinh viên Trường đã hoàn thành nhiệm vụ được giao</th>
      	<td>10</td>
      	<td>{{$bangdiem_chitiet_hocvien->p5_1}}</td>
      	<td><input type="number" value="{{$bangdiem_chitiet_hocvien->p5_1}}" min="0" max="10" name="p5_1" id="p5_1"></td>
    </tr>
    <tr>
	    <th scope="row">- Là thành viên của Ban Cán sự lớp, Ban Chấp hành chi đoàn, Ban Chấp hành Liên Chi hội sinh viên, Chi hội sinh viên, Ban Chủ nhiệm các Đội, Nhóm, Câu lạc bộ (trừ các thành viên nêu  mục trên), đã hoàn thành nhiệm vụ được giao</td>
	    <td>6</td>
	    <td>{{$bangdiem_chitiet_hocvien->p5_2}}</td>
	    <td><input type="number" value="{{$bangdiem_chitiet_hocvien->p5_2}}" min="0" max="6" name="p5_2" id="p5_2"></td>
    </tr>
    <tr>
	    <th scope="row">- Được kết nạp Đảng, hoặc được công nhận Đoàn viên ưu tú</td>
	    <td>6</td>
	    <td>{{$bangdiem_chitiet_hocvien->p5_3}}</td>
	    <td><input type="number" value="{{$bangdiem_chitiet_hocvien->p5_3}}" min="0" max="6" name="p5_3" id="p5_3"></td>
    </tr>
    <tr>
	    <th scope="row" colspan="3" style="font-size: 13px;color: red;">Điểm cộng tối đa của mục 5 là 10 điểm</th>
	    <?php $tong_5 = $bangdiem_chitiet_hocvien->p5_1 + $bangdiem_chitiet_hocvien->p5_2 + $bangdiem_chitiet_hocvien->p5_3 ?>
	    @if($tong_5 <= 10)
	    <td style="color: red">{{$tong_5}}</td>
	    @else
		<td style="color: red">Số điểm vượt quá 10</td>
		@endif
	    <td id="muc_5" style="color: red">{{$tong_5}}</td>
    </tr>
    <tr>
      	<th scope="row" colspan="3" style="font-size: 13px;color: red;"> Cộng các mục 1,2,3,4,5</th>
      	<?php $tong_all = $bangdiem_chitiet_hocvien->p1_a_1 + $bangdiem_chitiet_hocvien->p1_a_2 + $bangdiem_chitiet_hocvien->p1_a_3 + $bangdiem_chitiet_hocvien->p1_a_4 + $bangdiem_chitiet_hocvien->chungchi_a + $bangdiem_chitiet_hocvien->chungchi_b + $bangdiem_chitiet_hocvien->chungchi_c + $bangdiem_chitiet_hocvien->toeic + $bangdiem_chitiet_hocvien->p2_1 + $bangdiem_chitiet_hocvien->p2_2_1 +$bangdiem_chitiet_hocvien->p2_2_2 + $bangdiem_chitiet_hocvien->p3_1 + $bangdiem_chitiet_hocvien->p3_2_1 + $bangdiem_chitiet_hocvien->p3_2_2 + $bangdiem_chitiet_hocvien->p3_3_1 + $bangdiem_chitiet_hocvien->p3_3_2 + $bangdiem_chitiet_hocvien->p3_3_3 + $bangdiem_chitiet_hocvien->p4_1 + $bangdiem_chitiet_hocvien->p4_2 + $bangdiem_chitiet_hocvien->p4_3 +$bangdiem_chitiet_hocvien->p5_1 + $bangdiem_chitiet_hocvien->p5_2 + $bangdiem_chitiet_hocvien->p5_3 ?>
      	@if($tong_all <= 100)
      	<td style="color: red">{{$tong_all}}</td>
      	@else
      	<td style="color: red">Số điểm vượt 100</td>
      	@endif
      	<td id="all" style="color: red;">{{$tong_all}}</td> 	
    </tr>
  </tbody>
</table>
</table>

<div id="tong_hidden">
	
</div>
<div id="nutchamdiem">
	<button class='btn btn-block btn-info col-sm-6 offset-sm-3'>Hoàn tất chấm điểm</button>
</div>
</form>
<table class="table table-bordered">
  <thead>
    <tr style="background-color:#014c7f;color: white; font-size: 13px;">
   		<th scope="col" colspan="2" class="align-middle text-center">Kết luận</th>
   		<th</th>
    </tr>
</thead>
<tbody>
	<tr style="font-size: 15px;">
		<th width="50%">Điểm rèn luyện: {{$tong_all}}</th>
		
		<th width="50%">Xếp loại: 
			@if($tong_all >= 90)
				Xuất sắc
			@elseif(($tong_all >= 80) && ($tong_all <= 89))
				Tốt
			@elseif(($tong_all >= 65) && ($tong_all <= 79))
				Khá
			@elseif(($tong_all >= 50) && ($tong_all <= 64))
				Trung bình
			@elseif(($tong_all >= 35) && ($tong_all <= 49))
				Yếu
			@else
				Kém
			@endif
		</th>
	</tr>
</tbody>
</table>
<script>
	$(document).ready(function() {
		$('#bangcham').change(function(event) {
			//Tính mục 1
			var p1_a_1 = Math.floor($('#p1_a_1').val());
			var p1_a_2 = Math.floor($('#p1_a_2').val());
			var a = $('[name="a"]:radio:checked').val();
			var p1_a_3 = Math.floor(a);
			var p1_a_4 = Math.floor($('#p1_a_4').val());
			var chungchi_a = Math.floor($('#chungchi_a').val());
			var chungchi_b = Math.floor($('#chungchi_b').val());
			var chungchi_c = Math.floor($('#chungchi_c').val());
			var toeic = Math.floor($('#toeic').val());
			var tong_1 = p1_a_1 + p1_a_2 + p1_a_3 + p1_a_4 + chungchi_a + chungchi_b + chungchi_c + toeic;
			if (tong_1 > 30) {
				$("#muc_1").html('Vượt quá 30 điểm');
				alert('Xem lại điểm vì muc 1 vượt quá 30 điểm');
				return false;
			}
			else{
				$("#muc_1").html(tong_1);
			}
			//TÍnh mục 2		
			var p2_1 = Math.floor($('#p2_1').val());
			var p2_2_1 = Math.floor($('#p2_2_1').val());
			var p2_2_2 = Math.floor($('#p2_2_2').val());
			var tong_2 = p2_1 + p2_2_1 + p2_2_2;
			if (tong_2 > 25) {
				$("#muc_2").html('Vượt quá 25 điểm');
				alert('Xem lại điểm vì mục 2 vượt quá 25 điểm');
				return false;
			}
			else{
				$("#muc_2").html(tong_2);
			}
			//Tính mục 3
			var p3_1 = Math.floor($('#p3_1').val());
			var p3_2_1 = Math.floor($('#p3_2_1').val());
			var p3_2_2 = Math.floor($('#p3_2_2').val());
			var p3_3_1 = Math.floor($('#p3_3_1').val());
			var p3_3_2 = Math.floor($('#p3_3_2').val());
			var p3_3_3 = Math.floor($('#p3_3_3').val());
			var tong_3 = p3_1 + p3_2_1 + p3_2_2 + p3_3_1 + p3_3_2 + p3_3_3;
			if (tong_3 > 20) {
				$("#muc_3").html('Vượt quá 20 điểm');
				alert('Xem lại điểm vì mục 3 vượt quá 20 điểm');
				return false;
			}
			else{
				$("#muc_3").html(tong_3);
				console.log(p3_3_2);
			}
			//Tính mục 4
			var p4_1 = Math.floor($('#p4_1').val());
			var p4_2 = Math.floor($('#p4_2').val());
			var p4_3 = Math.floor($('#p4_3').val());
			var tong_4 = p4_1 + p4_2 + p4_3;
			if (tong_4 > 15) {
				$("#muc_4").html('Vượt quá 15 điểm');
				alert('Xem lại điểm vì mục 4 vượt quá 15 điểm');
				return false;
			}
			else{
				$("#muc_4").html(tong_4);
			}
			//Tính mục 5
			var p5_1 = Math.floor($('#p5_1').val());
			var p5_2 = Math.floor($('#p5_2').val());
			var p5_3 = Math.floor($('#p5_3').val());
			var tong_5 = p5_1 + p5_2 + p5_3;
			if (tong_5 > 10) {
				$("#muc_5").html('Vượt quá 10 điểm');
				alert('Xem lại điểm vì mục 5 vượt quá 10 điểm');
				return false;
			}
			else{
				$("#muc_5").html(tong_5);
			}
			//Tính tổng các mục
			var tong_all = tong_1 + tong_2 + tong_3 + tong_4 + tong_5;
			if (tong_all > 100) {
				$("#all").html('Vượt quá 100 điểm');
				
			}
			else{
				$("#all").html(tong_all);
				$("#tong_hidden").html("<input type='hidden' name='tongcacmuc' value="+tong_all+">");
			}
			//Xuất hiện nút khi tất cả điều kiện ko vượt quá số điểm cho phép
			// if ((tong_1 <= 30) && (tong_2 <= 25) && (tong_3 <= 20) && (tong_4 <= 15) && (tong_5 <= 10)) {
			// 	$("#nutchamdiem").html("<button class='btn btn-block btn-info col-sm-6 offset-sm-3'>Hoàn tất chấm điểm</button>");
			// }
		});
	});
</script>
</div>
@endsection