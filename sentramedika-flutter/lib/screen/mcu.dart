import 'package:sentramedika/constant.dart';
import 'package:sentramedika/widgets/my_header.dart';
import 'package:flutter/material.dart';
import 'package:flutter_svg/flutter_svg.dart';

class MCU extends StatefulWidget {
  @override
  _MCUState createState() => _MCUState();
}

class _MCUState extends State<MCU> {
  final controller = ScrollController();
  double offset = 0;

  @override
  void initState() {
    // TODO: implement initState
    super.initState();
    controller.addListener(onScroll);
  }

  @override
  void dispose() {
    // TODO: implement dispose
    controller.dispose();
    super.dispose();
  }

  void onScroll() {
    setState(() {
      offset = (controller.hasClients) ? controller.offset : 0;
    });
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: SingleChildScrollView(
        controller: controller,
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: <Widget>[
            MyHeader(
              image: "assets/icons/Drcorona.svg",
              textTop: "Layanan & Fasilitas",
              textBottom: "",
              offset: offset,
            ),
            Padding(
              padding: EdgeInsets.symmetric(horizontal: 20),
              child: Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: <Widget>[
                  Text(
                    "MCU",
                    style: kTitleTextstyle,
                  ),
                  SizedBox(height: 20),
                  Text(
                    'Dalam memenuhi kebutuhan masyarakat yang sadar kesehatan, RS Sentra Medika Cibinong menyediakan layanan Medical Check Up, pemeriksaan kesehatan yang bertujuan untuk mengetahui, memelihara, dan memantau kondisi kesehatan. Selain untuk mendeteksi kesehatan menyeluruh, terpadu, dan akurat sehingga berbagai kelainan dan penyakit dapat diketahui dapat cepat dan tepat.',
                    textAlign: TextAlign.justify,
                  ),
                  SizedBox(height: 20),
                  Text(
                    'Gaya hidup modern dan tingkat stres yang tinggi berdampak terhadap kesehatan kita, dikhawatirkan akan muncul berbagai penyakit degeneratif dan gangguan kesehatan lainnya. Pentingnya melakukan pemeriksaan kesehatan berkala adalah sebagai deteksi dini adanya suatu penyakit atau kondisi yang menyebabkan ketidakmampuan/kecacatan dan kematian, menilai faktor risiko terhadap penyakit tertentu, serta untuk memantau perkembangan kesehatan.',
                    textAlign: TextAlign.justify,
                  ),
                  SizedBox(height: 20),
                  Text(
                    'Medical Check Up di RS Sentra Medika Cibinong memiliki pilihan pemeriksaan kesehatan. Anda juga dapat memodifikasi paket kesehatan sesuai dengan kebutuhan atau keinginan Anda. Untuk menjaga kenyamanan, sebaiknya buat perjanjian terlebih dahulu bila Anda akan menjalani cek kesehatan di RS Sentra Medika Berikut beberapa pilihan paket Medical Check Up yang terdapat di RS Sentra Medika :',
                    textAlign: TextAlign.justify,
                  ),
                  SizedBox(height: 20),
                  Text(
                    '● Paket Basic',
                    textAlign: TextAlign.justify,
                  ),
                  Text(
                    '● Paket Deluxe',
                    textAlign: TextAlign.justify,
                  ),
                  Text(
                    '● Paket Executive',
                    textAlign: TextAlign.justify,
                  ),
                  Text(
                    '● Paket Uji Kesehatan Jantung',
                    textAlign: TextAlign.justify,
                  ),
                  Text(
                    '● Paket Pemeriksaan Paru',
                    textAlign: TextAlign.justify,
                  ),
                  Text(
                    '● Paket Saluran Cerna Hati',
                    textAlign: TextAlign.justify,
                  ),
                  Text(
                    '● Paket Pranikah',
                    textAlign: TextAlign.justify,
                  ),
                  Text(
                    '● Paket Narkoba',
                    textAlign: TextAlign.justify,
                  ),
                  SizedBox(height: 50),
                ],
              ),
            )
          ],
        ),
      ),
    );
  }
}
