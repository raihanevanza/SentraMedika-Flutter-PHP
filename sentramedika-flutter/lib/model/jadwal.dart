import 'dart:convert';

class Jadwal {
  int id;
  String namadokter;
  String spesialis;
  String senin;
  String selasa;
  String rabu;
  String kamis;
  String jumat;
  String sabtu;
  String minggu;
  String fotodokter;

  Jadwal(
      {this.id,
      this.namadokter,
      this.spesialis,
      this.senin,
      this.selasa,
      this.rabu,
      this.kamis,
      this.jumat,
      this.sabtu,
      this.minggu,
      this.fotodokter});

  factory Jadwal.fromJson(Map<String, dynamic> map) {
    return Jadwal(
        id: map["id"],
        namadokter: map["namadokter"],
        spesialis: map["spesialis"],
        senin: map["senin"],
        selasa: map["selasa"],
        rabu: map["rabu"],
        kamis: map["kamis"],
        jumat: map["jumat"],
        sabtu: map["sabtu"],
        minggu: map["minggu"],
        fotodokter: map["fotodokter"]);
  }

  Map<String, dynamic> toJson() {
    return {
      "id": id,
      "namadokter": namadokter,
      "spesialis": spesialis,
      "senin": senin,
      "selasa": selasa,
      "rabu": rabu,
      "kamis": kamis,
      "jumat": jumat,
      "sabtu": sabtu,
      "minggu": minggu,
      "fotodokter": fotodokter
    };
  }

  @override
  String toString() {
    return 'Jadwal{id: $id, namadokter: $namadokter, spesialis: $spesialis, senin: $senin, selasa: $selasa, rabu: $rabu, kamis: $kamis, jumat: $jumat, sabtu: $sabtu, minggu: $minggu, fotodokter: $fotodokter}';
  }
}

List<Jadwal> userFromJson(String jsonData) {
  final data = json.decode(jsonData);
  return List<Jadwal>.from(data.map((item) => Jadwal.fromJson(item)));
}

String userToJson(Jadwal data) {
  final jsonData = data.toJson();
  return json.encode(jsonData);
}
