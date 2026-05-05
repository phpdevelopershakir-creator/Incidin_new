@extends('layouts.app')
@section('content')
 

 <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Case List
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Case List</a></li>
                <l
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Case</h4>
                  <p class="card-description">Plese Check and Submit</p>
                     <form action="#" id="form" method="post" enctype="multipart/form-data">
                   @csrf
                <input type="hidden" name="caseid" value="{{ date('ymdhis') }}">
                  <div class="mt-4">
                    <div class="accordion accordion-bordered" id="accordion-2" role="tablist">

                      <!-- Question 1 Start -->
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-1" aria-expanded="false"
                              aria-controls="collapse-4">
                               1.Were there any changes to preexisting anti-trafficking legislation during the reporting period
(amendments to laws or penal codes, new laws, presidential decrees, supreme court precedents,
etc.)? <span style="color: green;">
(Tips: Please check if there were any revisions, amendments to laws or penal codes, new laws,
presidential decrees, Special Tribunals/Supreme court precedents) </span>

                            </a>
                          </h6>
                        </div>

                        <div id="Question-1" class="collapse" role="tabpanel" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-2" aria-expanded="false"
                              aria-controls="collapse-4">
                               2.Were law enforcement, military, security, state or municipal employees, or other officials or state
institutions involved directly in trafficking? <span style="color: green;">
(Tips: Please provide information solely based on government documents cleared for public sharing) </span>

                            </a>
                          </h6>
                        </div>

                        <div id="Question-2" class="collapse" role="tabpane2" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-3" aria-expanded="false"
                              aria-controls="collapse-4">
                               3.Was official involvement in trafficking crimes part of a national directive or policy, including state
sponsored forced labor? <span style="color: green;">(Tips: Please provide information solely based on government documents cleared for public sharing
and the answer can only be “YES” when the crime is a result of a national directive or policy,
including state sponsored forced labor)</span>
                            </a>
                          </h6>
                        </div>

                        <div id="Question-3" class="collapse" role="tabpane3" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-4" aria-expanded="false"
                              aria-controls="collapse-4">
                               4.Were law enforcement, military, security, state or municipal employees, or other officials allegedly
facilitating the crime or obstructing justice (e.g., taking bribes)? <span style="color: green;">
(Tips: Please provide information solely based on government documents cleared for public sharing
and the answer can only be “YES” when the crime is a result of a national directive or policy,
including state sponsored forced labor) </span>
                            </a>
                          </h6>
                        </div>

                        <div id="Question-4" class="collapse" role="tabpane4" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-5" aria-expanded="false"
                              aria-controls="collapse-4">
                               5.Did the government investigate, prosecute, convict, or sentence any allegedly complicit officials? <span style="color: green;">
(Tips: Please provide information solely based on government documents cleared for public sharing
and the answer can only be “YES” when the crime is a result of a national directive or policy,
including state sponsored forced labor) </span>
                            </a>
                          </h6>
                        </div>

                        <div id="Question-5" class="collapse" role="tabpane5" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-6" aria-expanded="false"
                              aria-controls="collapse-4">
                               6.Describe government units/courts responsible for investigating, prosecuting, or hearing trafficking <span style="color: green;">
cases, such as police units, prosecution offices, labor inspectorate units, and courts:
(Tips: For this question, please provide text inputs on the following agencies and their roles in
investigating, prosecuting, or hearing trafficking cases) </span>
                            </a>
                          </h6>
                        </div>

                        <div id="Question-6" class="collapse" role="tabpane6" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-7" aria-expanded="false"
                              aria-controls="collapse-4">
                               7.Were any of these units and their staff exclusively dedicated to trafficking, or was trafficking among
