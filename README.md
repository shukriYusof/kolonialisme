# **Kolonialisme**
[![FOSSA Status](https://app.fossa.com/api/projects/git%2Bgithub.com%2FshukriYusof%2Fmalaysia.svg?type=shield)](https://app.fossa.com/projects/git%2Bgithub.com%2FshukriYusof%2Fmalaysia?ref=badge_shield)


**Kolonialisme** is prepared for anyone that are having a trouble to find all schools in Malaysia. Using **Kolonialisme** user can found schools , district and state also. You can see the example below it is very easy to use.

    <?php
    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    use Shukriyusof\Kolonialisme\State;
    
    class StateController extends Controller
    {
        public function index(){
            $states = State::getAllStates();
    
            return view('/')->with([
                'states'    => $states
            ]);
        }
    }
    


## Getting Started

###### Installation

------------

Download kolonialisme package from composer by using this below code

`composer require shukriyusof/kolonialisme`

 After you have successfully download the package now it's time to use it. You can use either by using **"import"** or **use**  depends on your framework package. Example below show based on laravel framework.

    use shukriyusof/kolonialisme/State  // for state
    
    use shukriyusof/kolonialisme/District  // for district
    
    use shukriyusof/kolonialisme/School  // for school

###### What Can this Package Do ?

------------
**Fetch Data**

State : 
- getAllStates
- getStateByID
- getStateByName
- getStateByShortName
- getStateByISO


District
- getAllDistricts
- getDistrictById
- getDistrictByName
- getDistrictByStateId

School
- getAllSchools
- getSchoolById
- getSchoolByLevel
- getSchoolByDistrictId
- getSchoolByCity
- getSchoolByPostcode
- getCountAllSchools
- getCountSchoolByLevel
- getCountSchoolByDistrictId
- getCountSchoolByCity
- getCountSchoolByPostcode


## License
[![FOSSA Status](https://app.fossa.com/api/projects/git%2Bgithub.com%2FshukriYusof%2Fmalaysia.svg?type=large)](https://app.fossa.com/projects/git%2Bgithub.com%2FshukriYusof%2Fmalaysia?ref=badge_large)