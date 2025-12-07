<!DOCTYPE html>
<html lang="en">
<?php
include "includes/Header-CubedOS.php";
?>
<body>
<main id="maincontent">
  <div id="page">
    <div class="post">
      <h1 class="ada_compliance">Project Overview</h1>

      <p>CubedOS is intended to provide a robust software platform for CubeSat missions and to
        ease the development of CubeSat flight software. In many respects the goals of CubedOS are
        similar to those of NASA Goddard's <b><a href="https://www.coreflightsystem.net/">Core
            Flight System</a></b> (cFE/CFS). However, unlike cFE, CubedOS is written in SPARK with
        critical sections verified to be free of the possibility of runtime error. SPARK has also
        been used to prove other correctness properties in certain cases.</p>

      <p>CubedOS is intended to be general enough and modular enough for many different groups to
        employ the system. Since every mission uses different hardware and has different software
        requirements, CubedOS is designed as a framework into which <i>modules</i> can be plugged
        to implement whatever mission functionality is required. CubedOS provides inter-module
        communication and other common services required by many missions. CubedOS thus serves
        both as a kind of operating environment and as a library of useful tools and functions.
      </p>

      <p>It is our intention that all CubedOS modules also be written in SPARK and at least proved
        free of runtime error. However, CubedOS allows modules, or parts of modules, to be written
        in full Ada, or even C, if appropriate. This lets CubedOS take advantage of third party C
        libraries or integrate with an existing C code base.</p>

      <p>CubedOS can run directly on top of the hardware with the assistance of a suitable Ada
        runtime system, or on top of an operating system such as Linux or VxWorks. For example,
        CubedOS makes use of Ada tasking without directly invoking the underlying system's support
        for threads. This simplifies the implementation of CubedOS while improving its
        portability. However, it does require that an Ada runtime system be available for all
        envisioned targets.</p>

      <p>For resources that are not accessible through the Ada runtime system, CubedOS driver
        modules can be written that interact with the underlying operating system or hardware more
        directly, even though such modules would not be widely portable.</p>

      <p>The architecture of CubedOS is a collection of passive library packages and of active
        modules, each being implemented as a hierarchy of packages. Each module contains one or
        more Ada tasks. Thus, CubedOS applications are highly concurrent with multiple modules
        often active simultaneously.</p>

      <p>Critical to the plug-and-play nature of CubedOS, each module is self-contained and does
        not make direct use of code in any other module, although library components can be
        shared. All inter-module communication is done via message passing through the CubedOS
        infrastructure, with no direct sharing of data. In this respect, CubedOS modules are
        similar to processes in a conventional operating system. In contrast, library packages
        resemble shared libraries in a conventional operating system and have similar concerns
        regarding task safety and global data management.</p>

      <p>In the language of operating systems, CubedOS can be said to have a microkernel
        architecture where task management is provided by the Ada runtime system. Both low-level
        facilities, such as device drivers, and high-level facilities, such as communication
        protocol handlers, are all implemented as CubedOS modules. All modules are treated equally
        by CubedOS; any layered structuring of the modules is imposed by programmer
        convention.</p>

      <p>In addition to inter-module communication, CubedOS provides several general-purpose
        facilities. In some cases, only the interface to the facility is described and different
        implementations are possible, depending on individual mission needs. Having a standard
        interface allows other components of CubedOS to be programmed against that interface
        without concern about the underlying implementation.</p>

      <p>The core modules of CubedOS include the following:</p>

      <ul>
        <li>An asynchronous message-passing system with mailboxes. This, together with the
          underlying Ada runtime system constitutes the "kernel" of CubedOS.
        </li>
        <li>A runtime library of useful packages, all verified with SPARK.</li>
        <li>A log server module for gathering and managing system logs.</li>
        <li>A time server module providing low-resolution timing services.</li>
        <li>A file system interface module.</li>
        <li>A publish/subscribe server that can be used to decouple data producers from data
          consumers.
        </li>
        <li>A command interpreter module for processing "scripts" of commands sent by mission
          planners.
        </li>
      </ul>

      <p>A CubedOS system also requires drivers for the various hardware components in the system.
        Although the specific drivers required will vary from mission to mission, CubedOS does
        provide a general <i>driver model</i> that allows components to communicate with drivers
        fairly generically. In a typical system there will be low level drivers for accessing
        hardware buses as well as higher level drivers for sending/receiving commands from
        subsystems such as the radio, the power system, the camera, etc.</p>

      <p>CubedOS provides several advantages over "home-grown" frameworks:</p>
      <ul>
        <li>The message passing architecture is highly concurrent and allows many overlapping
          activities to be programmed in a natural way.
        </li>

        <li>The architecture provides a lot of runtime flexibility; programs can adapt their
          communication patterns at runtime.
        </li>

        <li>The architecture is consistent with the restrictions of Ada's Jorvik profile.</li>
      </ul>

      <p>CubedOS also has some significant disadvantages over more customized solutions:</p>
      <ul>
        <li>Because CubedOS messages are just octet sequences, there is runtime overhead
          associated with encoding and decoding them.
        </li>

        <li>CubedOS sacrifices some static type safety; decoded messages must be validated at
          runtime with type errors being handled during the validation process. This is
          particularly worrisome in light of CubedOS's goal of providing robust assurances of
          correctness. We mitigate this problem somewhat with the use of a companion tool,
          Mercury, that automatically generates fully typed message encoding/decoding subprograms.
        </li>
      </ul>

      <p>CubedOS is currently a work in progress. It has not yet flown in space, but we are
        anxious to exercise it in a realistic setting. Although developed primarily for CubeSat
        missions, it can also serve as a general embedded systems framework. This makes ground
        testing easier and expands the scope of possible use-cases for CubedOS. The system has
        been designed with this more general vision in mind.</p>
    </div>

    <!-- BEGIN FOOTER -->
    <div id="footer">
      <p>&#169; Copyright 2024 by Vermont State University | Last Revised: July 7, 2024</p>
    </div>
    <!-- END FOOTER -->
  </div>
</body>
</html>
