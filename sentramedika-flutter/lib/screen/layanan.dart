import 'package:sentramedika/constant.dart';
import 'package:sentramedika/screen/layananlainnya.dart';
import 'package:sentramedika/screen/layananunggulan.dart';
import 'package:sentramedika/screen/mcu.dart';
import 'package:sentramedika/widgets/my_header.dart';
import 'package:flutter/material.dart';
import 'package:flutter_svg/flutter_svg.dart';
import 'package:sentramedika/screen/layananjam.dart';
import 'package:sentramedika/screen/rawatinap.dart';
import 'package:sentramedika/screen/rawatjalan.dart';

class Layanan extends StatefulWidget {
  @override
  _LayananState createState() => _LayananState();
}

class _LayananState extends State<Layanan> {
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
                    "Layanan & Fasilitas",
                    style: kTitleTextstyle,
                  ),
                  SizedBox(height: 20),
                  SingleChildScrollView(
                    scrollDirection: Axis.horizontal,
                    child: Row(
                      mainAxisAlignment: MainAxisAlignment.spaceBetween,
                      children: <Widget>[
                        MaterialButton(
                          onPressed: () {
                            Navigator.push(
                              context,
                              MaterialPageRoute(
                                  builder: (context) => LayananJam()),
                            );
                          },
                          child: SymptomCard(
                            image: "assets/images/24jam.png",
                            title: "Layanan \n24 Jam",
                            isActive: true,
                          ),
                        ),
                        Padding(padding: const EdgeInsets.all(8.0)),
                        MaterialButton(
                          onPressed: () {
                            Navigator.push(
                              context,
                              MaterialPageRoute(
                                  builder: (context) => RawatInap()),
                            );
                          },
                          child: SymptomCard(
                            image: "assets/images/rawatinap.png",
                            title: "Rawat Inap",
                          ),
                        ),
                      ],
                    ),
                  ),
                  SingleChildScrollView(
                    padding: EdgeInsets.only(
                      top: 20.0,
                    ),
                    scrollDirection: Axis.horizontal,
                    child: Row(
                      mainAxisAlignment: MainAxisAlignment.spaceBetween,
                      children: <Widget>[
                        MaterialButton(
                          onPressed: () {
                            Navigator.push(
                              context,
                              MaterialPageRoute(
                                  builder: (context) => RawatJalan()),
                            );
                          },
                          child: SymptomCard(
                            image: "assets/images/rawatjalan.png",
                            title: "Rawat Jalan",
                            isActive: true,
                          ),
                        ),
                        Padding(padding: const EdgeInsets.all(8.0)),
                        MaterialButton(
                          onPressed: () {
                            Navigator.push(
                              context,
                              MaterialPageRoute(
                                  builder: (context) => LayananUnggulan()),
                            );
                          },
                          child: SymptomCard(
                            image: "assets/images/unggulan.png",
                            title: "Layanan \nUnggulan",
                          ),
                        ),
                      ],
                    ),
                  ),
                  SingleChildScrollView(
                    padding: EdgeInsets.only(
                      top: 20.0,
                    ),
                    scrollDirection: Axis.horizontal,
                    child: Row(
                      mainAxisAlignment: MainAxisAlignment.spaceBetween,
                      children: <Widget>[
                        MaterialButton(
                          onPressed: () {
                            Navigator.push(
                              context,
                              MaterialPageRoute(builder: (context) => MCU()),
                            );
                          },
                          child: SymptomCard(
                            image: "assets/images/mcu.png",
                            title: "MCU",
                            isActive: true,
                          ),
                        ),
                        Padding(padding: const EdgeInsets.all(8.0)),
                        MaterialButton(
                          onPressed: () {
                            Navigator.push(
                              context,
                              MaterialPageRoute(
                                  builder: (context) => LayananLainnya()),
                            );
                          },
                          child: SymptomCard(
                            image: "assets/images/lainnya.png",
                            title: "Layanan \nLainnya",
                          ),
                        ),
                      ],
                    ),
                  ),
                  SizedBox(height: 20),
                ],
              ),
            )
          ],
        ),
      ),
    );
  }
}

class SymptomCard extends StatelessWidget {
  final String image;
  final String title;
  final bool isActive;
  const SymptomCard({
    Key key,
    this.image,
    this.title,
    this.isActive = false,
  }) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Container(
      padding: EdgeInsets.all(13),
      decoration: BoxDecoration(
        borderRadius: BorderRadius.circular(15),
        color: Colors.white,
        boxShadow: [
          isActive
              ? BoxShadow(
                  offset: Offset(0, 10),
                  blurRadius: 20,
                  color: kActiveShadowColor,
                )
              : BoxShadow(
                  offset: Offset(0, 3),
                  blurRadius: 6,
                  color: kShadowColor,
                ),
        ],
      ),
      child: Column(
        children: <Widget>[
          Image.asset(image, height: 90),
          Text(
            title,
            style: TextStyle(fontWeight: FontWeight.bold),
          ),
        ],
      ),
    );
  }
}
