import 'dart:convert';

class Obat {
  int id;
  String namaobat;
  String kategori;
  String stok;
  String fotoobat;

  Obat({this.id, this.namaobat, this.kategori, this.stok, this.fotoobat});

  factory Obat.fromJson(Map<String, dynamic> map) {
    return Obat(
        id: map["id"],
        namaobat: map["namaobat"],
        kategori: map["kategori"],
        stok: map["stok"],
        fotoobat: map["fotoobat"]);
  }

  Map<String, dynamic> toJson() {
    return {
      "id": id,
      "namaobat": namaobat,
      "kategori": kategori,
      "stok": stok,
      "fotoobat": fotoobat
    };
  }

  @override
  String toString() {
    return 'Obat{id: $id, namaobat: $namaobat, kategori: $kategori, stok: $stok, fotoobat: $fotoobat}';
  }
}

List<Obat> userFromJson(String jsonData) {
  final data = json.decode(jsonData);
  return List<Obat>.from(data.map((item) => Obat.fromJson(item)));
}

String userToJson(Obat data) {
  final jsonData = data.toJson();
  return json.encode(jsonData);
}
