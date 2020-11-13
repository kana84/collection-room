<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('collections')->insert([
            [
                'user_id' => 1,
                'item_cd' => "kodomo-bee:10040481",
                'item_url' => "https://item.rakuten.co.jp/kodomo-bee/cbaa00001/",
                'image_url' => "https://thumbnail.image.rakuten.co.jp/@0_mall/kodomo-bee/cabinet/new83/cbaa00001-600r.jpg?_ex=128x128",
                'item_name' => "���ȥ�å��ѥ�� �����ˡ� ��� �ܥȥॹ �ݥ��å� 10ʬ�� ������ �ˤλ� ���λ� ���å� �ڹ�Ҷ��� �Ҥɤ��� �� �� �� �� 90cm 100cm 110cm 120cm 130cm 140cm 150cm 160cm �����ȥ�å��ѥ�ġ�",
                'item_price' => 799,
            ],
            [
                'user_id' => 2,
                'item_cd' => "gbt-dko:10042846",
                'item_url' => "https://item.rakuten.co.jp/gbt-dko/25496/",
                'image_url' => "https://thumbnail.image.rakuten.co.jp/@0_mall/gbt-dko/cabinet/hobby/25496_1.jpg?_ex=128x128",
                'item_name' => "�ڴ���ֶᡪ��11�������ͽ�� ���ꥹ�ޥ��ĥ꡼ 180cm ˭�٤ʻ޿� 2020ver.�� ���饷�å������� ��� �ɥ��ĥȥ��ҥĥ꡼ �����ʥ��ȥ��å� �ʤ� ���륶�� �ĥ꡼ Alsace ������� �̡��ɥĥ꡼ �̲� ����� ornament Xmas tree",
                'item_price' => 16800,
            ],
            [
                'user_id' => 3,
                'item_cd' => "lindt-chocolate:10000932",
                'item_url' =>  "https://item.rakuten.co.jp/lindt-chocolate/9700304/",
                'image_url' => "https://thumbnail.image.rakuten.co.jp/@0_mall/lindt-chocolate/cabinet/lindor_tasting/9700304_23.jpg?_ex=128x128",
                'item_name' => "����̵�� ���� Lindt ���祳�졼�� ���ɡ��� 22��23������ �ƥ����ƥ��󥰥��åȡڥ��祳 ���ե� ���襤�� ������� ���ۻ� ���� ������ �ץ����ե� ���� �ץ쥼��� �������� lindor �֥��� �İ��� �࿦ ���ꥹ�ޥ� ���ꥹ�ޥ�2020 ������ ���ĥ��祳 ��������",
                'item_price' => 2980,
            ],
            [
                'user_id' => 4,
                'item_cd' => "prime-market:10004645",
                'item_url' => "https://item.rakuten.co.jp/prime-market/swt-079/",
                'image_url' => "https://thumbnail.image.rakuten.co.jp/@0_mall/prime-market/cabinet/harada01/swt-079.jpg?_ex=128x128",
                'item_name' => "�ϥ���饹�� �ϥ���Υ饹�� �ϥ�� �饹�� ���� ������ �� ��� �ץ�ߥ��ॻ�쥯����� PS2(���å�����:������ �� ���2����12��24����/�ۥ磻�ȥ��祳�졼��1����8����/�ץ�ߥ���1����8����)���ȡ��ե������ϥ�� ���ͤΤ���� ���ۻ� ����̵��",
                'item_price' => 5100,
            ],
            [
                'user_id' => 5,
                'item_cd' => "rl-waffle:10000107",
                'item_url' => "https://item.rakuten.co.jp/rl-waffle/0-set-kobe/",
                'image_url' => "https://thumbnail.image.rakuten.co.jp/@0_mall/rl-waffle/cabinet/2019-03m/600_ota_01-r.jpg?_ex=128x128",
                'item_name' => "������̵���ۤ����󤻥������� ������ͥ�åե륻�å� �������� �࿦ ���� ���ۻ� ���֤� ���� ���ե� �ץ쥼��� | ��åե� ��ˤ� ��åե륱���� ������ �л���ˤ� ������� �βۻ� �ͤ��碌 ���ˤ��֤� �������ץ쥼��� �֥饦�ˡ� ������ ��ǯ�� ���ꥹ�ޥ�",
                'item_price' => 2730,
            ],
            [
                'user_id' => 6,
                'item_cd' => "shaddy:10233720",
                'item_url' => "https://item.rakuten.co.jp/shaddy/147641080/",
                'image_url' => "https://thumbnail.image.rakuten.co.jp/@0_mall/shaddy/cabinet/20catalog/010/207644072.jpg?_ex=128x128",
                'item_name' =>  "ŷ���太���� �ޤ�䤫����(340g) TM-30 ����̵�� ��� ���ۻ� �ۻ��ޤ� �²ۻ� �Ƥ��ۻ� �������� ���ե� �ͤ��碌 ������ ������ ������ ����٤� ���� ���������� �࿦ ���ۤ� ž�� ���� ��ʬ��",
                'item_price' => 3240,
            ],
            [
                'user_id' => 7,
                'item_cd' => "1894ginza-sembikiya:10001131",
                'item_url' => "https://item.rakuten.co.jp/1894ginza-sembikiya/10001131/",
                'image_url' => "https://thumbnail.image.rakuten.co.jp/@0_mall/1894ginza-sembikiya/cabinet/04772478/imgrc0090563498.jpg?_ex=128x128",
                'item_name' => "������̵���϶����ɥ������ ��¾Ƥ����祳�饵�֥� : ��ɥ�� ���ۻ� ���ե� ��ˤ� ������",
                'item_price' => 4320,
            ],
            [
                'user_id' => 8,
                'item_cd' => "aikuru:10308056",
                'item_url' => "https://item.rakuten.co.jp/aikuru/ap6244-072-85/",
                'image_url' => "https://thumbnail.image.rakuten.co.jp/@0_mall/aikuru/cabinet/aikuru-sp/csa-15.jpg?_ex=128x128",
                'item_name' => "����ˤ������ۻҡ�����̵�� ���եȡۥ��� �Ʋۻҵ͹礻 ���塼�ȥ��쥯�����23�� ��CSA-15��� ������ ������ˤ� ���ꥹ�ޥ� ���֤� ��ˤ� ���֤� �л���ˤ� ���ե� �뺧��ˤ� ��ŵ�֤� ���汢�� ˡ�� ������ �����ˤ� ��� ���� �ۻ��ޤ� ���� �ͤ��碌��",
                'item_price' => 2000,
            ],
            [
                'user_id' => 9,
                'item_cd' => "ec-fellini:10000912",
                'item_url' => "https://item.rakuten.co.jp/ec-fellini/55_2257_12/",
                'image_url' => "https://thumbnail.image.rakuten.co.jp/@0_mall/ec-fellini/cabinet/55_2257_12/55_2257_12_01.jpg?_ex=128x128",
                'item_name' => "�ڥͥ��ݥ���fellini(�ե��꡼��)���٤Ϥ������ߤĤ��ˡ�®�����ӥᥤ����Υӥ���ȥ饹�ȥ�å��ǥ˥� �����ˡ� �ѥ�� �쥮�ѥ� ������ ��ǥ����� ���륨��ѥ�� ��������ѥ�� �쥮�� ��ǥ������ե��å����",
                'item_price' => 2178,
            ],
            [
                'user_id' => 10,
                'item_cd' => "ryuryu-shop:10128981",
                'item_url' => "https://item.rakuten.co.jp/ryuryu-shop/204945-1/",
                'image_url' => "imageUrl": "https://thumbnail.image.rakuten.co.jp/@0_mall/ryuryu-shop/cabinet/hsmq-c/204945-1a.jpg?_ex=128x128",
                'item_name' => "��11/11�����١ۡ�����̵���� ΢���ӿ��ե����ʡ��ѡ��������ԡ���(S?3L) ��ǥ������ե��å���� ryuryu ����� ���� ���ԡ��� 40�� �ޥ��˥ƥ� ��󥰥��� ���ä��� �ѡ����� Ĺµ ��� ΢���� ���ԡ��� �礭��������",
                'item_price' => 2189,
            ],
            [
                'user_id' => 11,
                'item_cd' => "cloverdepot:10002581",
                'item_url' => "https://item.rakuten.co.jp/cloverdepot/b2710034/",
                'image_url' => "https://thumbnail.image.rakuten.co.jp/@0_mall/cloverdepot/cabinet/b/b2710034.jpg?_ex=128x128",
                'item_name' => "�ڤ������б��ۥХ롼�󥷥�� ��ǥ����� Ĺµ �ȥåץ� �����奢�� �֥饦�� �ץ륪���С� ����� �ܥ�塼�� �Х롼�󥹥꡼�� �ե쥢 �礭�������� M L XL �� ��ǥ������ե��å���� �� ���å� ��� �İ��� ���襤�� ���դ亮��� ��ä��� ��Ͳİ��� ���åȥ���",
                'item_price' => 1980,
            ],
            [
                'user_id' => 12,
                'item_cd' => "zhongtian:10016523",
                'item_url' => "https://item.rakuten.co.jp/zhongtian/tbk20/",
                'image_url' => "imageUrl": "https://thumbnail.image.rakuten.co.jp/@0_mall/zhongtian/cabinet/bk/bk20.jpg?_ex=128x128",
                'item_name' => "������̵����¨��ȯ�� ��2color���ե��� �ȥåץ� �ѥե��꡼�� �֥饦�� ���� �졼������� ����ʡ� Ĺµ �֥饦�� �ڹ��ǥ������ե��å���� ������� ���� ���餻 �η����С� ���줤�� �ۥ磻�� �֥�å� �̶� �̳� �Ż� ��ͥե��ߥ˥� �١����å� ����ץ�",
                'item_price' => 1518,
            ],
            [
                'user_id' => 13,
                'item_cd' => "mydearest:10000218",
                'item_url' => "https://item.rakuten.co.jp/mydearest/lt0003/",
                'image_url' =>  "https://thumbnail.image.rakuten.co.jp/@0_mall/mydearest/cabinet/06688838/imgrc0075600632.jpg?_ex=128x128",
                'item_name' => "��󥰥��åȥ�������ǥ������ե��å���� Ĺµ �ȥåץ� ����˥å� �� �� �� �� ���졼 �ۥ磻�� �� �ե��å���ơ��� �������ȥ꡼ ����ץ� �����奢�� �ޥ��˥ƥ��� ǥ���� M L XL �礭�������� �ηϥ��С� ���ԡ��� ����",
                'item_price' => 1800,
            ],
            [
                'user_id' => 14,
                'item_cd' => "holic:10001286",
                'item_url' => "https://item.rakuten.co.jp/holic/r-0585-o/",
                'image_url' =>  "imageUrl": "https://thumbnail.image.rakuten.co.jp/@0_mall/holic/cabinet/main/op/r-0585-o.jpg?_ex=128x128",
                'item_name' => "��륷�륨�å��ѷ��ǥ��������˥å� �ɥ�ޥ󥹥꡼�� ���ԡ��� ���åȥ��� V�ͥå� ���� �ս� ��ǥ����� �ե��å���� ����[M�� 10/10]",
                'item_price' => 2074,
            ],
            [
                'user_id' => 15,
                'item_cd' => "clairmode:10003612",
                'item_url' => "https://item.rakuten.co.jp/clairmode/aw-27921000/",
                'image_url' => "https://thumbnail.image.rakuten.co.jp/@0_mall/clairmode/cabinet/04576411/05422946/12175029210-top_1.jpg?_ex=128x128",
                'item_name' => "������̵��/¨��ȯ��/������/��ŷ1�̡� ��͵��Υ���ǡ���������˥å�(�ͥå��쥹�դ�) �ս��� ��3�� M-LL ������ Ĺµ ��ǥ������ե��å���� �ȥåץ� ����˥å� ���åȥ��� �˥å� ��󥰾� ��ä��� �η����С� %off 0129",
                'item_price' => 3900,
            ],

        ]);
    }
}
