import 'package:sentramedika/constant.dart';
import 'package:sentramedika/widgets/my_header.dart';
import 'package:flutter/material.dart';
import 'package:flutter_svg/flutter_svg.dart';

class RawatInap extends StatefulWidget {
  @override
  _RawatInapState createState() => _RawatInapState();
}

class _RawatInapState extends State<RawatInap> {
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
                    "Rawat Inap",
                    style: kTitleTextstyle,
                  ),
                  SizedBox(height: 20),
                  PreventCard(
                    text:
                        "● Start From Rp 1,600,000 \n● Jumlah : 1 tempat tidur \n● 3 Kali makan @ 2 porsi, 2 kali snack pagi/sore. \n● 1 Toilet + shower \n● 1 Sofa + meja,kursi, credensa, partisi.",
                    image: "assets/images/vvip.jpg",
                    title: "VVIP",
                  ),
                  PreventCard(
                    text:
                        "● Start From IDR 1,050,000 \n● Jumlah : 9 tempat tidur \n● 3 Kali makan @ 1 porsi, 2 kali snack. \n● 1 Toilet + shower \n● 1 Sofa + meja,kursi, credensa, partisi.",
                    image: "assets/images/vip.jpg",
                    title: "VIP",
                  ),
                  PreventCard(
                    text:
                        "● Start From Rp 650,000 \n● Jumlah : 24 tempat tidur \n● 3 Kali makan @ 1 porsi, 2 kali snack. \n● 1 Toilet + shower",
                    image: "assets/images/kelas1.jpg",
                    title: "Kelas 1",
                  ),
                  PreventCard(
                    text:
                        "● Start From Rp. 400,000 \n● Jumlah : 35 tempat tidur \n● 3 Kali makan @ 1 porsi, 2 kali snack. \n● 1 Toilet + shower",
                    image: "assets/images/kelas2.jpg",
                    title: "Kelas 2",
                  ),
                  PreventCard(
                    text:
                        "● Start From Rp 190,000 \n● Jumlah : 40 tempat tidur \n● 3 Kali makan @ 1 porsi, 2 kali snack. \n● 1 Toilet + shower",
                    image: "assets/images/kelas3.jpg",
                    title: "Kelas 3",
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
                        maxLines: 7,
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
