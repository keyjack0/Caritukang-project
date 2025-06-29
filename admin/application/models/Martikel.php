
<?php
class Martikel extends CI_Model
{
    function tampil()
    {
        $data = $this->db->get('artikel');
        $dt = $data->result_array();
        return $dt;
    }

    function simpan($inputan)
    {
        $config['upload_path'] = $this->config->item('assets_artikel');
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        $ngupload = $this->upload->do_upload("foto_artikel");

        if ($ngupload) {
            $inputan['foto_artikel'] = $this->upload->data("file_name");
        }

        $this->db->insert('artikel', $inputan);
    }

    function hapus($id_artikel)
    {
        $this->db->Where('id_artikel', $id_artikel);
        $this->db->delete('artikel');
    }
    

    function detail($id_artikel)
    {
        $this->db->where('id_artikel', $id_artikel);
        $q = $this->db->get('artikel');
        $d = $q->row_array();
        return $d;
    }

    function ubah($inputan, $id_artikel)
    {
        $config['upload_path']          = $this->config->item('assets_artikel');
        $config['allowed_types']        = 'gif|jpg|png';
        $this->load->library("upload", $config);

        $ngupload = $this->upload->do_upload("foto_artikel");

        if ($ngupload) {
            $inputan['foto_artikel'] = $this->upload->data("file_name");
        }

        $this->db->where('id_artikel', $id_artikel);
        $this->db->update('artikel', $inputan);
    }
}
