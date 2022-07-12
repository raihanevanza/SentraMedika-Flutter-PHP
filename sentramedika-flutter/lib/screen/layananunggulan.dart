import 'package:sentramedika/constant.dart';
import 'package:sentramedika/widgets/my_header.dart';
import 'package:flutter/material.dart';
import 'package:flutter_svg/flutter_svg.dart';

class LayananUnggulan extends StatefulWidget {
  @override
  _LayananUnggulanState createState() => _LayananUnggulanState();
}

class _LayananUnggulanState extends State<LayananUnggulan> {
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
                    "Layanan Unggulan",
                    style: kTitleTextstyle,
                  ),
                  SizedBox(height: 20),
                  PreventCard(
                    text:
                        "Kemoterapi adalah jenis terapi yang dilakukan dokter untuk membunuh sel kanker yang telah berkembang.",
                    image: "assets/images/kemo.jpg",
                    title: "Kemoterapi",
                  ),
                  PreventCard(
                    text:
                        "MRI (Magnetic Resonance Imaging) merupakan suatu alat diagnostik mutakhir untuk memeriksa dan mendeteksi tubuh anda dengan menggunakan medan magnet yang besar dan gelombang frekuensi radio, tanpa operasi, penggunaan sinar X, ataupun bahan radioaktif.",
                    image: "assets/images/mri.jpg",
                    title: "MRI 1,5 Tesla",
                  ),
                  PreventCard(
                    text:
                        "Cath-lab / angiography adalah prosedur atau tindakan kardiologi diagnostic invasive dengan menggunakan sinar-x untuk menampilkan gambaran pembuluh darah di berbagai organ tubuh antara lain, jantung, otak dan ginjal. ",
                    image: "assets/images/cath.jpg",
                    title: "Cath Lab",
                  ),
                  PreventCard(
                    text:
                        "ESWL adalah sebagai salah satu terapi penyembuhan penyakit batu ginjal. ",
                    image: "assets/images/eswl.jpg",
                    title: "Extracorporeal Shock Wave Lithotripsy (ESWL)",
                  ),
                  PreventCard(
                    text:
                        "Katarak adalah lensa mata yang menjadi keruh, sehingga cahaya tidak dapat menembusnya, bervariasi sesuai tingkatannya dari sedikit sampai keburaman total. ",
                    image: "assets/images/phaco.jpg",
                    title: "Phacoemulsifikasi",
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

class PreventCard extends StatelessWidget {
  final String image;
  final String title;
  final String text;
  const PreventCard({
    Key key,
    this.image,
    this.title,
    this.text,
  }) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Padding(
      padding: const EdgeInsets.only(bottom: 10),
      child: SizedBox(
        height: 156,
        child: Stack(
          alignment: Alignment.centerLeft,
          children: <Widget>[
            Container(
              height: 136,
              width: double.infinity,
              decoration: BoxDecoration(
                borderRadius: BorderRadius.circular(20),
                color: Colors.white,
                boxShadow: [
                  BoxShadow(
                    offset: Offset(0, 8),
                    blurRadius: 24,
                    color: kShadowColor,
                  ),
                ],
              ),
            ),
            Image.asset(image),
            Positioned(
              left: 130,
              child: Container(
                padding: EdgeInsets.symmetric(horizontal: 20, vertical: 15),
                height: 136,
                width: MediaQuery.of(context).size.width - 170,
                child: Column(
                  crossAxisAlignment: CrossAxisAlignment.start,
                  mainAxisAlignment: MainAxisAlignment.spaceBetween,
                  children: <Widget>[
                    Text(
                      title,
                      style: kTitleTextstyle.copyWith(
                        fontSize: 16,
                      ),
                    ),
                    Expanded(
                      child: Text(
                        text,
                        maxLines: 6,
                        overflow: TextOverflow.ellipsis,
                        style: TextStyle(
                          fontSize: 12,
                        ),
                      ),
                    ),
                  ],
                ),
              ),
            ),
          ],
        ),
      ),
    );
  }
}
