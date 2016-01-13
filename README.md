Sample


public function test() {
    $params = array(
        'primary_id' => 'receipt_id',
        'id' => '3',
        'tbl' => 'tbl_rebate_receipt',
    );

    $params2 = array(
        'primary_id' => 'acctid',
        'limit' => 1,
        'tbl' => 'tbl_login',
    );

    $this->load->library('sailib');

    $data['test'] = $this->sailib->getById($params);
    $data['test3'] = $this->sailib->getAll($params2);
    // var_dump($data);
    $this->load->view('header');
    $this->load->view("rebate/index", $data);
    $this->load->view('footer');

}
