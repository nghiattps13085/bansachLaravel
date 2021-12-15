  <?php
use Illuminate\Support\Facades\DB;
 $sp = DB::table('hang_hoa')->get();
 $lh = DB::table('loai_hang')->get();
 $kh = DB::table('khach_hang')->get();
 $order = DB::table('hoadon')->get();
    $listsp=count($sp);
    $listlh=count($lh);
    $listkh=count($kh);
    $listor=count($order);
  ?>  
    <div class="right__title">DASHBOARD</div>
                    <div class="right__cards">
                        <a class="right__card" href="?act=products">
                            <div class="right__cardTitle">Sản Phẩm</div>
                            <div class="right__cardNumber" id="countproduct"><?=$listsp?></div>
                            <div class="right__cardDesc">See more <img src="./admin/assets/arrow-right.svg" alt="">
                            </div>
                        </a>
                        <a class="right__card" href="?act=user">
                            <div class="right__cardTitle">Khách hàng</div>
                            <div class="right__cardNumber" id="countcustommer"><?=$listkh?></div>
                            <div class="right__cardDesc">See more <img src="./admin/assets/arrow-right.svg" alt="">
                            </div>
                        </a>
                        <a class="right__card" href="?act=category">
                            <div class="right__cardTitle">Loại hàng</div>
                            <div class="right__cardNumber" id="countcate"><?=$listlh?></div>
                            <div class="right__cardDesc">See more <img src="./admin/assets/arrow-right.svg" alt="">
                            </div>
                        </a>
                        <a class="right__card" href="?act=bill">
                            <div class="right__cardTitle">Hóa đơn</div>
                            <div class="right__cardNumber" id="countthunhap"><?=$listor?></div>
                            <div class="right__cardDesc">See more <img src="./admin/assets/arrow-right.svg" alt="">
                            </div>
                        </a>
                    </div>