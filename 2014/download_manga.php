<?php
/**
 * GetImageFromUrl 
 * 
 * @param mixed $link 
 * @param mixed $referer 
 * @access public
 * @return image raw data
 */
function GetImageFromUrl($link, $referer)
{

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_POST, 0);

	curl_setopt($ch,CURLOPT_URL,$link);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	curl_setopt($ch, CURLOPT_REFERER, $referer);

	$result=curl_exec($ch);

	curl_close($ch);

	return $result;

}

/**
 * config 
 */

$vol_name = 'angel_sanctuary_vol';
$vol_num = '4';
$vol_link = 'http://lt.jmydm.jmmh.net:2011/jmydm1/15535/70371/';
$page_string = 'iieye0001-13303.JPG|iieye0002-17495.JPG|iieye0003-17495.JPG|iieye0004-17495.JPG|iieye0005-37255.JPG|iieye0006-37255.JPG|iieye0007-15622.JPG|iieye0008-15622.JPG|iieye0009-15622.JPG|iieye0010-19813.JPG|iieye0011-14427.JPG|iieye0012-14427.JPG|iieye0013-14427.JPG|iieye0014-14427.JPG|iieye0015-18619.JPG|iieye0016-18619.JPG|iieye0017-18619.JPG|iieye0018-18619.JPG|iieye0019-12554.JPG|iieye0020-12554.JPG|iieye0021-90411.JPG|iieye0022-16746.JPG|iieye0023-16746.JPG|iieye0024-16746.JPG|iieye0025-13232.JPG|iieye0026-13232.JPG|iieye0027-20937.JPG|iieye0028-20937.JPG|iieye0029-20937.JPG|iieye0030-20937.JPG|iieye0031-36546.JPG|iieye0032-36546.JPG|iieye0033-36546.JPG|iieye0034-36546.JPG|iieye0035-36546.JPG|iieye0036-11359.JPG|iieye0037-11359.JPG|iieye0038-11359.JPG|iieye0039-11359.JPG|iieye0040-11359.JPG|iieye0041-19065.JPG|iieye0042-19065.JPG|iieye0043-19065.JPG|iieye0044-19065.JPG|iieye0045-19065.JPG|iieye0046-19065.JPG|iieye0047-19065.JPG|iieye0048-19065.JPG|iieye0049-15551.JPG|iieye0050-15551.JPG|iieye0051-15551.JPG|iieye0052-15551.JPG|iieye0053-15551.JPG|iieye0054-15551.JPG|iieye0055-15551.JPG|iieye0056-15551.JPG|iieye0057-15551.JPG|iieye0058-15551.JPG|iieye0059-15551.JPG|iieye0060-15551.JPG|iieye0061-15551.JPG|iieye0062-17819.JPG|iieye0063-17819.JPG|iieye0064-17819.JPG|iieye0065-17819.JPG|iieye0066-17819.JPG|iieye0067-17819.JPG|iieye0068-17819.JPG|iieye0069-17819.JPG|iieye0070-17819.JPG|iieye0071-19743.JPG|iieye0072-19743.JPG|iieye0073-19743.JPG|iieye0074-19743.JPG|iieye0075-59735.JPG|iieye0076-59735.JPG|iieye0077-59735.JPG|iieye0078-59735.JPG|iieye0079-13678.JPG|iieye0080-13678.JPG|iieye0081-17870.JPG|iieye0082-17870.JPG|iieye0083-17870.JPG|iieye0084-17870.JPG|iieye0085-17870.JPG|iieye0086-17870.JPG|iieye0087-17870.JPG|iieye0088-17870.JPG|iieye0089-17870.JPG|iieye0090-41008.JPG|iieye0091-58709.JPG|iieye0092-58709.JPG|iieye0093-58709.JPG|iieye0094-58709.JPG|iieye0095-47786.JPG|iieye0096-47786.JPG|iieye0097-47786.JPG|iieye0098-47786.JPG|iieye0099-20189.JPG|iieye0100-20189.JPG|iieye0101-20189.JPG|iieye0102-20189.JPG|iieye0103-20189.JPG|iieye0104-16675.JPG|iieye0105-16675.JPG|iieye0106-16675.JPG|iieye0107-16675.JPG|iieye0108-16675.JPG|iieye0109-16675.JPG|iieye0110-16675.JPG|iieye0111-29059.JPG|iieye0112-29059.JPG|iieye0113-29059.JPG|iieye0114-29059.JPG|iieye0115-29059.JPG|iieye0116-29059.JPG|iieye0117-29059.JPG|iieye0118-29059.JPG|iieye0119-29059.JPG|iieye0120-29059.JPG|iieye0121-14802.JPG|iieye0122-14802.JPG|iieye0123-11289.JPG|iieye0124-11289.JPG|iieye0125-11289.JPG|iieye0126-11289.JPG|iieye0127-11289.JPG|iieye0128-11289.JPG|iieye0129-11289.JPG|iieye0130-11289.JPG|iieye0131-52247.JPG|iieye0132-52247.JPG|iieye0133-52247.JPG|iieye0134-52247.JPG|iieye0135-17110.JPG|iieye0136-94163.JPG|iieye0137-94163.JPG|iieye0138-94163.JPG|iieye0139-94163.JPG|iieye0140-94163.JPG|iieye0141-13607.JPG|iieye0142-13607.JPG|iieye0143-13607.JPG|iieye0144-13607.JPG|iieye0145-13607.JPG|iieye0146-21313.JPG|iieye0147-21313.JPG|iieye0148-21313.JPG|iieye0149-21313.JPG|iieye0150-21313.JPG|iieye0151-21313.JPG|iieye0152-21313.JPG|iieye0153-21313.JPG|iieye0154-21313.JPG|iieye0155-21313.JPG|iieye0156-17799.JPG|iieye0157-17799.JPG|iieye0158-17799.JPG|iieye0159-17799.JPG|iieye0160-17799.JPG|iieye0161-17799.JPG|iieye0162-17799.JPG|iieye0163-17799.JPG|iieye0164-17799.JPG|iieye0165-17799.JPG|iieye0166-17799.JPG|iieye0167-17799.JPG|iieye0168-17799.JPG|iieye0169-17799.JPG|iieye0170-40299.JPG|iieye0171-40299.JPG|iieye0172-40299.JPG|iieye0173-40299.JPG|iieye0174-40299.JPG|iieye0175-40299.JPG|iieye0176-40299.JPG|iieye0177-40299.JPG|iieye0178-40299.JPG|iieye0179-40299.JPG|iieye0180-40299.JPG|iieye0181-11735.JPG|iieye0182-11735.JPG|iieye0183-11735.JPG|iieye0184-11735.JPG|iieye0185-11735.JPG|iieye0186-11735.JPG|iieye0187-11735.JPG|iieye0188-11735.JPG|iieye0189-11735.JPG|iieye0190-11735.JPG|iieye0191-11735.JPG|iieye0192-11735.JPG|iieye0193-11735.JPG|iieye0194-11735.JPG|iieye0195-82214.JPG|iieye0196-82214.JPG|iieye0197-82214.JPG|iieye0198-82214.JPG|iieye0199-82214.JPG|iieye0200-82214.JPG|iieye0201-82214.JPG|iieye0202-82214.JPG|iieye0203-82214.JPG|iieye0204-82214.JPG|iieye0205-82214.JPG|iieye0206-82214.JPG';
$page = split('[|]', $page_string);

// var_export($page); exit;

$save_folder = 'manga/';
$referer = 'http://www.jmydm.com';

/**
 * get manga 
 */

if (!file_exists($save_folder.$vol_name.$vol_num)) {
	mkdir($save_folder.$vol_name.$vol_num, 0770, true);
}

foreach ($page as $key => $link) {
	$sourcecode = GetImageFromUrl($vol_link.$link, $referer);

	/**
	 * 例如：
	 * manga/angel_sanctuary_vol1/1.jpg 
	 */
	$saveas = $save_folder.$vol_name.$vol_num.'/'.++$key.'.jpg';

	$savefile = fopen($saveas, 'w');
	fwrite($savefile, $sourcecode);
	fclose($savefile);
}

echo 'download complete';

?>
