<template>
  <div class="resume">
    <div class="resume_left">
      <img class="profile-image" src="@/assets/images/drive.jpg"/>
      <div class="resume_content">
        <div class="resume_item resume_info">
          <div class="title">
            <p class="bold">Sirakan Kaewgosa</p>
            <p class="regular">Developer</p>
          </div>
          <ul>
            <li>
              <div class="icon">
                <i class="fab fa-github"></i>
              </div>
              <div class="data">
                github.com/drivedemon
              </div>
            </li>
            <li>
              <div class="icon">
                <i class="fas fa-mobile-alt"></i>
              </div>
              <div class="data">
                +66 62 5490665
              </div>
            </li>
            <li>
              <div class="icon">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="data">
                drivedemon@gmail.com
              </div>
            </li>
            <li>
              <div class="icon">
                <i class="fas fa-map-signs"></i>
              </div>
              <div class="data">
                ladprao&nbsp;107&nbsp;Bangkapi
              </div>
            </li>
          </ul>
        </div>
        <div class="resume_item resume_social">
          <div class="title">
            <p class="bold">Social</p>
          </div>
          <ul>
            <li>
              <div class="icon">
                <i class="fab fa-facebook-square"></i>
              </div>
              <div class="data">
                <p class="semi-bold">Facebook</p>
                <p>drivedemon@facebook</p>
              </div>
            </li>
            <li>
              <div class="icon">
                <i class="fab fa-twitter-square"></i>
              </div>
              <div class="data">
                <p class="semi-bold">Twitter</p>
                <p>drivedemon@twitter</p>
              </div>
            </li>
            <li>
              <div class="icon">
                <i class="fab fa-linkedin"></i>
              </div>
              <div class="data">
                <p class="semi-bold">Linkedin</p>
                <p>drivedemon@linkedin</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="resume_right">
      <div class="resume_item resume_about">
        <div class="title">
          <p class="bold">About us</p>
        </div>
        <p>I am developer with a strong interest in projects that require conceptual and analysis thinking. I try to learn everything because i love code :)</p>
      </div>
      <div class="resume_item resume_work">
        <div class="title">
          <p class="bold">Work Experience</p>
        </div>
        <ul>
          <li>
            <div class="date">Jan 2018 - 2019</div>
            <div class="info">
              <p class="semi-bold">VP Advance</p>
              <p>Design and develop web-application with PHP and Jquery</p>
              <p>Develop window-application connect smartcard reader with VB & C#</p>
            </div>
          </li>
          <li>
            <div class="date">Jan - Dec 2019</div>
            <div class="info">
              <p class="semi-bold">CDG Group</p>
              <p>Maintenance web-application support additional requirement with PHP</p>
              <p>Design and develop internal web-application from Cus. with Laravel</p>
            </div>
          </li>
          <li>
            <div class="date">Dec 2019 - Present</div>
            <div class="info">
              <p class="semi-bold">Morphosis App</p>
              <p>Backend restful and docker develop on Back-Office with Laravel / Ruby</p>
              <p>Integrate payment gateway Vipps / Stripe with Ruby</p>
            </div>
          </li>
        </ul>
      </div>
      <div class="resume_item resume_education">
        <div class="title">
          <p class="bold">Education</p>
        </div>
        <ul>
          <li>
            <div class="date">2013 - 2017</div>
            <div class="info">
              <p class="semi-bold">Rattanabundit university, Thailand</p>
              <p>Bachelor’s degree of Science and technology</p>
              <p>Major Information technology (GPA : 3.11)</p>
            </div>
          </li>
        </ul>
      </div>
      <div class="resume_item resume_hobby">
        <div class="title">
          <p class="bold">Interests</p>
        </div>
        <ul>
          <li><i class="fas fa-laptop-code"></i></li>
          <li><i class="fas fa-gamepad"></i></li>
          <li><i class="fas fa-music"></i></li>
          <li><i class="fas fa-running"></i></li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'About',
  mounted() {
    let externalScript = document.createElement('script')
    externalScript.setAttribute('src', 'https://kit.fontawesome.com/b99e675b6e.js')
    document.head.appendChild(externalScript)
  },
}
</script>

<style scoped>

.profile-image {
  background-position: center;
  border-radius: 50%;
  height: 250px;
  margin-top: 10px;
  margin-left: 10px;
  width: 260px;
}
</style>
