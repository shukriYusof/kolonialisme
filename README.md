[![Build Status](https://travis-ci.com/shukriYusof/malaysia.svg?branch=main)](https://travis-ci.com/shukriYusof/malaysia)
![workflow](https://github.com/shukriYusof/malaysia/actions/workflows/php.yml/badge.svg)
[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](https://github.com/dwyl/esta/issues)
[![License: GPL v3](https://img.shields.io/badge/License-GPLv3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)
[![codecov](https://codecov.io/gh/shukriYusof/malaysia/branch/dev/graph/badge.svg?token=C4P3QPA6N1)](https://codecov.io/gh/shukriYusof/malaysia)
[![FOSSA Status](https://app.fossa.com/api/projects/git%2Bgithub.com%2FshukriYusof%2Fmalaysia.svg?type=shield)](https://app.fossa.com/projects/git%2Bgithub.com%2FshukriYusof%2Fmalaysia?ref=badge_shield)

<a href="https://www.buymeacoffee.com/gbraad" target="_blank"><img src="https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png" alt="Buy Me A Coffee" style="height: 41px !important;width: 174px !important;box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;-webkit-box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;" ></a>
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