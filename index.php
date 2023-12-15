<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Satya Sreekar Pattaswami</title>
  <style>
    div {
      overflow-x: hidden;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
      color: #333;
      display: flex;
      flex-wrap: wrap;
    }

    header {
      text-align: center;
      padding: 4vw 0;
      /* changed to vw */
      background-color: #3498db;
      color: #fff;
      width: 100%;
    }

    header h1 {
      margin: 0;
      font-size: 3em;
    }

    .subtitle {
      margin-top: 0.5vw;
      /* changed to vw */
      font-size: 1.2em;
      color: #ecf0f1;
    }

    .contact-info {
      margin-top: 2vw;
      /* changed to vw */
    }

    .contact-info a {
      color: #ecf0f1;
      text-decoration: none;
      margin-right: 1.5vw;
      /* changed to vw */
    }

    section {
      width: calc(50% - 7.5vw);
      /* changed to vw */
      margin: 1vw auto;
      /* changed to vw */
      background-color: #fff;
      box-shadow: 0 0 1vw rgba(0, 0, 0, 0.1);
      /* changed to vw */
      padding: 2vw;
      /* changed to vw */
      opacity: 0;
      transform: translateY(2vw);
      /* changed to vw */
      transition: opacity 0.5s, transform 0.5s;
    }

    h2 {
      color: #3498db;
    }

    ul {
      list-style: none;
      padding: 0;
    }

    li {
      margin-bottom: 1vw;
      /* changed to vw */
    }

    .job-experience {
      width: 90%;
    }

    .job-experience h3 {
      color: #3498db;
      margin-bottom: 0.5vw;
      /* changed to vw */
    }

    .certifications ul {
      display: flex;
      flex-wrap: wrap;
    }

    .certifications li {
      margin-right: 1vw;
      /* changed to vw */
      margin-bottom: 1vw;
      /* changed to vw */
    }

    .strengths ul {
      columns: 2;
      column-gap: 2.5vw;
      /* changed to vw */
    }

    .declaration {
      width: 100%;
      background-color: #ecf0f1;
      padding: 1.5vw;
      /* changed to vw */
      text-align: center;
    }

    /* Animation */
    .fade-in {
      animation: fadeIn 1s forwards;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(2vw);
        /* changed to vw */
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Media Query for Mobile */
    @media only screen and (max-width: 600px) {
      body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        color: #333;
        display: flex;
        flex-wrap: wrap;
      }

      header {
        text-align: center;
        padding: 2vw 0;
        /* changed to vw */
        background-color: #3498db;
        color: #fff;
        width: 100%;
      }

      header h1 {
        margin: 0;
        font-size: 2em;
      }

      .subtitle {
        margin-top: 0.5vw;
        /* changed to vw */
        font-size: 1em;
        color: #ecf0f1;
      }

      .contact-info {
        margin-top: 1vw;
        /* changed to vw */
      }

      .contact-info a {
        color: #ecf0f1;
        text-decoration: none;
        margin-right: 0.5vw;
        /* changed to vw */
        display: block;
      }

      section {
        width: 100%;
        margin: 1vw auto;
        /* changed to vw */
        background-color: #fff;
        box-shadow: 0 0 1vw rgba(0, 0, 0, 0.1);
        /* changed to vw */
        padding: 1.5vw;
        /* changed to vw */
        opacity: 0;
        transform: translateY(2vw);
        /* changed to vw */
        transition: opacity 0.5s, transform 0.5s;
      }

      h2 {
        color: #3498db;
      }

      ul {
        list-style: none;
        padding: 0;
      }

      li {
        margin-bottom: 1vw;
        /* changed to vw */
      }

      .job-experience {
        width: 100%;
      }

      .job-experience h3 {
        color: #3498db;
        margin-bottom: 0.5vw;
        /* changed to vw */
      }

      .certifications ul {
        display: flex;
        flex-wrap: wrap;
      }

      .certifications li {
        margin-right: 0.5vw;
        /* changed to vw */
        margin-bottom: 1vw;
        /* changed to vw */
      }

      .strengths ul {
        columns: 1;
      }

      .declaration {
        width: 100%;
        background-color: #ecf0f1;
        padding: 1vw;
        /* changed to vw */
        text-align: center;
      }

      /* Animation */
      .fade-in {
        animation: fadeIn 1s forwards;
      }

      @keyframes fadeIn {
        from {
          opacity: 0;
          transform: translateY(2vw);
          /* changed to vw */
        }

        to {
          opacity: 1;
          transform: translateY(0);
        }
      }
    }
  </style>

</head>

