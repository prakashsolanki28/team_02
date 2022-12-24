@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <br>
        <span>Last Updated at {{date('Y-m-d H:i:s')}} </span>
        <div>
            <h1 class="text-secondary pt-3 pb-5"><u>About MBM</u></h1>
            <p>MBM University has been established by the Government of Rajasthan by upgrading the erstwhile M.B.M. Engineering College, Jodhpur.</p>
            <p>M.B.M. Engineering College, established on 15th of August, 1951, was one of the oldest technical institutions in the country which became a constituent Faculty of Engineering and Architecture under the administration of Jai Narain Vyas University, Jodhpur in the year 1962. Later, looking to the need for multi-faceted development of the institution, Government of Rajasthan upgraded the institute to a State Level University through a Legislative Act in September, 2021.</p>
            <p>The university boasts of its high standards of education, prestigious legacy and a flourishing environment that caters for the overall development of its students, faculties and staff members.</p>
            <img src="{{ url('img/about_MBM.jpg') }}" class="w-100 pb-5">
            <p>Located on a 98-acre academic campus and situated within the 5 Km radius of all major landmarks of the Jodhpur City, the university is applauded for its vast campus and geographical advantage. Further, staff quarters and college hostels (accommodating 800+ students every year) offers a residential advantage in close vicinity to the university.</p> 
            <p>The university is proud of its high academic and technical standards since its inception. With a vision to cater to the growing needs of the society and industry, the institute has always been a pioneer in incorporating latest domains of engineering education and research. Currently, the institute offers 14 undergraduate, 25 postgraduate and 10 doctoral research programmes to the aspiring students. Several factors including good infrastructure, cutting-edge curriculum, reputed faculties, low educational costs and nourishing environment makes MBM, a first choice for students within Rajasthan as well as from other states across the country.</p>
            <p>The university is proud of its huge alumni base who have always excelled in their career and are contributing through top positions within industry, governmental bodies and academia. Many of them are also working as professors in IITs, IIMs and other prestigious technical institutions. The institute strives to maintain a culture and environment that enables our students to become responsible, ethical and true professionals.</p>
            <h3 class="text-capitalize">vision</h3>
            <p>“To be a leading educational institute that provides quality technical education and conducts research to produce knowledge-rich professionals for meeting the dynamic needs of the industry and society”.</p>
            <h3 class="text-capitalize">mission</h3>
            <p>“To impart quality technical education to the students to make them globally competent engineers, contributing to the development of the nation and world at large”.</p>
        </div>
        <div class="border-top">
            <div class="row">
                <h1 class="col-6 text-secondary">Latest Updates</h1>
                <h4 class="col-6 text-secondary text-end pt-2"><a href="#"><u>See all Updates ></u></a></h4>
            </div>
            <div class="row">

            <div class="col-4">    
                    <div class="card border border-3" style="width: 18rem;">
                        <div class="card-body ">
                            <i class="bi bi-circle pe-2"></i>
                            <i class="bi bi-circle"></i>
                            <div class="p-3 m-2 bg-secondary">
                                <span  class="text-white">MBMU MoUs</span>
                                <br><br>
                                <p class="text-white" style="font-size: 0.7em !important;">Published by MBM Content on Dec 21, 2022</p>
                            </div>
                            <div class="text-center">
                                <span>MBMU MoUs</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">    
                    <div class="card border border-3" style="width: 18rem;">
                        <div class="card-body ">
                            <i class="bi bi-circle pe-2"></i>
                            <i class="bi bi-circle"></i>
                            <div class="p-3 m-2 bg-secondary">
                                <span  class="text-white">MBMU MoUs</span>
                                <br><br>
                                <p class="text-white" style="font-size: 0.7em !important;">Published by MBM Content on Dec 21, 2022</p>
                            </div>
                            <div class="text-center">
                                <span>MBMU MoUs</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">    
                    <div class="card border border-3" style="width: 18rem;">
                        <div class="card-body ">
                            <i class="bi bi-circle pe-2"></i>
                            <i class="bi bi-circle"></i>
                            <div class="p-3 m-2 bg-secondary">
                                <span  class="text-white">MBMU MoUs</span>
                                <br><br>
                                <p class="text-white" style="font-size: 0.7em !important;">Published by MBM Content on Dec 21, 2022</p>
                            </div>
                            <div class="text-center">
                                <span>MBMU MoUs</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection