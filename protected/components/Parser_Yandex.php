<?php
/**
 * Created by PhpStorm.
 * User: man
 * Date: 12.08.2014
 * Time: 12:59
 */

class ValueObject
{
    protected $name;        //наименование города
    protected $temp;        //температура
    protected $speed;       //скорость ветра
    protected $humidity;    //влажность
    protected $pressure;   //давление
    protected $deg;         //направление ветра
    protected $weather;     //состояние

    public function __construct(array $data)
    {
        $this->name      = $data['name'];
        $this->temp      = $data['temp'];
        $this->speed     = $data['speed'];
        $this->humidity  = $data['humidity'];
        $this->pressure  = $data['pressure'];
        $this->deg       = $data['deg'];
        $this->weather   = $data['weather'];
    }

    public function getName()
    {
        return $this->name;
    }

    public function getTemp()
    {
        return $this->temp;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getHumidity()
    {
        return $this->humidity;
    }

    public function getPressure()
    {
        return $this->pressure;
    }

    public function getDeg()
    {
        return $this->deg;
    }

    public function getWeather()
    {
        return $this->weather;
    }
}


//$city_ids =[28219, 28674, 26283, 31847, 34824, 30729, 30731, 30732, 28688, 22550, 22551, 28696, 22553, 28698, 34845, 34846, 22559, 28706, 28707, 32053, 30758, 28711, 28712, 28714, 34861, 28718, 28720, 26673, 28722, 34825, 34316, 28729, 28731, 28732, 28733, 26686, 28735, 34880, 24641, 34886, 26695, 28744, 28745, 26700, 26701, 26702, 26703, 26704, 26705, 28754, 30803, 26708, 26709, 26710, 23803, 26712, 22884, 26714, 26715, 26716, 28346, 30818, 30822, 30823, 23410, 34922, 37223, 34924, 22546, 30830, 24688, 34929, 30834, 23804, 34934, 34935, 34936, 34937, 30844, 27555, 34944, 34945, 28803, 34948, 34949, 28806, 28807, 28808, 37001, 37002, 30859, 37004, 37005, 34958, 22893, 22672, 37009, 28818, 37012, 37013, 37014, 37015, 28824, 28825, 27215, 37019, 28828, 28829, 28830, 26783, 37024, 26785, 37026, 37028, 37029, 28838, 37031, 34984, 26795, 26796, 26994, 22706, 26995, 22709, 37046, 37047, 37049, 37050, 37052, 37053, 37054, 37237, 37056, 22721, 20674, 35011, 22724, 37061, 22727, 29467, 27353, 30925, 37071, 22737, 31445, 22563, 24790, 35035, 35036, 32122, 34646, 35041, 23944, 22755, 28902, 28903, 28904, 34172, 22762, 37099, 28909, 23933, 22768, 24817, 37107, 30965, 37111, 30968, 37020, 37116, 28925, 28927, 30977, 26882, 37123, 22913, 28938, 28941, 26894, 26895, 26896, 26897, 26898, 37018, 26900, 22805, 22806, 22807, 24856, 37145, 37146, 29743, 31004, 31005, 29744, 22820, 27697, 37163, 22829, 22831, 35120, 35121, 37171, 35124, 22837, 22921, 35129, 24891, 22845, 29749, 35138, 23606, 22854, 37193, 23607, 37197, 28045, 22867, 37204, 37205, 37206, 30777, 37210, 24923, 37212, 37213, 37214, 32098, 37218, 37219, 37220, 22885, 26982, 22887, 26984, 37225, 37226, 37227, 22892, 37229, 22894, 22895, 26992, 26993, 22898, 37235, 37236, 26997, 37238, 37239, 27001, 27002, 26687, 37244, 27370, 22910, 24959, 27008, 37249, 22914, 37251, 37252, 22917, 28655, 27017, 27019, 22925, 33166, 37248, 28255, 22939, 34732, 27037, 27038, 27039, 27040, 27041, 20891, 28742, 34545, 27049, 28743, 32158, 23625, 27066, 27722, 32150, 23815, 29122, 26899, 22980, 22981, 22982, 29127, 27724, 34551, 27157, 30635, 34893, 26360, 28067, 37335, 27097, 25051, 30117, 27106, 27109, 27729, 30499, 29954, 23022, 28413, 37361, 26707, 28416, 27051, 30806, 24321, 29194, 26711, 28418, 28419, 31253, 30127, 27164, 30810, 23074, 28128, 23078, 29230, 30813, 27187, 29241, 25147, 27402, 27198, 27199, 32071, 34571, 31300, 27206, 37211, 34914, 29263, 29264, 27217, 27220, 25173, 27223, 27225, 37469, 37470, 37471, 37472, 37473, 27235, 37476, 24639, 27242, 27243, 27708, 25206, 31442, 27259, 27260, 27262, 28437, 29314, 27414, 27271, 27385, 31369, 28439, 23406, 27277, 27757, 26392, 27283, 34926, 27417, 27914, 27418, 29347, 23205, 22641, 27307, 26056, 27983, 27316, 27317, 30711, 26055, 27321, 23226, 27323, 27329, 27330, 27331, 27332, 27333, 27425, 28450, 27343, 27344, 27345, 27346, 27347, 27348, 27349, 27350, 27351, 27352, 28452, 27354, 27355, 28430, 27439, 23552, 27712, 23274, 29479, 27373, 27229, 26479, 29430, 31702, 34866, 28116, 29440, 27393, 28736, 27401, 26983, 34263, 27405, 23341, 27412, 31510, 27415, 27416, 31513, 35147, 27419, 27420, 27421, 27422, 23327, 23329, 23330, 26075, 27428, 32215, 31527, 29480, 27433, 27434, 27435, 27436, 27437, 27438, 26077, 27440, 27441, 27442, 27443, 27444, 27445, 27446, 28809, 27448, 27449, 27450, 27451, 27452, 27453, 23358, 27457, 37003, 27460, 27462, 31559, 37058, 31561, 25399, 26082, 29521, 32227, 37006, 26079, 23383, 27579, 27485, 29536, 29539, 29542, 29543, 31592, 23356, 37351, 27500, 30866, 27502, 27503, 27504, 29553, 27506, 27507, 27508, 27509, 27510, 27511, 27512, 27513, 23418, 29625, 27517, 27520, 27521, 29570, 27523, 27524, 29573, 27526, 29575, 29576, 29577, 27530, 29579, 27532, 29581, 27535, 27536, 27537, 29586, 27539, 29588, 29589, 27542, 27543, 27544, 27545, 27546, 27549, 27550, 27551, 27552, 26096, 29851, 27556, 27557, 26097, 23465, 27562, 29611, 29612, 27514, 37021, 23472, 27707, 22686, 29624, 27577, 28831, 27580, 27581, 27582, 27583, 26784, 25538, 27587, 29636, 27589, 27590, 28833, 27592, 29641, 29642, 27595, 27597, 27600, 27601, 27602, 27603, 27604, 29653, 27606, 27607, 27608, 27609, 27610, 25563, 27612, 27613, 29861, 27616, 31713, 27618, 27620, 27621, 27622, 27623, 27624, 27625, 27626, 27627, 27628, 27629, 27630, 27631, 27636, 27637, 27639, 27643, 27644, 29866, 23551, 27648, 29698, 31922, 27653, 27654, 37036, 29706, 27479, 27664, 27665, 22019, 22552, 27679, 29729, 29730, 29731, 23589, 31786, 27693, 29742, 27695, 27696, 29745, 29746, 27701, 27702, 27703, 27704, 27705, 27706, 26463, 23612, 27709, 29760, 27714, 27715, 27716, 27717, 27718, 27719, 27720, 27721, 37203, 27723, 29772, 27725, 27726, 27728, 23633, 27730, 31587, 27735, 31832, 27744, 27745, 27861, 23655, 27752, 26361, 27756, 23906, 30862, 27759, 27760, 27761, 25716, 29814, 32090, 22621, 29822, 29823, 31873, 31875, 27781, 27786, 27787, 29836, 30914, 29838, 27501, 29841, 34273, 34955, 29845, 29846, 27799, 23704, 29850, 29551, 23703, 29853, 29854, 23711, 27809, 27113, 29860, 27813, 29862, 27505, 27816, 27817, 27818, 27819, 27820, 27821, 27822, 27824, 27825, 27826, 27827, 23733, 23734, 36024, 27834, 27835, 28533, 31938, 23748, 36037, 36038, 27848, 36044, 26986, 23758, 34001, 34002, 25123, 36052, 31957, 29561, 31960, 34009, 34010, 29915, 34012, 34013, 27871, 27872, 27873, 31970, 29923, 31974, 31975, 36072, 30392, 34028, 36079, 29937, 27890, 32060, 27893, 31991, 27525, 27860, 29947, 36092, 27901, 34047, 36096, 27906, 29955, 23812, 28545, 34056, 34058, 27522, 34062, 26157, 27921, 27922, 26499, 34069, 27928, 34147, 27930, 27931, 27932, 29914, 27934, 27935, 27937, 34005, 34083, 34085, 34086, 27943, 23848, 23849, 27527, 27948, 29997, 28552, 34098, 27955, 23919, 27957, 34102, 27529, 34104, 27961, 27459, 27963, 27964, 32061, 21824, 31968, 27971, 34116, 34117, 34119, 32165, 26595, 34123, 27980, 34211, 27533, 27528, 28899, 32087, 32088, 34138, 22891, 34140, 34141, 27392, 23903, 34146, 23846, 30054, 34152, 28009, 23914, 23917, 23918, 24125, 23921, 23922, 34164, 23928, 27540, 34170, 28027, 28028, 34173, 23445, 32128, 32133, 28040, 28041, 34186, 26166, 28044, 23949, 23950, 23951, 23952, 32145, 30102, 32155, 29594, 34206, 26985, 36259, 34212, 34213, 34214, 28075, 27531, 32174, 22429, 26781, 26184, 31987, 34230, 34231, 28465, 21945, 21946, 34236, 34237, 34239, 34240, 34241, 26054, 34247, 28104, 28105, 26059, 26060, 34253, 34254, 26063, 26064, 26067, 26068, 26069, 34262, 26071, 26072, 26073, 26074, 34267, 34268, 34269, 26078, 29605, 26080, 26081, 28130, 28131, 28133, 28134, 28135, 28136, 28137, 28140, 26094, 36093, 28144, 34289, 26099, 22005, 22006, 28586, 22015, 34048, 27563, 22020, 24738, 28588, 30218, 22028, 28173, 22897, 34087, 34321, 34322, 34323, 30230, 23471, 26580, 34336, 22049, 31088, 28201, 28935, 30253, 26158, 26159, 34352, 24944, 34356, 34357, 28214, 28216, 28217, 34363, 34364, 34365, 28222, 28223, 28224, 26179, 34373, 30712, 28232, 28233, 28234, 28236, 28748, 28240, 27576, 28242, 28243, 28244, 23822, 34391, 28248, 27236, 37016, 34063, 22110, 22111, 22112, 22113, 24507, 30308, 24166, 28264, 22900, 30316, 22802, 30320, 34954, 28275, 29630, 27947, 27538, 23147, 34438, 29634, 26498, 37144, 26258, 28307, 28503, 26263, 32408, 27588, 26268, 34461, 34462, 34463, 28321, 26275, 28324, 28326, 28327, 27403, 27591, 34476, 26285, 28334, 26289, 26291, 28342, 28343, 28344, 26298, 28347, 22204, 28351, 28352, 37224, 22212, 22213, 22215, 22216, 22217, 28026, 30439, 28367, 30405, 27541, 34838, 32477, 28382, 27814, 30435, 34532, 34533, 34534, 34535, 34539, 26351, 28401, 31770, 28403, 26358, 26359, 34552, 28409, 26362, 28411, 32509, 29558, 34560, 28417, 34562, 34563, 34564, 34565, 34566, 34567, 24329, 26378, 28427, 28428, 26381, 27611, 28431, 28432, 34577, 28434, 34579, 28436, 26389, 28438, 24343, 28440, 26393, 28442, 28443, 28444, 31976, 28446, 28447, 28448, 28449, 30768, 28451, 32548, 30504, 28457, 28458, 30509, 24726, 22912, 28466, 28638, 37228, 25703, 34101, 31909, 27815, 20292, 32582, 32583, 23453, 34633, 34634, 34635, 34636, 28493, 27960, 34842, 30547, 34644, 34550, 28502, 25913, 26456, 26457, 28506, 28507, 28508, 27962, 34655, 34656, 28513, 28517, 28518, 37025, 34668, 26477, 34109, 26480, 26455, 26485, 26486, 28538, 28540, 28541, 28109, 34687, 28544, 26497, 28546, 28547, 28548, 28550, 22408, 32116, 30603, 20864, 30614, 30617, 34124, 34100, 28573, 27891, 34720, 34722, 34723, 30629, 34727, 34730, 28587, 30636, 34734, 34735, 34737, 34777, 28318, 28601, 26555, 34748, 28605, 26613, 27615, 26614, 28614, 22471, 28617, 31735, 28621, 28504, 30673, 26578, 26579, 28628, 28630, 28631, 28632, 26585, 34778, 28635, 28636, 30686, 28639, 28640, 28641, 28642, 28643, 30692, 28646, 28647, 28648, 28649, 28650, 36034, 26606, 26607, 26608, 28659, 28661, 30710, 26615, 22520, 30713, 28666, 30715, 22717];
$city_ids = [28219, 28674, 26283, 31847, 34824, 30729, 30731, 30732, 28688, 22550, 22551, 28696, 22553, 28698];
foreach ($city_ids as $city_id) {
    $data_file = "http://export.yandex.ru/weather-ng/forecasts/$city_id.xml"; // адрес xml файла

    $xml = simplexml_load_file($data_file); // раскладываем xml на массив
    // выбираем требуемые параметры (город, температура, пиктограмма и тип погоды текстом (облачно, ясно)
    //print_r($xml);

    $map = [
        'n'   => 1,
        'nw'  => 2,
        'w'   => 3,
        'sw'  => 4,
        's'   => 5,
        'se'  => 6,
        'e'   => 7,
        'ne'  => 8
    ];

    foreach ($xml as $city) {
        $array[$city_id] = [
            'name'      => $xml['city'],
            'temp'      => $xml->fact->temperature,
            'speed'     => $xml->fact->wind_speed,
            'humidity'  => $xml->fact->humidity,
            'pressure'  => $xml->fact->pressure,
            'deg'       => $xml->fact->wind_direction,
            'weather'   => $xml->fact->weather_type
        ];
    }

    $array[$city_id]['deg'] = strtr($array[$city_id]['deg'], $map);

}

foreach ($array as $value) {
    echo $value['name'] . ' ' .
         $value['temp'] . ' ' .
         $value['speed'] . ' ' .
         $value['humidity'] . ' ' .
         $value['pressure'] . ' ' .
         $value['deg'] . ' ' ;
         $value['weather'].'<br>';
}


