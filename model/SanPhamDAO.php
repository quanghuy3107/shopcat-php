<?php
    // include "http://localhost/duanmau/model/DAO/pdo.php";
    // $absolute_path = $_SERVER['DOCUMENT_ROOT'] . "/duanmau";
    // include $absolute_path."/model/DAO/pdo.php";
    function selectSanPham($sortName, $sortBy, $limit, $offset){ 

        $sql_sanpham = "SELECT * FROM sanpham AS s INNER JOIN danhmuc AS d ON s.danhmuc_id = d.danhmuc_id  ";
        
        if($sortName != null and $sortBy != null){
            $sql_sanpham .= " ORDER BY {$sortName} {$sortBy}";
        }
        if($offset >=0 and $limit >=0){
            $sql_sanpham .= " LIMIT {$limit} OFFSET {$offset}";
        }
        
        $list = query($sql_sanpham);
        return $list;
    }

    function insertSanPham($tensanpham, $giasanpham, $hinhanh, $motangan, $mota, $soluong, $luotxem, $danhmuc){
        $sql = "INSERT INTO sanpham(tensanpham, giasanpham, hinhanh, motangan, mota, soluong, luotxem,daban, danhmuc_id) values ('{$tensanpham}',{$giasanpham}, '{$hinhanh}', '{$motangan}', '{$mota}', {$soluong}, {$luotxem}, 0, {$danhmuc})";
        execute($sql);
    }

    function deleteSanPham($param){
        $sql = "DELETE FROM sanpham WHERE sanpham_id = {$param}";
        execute($sql);
    }

    function updateSanPham( $id, $tensanpham, $giasanpham, $hinhanh, $motangan, $mota, $soluong, $luotxem , $danhmuc){
        $sql = "UPDATE sanpham SET tensanpham = '{$tensanpham}' ,giasanpham = {$giasanpham}, hinhanh = '{$hinhanh}', motangan = '{$motangan}', mota = '{$mota}', soluong = {$soluong} , luotxem = {$luotxem} , danhmuc_id = {$danhmuc}  WHERE sanpham_id = {$id}";
        execute($sql);
    }
    function updateProductSold($id, $soluong){
        $sql = "UPDATE sanpham SET daban = daban + {$soluong}, soluong = soluong -{$soluong} WHERE sanpham_id = {$id}";
        execute($sql);
    }

    function findOneSanPham($param){
        $sql_sanpham = "SELECT * FROM sanpham WHERE sanpham_id = {$param}";
        $list = query($sql_sanpham);
        return $list[0];
    }

    function countSanPham(){
        $sql = "SELECT * FROM sanpham AS s INNER JOIN danhmuc AS d ON s.danhmuc_id = d.danhmuc_id ";
        
        return sizeof(getCount($sql));
    }
    function countSanPhamByDanhMuc($danhmuc){
        $sql = "SELECT * FROM sanpham AS s INNER JOIN danhmuc AS d ON s.danhmuc_id = d.danhmuc_id WHERE d.danhmuc_id = {$danhmuc}";
        
        return sizeof(getCount($sql));
    }

    function countSanPhamBySearch($search){
        $sql = "SELECT * FROM sanpham AS s INNER JOIN danhmuc AS d ON s.danhmuc_id = d.danhmuc_id WHERE s.motangan like '%{$search}%'";
        
        return sizeof(getCount($sql));
    }

    function findByDanhMuc($sortName, $sortBy, $limit, $offset,$danhmuc_id){
    $sql_sanpham = "SELECT * FROM sanpham AS s INNER JOIN danhmuc AS d ON s.danhmuc_id = d.danhmuc_id  WHERE d.danhmuc_id = {$danhmuc_id} ";
            
            if($sortName != null and $sortBy != null){
                $sql_sanpham .= " ORDER BY {$sortName} {$sortBy}";
            }
            if($offset >=0 and $limit >=0){
                $sql_sanpham .= " LIMIT {$limit} OFFSET {$offset}";
            }
            $list = query($sql_sanpham);
            return $list;
    }
    function findBySearch($search,$sortName,$sortBy,$offset,$limit){
        $sql_sanpham = "SELECT * FROM sanpham AS s INNER JOIN danhmuc AS d ON s.danhmuc_id = d.danhmuc_id  WHERE s.motangan like '%{$search}%' ";
                
                if($sortName != null and $sortBy != null){
                    $sql_sanpham .= " ORDER BY {$sortName} {$sortBy}";
                }
                if($offset >=0 and $limit >=0){
                    $sql_sanpham .= " LIMIT {$limit} OFFSET {$offset}";
                }
                $list = query($sql_sanpham);
                return $list;
        }
    function findTopProduct(){
        $sql_sanpham = "SELECT * FROM sanpham AS s INNER JOIN danhmuc AS d ON s.danhmuc_id = d.danhmuc_id   ORDER BY s.luotxem DESC LIMIT 5 OFFSET 0";
        $list = query($sql_sanpham);
            return $list;
        }
?>