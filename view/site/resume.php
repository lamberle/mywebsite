<script>
    $(document).ready(function(){
        $('.progress-bar').ready(function() {
            console.log("PROGRESS");
            $('.progress-bar').each(function() {
                var width = $(this).attr("w");
                console.log(width);
                // $(this).width(0);
                // $(this).animate({width: 0}, 0, function() {}); 
                $(this).animate({width: width,}, 800, function() {});    
            });
   
        });
            // $('#resume-button').click(function(){
        //     $("#resume").show(800);
        //     $('#skills').hide(400);
        // });
        // $('#skills-button').click(function(){
        //     $("#skills").show(0);
        //     $('#resume').hide(400);
        //     $('.progress-bar').hide(0);
        //     $('.progress-bar').show(1200);
        // });
        // $("#resume").show();
        // $('#skills').hide();
    });
</script>
<div class="skills" id="skills">
  <div>
    <div class="h3 mb-4 title">Data Engineer Skills</div>
    <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">Python</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="90" w="95%"></div><span class="progress-value"></span>
              </div>
            </div>
          </div>
          </div>
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">PySpark</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" w="95%"></div><span class="progress-value"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">ElasticSearch</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" w="95%"></div><span class="progress-value"></span>
              </div>
            </div>
          </div>
          </div>
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">SQL</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" w="95%"></div><span class="progress-value"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">Airflow</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" w="95%"></div><span class="progress-value"></span>
              </div>
            </div>
          </div>
          </div>
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">AWS S3</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" w="95%"></div><span class="progress-value"></span>
              </div>
            </div>
          </div>
      </div>
  </div>
</div>
 <div class="h3 mb-4 title">Web skills</div>
    <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">PHP</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" w="90%"></div><span class="progress-value"></span>
              </div>
            </div>
          </div>
          </div>
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">HTML</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" w="95%"></div><span class="progress-value"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">CSS</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" w="90%"></div><span class="progress-value"></span>
              </div>
            </div>
          </div>
          </div>
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">JS</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" w="90%"></div><span class="progress-value"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 <div class="h3 mb-4 title">Other programming skills</div>
    <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">C#</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" w="80%"></div><span class="progress-value"></span>
              </div>
            </div>
          </div>
          </div>
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">Java</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" w="80%"></div><span class="progress-value"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">R</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" w="70%"></div><span class="progress-value"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">Matlab</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" w="70%"></div><span class="progress-value"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="h3 mb-4 title">Languages</div>
    <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">French</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="90" w="100%"></div><span class="progress-value"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">English</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" w="95%"></div><span class="progress-value"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">Italian</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" w="70%"></div><span class="progress-value"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="resume" class="row example-centered">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
            <ul class="timeline timeline-centered">
                <li class="timeline-item period">
                    <div class="timeline-info"></div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h2 class="timeline-title">Professional Experiences</h2>
                    </div>
                </li>
            	<li class="timeline-item">
                    <div class="timeline-info">
                        <span>Since February 2020</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h3 class="timeline-title">Data Engineer</h3>
                        <p class="resume-company">KAYRROS</p>
                        <p>Implementation of data pipelines involving public websites scraping, data cleaning and satellite images processing.</p>
                    </div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>September 2019 / February 2020</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h3 class="timeline-title">Data Engineer Internship</h3>
                        <p class="resume-company">KAYRROS</p>
                        <p>Implementation of data pipelines involving public websites scraping, data cleaning and satellite images processing. Acted as technical lead on a large scale project.</p>
                    </div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>September 2017 / February 2018</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h3 class="timeline-title">IT Engineer Internship</h3>
                        <p class="resume-company">AIRBUS</p>
                        <p>Development of an application used in the troubleshooting of airplanes using a PLM platform.</p>
                    </div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>June 2016 / July 2016</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h3 class="timeline-title">Web developer</h3>
                        <p class="resume-company">TEAMINFO</p>
                        <p>Development of web applications and management of existing web sites.</p>
                    </div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>April 2016 / June 2016</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h3 class="timeline-title">Web developer internship</h3>
                        <p class="resume-company">TEAMINFO</p>
                        <p>Conception and development of web applications. (Homemade ERP, Software licences manager, monitoring dashboards)</p>
                    </div>
                </li>
                <li class="timeline-item period">
                    <div class="timeline-info"></div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h2 class="timeline-title">Education</h2>
                    </div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>September 2018 / February 2019</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h3 class="timeline-title">Computer Engineering</h3>
                        <p class="resume-company">Università degli Studi di Napoli Federico II</p>
                        <p>Semester abroad in Naples, Italy. Data mining, Parallel computing, Business information systems, Software Engineering  </p>
                    </div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>2016 / 2019</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h3 class="timeline-title">Computer Engineering</h3>
                        <p class="resume-company">Université de Technologie de Compiègne</p>
                        <p>Data mining, Machine learning, Data warehouse, Software conception, Project management, Artificial Intelligence </p>
                    </div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>2014 / 2016</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h3 class="timeline-title">Computer Science DUT</h3>
                        <p class="resume-company">IUT Annecy </p>
                        <p>Software conception, Programming, Web, Databases, Economics, Law and Management</p>
                    </div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-info">
                        <span>2012 / 2014</span>
                    </div>
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h3 class="timeline-title">Computer Engineering</h3>
                        <p class="resume-company">Ecole Polytechnique Fédérale de Lausanne (Switzerland)</p>
                        <p>Mathematics, Physics, Programming and Information systems</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
