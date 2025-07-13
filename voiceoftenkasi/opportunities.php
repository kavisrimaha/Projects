<?php include 'header.php'; ?>

<div class="container my-5">
  <div class="row align-items-center">
    <!-- Left Column: Image -->
    <div class="col-lg-6 mb-4 mb-lg-0 text-center animate__animated animate__fadeIn">
      <img 
        src="https://i.pinimg.com/736x/58/d3/db/58d3db724187b26fdcb63ccb9f2f8b2b.jpg" 
        alt="Business teamwork" 
        title="Business teamwork"
        class="img-fluid rounded shadow"
        style="max-height: 450px; object-fit: cover;"
        loading="lazy">
    </div>

    <!-- Right Column: Text -->
    <div class="col-lg-6" 	style="padding-left: 20px;">
      <h5 class="text-primary mb-2 animate__animated animate__fadeIn text-center" style="font-size: 2rem; font-family: 'Montserrat', sans-serif;">
        Empowering Tenkasi
      </h5>
      <h2 class="display-5 fw-bold mb-3 animate__animated animate__fadeIn" 	style="padding-left: 20px;">
        Shaping a Tech Hub
      </h2>
     
      <p class="text-start text-center animate__animated animate__fadeIn">
        Join us on our journey to establish Tenkasi as a global technological powerhouse. 
        Together, let’s create a positive change that resonates far beyond the borders of Tenkasi.
      </p>
      <p class="text-start text-center animate__animated animate__fadeIn">
        Embark on a transformative voyage with us as we endeavor to position Tenkasi as a prominent 
        technological hub. Join hands in crafting a meaningful impact that transcends geographical boundaries. 
        Together, let’s usher in a wave of positive change that reverberates globally.
      </p>
    </div>
  </div>
</div>

