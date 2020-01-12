<?php
class card_publisherLibrary {
    
    private $img = null;
        
	private $font_header = 'helvetica_bold.ttf';
	private $font_text = 'helvetica_medium.ttf';
	private $font_span = 'helvetica_regular.ttf';
    
    private $col_back = null;
    private $col_text = null;
    private $col_span = null;
    
	public function __construct() {
        $this->img = imagecreatetruecolor(2480, 3508);
        
        $this->col_back = imagecolorallocate($this->img, 255, 255, 255);
        $this->col_text = imagecolorallocate($this->img, 0, 0, 0);
        $this->col_span = imagecolorallocate($this->img, 70, 70, 100);
        
        $this->font_header = ENGINE_DIR . 'fonts/' . $this->font_header;
        $this->font_text = ENGINE_DIR . 'fonts/' . $this->font_text;
        $this->font_span = ENGINE_DIR . 'fonts/' . $this->font_span;
        
		imagefill($this->img, 0, 0, $this->col_back);
        
        imagettftext($this->img, 45, 0, 217, 215, $this->col_text, $this->font_header, 'КАРТОЧКА СОБРАНИЯ ДЛЯ ОТЧЁТОВ ВОЗВЕЩАТЕЛЕЙ СОБРАНИЯ');
        imagettftext($this->img, 27, 0, 80, 3430, $this->col_text, $this->font_text, 'S-21-U   12/18');
	}
    
    public function setPersonalInfo($name, $dobirth, $dobuptism, $is_men = true, $king = false, $elsed = false, $assistant = false, $pioneer = false) {
        $this->drawPoleText(75, 320, 'ФИО:   ', $name);
        $this->drawPoleText(75, 387, 'Дата рождения:', $dobirth);
        $this->drawPoleText(75, 454, 'Дата крещения:', $dobuptism);
        
        $this->drawPoleBool(1567, 388, 'Мужчина:', $is_men);
        $this->drawPoleBool(1985, 388, 'Женщина:', !$is_men);
        
        $this->drawPoleBool(1567, 455, 'Другая овца:', !$king);
        $this->drawPoleBool(1985, 455, 'Помазаник:', $king);
        
        $this->drawPoleBool(524, 524, 'Старейшина:', $elsed);
        $this->drawPoleBool(1308, 524, 'Служебный помощник:', $assistant);
        $this->drawPoleBool(1985, 524, 'Пионер:', $pioneer);
    }
    
    public function setReportsInfo($fst = array(), $scd = array()) {
        $this->drawGrid(582);
        $this->drawGrid(2000);
        $this->drawLabel(582, $fst);
        $this->drawLabel(2000, $scd);
    }
    
	public function showImage() {
		header('Content-type: image/png');
		imagepng($this->img);
		imagedestroy($this->img);
	}
    
    public function saveImage($path) {
        imagepng ($this->img, $path);
		imagedestroy($this->img);
	}
    
    public function saveAndShowImage($path) {
        imagepng ($this->img, $path);
        header('Content-type: application/png');
        header('Content-Disposition: attachment; filename="image.png"');
        readfile($path);
		imagedestroy($this->img);
	}
    
    private function drawRect($x, $y, $w, $h, $col_text = false, $isset = false, $weight_line = 3){
        if(!$col_text) $col_text = $this->col_text;
                
        imagefilledrectangle($this->img, $x, $y, $x + $w, $y + $h, $col_text);
        imagefilledrectangle($this->img, $x + $weight_line, $y + $weight_line, $x + $w - $weight_line, $y + $h - $weight_line, $this->col_back);
        
        if($isset) imagettftext($this->img, $h, 0, $x + 2, $y + $h, $this->col_span, $this->font_header, 'X');
    }
    
    private function drawPoleText($x, $y, $name, $value, $col_text = false){
        if(!$col_text) $col_text = $this->col_text;
        
        imagettftext($this->img, 33, 0, $x, $y, $col_text, $this->font_text, $name);
        imagettftext($this->img, 33, 0, $x + (strlen($name) / 2)  * 28, $y, $this->col_span, $this->font_text, $value);
    }
    
    private function drawPoleBool( $x, $y, $name, $value = false, $col_text = false){
        if(!$col_text) $col_text = $this->col_text;
        
        imagettftext($this->img, 33, 0, $x, $y, $col_text, $this->font_text, $name);
        $this->drawRect($x - 45, $y - 32, 32, 32, $col_text, $value);
    }
    
