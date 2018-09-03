
var localUniversity_arr = new Array("Abia State University", "Afe Babalola University", "Anambra State University", "Babcock University", "Benson Idahosa University", "Delta State Polytechnic", "Delta State University", "Enugu State University of Science and Technology", "Federal Medical centre Yenagoa", "Federal University of Technology Owerri", "Igbinedion University", "Imo State University", "International Aviation College ILORIN", "Ladoke Akintola university of Technology", "Madonna University", "National Open University", "Niger Delta university", "Nnamdi Azikiwe university", "Obafemi Awolowo University", "Olabisi Onabanjo University", "The West African Postgraduate College of Pharmacists","University of Benin", "University of Calabar", "University of Ibadan", "University of jos", "University of Lagos", "University of Nigeria", "University of Port Harcourt", "University of Uyo");



function populateLocalUniversities(localUniversityElementId, stateElementId){
	// given the id of the <select> tag as function argument, it inserts <option> tags
	var localUniversityElement = document.getElementById(localUniversityElementId);
	localUniversityElement.length=0;
	localUniversityElement.options[0] = new Option('Select Local University','-1');
	localUniversityElement.selectedIndex = 0;
	for (var i=0; i<localUniversity_arr.length; i++) {
		localUniversityElement.options[localUniversityElement.length] = new Option(localUniversity_arr[i],localUniversity_arr[i]);
	}

	// Assigned all countries. Now assign event listener for the states.

	if( stateElementId ){
		localUniversityElement.onchange = function(){
			populateStates( localUniversityElementId, stateElementId );
		};
	}
}