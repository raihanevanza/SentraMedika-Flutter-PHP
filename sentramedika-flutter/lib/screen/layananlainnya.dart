import 'package:sentramedika/constant.dart';
import 'package:sentramedika/widgets/my_header.dart';
import 'package:flutter/material.dart';
import 'package:flutter_svg/flutter_svg.dart';

class LayananLainnya extends StatefulWidget {
  @override
  _LayananLainnyaState createState() => _LayananLainnyaState();
}

class _LayananLainnyaState extends State<LayananLainnya> {
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
                    "Layanan Lainnnya",
                    style: kTitleTextstyle,
                  ),
                  SizedBox(height: 20),
                  PreventCard(
                    text:
                        "Fasilitas USG kandungan disediakan sebagai pelengkap pemeriksaan kandungan di poliklinik spesialis kebidanan dan kandungan RS Sentra Medika Cibinong yang berguna untuk memantau perkembangan janin dalam kandungan.",
                    image: "assets/images/usg.jpg",
                    title: "USG 4D",
                  ),
                  PreventCard(
                    text:
                        "Pelayanan Tumbuh Kembang dan Edukasi Terpadu diciptakan khusus untuk membantu orang tua dalam mengatasi permasalahan pada anak secara tepat dan akurat.",
                    image: "assets/images/tumbuh.jpg",
                    title: "Layanan Tumbuh Kembang Anak",
                  ),
                  PreventCard(
                    text:
                        "Klinik Skin Care RS Sentra Medika Cibinong sangat menyadari setiap individu memerlukan penanganan yang berbeda terutama kulit pada usia remaja, pria dan wanita dewasa. ",
                    image: "assets/images/skin.jpg",
                    title: "Klinik Skin Care",
                  ),
                  PreventCard(
                    text:
                        "Banyak calon ibu baru yang belum paham benar mengenai ASI. Di klinik laktas, akan mendapatkan banyak informasi yang dibutuhkan mengenai ASI dan menyusui, mulai dari manfaat ASI dan menyusui, cara menyusui yang benar, cara memerah ASI dan sebagainya.",
                    image: "assets/images/laktasi.jpg",
                    title: "Klinik Laktasi",
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