<?php
$jobs = [
    [
        'id' => 'One',
        'title' => 'UI UX Designer',
        'purpose' => 'As a UI UX Designer, you will provide optimal user experiences by designing and improving the visual and interactive aspects of software and digital products.',
        'duties' => [
            'Actively seek ways to improve customer experience visually and functionally as a self-starter.',
            'Create wireframes and interactive prototypes using Adobe XD.',
            'Conceptualize and create intuitive, engaging, and brand-compliant experiences.',
            'Apply a brand\'s style and identity, style guide, and interaction patterns consistently.',
            'Solve visual design problems with a user-centric approach and provide various solutions.',
            'Communicate design decisions and processes clearly to developers and other stakeholders.',
            'Collect feedback from project managers and adjust your approach to meet business requirements.',
            'Possess a passion for design and a firm command of interaction and visual design capabilities.',
            'Work effectively and efficiently in an Agile development environment.',
            'Stay up-to-date with industry trends, emerging technologies, and design tools.'
        ],
        'education' => 'At least a Bachelor\'s Degree in Design or a related field',
        'experience' => 'Between 2-4 years of experience in UI UX',
        'must_have' => [
            'A portfolio showcasing great-looking web and mobile applications that have shipped/gone live',
            'The ability to create pixel-perfect wireframe/design using Adobe XD',
            'A familiarity with large-scale enterprise solutions',
            'An eye for detail',
            'Proficiency in: Figma, Adobe XD, Photoshop, Illustrator, Visual Design, Wireframe, Interactive Prototyping, Creative Thinking, Presentation and Organizational skills'
        ],
        'location' => 'Mumbai/Chennai/Hyderabad',
        'employment_type' => 'Full-Time, Permanent',
        'mode' => 'Hybrid'
    ],
    [
        'id' => 'Two',
        'title' => 'Senior Native App Developer (Android)',
        'purpose' => 'Develop and optimize native mobile applications for iOS and Android platforms, enhancing customer satisfaction and delivering robust functionality.',
        'duties' => [
            'Develop and maintain native mobile applications for Android platforms.',
            'Create native plugins to use the mobile native features and SDKs to extend their functionalities.',
            'Collaborate with cross-functional teams to design, develop, and implement mobile app features and enhancements.',
            'Work with UI/UX designers to create engaging and user-friendly mobile app interfaces.',
            'Ensure the performance, quality, and responsiveness of mobile applications.',
            'Troubleshoot and debug mobile app issues, identify and implement solutions.',
            'Stay up-to-date with the latest trends and best practices in mobile app development for iOS and Android.',
            'Optimize mobile app performance, including memory usage, network connectivity, and battery usage.',
            'Conduct code reviews and provide constructive feedback to ensure code quality and maintainability.',
            'Participate in the full mobile app development lifecycle, from concept and design to testing and deployment.',
            'Continuously improve mobile app development processes and practices to enhance efficiency and productivity.'
        ],
        'education' => 'Any technical graduation in Information Technology (IT)',
        'experience' => 'Over four years of native mobile application development on Android',
        'skills' => [
            'Swift',
            'Objective C',
            'Core Java',
            'Code Versioning using GitHub',
            'Unit Testing Discipline',
            'SQL, SQL Lite (Preferable)',
            'React Native (Preferable)'
        ],
        'location' => 'Mumbai/Chennai/Hyderabad',
        'employment_type' => 'Full-Time, Permanent',
        'mode' => 'Work-from-Office'
    ],
    [
        'id' => 'Three',
        'title' => 'Senior Full-Stack Web Developer',
        'purpose' => 'Develop and maintain high-quality web applications, utilizing front-end and back-end technologies, to ensure seamless functionality and an optimal user experience.',
        'duties' => [
            'Develop and maintain scalable and device-agnostic web applications using front-end Javascript frameworks like ReactJs.',
            'Collaborate with UI/UX designers to implement user-friendly interfaces and optimize web application usability.',
            'Possess knowledge of DOM manipulation on different browsers.',
            'Build a backend for highly scalable enterprise applications using Node.js and MongoDB.',
            'Collaborate with cross-functional teams to understand requirements and implement solutions that meet business objectives.',
            'Write clean and efficient code while adhering to coding standards and best practices.',
            'Perform testing and debugging to identify and resolve issues, ensuring the quality and performance of web applications.',
            'Enhance application functionality by implementing third-party APIs and services.',
            'Maintain documentation for projects, code commits, technical specifications, and user guides.',
            'Troubleshoot and provide support for existing web applications, addressing user-reported issues and implementing fixes.',
            'Participate in code reviews and Agile development processes, providing constructive feedback.'
        ],
        'education' => 'Any technical graduation in Information Technology (IT)',
        'experience' => 'Over four years of cross-platform application development',
        'skills' => [
            'HTML',
            'CSS, Tailwind CSS, Flexbox',
            'ReactJS, Redux, React Native, Ant Design',
            'Vue.js, Vuex, Vuetify',
            'JQuery',
            'JavaScript',
            'Code Versioning using GitHub',
            'Unit Testing Discipline',
            'Node.js',
            'MS-SQL/MongoDB',
            'Express.js',
            'Loopback',
            'Web services architecture',
            'Elastic Search',
            'Restful APIs',
            'gRPC, Kubernetes, Docker (Good to know)'
        ],
        'location' => 'Mumbai/Chennai/Hyderabad',
        'employment_type' => 'Full-Time, Permanent',
        'mode' => 'Work-from-Office'
    ],
    [
        'id' => 'Four',
        'title' => 'Senior Back-end Developer',
        'purpose' => 'As a Senior Back-end Developer, you will develop and maintain server-side applications, optimize performance, ensure security, and collaborate with front-end developers to design and implement features.',
        'duties' => [
            'Develop and manage server-side applications and databases that support web and mobile applications.',
            'Work with front-end developers, architects, and other stakeholders to design and implement features.',
            'Build the backend for highly scalable enterprise applications using Node.js and MongoDB.',
            'Advocate Test-Driven Development (TDD) for all projects.',
            'Enhance application functionality by implementing third-party APIs and services.',
            'Monitor and troubleshoot application issues, including bugs, errors, and performance bottlenecks.',
            'Optimize application performance, scalability, and dependability.',
            'Ensure high regards for security standards and data protection.',
            'Keep up-to-date with emerging trends, technologies, and best practices in backend development.',
            'Participate in code reviews, agile development processes, and team meetings.',
            'Effectively communicate with team members, stakeholders, and clients to understand requirements and provide solutions.',
            'Supervise, mentor, and provide guidance to junior developers.'
        ],
        'education' => 'Any technical graduation in Information Technology (IT)',
        'experience' => 'A minimum of five years of experience in back-end development',
        'skills' => [
            'Node.js',
            'MS-SQL/MongoDB',
            'Express.js',
            'AngularJS',
            'Loopback',
            'Code versioning using GitHub',
            'Web services architecture',
            'gRPC',
            'Kubernetes',
            'Docker',
            'Elastic Search',
            'Restful APIs'
        ],
        'location' => 'Mumbai/Chennai/Hyderabad',
        'employment_type' => 'Full-Time, Permanent',
        'mode' => 'Hybrid'
    ],
    [
        'id' => 'Five',
        'title' => 'Senior Front-end Developer',
        'purpose' => 'You will create the visual and interactive elements of a website or application, in addition to ensuring the user experience is smooth and engaging.',
        'duties' => [
            'Create and deploy new user interface features for mobile and web applications.',
            'Work closely with UI/UX designers to ensure designs are feasible and provide the best user experience.',
            'Utilize HTML, CSS, and JavaScript frameworks to write effective and reusable code.',
            'Optimize applications to achieve maximum speed and scalability.',
            'Possess knowledge of DOM manipulation on different browsers.',
            'Resolve issues that arise in the application and offer prompt solutions.',
            'Keep up-to-date with emerging trends and technologies in front-end development.',
            'Contribute to code review and provide feedback to the development team.',
            'Collaborate with back-end developers to incorporate front-end with backend functionalities.',
            'Ensure that the application complies with search engine optimization and accessibility standards.',
            'Supervise, mentor, and provide guidance to junior developers.'
        ],
        'education' => 'Any technical graduation in Information Technology (IT)',
        'experience' => 'Over two years of cross-platform application development',
        'skills' => [
            'HTML',
            'CSS, Tailwind CSS, Flexbox',
            'React Native',
            'Vue.js, Vuex, Vuetify',
            'JQuery',
            'JavaScript',
            'Code Versioning using GitHub',
            'Unit Testing Discipline'
        ],
        'location' => 'Mumbai/Chennai/Hyderabad',
        'employment_type' => 'Full-Time, Permanent',
        'mode' => 'Hybrid'
    ],
    [
        'id' => 'Six',
        'title' => 'QA Engineer',
        'purpose' => 'You will test applications, communicate issues, work with developers, and maintain testing tools. Overall, you will ensure the applicability of quality standards to applications.',
        'duties' => [
            'Develop and carry out test plans to validate application quality.',
            'Identify, document, and communicate defects to the development team.',
            'Cooperate closely with software engineers to offer suggestions for enhancements.',
            'Maintain automated testing tools and frameworks to increase testing efficiency and accuracy.',
            'Understand and apply quality control standards, methods, and processes.',
            'Collaborate with cross-functional teams to accomplish project targets and adhere to project schedules.',
            'Constantly enhance the testing procedure to increase productivity and efficiency.',
            'Record and monitor quality metrics to assess progress and pinpoint areas for advancement.'
        ],
        'education' => 'A Bachelor\'s Degree in Computer Science/Computer Engineering',
        'experience' => 'At least two years of experience in manual and automation testing',
        'additional_info' => [
            'Familiarity in API testing using Postman (API Development Tool)',
            'A background in the Banking, Financial Services, and Insurance (BFSI) sector is preferable',
            'Working with Agile and Scrum methodologies'
        ],
        'skills' => [
            'Test Planning, Test Case Preparation',
            'Java, JavaScript scripting',
            'User-level test automation',
            'Mobile application testing, using both iOS and Android',
            'Manual Testing',
            'Automation Testing',
            'API Testing',
            'Agile-based QA Management',
            'Unit Testing Principles',
            'Selenium, Appium-based testing automation',
            'Application Development',
            'Standard Business Communication (Written and Verbal)'
        ],
        'location' => 'Mumbai/Chennai/Hyderabad',
        'employment_type' => 'Full Time, Permanent',
        'mode' => 'Hybrid'
    ],
    [
        'id' => 'Seven',
        'title' => 'Project Manager',
        'purpose' => 'To plan, execute, and deliver software projects on time, within budget, and to meet the project objectives.',
        'duties' => [
            'Define project scope, goals, and deliverables in collaboration with stakeholders and team members.',
            'Develop and maintain project plans, timelines, and budgets.',
            'Ensure project requirements and milestones are met within scope, timeline, and budget constraints.',
            'Assign tasks, set deadlines, and monitor team performance.',
            'Develop and maintain effective communication and collaboration channels with project stakeholders, including clients, team members, and management.',
            'Manage project risks and issues, and implement appropriate mitigation strategies.',
            'Facilitate project meetings and ensure accurate recording and distribution of meeting minutes and action items.',
            'Ensure project deliverables meet quality standards and customer expectations.',
            'Provide regular project status updates and progress reports to stakeholders and management.',
            'Evaluate and recommend process improvements to optimize project delivery efficiency and quality.',
            'Become the gatekeeper of project requirements. Demarcate between the project scope and change request(s).',
            'Guide project team members and help solve conflicts.'
        ],
        'education' => 'Post-graduate degree in management, and/or a Bachelor\'s of Technology or equivalent',
        'certification' => 'The Project Management Professional (PMP) certification, the Professional Scrum Certifications by Scrum.org, the PMI – ACP Certification, and the Certified Associate in Project Management (CAPM) are good to have',
        'experience' => 'Over 5 years of project management experience in a techno-functional role',
        'additional_info' => ['A background in the Banking, Financial Services, and Insurance (BFSI) sector is preferable'],
        'skills' => [
            'Software Development Life Cycle (SDLC)',
            'API architecture',
            'Information Security',
            'UI UX Principles',
            'Business Standard Communication (Written and Verbal)',
            'Time Management, Risk Management, and Budget Management'
        ],
        'location' => 'Mumbai/Chennai/Hyderabad',
        'employment_type' => 'Full-Time, Permanent',
        'mode' => 'Hybrid'
    ],
    [
        'id' => 'Eight',
        'title' => 'Marketing Executive',
        'about' => 'The ideal candidate will be a creative and analytical thinker. They will be able to conduct insightful market research to establish a marketing strategy that will effectively reach the target audience. They should be comfortable evaluating the marketing process, and work to critique and improve its outcomes.',
        'duties' => [
            'Identify target audiences, objectives and desired outcomes of marketing campaign',
            'Research and develop marketing strategy, and evaluate success strategy',
            'Develop content of marketing campaigns',
            'Stay up-to-date on current marketing trends',
            'Manage and allocate budget correctly'
        ],
        'qualifications' => [
            'Bachelor\'s degree in marketing or related field',
            '1+ years of relevant experience',
            'Strong analytical, communication, time-management and creativity skills',
            'Strong ability to focus on customer/market and take initiative Experience with social media'
        ]
    ],
    [
        'id' => 'Nine',
        'title' => 'Front-end Developer',
        'purpose' => 'You will create the visual and interactive elements of a website or application, in addition to ensuring the user experience is smooth and engaging.',
        'duties' => [
            'Create and deploy new user interface features for mobile and web applications.',
            'Work closely with UI/UX designers to ensure designs are feasible and provide the best user experience.',
            'Utilize HTML, CSS, and JavaScript frameworks to write effective and reusable code.',
            'Optimize applications to achieve maximum speed and scalability.',
            'Possess knowledge of DOM manipulation on different browsers.',
            'Resolve issues that arise in the application and offer prompt solutions.',
            'Keep up-to-date with emerging trends and technologies in front-end development.',
            'Contribute to code review and provide feedback to the development team.',
            'Collaborate with back-end developers to incorporate front-end with backend functionalities.',
            'Ensure that the application complies with search engine optimization and accessibility standards.'
        ],
        'education' => 'Any technical graduation in Information Technology (IT)',
        'experience' => 'Over two years of cross-platform application development',
        'skills' => [
            'HTML',
            'CSS, Tailwind CSS, Flexbox',
            'React Native',
            'Vue.js, Vuex, Vuetify',
            'JQuery',
            'JavaScript',
            'Code Versioning using GitHub',
            'Unit Testing Discipline'
        ],
        'location' => 'Mumbai/Chennai/Hyderabad',
        'employment_type' => 'Full-Time, Permanent',
        'mode' => 'Hybrid'
    ],
    [
        'id' => 'Ten',
        'title' => '.NET Developer',
        'purpose' => 'To design, develop, and maintain software applications using Microsoft .NET technologies, frameworks, and programming languages to meet business and user requirements.',
        'duties' => [
            'Develop, design, and maintain .NET-based applications.',
            'Collaborate with cross-functional teams to understand business requirements and provide technical solutions.',
            'Write and maintain efficient, reliable, reusable, and scalable code.',
            'Ensure that your outputs are visually appealing, user-friendly, and engaging.',
            'Participate in all phases of the software development life cycle, including analysis, design, implementation, and testing.',
            'Create the necessary documentation.',
            'Debug and troubleshoot software issues to improve application performance.',
            'Test and deploy applications to production and provide ongoing support and maintenance.',
            'Stay up-to-date with emerging trends and technologies in software development and the .NET framework.'
        ],
        'education' => 'Any technical graduation in Computer Science',
        'certifications' => 'Microsoft Certified Solutions Developer (MCSD) or Microsoft Certified Professional Developer (MCPD)',
        'experience' => 'At least 2 years of experience as a .NET Developer',
        'additional_info' => [
            'Experience in operating within the Scrum Framework',
            'A background of working in the BFSI sector is a plus'
        ],
        'required_skills' => [
            '.NET Framework and .NET Core',
            'C# programming language',
            'Web API',
            'ASP .NET',
            'SQL Server/Oracle',
            'HTML, CSS, and Java Script',
            'AWS Services'
        ],
        'good_to_have_skills' => [
            'Node.js',
            'MongoDB',
            'Azure Services',
            'Visual Basic .NET'
        ],
        'soft_skills' => [
            'Business-standard communication',
            'Problem-solving',
            'Time management',
            'Teamwork & Collaboration'
        ],
        'location' => 'Mumbai',
        'employment_type' => 'Full-Time, Permanent',
        'mode' => 'Hybrid'
    ],
    [
        'id' => 'Eleven',
        'title' => 'Business Analyst',
        'purpose' => 'You will analyze and document business requirements, identify areas for process improvement, and facilitate communication between stakeholders and software development teams.',
        'duties' => [
            'Collaborate with clients and other stakeholders to gather project and business requirements.',
            'Define and document business processes, user cases, and user stories.',
            'Facilitate requirements-lifecycle sessions, including feasibility, exploration, engineering, and deployment.',
            'Create and maintain project documentation.',
            'Own and prioritize the requirements backlog and ensure adherence to project timelines.',
            'Communicate business priorities to the technical teams to drive effective solutions.',
            'Articulate the vision of what the business needs and ensure that the technical teams deliver accordingly.',
            'Create user personas, journeys, stories, and process flows for development teams working in an agile manner.',
            'Support the delivery team through changes in objectives and the re-prioritization of requirements.',
            'Act as a liaison between the Product Owner, Quality Assurance Teams, UX, and Development Teams.'
        ],
        'education' => 'Graduate from a technical field',
        'experience' => 'Over 2 years of experience as a Business Analyst in a techno-functional role',
        'must_have' => [
            'An excellent understanding of the Software Development Life Cycle (SDLC), Project documentation, Information Architecture documentation, Understanding of API architecture, UI/UX principles.',
            'Exceptional communication skills with the ability to tailor an approach to the audience.',
            'The ability to proactively investigate third-party providers and take them from initial conversation to delivery.'
        ],
        'location' => 'Mumbai/Chennai/Hyderabad',
        'employment_type' => 'Full-Time, Permanent',
        'mode' => 'Hybrid'
    ]
];

