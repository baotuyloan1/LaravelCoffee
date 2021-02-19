<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            // [
            //     'name'=>'Culi Đặc Biệt',
            //     'productCateId'=>2,
            //     'price'=>217,
            //     'netWeight'=>1000,
            //     'howToRoast'=>'Rang nâu',
            //     'content'=>'Cà phê Sạch Culi Thượng Hạng có vị đắng đậm mạnh, mùi hương thơm nồng, cafein nhiều, chát, hậu vị ngọt.',
            //     'shelfLife'=>'06 tháng kể từ ngày đóng gói',
            //     'manufacturingDate'=>'2019/8/11',
            //     'taste'=>'Cà phê Sạch Culi Special đặc biệt có vị đắng đậm mạnh, mùi hương nồng, cafein vừa, chát, hậu vị ngọt.',
            //     'particleSize'=>'Hạt sàn 18, tỉ lệ hạt nát <3%',
            //     'producerId'=>'1'
            // ] ,

            // [
            //     'name'=>'Moka Cầu Đất',
            //     'productCateId'=>3,
            //     'price'=>550,
            //     'netWeight'=>1000,
            //     'howToRoast'=>'Rang nâu',
            //     'content'=>'Cà phê thơm ngon hơn khi uống nóng; mùi vị còn nguyên vẹn khi dùng trong thời gian 10-15 ngày kể từ ngày xay hạt; nước pha có nâu cánh gián, không sánh, không kẹo.',
            //     'shelfLife'=>'06 tháng kể từ ngày đóng gói',
            //     'manufacturingDate'=>'2019/8/11',
            //     'taste'=>' Moka Cầu Đất có mùi hương thơm nồng nàn quyến rủ, vị đắng nhẹ ,thơm ngọt và cafein vừa, chua thanh, hậu vị ngọt.',
            //     'particleSize'=>' Hạt sàn 20, tỉ lệ hạt nát 5%',
            //     'producerId'=>'1'
            // ] ,

            // [
            //     'name'=>'Robusta Đặc Biệt',
            //     'productCateId'=>4,
            //     'price'=>183,
            //     'netWeight'=>1000,
            //     'howToRoast'=>'Rang nâu',
            //     'content'=>'Cà phê thơm ngon hơn khi uống nóng; mùi vị còn nguyên vẹn khi dùng trong thời gian 07-10 ngày kể từ ngày xay hạt; nước pha có nâu cánh gián, không sánh, không kẹo.',
            //     'shelfLife'=>'06 tháng kể từ ngày đóng gói',
            //     'manufacturingDate'=>'2019/8/11',
            //     'taste'=>'Cà phê Sạch Robusta Nâu đặc biệt có vị đắng đậm vừa, mùi hương thơm nhẹ, cafein vừa, chát, hậu vị ngọt.',
            //     'particleSize'=>'Hạt sàn 18, tỉ lệ hạt nát 5%.',
            //     'producerId'=>'2'
            // ] ,

            // [
            //     'name'=>'Arabica Đặc Biệt (Cầu Đất)',
            //     'productCateId'=>1,
            //     'price'=>331,
            //     'netWeight'=>1000,
            //     'howToRoast'=>'Rang nâu',
            //     'content'=>'Cafe Sạch Arabica Nâu Medium có vị ngọt, chua thanh và mùi hương thơm nồng nàn quyến rũ, mùi vị thơm ngọt kết hợp với vị đăng nhẹ, cafein thấp, hậu vị ngọt.',
            //     'shelfLife'=>'06 tháng kể từ ngày đóng gói',
            //     'manufacturingDate'=>'2019/8/11',
            //     'taste'=>'Cà phê Sạch Robusta Nâu đặc biệt có vị đắng đậm vừa, mùi hương thơm nhẹ, cafein vừa, chát, hậu vị ngọt.',
            //     'particleSize'=>'Sàn 18, hạt nát <3%',
            //     'producerId'=>'2'
            // ] ,

            // [
            //     'name'=>'Truyền Thống 1',
            //     'productCateId'=>7,
            //     'price'=>213,
            //     'netWeight'=>1000,
            //     'roast'=>'Rang nâu',
            //     'content'=>'Cà phê thơm ngon hơn khi uống nóng; mùi vị còn nguyên vẹn khi dùng trong thời gian 10-15 ngày kể từ ngày xay hạt; nước pha có nâu cánh gián, không sánh, không kẹo.',
            //     'shelfLife'=>'06 tháng kể từ ngày đóng gói',
            //     'manufacturingDate'=>'2019/11/12',
            //     'taste'=>'Coffee tree truyền thống số 1 có mùi hương thơm vừa, vị đắng đậm đà thơm ngọt và cafein vừa, chát, hậu vị ngọt',
            //     'particleSize'=>'Hạt sàn 20, tỉ lệ hạt nát 5%.',
            //     'producerId'=>'2',
            //     'quantity'=>200,
            //     'ingredient'=>'100% Cà phê sạch Robusta, Arabica'
            // ] ,

            // [
            //     'name'=>'Truyền Thống 2',
            //     'productCateId'=>7,
            //     'price'=>227,
            //     'netWeight'=>1000,
            //     'roast'=>'Rang nâu',
            //     'content'=>'Cà phê thơm ngon hơn khi uống nóng; mùi vị còn nguyên vẹn khi dùng trong thời gian 10-15 ngày kể từ ngày xay hạt; nước pha có nâu cánh gián, không sánh, không kẹo.',
            //     'shelfLife'=>'06 tháng kể từ ngày đóng gói',
            //     'manufacturingDate'=>'2019/11/12',
            //     'taste'=>'Coffee tree truyền thống số 2 có mùi hương thơm nồng nàn quyến rủ, vị đắng vừa thơm ngọt và cafein vừa, chát, hậu vị ngọt.',
            //     'particleSize'=>'Hạt sàn 20, tỉ lệ hạt nát 5%.',
            //     'producerId'=>'2',
            //     'quantity'=>200,
            //     'ingredient'=>'100% Cà phê sạch Robusta, Arabica'
            // ] ,

            // [
            //     'name'=>'Truyền Thống 3',
            //     'productCateId'=>7,
            //     'price'=>234,
            //     'netWeight'=>1000,
            //     'roast'=>'Rang nâu',
            //     'content'=>'Cà phê thơm ngon hơn khi uống nóng; mùi vị còn nguyên vẹn khi dùng trong thời gian 10-15 ngày kể từ ngày xay hạt; nước pha có nâu cánh gián, không sánh, không kẹo.',
            //     'shelfLife'=>'06 tháng kể từ ngày đóng gói',
            //     'manufacturingDate'=>'2019/11/12',
            //     'taste'=>'Coffee tree truyền thống số 2 có mùi hương thơm nồng nàn quyến rủ, vị đắng vừa thơm ngọt và cafein vừa, chát, hậu vị ngọt.',
            //     'particleSize'=>'Hạt sàn 20, tỉ lệ hạt nát 5%.',
            //     'producerId'=>'2',
            //     'quantity'=>300,
            //     'ingredient'=>'100% Cà phê sạch Robusta, Arabica'
            // ] 

            //     [
            //     'name'=>'Cappuccino G7 hazelnut 216g',
            //     'productCateId'=>8,
            //     'price'=>56,
            //     'netWeight'=>216,
            //     'roast'=>'Rang nâu',
            //     'content'=>'Cà phê thơm ngon hơn khi uống nóng; mùi vị còn nguyên vẹn khi dùng trong thời gian 10-15 ngày kể từ ngày xay hạt; nước pha có nâu cánh gián, không sánh, không kẹo.',
            //     'shelfLife'=>'06 tháng kể từ ngày đóng gói',
            //     'manufacturingDate'=>'2019/11/12',
            //     'taste'=>' hazelnut',
            //     'particleSize'=>'bột',
            //     'producerId'=>'1',
            //     'quantity'=>300,
            //     'ingredient'=>'',
            //     'sold'=>0
            // ] 



        ]);


        // DB::table('images')->insert([
            // [
            //     'name' => 'img/products/Arabica/arabica-cau-dat-2.png',
            //     'productId'=> 7
            // ],
            // [
            //     'name'=>'img/products/Arabica/hinh-900x900-3.png',
            //     'productId'=>7
            // ],
            // [
            //     'name'=> 'img/products/Arabica/hinh-900x900-caphe-robusta.png',
            //     'productId'=>7
            // ],
            // [
            //     'name'=> 'img/products/Arabica/Sequence-01.00_02_08_06.Still016.png',
            //     'productId'=>7
            // ],
            // [
            //     'name'=> 'img/products/Arabica/so-che-ca-phe-nguyen-chat-coffeetree-cau-dat.jpg',
            //     'productId'=>7
            // ],
            // [
            //     'name'=> 'img/products/Moka/moka.jpg',
            //     'productId'=>2
            // ],
            // [
            //     'name'=> 'img/products/Robusta/robusta-buon-ma-thuot.png',
            //     'productId'=>7
            // ],
            // [
            //     'name'=> 'img/products/Culi/so-che-ca-phe-nguyen-chat-coffeetree-cau-dat.jpg',
            //     'productId'=>1
            // ]
            // [
            //     'name'=> 'truyenthong1/acoffeetree-truyen-thong-so1.png',
            //     'productId'=>4,
            // ],
            // [
            //     'name'=> 'truyenthong1/cf-1024x858.jpg',
            //     'productId'=>4,
            // ],
            // [
            //     'name'=> 'truyenthong1/coffee-tree-so1-0.jpg',
            //     'productId'=>4,
            // ],
            // [
            //     'name'=> 'truyenthong2/aso-2.jpg',
            //     'productId'=>5,
            // ],
          
            // [
            //     'name'=> 'truyenthong2/coffee-tree-so1.jpg',
            //     'productId'=>5,
            // ],
            // [
            //     'name'=> 'truyenthong2/coffee-tree-so1-0.jpg',
            //     'productId'=>5,
            // ],
            // [
            //     'name'=> 'truyenthong3/coffee-tree-so1-2.jpg',
            //     'productId'=>5,
            // ],
            // [
            //     'name'=> 'truyenthong3/atruyenthong3.jpg',
            //     'productId'=>6,
            // ]

        //      [
        //         'name'=> 'cpn_G7/ca-phe-cappuccino-g7-216g-18g-x-12-goi-201905101438060599.jpg',
        //         'productId'=>8,
        //      ],
        //      [
        //         'name'=> 'cpn_G7/ca-phe-cappuccino-g7-216g-18g-x-12-goi-201905101438062559.jpg',
        //         'productId'=>8,
        //      ],
        //      [
        //         'name'=> 'cpn_G7/ca-phe-cappuccino-g7-216g-18g-x-12-goi-201905101438063239.jpg',
        //         'productId'=>8,
        //     ]



        // ]) ;

        $this->call(userSeeder::class) ;
    }
}


class userSeeder extends Seeder {
    public function run() {
        DB::table('users')->insert([
          [  'name'=>"Admin",
            'email'=>"admin@gmail.com" ,
            'roleId' => 2 ,
            'password'=>bcrypt('admin') ] 
            

        ]) ;
    }
}