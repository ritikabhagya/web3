
		<?php
			$biodatas = array();
			$biodatas['Malika Khanna']=array(
					'Ethnicity'=>'Punjabi',
					'Name'=>'Malika Khanna', 
					'Age'=>'24', 
					'Location'=>array('city'=>'New York', 'country'=>'USA'), 
					'Religion'=>'Hindu'
				);
				$biodatas['Chiragh Kirpalani']=array(
					'Ethnicity'=>'Sindhi',
					'Name'=>'Chiragh Kirpalani',
					'Age'=>'27',
					'Location'=>array('city'=>'New Delhi', 'country'=>'India'),
					'Religion'=>'Hindu'
				);
				$biodatas['Gauri More']=>array(
					'Ethnicity'=>'Maharashtrian',
					'Name'=>'Gauri More',
					'Age'=>'25',
					'Location'=>array('city'=>'Mumbai', 'country'=>'India'),
					
				);
				$biodatas['Manasi Bhagia']=array(
					'Ethnicity'=>'Sindhi',
					'Name'=>'Manasi Bhagia',
					'Age'=>'20',
					'Location'=>array('city'=>'Barcelona', 'country'=>'Spain'),
					'Religion'=>'Hindu'
				);
			$biodatas['Litesh Lalchandani']=array(
				'Ethnicity'=>'Sindhi'
				'Name'=>'Litesh Lalchandani',
				'Age'=>'25',
				'Location'=>array('city'=>'New York', 'country'=>'USA'),
				'Religion'=>'Hindu'
				);

			echo $biodatas['Malika Khanna']['Name'];

		?>

	

