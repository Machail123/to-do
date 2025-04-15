class model {
    private $koneksi;

    public function __construct($koneksi) {
        $this->koneksi = $koneksi;
    }

    public function getTodolist() {
        $query = "SELECT * FROM tabel_todolist";
        $result = $this->koneksi->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}