various responsibilities/mandates? <span style="color: green;">
(Tips: Please note that units such as SPP and SPP are fully dedicated to trafficking cases while other
units are having mandate of addressing trafficking cases along with other responsibilities – this can
lead to “YES” and “Other” </span>
                            </a>
                          </h6>
                        </div>

                        <div id="Question-7" class="collapse" role="tabpane7" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-8" aria-expanded="false"
                              aria-controls="collapse-4">
                               8.Did these units/courts have adequate resources? <span style="color: green;">
(Tips: Please consider official allocation and review) <span>
                            </a>
                          </h6>
                        </div>

                        <div id="Question-8" class="collapse" role="tabpane8" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>
                      
                      
                      
                     
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-9" aria-expanded="false"
                              aria-controls="collapse-4">
                               9.Did these units/courts adequately cover all jurisdictions? <span style="color: green;">
(Tips: To response, please consider that all the units mentioned are nationwide) <span>
                            </a>
                          </h6>
                        </div>

                        <div id="Question-9" class="collapse" role="tabpane9" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                 <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-10" aria-expanded="false"
                              aria-controls="collapse-4">
                               10.Were there any gaps in law enforcement’s ability to investigate, prosecute, or convict traffickers?
Did law enforcement investigate trafficking crimes as other offenses and/or did prosecutors charge
alleged traffickers under alternative criminal provisions with lesser penalties (e.g., commercial sex
crimes, smuggling of migrants, labor violations, fraud, etc.)? <span style="color: green;">
(Tips: For this question, please provide text inputs on known challenges in investigation, prosecution
or conviction of traffickers. Along with capacity gaps please consider gaps in accountability) <span>
                            </a>
                          </h6>
                        </div>

                        <div id="Question-10" class="collapse" role="tabpane10" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-11" aria-expanded="false"
                              aria-controls="collapse-4">
                               11.Does law enforcement pursue trafficking cases that would hold criminally accountable private
employers or corporations for forced labor in supply chains? <span style="color: green;">
(Tips: For this question, please provide text inputs on investigation based on the national law which
holds all actors accountable from private sector to government officials) </span>
                            </a>
                          </h6>
                        </div>

                        <div id="Question-11" class="collapse" role="tabpane11" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>
                     

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-12" aria-expanded="false"
                              aria-controls="collapse-4">
                               12.Did the government cooperate with foreign counterparts or international law enforcement
organizations on any trafficking-related law enforcement activities? <span style="color: green;">
(Tips: Please provide text inputs on cooperation with Interpole or any single country or regional
body such as SAARC or BIMSTEC- only report the investigations, prosecutions, etc., including
extraditions newly carried out in the current reporting period) </span>
                            </a>
                          </h6>
                        </div>

                        <div id="Question-12" class="collapse" role="tabpane12" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>


                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-13" aria-expanded="false"
                              aria-controls="collapse-4">
                               13. Did the government train officials on anti-trafficking enforcement, policies, or laws?
 If yes, please describe the number and type of officials trained and the training topics:
 If yes, please describe who funded and implemented the training, including any in-kind
support from the government: <span style="color: green;">
(Tips: Please answer the following two questions in which use official data of your ministry/agency)
Did the government train judiciary and court officials on anti-trafficking enforcement, policies, and laws? </span> 
                            </a>
                          </h6>
                        </div>

                        <div id="Question-13" class="collapse" role="tabpane13" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>
                       <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-14" aria-expanded="false"
                              aria-controls="collapse-4">
                               14. Considering what was reported in the 2024 TIP Report country narrative protection section, have
there been any new (or changes to preexisting) formal/standard procedures for victim
identification? <span style="color: green;">
( Tips: Please mention what changed from previous reporting year by title of the document/tools/
protocol. No need to describe in detail as the following sub questions will capture the detail) <span>
                            </a>
                          </h6>
                        </div>

                        <div id="Question-14" class="collapse" role="tabpane14" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-15" aria-expanded="false"
                              aria-controls="collapse-4">
                               15.Did front-line officials, including law enforcement, immigration, social services personnel,
healthcare workers, and labor inspectors receive adequate training on use of the victim
identification protocol or formal written procedures? <span style="color: green;">
(Tips: Please consider - Front-line officials of Police, Front-line officials of BGB, Front-line officials of
Coastguard , Front-line officials of Ansar, Front-line officials of Immigration, DSS Officials, Labour
Inspectors and similar officials of NGO workers, international organization staff, religious officials, and
community leaders who come at first contact with VoTs) </span>
                            </a>
                          </h6>
                        </div>

                        <div id="Question-15" class="collapse" role="tabpane15" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-16" aria-expanded="false"
                              aria-controls="collapse-4">
                               16.Did the victim identification protocol or formal written procedures outline steps to screen members
of underserved communities or those at increased risk of trafficking? Such groups could include but
are not limited to adults arrested for alleged commercial sex crimes, irregular migrants, asylum
seekers, stateless persons, persons with disabilities, unhoused persons, children in welfare systems
or aging out of such systems (if applicable, those previously incarcerated, members of marginalized
racial and ethnic communities, or individuals or communities living in conflict, crisis, or post-disaster
settings). <span style="color: green;">
(Tips: Please consider cases related to adults arrested for alleged commercial sex crimes, irregular
migrants, asylum seekers, stateless persons, persons with disabilities, unhoused persons, children in
welfare systems or aging out of such systems (if applicable, those previously incarcerated, members of
marginalized racial and ethnic communities, or individuals or communities living in conflict, crisis, or
post-disaster settings) </span>
                            </a>
                          </h6>
                        </div>

                        <div id="Question-16" class="collapse" role="tabpane16" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                       <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-17" aria-expanded="false"
                              aria-controls="collapse-4">
                               17.Did front-line officials, including law enforcement, immigration, social services personnel,
healthcare workers, and labor inspectors consistently and systematically use the victim
identification protocol or formal written procedures to proactively screen for indicators of human
trafficking, including vulnerable and underserved communities? Did the government provide
interpreters to conduct interviews in an individual’s primary language? <span style="color: green;">
(Tips: Please consider cases related to adults arrested for alleged commercial sex crimes, irregular
migrants, asylum seekers, stateless persons, persons with disabilities, unhoused persons, children in
welfare systems or aging out of such systems (if applicable, those previously incarcerated, members
of marginalized racial and ethnic communities, or individuals or communities living in conflict, crisis,
or post-disaster settings) </span>
                            </a>
                          </h6>
                        </div>

                        <div id="Question-17" class="collapse" role="tabpane17" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                       <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-18" aria-expanded="false"
                              aria-controls="collapse-4">
                               18.UKRAINIAN REFUGEES: Since Russia’s further invasion of Ukraine in 2022, have authorities
identified any refugees from Ukraine as victims of forced labor or sex trafficking in the country? If
so, specify when they were identified and referred to care. Are there ongoing investigations into
trafficking of Ukrainian refugees? Please describe government efforts to prevent trafficking among
this at-risk population.
                            </a>
                          </h6>
                        </div>

                        <div id="Question-18" class="collapse" role="tabpane18" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-19" aria-expanded="false"
                              aria-controls="collapse-4">
                               19.VENEZUELAN MIGRANTS: Venezuela’s economic, political, and humanitarian crises have forced
millions of people to flee the country. Venezuelan migrants are highly vulnerable to human
trafficking. Have authorities identified Venezuelan victims of sex trafficking or forced labor in the
country?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-19" class="collapse" role="tabpane19" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                       <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-20" aria-expanded="false"
                              aria-controls="collapse-4">
                               20.Considering what was reported in the 2024 TIP Report country narrative protection section, have
there been any new (or changes to preexisting) formal/standard procedures for victim referral to
protection services? Did the government have a national referral mechanism or other written
procedures to guide officials in referring potential trafficking victims to services?
-If yes, please attach a copy of the government’s national referral mechanism or standard procedures for
the referral of victims to care upon identification. <span style="color: green;">
(Tips: Please review the previous TIP report and read the definition- A National Referral
Mechanism (NRM) is a formal framework a government may use to complement victim
identification procedures and/or further systematize the identification of trafficking victims to
ensure their referral and access to protection services. NRMs should foster intragovernmental
coordination (including referrals to law enforcement for action when appropriate); formalize each
government entity’s responsibility; and enable communication, collaboration, and partnerships
with civil society, IOs, the private sector, and community/religious organizations to ensure victim
protection and care. Exact types and uses of NRMs may vary by country and across regions.) </span>
                            </a>
                          </h6>
                        </div>

                        <div id="Question-20" class="collapse" role="tabpane20" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                       <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-21" aria-expanded="false"
                              aria-controls="collapse-4">
                               21.. Were front-line officials across government sectors, and all other responsible stakeholders aware of
the national referral mechanism and how to use it?
(Tips: The definition of the font-line official among others include the following- Front-line officials
across government sectors includes law enforcement, immigration, social services personnel,
healthcare workers, and labor inspectors and other responsible stakeholders including NGO workers, international organization staff, religious officials, and community leaders. The “other
stakeholders” among others include- community people, prospective migrants, vulnerable
population such as child labour, displaced population and poor/destitute women. Choose
appropriate front-line officials and stakeholders from “choose item” button (the stakeholders’ list is
in brown) and provide information)

                            </a>
                          </h6>
                        </div>

                        <div id="Question-21" class="collapse" role="tabpane21" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-22" aria-expanded="false"
                              aria-controls="collapse-4">
                               22.Did the government systematically and consistently refer identified or potential trafficking victims
to social service providers?
(Tips: Social service providers can include government services or services delivered by NGOs,
international organizations, or religious institutions. “Potential trafficking victims” mean people who
are yet to be verified through official guidelines as “identified VoTs”.)


                            </a>
                          </h6>
                        </div>

                        <div id="Question-22" class="collapse" role="tabpane22" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-23" aria-expanded="false"
                              aria-controls="collapse-4">
                               23.Did the mechanism refer potential or identified victims directly to social service providers or did it
require victims to interact with law enforcement first? Were victims required to speak to law
enforcement before they were referred to care? Did referral to care take place when victims
refused to speak to law enforcement?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-23" class="collapse" role="tabpane23" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                       <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-24" aria-expanded="false"
                              aria-controls="collapse-4">
                               24.Did the government operate any trafficking-specific hotlines or other similar mechanisms, where
members of the public could directly reach and receive assistance from first responders? Did the
government provide funding to support NGO- operated trafficking-specific hotlines and/or other
similar mechanisms? Were these part of the NRM system?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-24" class="collapse" role="tabpane24" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-25" aria-expanded="false"
                              aria-controls="collapse-4">
                               25.Considering what was reported in the 2024 TIP Report country narrative protection section, have
there been any new (or changes to preexisting) procedures or services for victim care? Provide
details on the types of services to trafficking victims the government provided or funded. Do not
include NGO services delivered unless the government funded the organizations. 
                            </a>
                          </h6>
                        </div>

                        <div id="Question-25" class="collapse" role="tabpane25" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                         <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-26" aria-expanded="false"
                              aria-controls="collapse-4">
                               26.Please describe if victim services were general or specialized to trafficking victims’ needs. Indicate
if all trafficking survivors could assess the service (including victims of forced labor, foreign victims,
adults, and boys) or if only certain groups were eligible. Add any additional details on quality of
services, improvements made, or challenges or shortcomings in providing the care.

                            </a>
                          </h6>
                        </div>

                        <div id="Question-26" class="collapse" role="tabpane26" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                        <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-27" aria-expanded="false"
                              aria-controls="collapse-4">
                               27.If there were gaps in victim care (i.e. who may be eligible to access), please describe what the gaps
were. Did government policy require a person to be formally identified as a trafficking victim to
receive certain services or benefits? If yes, which services or benefits were limited to persons
formally identified as trafficking victims? If applicable, which officials were authorized to formally
designate individuals as trafficking victims?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-27" class="collapse" role="tabpane27" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-28" aria-expanded="false"
                              aria-controls="collapse-4">
                               28.Describe the overall quality of care? Did service providers receive adequate training on providing
care to trauma survivors? Did service providers have the knowledge and skills to support victims
through a consistent victim-centered approach?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-28" class="collapse" role="tabpane28" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                       <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-29" aria-expanded="false"
                              aria-controls="collapse-4">
                               29.How much funding (in the local currency) did the government spend on direct victim care, and
assistance (e.g., funds for government shelters, and payments to victims.)

                            </a>
                          </h6>
                        </div>

                        <div id="Question-29" class="collapse" role="tabpane29" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                         <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-30" aria-expanded="false"
                              aria-controls="collapse-4">
                               30.Did the government operate shelters available to trafficking victims? If so, how many government
shelters?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-30" class="collapse" role="tabpane30" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-31" aria-expanded="false"
                              aria-controls="collapse-4">
                               31.Did other stakeholders, including NGOs, IOs, or community/religious based organizations operate
shelters available to trafficking victims? If so, how many NGO shelters serving trafficking victims were
there?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-31" class="collapse" role="tabpane31" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-32" aria-expanded="false"
                              aria-controls="collapse-4">
                               32.Were there reports or allegations of misconduct or mistreatment by shelter staff, or unsafe
conditions in shelters? If so, what action did the government take?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-32" class="collapse" role="tabpane32" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                        <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-33" aria-expanded="false"
                              aria-controls="collapse-4">
                               33.Were there any populations who lacked access to care, including shelter or other services? (e.g.,
LGBTQI+ persons, persons with disabilities, men, boys, adults, foreign nationals, etc.) Did all
communities receive the same quality and level of access to services?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-33" class="collapse" role="tabpane33" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-34" aria-expanded="false"
                              aria-controls="collapse-4">
                               34.Were child trafficking victims placed in non-specialized shelters, including homeless shelters, group
homes, migrant shelters, or juvenile justice detention centers? What kind of specialized care did they
receive in these shelters?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-34" class="collapse" role="tabpane34" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-35" aria-expanded="false"
                              aria-controls="collapse-4">
                               35.In the case of child trafficking victims, which entity determined whether a child was placed into a
shelter, returned to family, or placed in another arrangement such as with a foster family? Did these
authorities receive adequate training on trafficking and understand the vulnerabilities of child trauma
survivors?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-35" class="collapse" role="tabpane35" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-36" aria-expanded="false"
                              aria-controls="collapse-4">
                               36.Could adult victims, including persons with disabilities, choose independently to enter a shelter or
not, and could they leave shelters unchaperoned when they wanted? Could victims work outside the
shelter?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-36" class="collapse" role="tabpane36" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-37" aria-expanded="false"
                              aria-controls="collapse-4">
                               37.Were foreign victims legally entitled to the same benefits as citizens? Did authorities refer to care
foreign trafficking victims? Did foreign victims face any barriers to accessing care?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-37" class="collapse" role="tabpane37" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-38" aria-expanded="false"
                              aria-controls="collapse-4">
                               38.Were potential trafficking victims incarcerated, fined, or otherwise penalized solely for unlawful acts
committed as a direct result of being trafficked (e.g., subject to commercial sex, drug-related, or
other criminal charges, or subject to deportation/immigration enforcement or administrative
penalties)?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-38" class="collapse" role="tabpane38" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-39" aria-expanded="false"
                              aria-controls="collapse-4">
                               39.Were members from certain communities, including members of marginalized racial and ethnic
communities, more likely to be punished? Were they less likely to be identified as trafficking victims?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-39" class="collapse" role="tabpane39" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-40" aria-expanded="false"
                              aria-controls="collapse-4">
                               40.Were migrants, refugees, asylum seekers, and potential victims deported or turned away at border
points without being screened for trafficking indicators?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-40" class="collapse" role="tabpane40" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-41" aria-expanded="false"
                              aria-controls="collapse-4">
                               41.Did law enforcement officials screen for trafficking when detaining or arresting individuals in
commercial sex, migrants, or other vulnerable groups?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-41" class="collapse" role="tabpane41" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-42" aria-expanded="false"
                              aria-controls="collapse-4">
                               42.What, if any, support did the government provide to victims who assisted in the investigation and
prosecution of trafficking cases? Examples of support include immigration relief, legal support and
advice, witness protection, victim-witness advocates, and funding for transportation and/or lodging.
                            </a>
                          </h6>
                        </div>

                        <div id="Question-42" class="collapse" role="tabpane42" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-43" aria-expanded="false"
                              aria-controls="collapse-4">
                               43.Did the government provide a recovery and reflection period? If yes, did this period include a secure
shelter option? Was it accessible to all victims, including men, boys, and underserved communities?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-43" class="collapse" role="tabpane43" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-44" aria-expanded="false"
                              aria-controls="collapse-4">
                               44.How many newly identified victims participated in the investigation and prosecution of traffickers?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-44" class="collapse" role="tabpane44" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-45" aria-expanded="false"
                              aria-controls="collapse-4">
                               45.What, if any, alternatives were victims presented with to speaking with law enforcement while
participating in investigations? What steps, if any, did the authorities take to minimize the number of
times a victim must be interviewed throughout the criminal justice process? Did law enforcement
allow a representative or advocate to accompany victims during interviews?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-45" class="collapse" role="tabpane45" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-46" aria-expanded="false"
                              aria-controls="collapse-4">
                               46.What, if any, legal assistance did the government fund and provide to trafficking victims? What, if
any, forms of legal aid did it offer to assist with cases on related legal matters, such as criminal
charges, family law or protective orders, etc.?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-46" class="collapse" role="tabpane46" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-47" aria-expanded="false"
                              aria-controls="collapse-4">
                               47.What forms of victim-witness protection services did the government provide to protect participating
victims’ physical security and privacy during proceedings? What, if any, accommodations did the
government provide for victims with disabilities during trials?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-47" class="collapse" role="tabpane47" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-48" aria-expanded="false"
                              aria-controls="collapse-4">
                               48. Could victims provide testimony via video or written statements? How many, if any, participated via
these methods?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-48" class="collapse" role="tabpane48" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-49" aria-expanded="false"
                              aria-controls="collapse-4">
                               49. Could victims obtain restitution from defendants in criminal cases? Were criminal justice officials
adequately trained to seek and order restitution for victims during criminal cases and did they do so?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-49" class="collapse" role="tabpane49" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-50" aria-expanded="false"
                              aria-controls="collapse-4">
                               50. How many convicted traffickers were ordered to pay restitution to a victim and what amounts were
they ordered to pay?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-50" class="collapse" role="tabpane50" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-51" aria-expanded="false"
                              aria-controls="collapse-4">
                               51.Did the government maintain a victim compensation fund?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-51" class="collapse" role="tabpane51" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-52" aria-expanded="false"
                              aria-controls="collapse-4">
                               52.Is there a designated lead anti-trafficking official, agency, and/or a national coordinating body?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-52" class="collapse" role="tabpane52" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-53" aria-expanded="false"
                              aria-controls="collapse-4">
                               53.Did the government seek civil society and/or survivors’ input in crafting or implementing any new
anti-trafficking laws, regulations, policies, programs?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-53" class="collapse" role="tabpane53" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-54" aria-expanded="false"
                              aria-controls="collapse-4">
                               54.Did the government take new or ongoing steps to ensure policies did not further marginalize
communities already overrepresented among trafficking victims?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-54" class="collapse" role="tabpane54" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-55" aria-expanded="false"
                              aria-controls="collapse-4">
                               55.How much funding (in the local currency) did the government spend on prevention efforts (e.g.,
awareness campaigns, research projects, national action plan implementation, etc.)?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-55" class="collapse" role="tabpane55" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-56" aria-expanded="false"
                              aria-controls="collapse-4">
                               56.Did the government create or update a national action plan to address trafficking? If yes, provide a
copy (in English, if available).
                            </a>
                          </h6>
                        </div>

                        <div id="Question-56" class="collapse" role="tabpane56" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-57" aria-expanded="false"
                              aria-controls="collapse-4">
                               57.What resources (funding or in-kind) did the government devote to implement new/updated or
existing national action plans?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-57" class="collapse" role="tabpane57" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-58" aria-expanded="false"
                              aria-controls="collapse-4">
                               58.Did the government conduct or fund new projects to research or assess trafficking issues within the
country or of its nationals abroad? Did the government publicize its efforts to combat trafficking?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-58" class="collapse" role="tabpane58" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-59" aria-expanded="false"
                              aria-controls="collapse-4">
                               59.Did the government fund and/or conduct awareness activities? Note if these activities were new or
ongoing.
                            </a>
                          </h6>
                        </div>

                        <div id="Question-59" class="collapse" role="tabpane59" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-60" aria-expanded="false"
                              aria-controls="collapse-4">
                               60.Did the government carry out any efforts to raise awareness or train foreign governments on
trafficking?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-60" class="collapse" role="tabpane60" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-61" aria-expanded="false"
                              aria-controls="collapse-4">
                               61.Were awareness-raising materials readily available to intended audiences, cost-free, and accessible in
various languages, including braille?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-61" class="collapse" role="tabpane61" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-62" aria-expanded="false"
                              aria-controls="collapse-4">
                               62.What strategies did awareness-raising campaigns employ to ensure messaging and images did not
legitimize and/or perpetuate harmful or racialized narratives and/or stereotypes of victims/survivors
and perpetrators?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-62" class="collapse" role="tabpane62" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-63" aria-expanded="false"
                              aria-controls="collapse-4">
                               63.Did the government change how it regulated and oversaw labor recruitment for licensed and
unlicensed recruitment agencies, individual recruiters, and sub-brokers?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-63" class="collapse" role="tabpane63" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-64" aria-expanded="false"
                              aria-controls="collapse-4">
                               64. Did the government prohibit worker-paid recruitment fees?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-64" class="collapse" role="tabpane64" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-65" aria-expanded="false"
                              aria-controls="collapse-4">
                               65. Did the government have agreements, with a transparent oversight mechanism, with other countries
on safe and responsible labor recruitment that included measures to prevent trafficking vulnerable
people seeking work in those countries? Were these agreements implemented during the reporting
period?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-65" class="collapse" role="tabpane65" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-66" aria-expanded="false"
                              aria-controls="collapse-4">
                               66.Did the government allow migrant workers to change employers without obtaining special
permissions?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-66" class="collapse" role="tabpane66" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-67" aria-expanded="false"
                              aria-controls="collapse-4">
                               67.Did the government take tangible action to prevent forced labor in supply chains?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-67" class="collapse" role="tabpane67" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-68" aria-expanded="false"
                              aria-controls="collapse-4">
                               68.Did the government make any new efforts ensure its trade or migration policies did not facilitate
trafficking?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-68" class="collapse" role="tabpane68" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-69" aria-expanded="false"
                              aria-controls="collapse-4">
                               69.Did the government make any efforts to prohibit and prevent trafficking in public procurement supply
chains?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-69" class="collapse" role="tabpane69" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-70" aria-expanded="false"
                              aria-controls="collapse-4">
                               70.What measures not mentioned elsewhere did the government take to reduce the demand for
commercial sex acts by targeting consumers? (NOTE: These measures should target consumers – not
suppliers or facilitators – of commercial sex. Law enforcement efforts against brothels or individuals
in commercial sex are not considered efforts to reduce the demand for commercial sex.)
                            </a>
                          </h6>
                        </div>

                        <div id="Question-70" class="collapse" role="tabpane70" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-71" aria-expanded="false"
                              aria-controls="collapse-4">
                               71.In countries with legalized or decriminalized “prostitution,” describe the laws related to commercial
sex, and describe any efforts to discourage the purchase of commercial sex within legal or
decriminalized “prostitution” activities. Did these laws/efforts apply to all individuals in the
commercial sex industry, including foreign nationals?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-71" class="collapse" role="tabpane71" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-72" aria-expanded="false"
                              aria-controls="collapse-4">
                               72.Did the government continue or make new efforts to reduce its nationals’ or foreigners’ participation
in domestic and extraterritorial child sexual exploitation? Did authorities identify victims of child sex
trafficking exploited by domestic or foreign tourists during the reporting period? If so, please provide
details.
                            </a>
                          </h6>
                        </div>

                        <div id="Question-72" class="collapse" role="tabpane72" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-73" aria-expanded="false"
                              aria-controls="collapse-4">
                               73.Did the government train its diplomats not to engage in or facilitate trafficking?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-73" class="collapse" role="tabpane73" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-74" aria-expanded="false"
                              aria-controls="collapse-4">
                               74.Did country diplomats allegedly exploit domestic workers overseas (e.g., worker pay is low or given in
the form of food and/or accommodation)?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-74" class="collapse" role="tabpane74" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-75" aria-expanded="false"
                              aria-controls="collapse-4">
                               75.Did the government provide anti-trafficking training to its nationals deployed abroad on
peacekeeping or other similar missions?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-75" class="collapse" role="tabpane75" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-76" aria-expanded="false"
                              aria-controls="collapse-4">
                               76.Describe human trafficking trends, drivers, methods, foreign victim nationalities, source/destination
dynamics, sectors, affected demographics, etc. during the reporting period?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-76" class="collapse" role="tabpane76" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-77" aria-expanded="false"
                              aria-controls="collapse-4">
                               77.Which groups are at particular risk of sex trafficking?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-77" class="collapse" role="tabpane77" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-78" aria-expanded="false"
                              aria-controls="collapse-4">
                               78.Which groups are at particular risk of forced labor?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-78" class="collapse" role="tabpane78" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-79" aria-expanded="false"
                              aria-controls="collapse-4">
                               79.Climate change compounds vulnerabilities to sex trafficking and forced labor worldwide. Provide any
information about trafficking trends or risk factors stemming from slow-onset climate-related change
and sudden-onset climate-related disasters, as well as any efforts to mitigate these vulnerabilities.
                            </a>
                          </h6>
                        </div>

                        <div id="Question-79" class="collapse" role="tabpane79" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-80" aria-expanded="false"
                              aria-controls="collapse-4">
                               80.Are any of the following persons present in the country as part of government-to-government
agreements and/or in foreign government-affiliated projects? If present, are these individuals
subjected to or at high risk of forced labor?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-80" class="collapse" role="tabpane80" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-81" aria-expanded="false"
                              aria-controls="collapse-4">
                               81.Did foreign security personnel exploit people in human trafficking crimes, including forced labor, and
sex trafficking?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-81" class="collapse" role="tabpane81" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-82" aria-expanded="false"
                              aria-controls="collapse-4">
                               82.Did foreign-directed development, infrastructure, agriculture, or extractive enterprises exploit people
in forced labor, sex trafficking, or use (Belt and Road Initiative, medical missions, etc.)?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-82" class="collapse" role="tabpane82" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-83" aria-expanded="false"
                              aria-controls="collapse-4">
                               83.Technology and Trafficking: If applicable, describe how traffickers use technology to recruit and
exploit victims and how governments combat these forms of human trafficking.
                            </a>
                          </h6>
                        </div>

                        <div id="Question-83" class="collapse" role="tabpane83" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-84" aria-expanded="false"
                              aria-controls="collapse-4">
                               84.Describe any online scam operations involving indicators of trafficking indicators identified during the
reporting period. What are the victims’ nationalities? How did the government respond? Did
governments help repatriate victims?
                            </a>
                          </h6>
                        </div>

                        <div id="Question-84" class="collapse" role="tabpane84" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>

                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#Question-85" aria-expanded="false"
                              aria-controls="collapse-4">
                               85.Provide information about trafficking trends and government anti-trafficking efforts in
territories or semi-autonomous regions.
                            </a>
                          </h6>
                        </div>

                        <div id="Question-85" class="collapse" role="tabpane85" aria-labelledby="heading-4"
                          data-parent="#accordion-2">
                          <div class="card-body">

                            <input type="radio" name="gender" value="male"> Yes <br>
                            <input type="radio" name="gender" value="male"> No <br>

                            <input type="radio" name="gender" value="female"> Others <br>
                          </div>
                        </div>
                      </div>
                      <!-- content-wrapper ends -->

                      <!-- content-wrapper ends -->
                     
                      <!-- content-wrapper ends -->
                      <!-- content-wrapper ends -->
                 
                      <!-- content-wrapper ends -->


                   
                  

                    </div>
                  </div>
                 
                </form>
                </div>
              </div>
            </div>


          </div>
        </div>

@endsection
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>