    private function drawLabel($y, $data = array()){
        imagettftext($this->img, 33, 0, 90, $y + 50, $this->col_text, $this->font_header, 'Служебный год');
        imagettftext($this->img, 40, 0, 115, $y + 115, $this->col_span, $this->font_header, ($data['year'] . '-' . ($data['year'] + 1)));
        
        imagettftext($this->img, 33, 0, 475, $y + 80, $this->col_text, $this->font_header, 'Публикации');
        
        imagettftext($this->img, 33, 0, 795, $y + 60, $this->col_text, $this->font_header, 'Показы');
        imagettftext($this->img, 33, 0, 810, $y + 115, $this->col_text, $this->font_header, 'видео');
        
        imagettftext($this->img, 33, 0, 1043, $y + 80, $this->col_text, $this->font_header, 'Часы');
        
        imagettftext($this->img, 33, 0, 1236, $y + 60, $this->col_text, $this->font_header, 'Повторные');
        imagettftext($this->img, 33, 0, 1239, $y + 115, $this->col_text, $this->font_header, 'посещения');
        
        imagettftext($this->img, 33, 0, 1531, $y + 60, $this->col_text, $this->font_header, 'Изучения');
        imagettftext($this->img, 33, 0, 1545, $y + 115, $this->col_text, $this->font_header, 'Библии');
        
        imagettftext($this->img, 33, 0, 1940, $y + 80, $this->col_text, $this->font_header, 'Примечания');
        
        $month = array('Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь', 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август');
        
        $data['pubs']['total'] = 0;
        $data['video']['total'] = 0;
        $data['hours']['total'] = 0;
        $data['visits']['total'] = 0;
        $data['studies']['total'] = 0;
        
        $this_y = $y + 190;
        $total_month = 1;
        foreach($month as $key => $val){
            imagettftext($this->img, 37, 0, 90, $this_y, $this->col_text, $this->font_text, $val);
            if($data['hours'][$key] != '0'){
                imagettftext($this->img, 37, 0, 580, $this_y, $this->col_span, $this->font_text, $data['pubs'][$key]);
                imagettftext($this->img, 37, 0, 830, $this_y, $this->col_span, $this->font_text, $data['video'][$key]);
                imagettftext($this->img, 37, 0, 1050, $this_y, $this->col_span, $this->font_text, $data['hours'][$key]);
                imagettftext($this->img, 37, 0, 1300, $this_y, $this->col_span, $this->font_text, $data['visits'][$key]);
                imagettftext($this->img, 37, 0, 1600, $this_y, $this->col_span, $this->font_text, $data['studies'][$key]);
                imagettftext($this->img, 37, 0, 1780, $this_y, $this->col_span, $this->font_text, $data['note'][$key]);

                $data['pubs']['total'] += $data['pubs'][$key];
                $data['video']['total'] += $data['video'][$key];
                $data['hours']['total'] += $data['hours'][$key];
                $data['visits']['total'] += $data['visits'][$key];
                $data['studies']['total'] += $data['studies'][$key];

                if(isset($data['pubs'][$key])) $total_month++;
            }
            $this_y += 84;
        }
        
        imagettftext($this->img, 37, 0, 90, $y + 1205, $this->col_text, $this->font_header, 'Итого');
        imagettftext($this->img, 37, 0, 580, $y + 1205, $this->col_span, $this->font_header, $data['pubs']['total']);
        imagettftext($this->img, 37, 0, 830, $y + 1205, $this->col_span, $this->font_header, $data['video']['total']);
        imagettftext($this->img, 37, 0, 1050, $y + 1205, $this->col_span, $this->font_header, $data['hours']['total']);
        imagettftext($this->img, 37, 0, 1300, $y + 1205, $this->col_span, $this->font_header, $data['visits']['total']);
        imagettftext($this->img, 37, 0, 1600, $y + 1205, $this->col_span, $this->font_header, $data['studies']['total']);
        
        imagettftext($this->img, 37, 0, 90, $y + 1290, $this->col_text, $this->font_header, 'Среднее');
        imagettftext($this->img, 37, 0, 580, $y + 1290, $this->col_span, $this->font_header, round($data['pubs']['total'] / $total_month, 2));
        imagettftext($this->img, 37, 0, 830, $y + 1290, $this->col_span, $this->font_header, round($data['video']['total'] / $total_month, 2));
        imagettftext($this->img, 37, 0, 1050, $y + 1290, $this->col_span, $this->font_header, round($data['hours']['total'] / $total_month, 2));
        imagettftext($this->img, 37, 0, 1300, $y + 1290, $this->col_span, $this->font_header, round($data['visits']['total'] / $total_month, 2));
        imagettftext($this->img, 37, 0, 1600, $y + 1290, $this->col_span, $this->font_header, round($data['studies']['total'] / $total_month, 2));
        
        
        
    }
    
    private function drawGrid($y){
        $this->drawRect(73, $y, 2342, 1313, $this->col_text, false, 5);
        
        $this->drawRect(75, $y + 133, 2338, 84, $this->col_text, false, 3);
        $this->drawRect(75, $y + 301, 2338, 84, $this->col_text, false, 3);
        $this->drawRect(75, $y + 469, 2338, 84, $this->col_text, false, 3);
        $this->drawRect(75, $y + 637, 2338, 84, $this->col_text, false, 3);
        $this->drawRect(75, $y + 805, 2338, 84, $this->col_text, false, 3);
        $this->drawRect(75, $y + 973, 2338, 84, $this->col_text, false, 3);
        $this->drawRect(75, $y + 1141, 2338, 84, $this->col_text, false, 3);
        
        $this->drawRect(448, $y + 2, 318, 135, $this->col_text, false, 3);
        $this->drawRect(989, $y + 2, 225, 135, $this->col_text, false, 3);
        $this->drawRect(1503, $y + 2, 265, 135, $this->col_text, false, 3);
        
        $this->drawRect(448, $y + 133, 318, 84, $this->col_text, false, 3);
        $this->drawRect(989, $y + 133, 225, 84, $this->col_text, false, 3);
        $this->drawRect(1503, $y + 133, 265, 84, $this->col_text, false, 3);
        
        $this->drawRect(448, $y + 215, 318, 88, $this->col_text, false, 3);
        $this->drawRect(989, $y + 215, 225, 88, $this->col_text, false, 3);
        $this->drawRect(1503, $y + 215, 265, 88, $this->col_text, false, 3);
        
        $this->drawRect(448, $y + 301, 318, 84, $this->col_text, false, 3);
        $this->drawRect(989, $y + 301, 225, 84, $this->col_text, false, 3);
        $this->drawRect(1503, $y + 301, 265, 84, $this->col_text, false, 3);
        
        $this->drawRect(448, $y + 383, 318, 88, $this->col_text, false, 3);
        $this->drawRect(989, $y + 383, 225, 88, $this->col_text, false, 3);
        $this->drawRect(1503, $y + 383, 265, 88, $this->col_text, false, 3);
        
        $this->drawRect(448, $y + 469, 318, 84, $this->col_text, false, 3);
        $this->drawRect(989, $y + 469, 225, 84, $this->col_text, false, 3);
        $this->drawRect(1503, $y + 469, 265, 84, $this->col_text, false, 3);
        
        $this->drawRect(448, $y + 551, 318, 88, $this->col_text, false, 3);
        $this->drawRect(989, $y + 551, 225, 88, $this->col_text, false, 3);
        $this->drawRect(1503, $y + 551, 265, 88, $this->col_text, false, 3);
        
        $this->drawRect(448, $y + 637, 318, 84, $this->col_text, false, 3);
        $this->drawRect(989, $y + 637, 225, 84, $this->col_text, false, 3);
        $this->drawRect(1503, $y + 637, 265, 84, $this->col_text, false, 3);
        
        $this->drawRect(448, $y + 719, 318, 88, $this->col_text, false, 3);
        $this->drawRect(989, $y + 719, 225, 88, $this->col_text, false, 3);
        $this->drawRect(1503, $y + 719, 265, 88, $this->col_text, false, 3);
        
        $this->drawRect(448, $y + 805, 318, 84, $this->col_text, false, 3);
        $this->drawRect(989, $y + 805, 225, 84, $this->col_text, false, 3);
        $this->drawRect(1503, $y + 805, 265, 84, $this->col_text, false, 3);
        
        $this->drawRect(448, $y + 887, 318, 88, $this->col_text, false, 3);
        $this->drawRect(989, $y + 887, 225, 88, $this->col_text, false, 3);
        $this->drawRect(1503, $y + 887, 265, 88, $this->col_text, false, 3);
        
        $this->drawRect(448, $y + 973, 318, 84, $this->col_text, false, 3);
        $this->drawRect(989, $y + 973, 225, 84, $this->col_text, false, 3);
        $this->drawRect(1503, $y + 973, 265, 84, $this->col_text, false, 3);
        
        $this->drawRect(448, $y + 1055, 318, 88, $this->col_text, false, 3);
        $this->drawRect(989, $y + 1055, 225, 88, $this->col_text, false, 3);
        $this->drawRect(1503, $y + 1055, 265, 88, $this->col_text, false, 3);
        
        $this->drawRect(448, $y + 1141, 318, 84, $this->col_text, false, 3);
        $this->drawRect(989, $y + 1141, 225, 84, $this->col_text, false, 3);
        $this->drawRect(1503, $y + 1141, 265, 84, $this->col_text, false, 3);
        
        $this->drawRect(448, $y + 1223, 318, 88, $this->col_text, false, 3);
        $this->drawRect(989, $y + 1223, 225, 88, $this->col_text, false, 3);
        $this->drawRect(1503, $y + 1223, 265, 88, $this->col_text, false, 3);
    }
    
}
?>
