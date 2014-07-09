<?
	class Colors {
		static function writeToFile() {
			global $app;
			$file = $app->root.'/sweep/styl/colors/';
			$colors = self::getAll();
			$steps = self::getSteps();
			$functions = array(
				'' => '',
				'fill-' => 'background-color',
				'text-' => 'color',
				'border-' => 'border-color'
			);
		foreach($colors as $key => $color) {
			$html = '';
			foreach($functions as $function => $action) {
				$i=0;
				$a=0;
				$last = count($steps)-1;
				$html .= ((!$function)?'get-':'')."{$function}{$key}(s = false)\n";
				if(!$function) {
					//$html .= "  buffer = '#'\n";
					foreach($steps as $step) {
						$end = false;
						if($i==$last) {
							$end = true;
							$i = 5;
						}

						$modifier = 'else if s ==';
						if(!$i)
							$modifier = 'if s ==';
						if($end)
							$modifier = 'else';

						$target = 'shades';
						$pointer = $i;
						if($i>9 && $i<14) {
							$target = 'accent';
							$pointer = $a;
							$a++;
						}

						$do = "rgba(#".$color[$target][$pointer].")";

						$html .= "  $modifier ".((!$end) ? $steps[$i] : '')."\n";
						$html .= "    $do\n";

					$i++;
					}
				}else{
					$do = "{$action}:get-{$key}(s)";
					$html .= "  $do\n";
				}
			}

			foreach($functions as $function => $action) {
				if(!$function) continue;
				$html .= ".{$function}{$key}\n";
				$html .= "  {$function}{$key}()\n";
				$i=1;
				$last = count($steps);
				$continued = false;

				foreach($steps as $step) {
					if($i==$last)
						$i = "base";

					$value = $i;

					$word = 'minus';


					$input = '';
					$a = 1;
					if($i>10) {
						$word = 'accent';
						$input = (($i-1)*100);
						$value = $i-10;
					}elseif($i>5) {
						$word = 'plus';
						$input = (($i-1)*100);
						$value = $i-6;
					}else{
						$input = $i*100;
						$input = ($input-500)*-1;
						if(!$input)
							$input = 50;
					}

					$final = is_numeric($value) ? $word."-".$value : $value;


					if($i!=6) {
						$html .= "  .{$function}{$final},\n";
						$html .= "  &.{$function}{$final}\n";
						$html .= "    {$function}{$key}({$input})\n";
					}

					$i++;
				}
			}

			$set[$key] = $html;
		}

		foreach($set as $key => $html) {
			file_put_contents($file.$key.'.styl', $html);
		}
	}
		static function getSteps($incremental = false) {
			$result = array(50, 100, 200, 300, 400, 500, 600, 700, 800, 900, 1000, 1100, 1200, 1300, 500);
			if($incremental)
				$result = array('minus-5', 'minus-4', 'minus-3', 'minus-2', 'minus-1', 'base', 'plus-1', 'plus-2', 'plus-3', 'plus-4', 'accent-1', 'accent-2', 'accent-3', 'accent-4');
			return $result;
		}
		static function getAll() {
			return array(
				'red' => array(
					'base' => 'e51c23',
					'shades' => array(
						'fde0dc', 'f9bdbb', 'f69988', 'f36c60', 'e84e40', 'e51c23', 'dd191d', 'd01716', 'c41411', 'b0120a'	
					),
					'accent' => array(
						'ff7997', 'ff5177', 'ff2d6f', 'e00032'
					)
				),
				'pink' => array(
					'base' => 'e91e63',
					'shades' => array(
						'fce4ec', 'f8bbd0', 'f48fb1', 'f06292', 'ec407a', 'e91e63', 'd81b60', 'c2185b', 'ad1457', '880e4f'	
					),
					'accent' => array(
						'ff80ab', 'ff4081', 'f50057', 'c51162'
					)
				),
				'purple' => array(
					'base' => '9c27b0',
					'shades' => array(
						'f3e5f5', 'e1bee7', 'ce93d8', 'ba68c8', 'ab47bc', '9c27b0', '8e24aa', '7b1fa2', '6a1b9a', '4a148c'	
					),
					'accent' => array(
						'ea80fc', 'e040fb', 'd500f9', 'aa00ff'
					)
				),
				'deep-purple' => array(
					'base' => '673ab7',
					'shades' => array(
						'ede7f6', 'd1c4e9', 'b39ddb', '9575cd', '7e57c2', '673ab7', '5e35b1', '512da8', '4527a0', '311b92'	
					),
					'accent' => array(
						'b388ff', '7c4dff', '651fff', '6200ea'
					)
				),
				'indigo' => array(
					'base' => '3f51b5',
					'shades' => array(
						'e8eaf6', 'c5cae9', '9fa8da', '7986cb', '5c6bc0', '3f51b5', '3949ab', '303f9f', '283593', '1a237e'	
					),
					'accent' => array(
						'8c9eff', '536dfe', '536dfe', '304ffe'
					)
				),
				'blue' => array(
					'base' => '5677fc',
					'shades' => array(
						'e7e9fd', 'd0d9ff', 'afbfff', '91a7ff', '738ffe', '5677fc', '4e6cef', '455ede', '3b50ce', '2a36b1'	
					),
					'accent' => array(
						'a6baff', '6889ff', '4d73ff', '4d69ff'
					)
				),
				'light-blue' => array(
					'base' => '03a9f4',
					'shades' => array(
						'e1f5fe', 'b3e5fc', '81d4fa', '4fc3f7', '29b6f6', '03a9f4', '039be5', '0288d1', '0277bd', '01579b'	
					),
					'accent' => array(
						'80d8ff', '40c4ff', '00b0ff', '0091ea'
					)
				),
				'cyan' => array(
					'base' => '00bcd4',
					'shades' => array(
						'e0f7fa', 'b2ebf2', '80deea', '4dd0e1', '26c6da', '00bcd4', '00acc1', '0097a7', '00838f', '006064'	
					),
					'accent' => array(
						'84ffff', '18ffff', '00e5ff', '00b8d4'
					)
				),
				'teal' => array(
					'base' => '009688',
					'shades' => array(
						'e0f2f1', 'b2dfdb', '80cbc4', '4db6ac', '26a69a', '009688', '00897b', '00796b', '00695c', '004d40'	
					),
					'accent' => array(
						'a7ffeb', '64ffda', '1de9b6', '00bfa5'
					)
				),
				'green' => array(
					'base' => '259b24',
					'shades' => array(
						'd0f8ce', 'a3e9a4', '72d572', '42bd41', '2baf2b', '259b24', '0a8f08', '0a7e07', '056f00', '0d5302'	
					),
					'accent' => array(
						'a2f78d', '5af158', '14e715', '12c700'
					)
				),
				'light-green' => array(
					'base' => '8bc34a',
					'shades' => array(
						'f1f8e9', 'dcedc8', 'c5e1a5', 'aed581', '9ccc65', '8bc34a', '7cb342', '689f38', '558b2f', '33691e'	
					),
					'accent' => array(
						'ccff90', 'b2ff59', '76ff03', '64dd17'
					)
				),
				'lime' => array(
					'base' => 'cddc39',
					'shades' => array(
						'f9fbe7', 'f0f4c3', 'e6ee9c', 'dce775', 'd4e157', 'cddc39', 'c0ca33', 'afb42b', '9e9d24', '827717'	
					),
					'accent' => array(
						'f4ff81', 'eeff41', 'c6ff00', 'aeea00'
					)
				),
				'yellow' => array(
					'base' => 'ffeb3b',
					'shades' => array(
						'fffde7', 'fff9c4', 'fff59d', 'fff176', 'ffee58', 'ffeb3b', 'fdd835', 'fbc02d', 'f9a825', 'f57f17'	
					),
					'accent' => array(
						'ffff8d', 'ffff00', 'ffea00', 'ffd600'
					)
				),
				'amber' => array(
					'base' => 'ffc107',
					'shades' => array(
						'fff8e1', 'ffecb3', 'ffe082', 'ffd54f', 'ffca28', 'ffc107', 'ffb300', 'ffa000', 'ff8f00', 'ff6f00'	
					),
					'accent' => array(
						'ffe57f', 'ffd740', 'ffc400', 'ffab00'
					)
				),
				'orange' => array(
					'base' => 'ff9800',
					'shades' => array(
						'fff3e0', 'ffe0b2', 'ffcc80', 'ffb74d', 'ffa726', 'ff9800', 'fb8c00', 'f57c00', 'ef6c00', 'e65100'	
					),
					'accent' => array(
						'ffd180', 'ffab40', 'ff9100', 'ff6d00'
					)
				),
				'deep-orange' => array(
					'base' => 'ff5722',
					'shades' => array(
						'fbe9e7', 'ffccbc', 'ffab91', 'ff8a65', 'ff7043', 'ff5722', 'f4511e', 'e64a19', 'd84315', 'bf360c'	
					),
					'accent' => array(
						'ff9e80', 'ff6e40', 'ff3d00', 'dd2c00'
					)
				),
				'brown' => array(
					'base' => '795548',
					'shades' => array(
						'efebe9', 'd7ccc8', 'bcaaa4', 'a1887f', '8d6e63', '795548', '6d4c41', '5d4037', '4e342e', '3e2723'	
					),
					'accent' => array(
						'd7ccc8', 'bcaaa4', 'a1887f', '8d6e63'
					)
				),
				'grey' => array(
					'base' => '9e9e9e',
					'shades' => array(
						'fafafa', 'f5f5f5', 'eeeeee', 'e0e0e0', 'bdbdbd', '9e9e9e', '757575', '616161', '424242', '212121'	
					),
					'accent' => array(
						'f5f5f5', 'eeeeee', 'e0e0e0', 'bdbdbd'
					)
				),
				'blue-grey' => array(
					'base' => '607d8b',
					'shades' => array(
						'eceff1', 'cfd8dc', 'b0bec5', '90a4ae', '78909c', '607d8b', '546e7a', '455a64', '37474f', '263238'	
					),
					'accent' => array(
						'cfd8dc', 'b0bec5', '90a4ae', '78909c'
					)
				),
			);
		}
	}
?>