<body>
  <header>
    <h1>Satya Sreekar Pattaswami</h1>
    <p class="subtitle">Full Stack Engineer | Student at KL University Hyderabad | AWS and Azure Certified Professional</p>
    <div class="contact-info">
      <a href="mailto:satyasreekar@hotmail.com">satyasreekar@hotmail.com</a>
      <a href="tel:+91-9652635479">+91-9652635479</a>
    </div>
  </header>
  <section class="fade-in">
    <center>
      <p>
        <a href="https://github.com/Satya-Sreekar"><img src="https://iior.klh.edu.in/sreekar/github-mark.png" alt="Github" width=200 vh></a>
        <a href="https://www.linkedin.com/in/satya-sreekar-pattaswami-093a2220a/"><img src="https://iior.klh.edu.in/sreekar/linkedin-logo.webp" alt="linkedin" width=215 vh></a>
      </p>
    </center>
  </section>

  <section class="fade-in">
    <h2>Technical Skills</h2>
    <ul>
      <li>Programming languages – Python, Java, C, JavaScript, PHP, HTML, CSS.</li>
      <li>Virtualization – VMWare</li>
      <li>Development Tools- VS Code, GitHub, PyCharm, XAMPP, ChatGPT</li>
      <li>Frameworks – React.js ,Node.js, React Native</li>
      <li>Cloud Technologies – Azure, AWS</li>
      <li>Databases – MySQL</li>
      <li>Operating Systems – Linux, Windows, Raspbian & MacOS.</li>
    </ul>
  </section>
  <section class="fade-in">
    <h2>Training Programme Attended</h2>
    <ul>
      <li>Introduction to AI and ML using Python –Hands-on Workshop.</li>
      <li>Agile Implementation Training.</li>
    </ul>
  </section>
  <section class="fade-in">
    <h2>Strengths</h2>
    <ul>
      <li>Effective communication skills, both oral and written & Good interpersonal skills.</li>
      <li>High energy level.</li>
      <li>Commendable technical skills.</li>
      <li>Strong goal and results-oriented with proven success in setting and meeting objectives.</li>
      <li>Proven ability to design solutions and manage projects without supervision.</li>
      <li>Service delivery and customer-focused with strong analytical & problem-solving Skills.</li>
      <li>Accustomed to working in a variety of team structures.</li>
    </ul>
  </section>
  <section class="fade-in job-experience">
    <h2>Work Experience</h2>

    <h3>Developer, Neon Flake (July 2023-October 2023)</h3>
    <p>Neon Flake, Hyderabad, India – Developer</p>
    <ul>
      <li>Integrate multiple Machine Learning models and deploy them.</li>
      <li>Configure and build a server to host the integrated application.</li>
      <li>Handle Weekly Client Meetings.</li>
      <li>Research.</li>
    </ul>

    <h3>Intern, ICAR- Indian Council of Agricultural Research (Sep 2022 - Present)</h3>
    <p>Indian Council of Agriculture Research-Indian Institute of Oilseeds Research, Hyderabad, India– Intern</p>
    <ul>
      <li>Led a 5-member team to develop a Web application with multi-tier user access.</li>
      <li>Deployed the server on multiple Servers.</li>
      <li>Worked with the client on multiple revisions.</li>
    </ul>

    <h3>Web Developer, AMITA - Pearlss4development (Jun 2022 – May 2023)</h3>
    <p>AMITA - Pearlss4development, Hyderabad, India – Web Developer</p>
    <ul>
      <li>Integrated WhatsApp with both websites to enhance communication and engagement with users.</li>
      <li>Developed a happiness assessment tool to help users track and improve their well-being.</li>
      <li>Made changes to the websites to improve user experience and functionality.</li>
      <li>Created and provided free resources for users to promote health and wellness.</li>
      <li>Updated the terms and conditions for the websites to ensure compliance with legal requirements.</li>
      <li>Conducted SEO optimization to improve website visibility and traffic.</li>
    </ul>

    <h3>Website Admin, KL University Hyderabad (Jul 2022 - Jul 2023)</h3>
    <p>KL University Hyderabad, India– Website Admin</p>
    <ul>
      <li>Maintained the website with up-to-date information.</li>
      <li>Created Several Webpages.</li>
      <li>Handled several time-sensitive tasks.</li>
    </ul>

    <h3>Freelance, WebShogunsLee (May 2021 - Jun 2021)</h3>
    <p>Freelancing for WebShogunsLee, Singapore – Python Developer</p>
    <ul>
      <li>Developed a Python Script that automatically fetches data from LTA Singapore's API every minute.</li>
      <li>Fetched JSON data then stored it into a CSV File.</li>
      <li>Made the code time-efficient by splitting it into different files.</li>
      <li>Made several changes to the code based on client requirements.</li>
    </ul>

  </section>
  <section class="fade-in certifications">
    <h2>Certifications</h2>
    <ul>
      <li>Azure Fundamentals</li>
      <li>AWS Academy Cloud Foundations</li>
      <li>AWS Academy Machine Learning Foundations</li>
      <li>AWS Cloud Practitioner</li>
    </ul>
  </section>

  <section class="fade-in personal-details">
    <h2>Personal Details</h2>
    <p>Father: Late P.Sri Ranjan</p>
    <p>Mother: Sailasree P</p>
    <p>Languages: English, Telugu, and Hindi</p>
    <p>Date of Birth: 14-11-2003</p>
  </section>
</body>

</html>