?>
<div class="container py-5">
  <h1 class="text-uppercase text-center mb-5" style=color:hsl(209, 69.70%, 67.60%);>Job Openings</h1>
  <div class="row g-4">
    <?php foreach ($jobs as $index => $job): ?>
      <div class="col-12">
        <div class="job-card p-4">
          
          <!-- Toggle Button -->
          <button 
            class="btn w-100 text-start job-title-toggle d-flex justify-content-between align-items-center"
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#job<?= $index ?>" 
            aria-expanded="false" 
            aria-controls="job<?= $index ?>">
            
            <?= htmlspecialchars($job['title']) ?>
            <span class="dropdown-icon"><i class="bi bi-chevron-down"></i></span>
          </button>

          <!-- Collapsible Content -->
          <div class="collapse mt-3" id="job<?= $index ?>" >
            <p><strong>Purpose:</strong> <?= htmlspecialchars($job['purpose'] ?? ($job['about'] ?? 'No description available.')) ?></p>

            <?php if (!empty($job['duties'])): ?>
              <p><strong>Duties:</strong></p>
              <ul>
                <?php foreach ($job['duties'] as $duty): ?>
                  <li><?= htmlspecialchars($duty) ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>

            <?php if (!empty($job['education'])): ?>
              <p><strong>Education:</strong> <?= htmlspecialchars($job['education']) ?></p>
            <?php endif; ?>

            <?php if (!empty($job['experience'])): ?>
              <p><strong>Experience:</strong> <?= htmlspecialchars($job['experience']) ?></p>
            <?php endif; ?>

            <?php if (!empty($job['certification'])): ?>
              <p><strong>Certification:</strong> <?= htmlspecialchars($job['certification']) ?></p>
            <?php endif; ?>

            <?php if (!empty($job['qualifications'])): ?>
              <p><strong>Qualifications:</strong></p>
              <ul>
                <?php foreach ($job['qualifications'] as $qual): ?>
                  <li><?= htmlspecialchars($qual) ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>

            <?php if (!empty($job['must_have'])): ?>
              <p><strong>Must Have:</strong></p>
              <ul>
                <?php foreach ($job['must_have'] as $item): ?>
                  <li><?= htmlspecialchars($item) ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>

            <?php if (!empty($job['skills'])): ?>
              <p><strong>Skills:</strong></p>
              <ul>
                <?php foreach ($job['skills'] as $skill): ?>
                  <li><?= htmlspecialchars($skill) ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>

            <?php if (!empty($job['required_skills'])): ?>
              <p><strong>Required Skills:</strong></p>
              <ul>
                <?php foreach ($job['required_skills'] as $skill): ?>
                  <li><?= htmlspecialchars($skill) ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>

            <?php if (!empty($job['good_to_have_skills'])): ?>
              <p><strong>Good to Have:</strong></p>
              <ul>
                <?php foreach ($job['good_to_have_skills'] as $skill): ?>
                  <li><?= htmlspecialchars($skill) ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>

            <?php if (!empty($job['soft_skills'])): ?>
              <p><strong>Soft Skills:</strong></p>
              <ul>
                <?php foreach ($job['soft_skills'] as $skill): ?>
                  <li><?= htmlspecialchars($skill) ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>

            <?php if (!empty($job['additional_info'])): ?>
              <p><strong>Additional Info:</strong></p>
              <ul>
                <?php foreach ($job['additional_info'] as $info): ?>
                  <li><?= htmlspecialchars($info) ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>

            <?php if (!empty($job['location'])): ?>
              <p><strong>Location:</strong> <?= htmlspecialchars($job['location']) ?></p>
            <?php endif; ?>

            <?php if (!empty($job['employment_type'])): ?>
              <p><strong>Employment Type:</strong> <?= htmlspecialchars($job['employment_type']) ?></p>
            <?php endif; ?>

            <?php if (!empty($job['mode'])): ?>
              <p><strong>Mode:</strong> <?= htmlspecialchars($job['mode']) ?></p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<?php include 'footer.php'?>