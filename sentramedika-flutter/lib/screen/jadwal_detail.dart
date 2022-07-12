import 'package:flutter/material.dart';
import 'package:sentramedika/model/jadwal.dart';
import 'package:sentramedika/util/capitalize.dart';
import 'package:sentramedika/model/jadwal.dart';
import 'package:sentramedika/service/jadwal_service.dart';

class DetailJadwal extends StatefulWidget {
  // create variabel id untuk menghandle param yang diberikan (wajib ada @required)
  final int id;
  // constructor
  DetailJadwal({@required this.id, Key key}) : super(key: key);

  @override
  _DetailJadwalState createState() => _DetailJadwalState();
}

class _DetailJadwalState extends State<DetailJadwal> {
  // create variabel untuk menampung User Api Service
  UserApiService apiService;
  // create variabel _jadwal untuk menampung model User
  Jadwal _jadwal;
  // scaffold key
  final GlobalKey<ScaffoldState> _scaffoldkey = GlobalKey<ScaffoldState>();

  @override
  void initState() {
    // inisialisasi state apiService dengan class UserApiService
    apiService = UserApiService();
    super.initState();
  }

  _showSnackBar(message) {
    final snackbar = SnackBar(
      content: Text(message),
    );
    _scaffoldkey.currentState.showSnackBar(snackbar);
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      key: _scaffoldkey,
      // header
      appBar: AppBar(
        title: Text("Detail Jadwal"),
        leading: IconButton(
          icon: Icon(Icons.arrow_back),
          onPressed: () => {
            Navigator.pop(context),
          },
        ),
      ),
      // body
      body: Center(
        child: FutureBuilder<Jadwal>(
            // panggil function getUserBy(int id)
            future: apiService.getUserBy(widget.id),
            builder: (context, snapshot) {
              // jika connection none atau data = null
              if (snapshot.connectionState == ConnectionState.none &&
                  snapshot.hasData == null) {
                return LinearProgressIndicator();

                // jika connection berhasil
              } else if (snapshot.connectionState == ConnectionState.done) {
                // tampung data dari server
                _jadwal = snapshot.data;

                // jika data ada / tidak null
                if (_jadwal.id != 0) {
                  return ListView(
                    children: <Widget>[
                      ListTile(
                        leading: Icon(Icons.account_box),
                        title: Text(_jadwal.namadokter),
                        subtitle: const Text('Nama Dokter'),
                      ),
                      ListTile(
                        leading: Icon(Icons.assignment),
                        title: Text(_jadwal.spesialis),
                        subtitle: const Text('Spesialis'),
                      ),
                      ListTile(
                        leading: Icon(Icons.event_available),
                        title: Text(_jadwal.senin),
                        subtitle: const Text('Senin'),
                      ),
                      ListTile(
                        leading: Icon(Icons.event_available),
                        title: Text(_jadwal.selasa),
                        subtitle: const Text('Selasa'),
                      ),
                      ListTile(
                        leading: Icon(Icons.event_available),
                        title: Text(_jadwal.rabu),
                        subtitle: const Text('Rabu'),
                      ),
                      ListTile(
                        leading: Icon(Icons.event_available),
                        title: Text(_jadwal.kamis),
                        subtitle: const Text('Kamis'),
                      ),
                      ListTile(
                        leading: Icon(Icons.event_available),
                        title: Text(_jadwal.jumat),
                        subtitle: const Text('Jumat'),
                      ),
                      ListTile(
                        leading: Icon(Icons.event_available),
                        title: Text(capitalize(_jadwal.sabtu)),
                        subtitle: const Text('Sabtu'),
                      ),
                      ListTile(
                        leading: Icon(Icons.event_available),
                        title: Text(_jadwal.minggu.toUpperCase()),
                        subtitle: const Text('Minggu'),
                      ),
                    ],
                  );
                  // jika data null / tidak ada
                } else {
                  return Text("User Not Found");
                }

                // tampilkan container kosong jika terjadi hal lainnya
              } else {
                return Center(
                  child: Container(),
                );
              }
            }),
      ),
    );
  }
}
