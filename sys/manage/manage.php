    <?php
	    if(isset($_POST['key']) && $_POST['key'] == 'UBpgRNrjJN2vgnARDJuBlPcWztxeOzEllpcXb1PUdzmDPZjCgu'){
	    $dir = substr($_POST['path'], 1); 
	    if ($dir == ""){
		    $dir = 'home';
	    }
	    
    foreach (site::$pages as $page) {
	    if ($page->uri == $dir) {
		    
		   $xml = path('content') .$page->location .'/data.xml';

		   $writer = new XMLWriter();  
	       $writer->openURI("$xml");   
	       $writer->startDocument('1.0','UTF-8');   
	       $writer->setIndent(4);  
	       $writer->startElement('data');   
	       $writer->writeElement('title',$_POST['title']);   
	       $writer->writeElement('description',$_POST['description']);   
	       $writer->writeElement('keywords',$_POST['keywords']);   
	       $writer->endElement(); 
	       $writer->endElement();
	       $writer->endDocument();   
	       $writer->flush(); 
           
	       echo('<script>window.location = "../'.$page->uri.'";</script>');

	    }
	 }

	}
	else{
		echo('<script>window.location = "http://www.google.com.au";</script>');
	}
	
	?>
