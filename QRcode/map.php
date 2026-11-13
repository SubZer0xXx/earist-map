<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes" />
  <title>EARIST Cavite Campus — School Navigation System</title>
  <link rel="icon" type="image/png" href="assets/earist-logo.png?v=2" />
  <style>
    :root {
      --maroon-dark: #4a0e12;
      --maroon: #631418;
      --maroon-light: #7c1d22;
      --gold: #d97706;
      --gold-soft: #fef3c7;
      --cream: #f5f2eb;
      --card-bg: #ffffff;
      --text-main: #1f1b1c;
      --text-muted: #645d5e;
      --border: #e6dfd5;
      --blue: #1d4ed8;
      --blue-soft: #dbeafe;
      --green: #15803d;
      --green-soft: #dcfce7;
      --red: #dc2626;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      -webkit-tap-highlight-color: transparent;
      scrollbar-width: none;
      -ms-overflow-style: none;
    }

    *::-webkit-scrollbar {
      display: none;
      width: 0;
      height: 0;
    }

    html, body {
      width: 100%;
      max-width: 100%;
      overflow-x: hidden;
      overflow-y: auto;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      background: var(--cream);
      color: var(--text-main);
      min-height: 100vh;
    }

    body {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .app-shell {
      width: 100%;
      max-width: 560px;
      min-height: 100vh;
      background: var(--card-bg);
      display: flex;
      flex-direction: column;
      box-shadow: 0 0 32px rgba(0, 0, 0, 0.08);
    }

    /* Header */
    .header {
      background: linear-gradient(120deg, var(--maroon-dark) 0%, var(--maroon) 65%, var(--maroon-light) 100%);
      color: #fff;
      padding: 12px 14px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 10px;
      position: sticky;
      top: 0;
      z-index: 40;
      box-shadow: 0 2px 10px rgba(74, 14, 18, 0.25);
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 10px;
      min-width: 0;
    }

    .brand img {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      background: #fff;
      padding: 2px;
      flex-shrink: 0;
    }

    .brand-text {
      min-width: 0;
    }

    .brand-text h1 {
      font-size: 0.92rem;
      font-weight: 800;
      letter-spacing: 0.02em;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .brand-text p {
      font-size: 0.72rem;
      color: rgba(255, 255, 255, 0.85);
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .qr-link-btn {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      background: rgba(255, 255, 255, 0.16);
      color: #fff;
      text-decoration: none;
      font-size: 0.75rem;
      font-weight: 700;
      padding: 7px 10px;
      border-radius: 999px;
      border: 1px solid rgba(255, 255, 255, 0.28);
      flex-shrink: 0;
      transition: background 0.15s ease;
    }

    .qr-link-btn:hover {
      background: rgba(255, 255, 255, 0.28);
    }

    /* Search Bar */
    .search-wrap {
      padding: 10px 14px 6px;
      position: relative;
      z-index: 35;
      background: var(--card-bg);
    }

    .search-box {
      display: flex;
      align-items: center;
      gap: 8px;
      background: #f6f4f0;
      border: 1.5px solid var(--border);
      border-radius: 12px;
      padding: 8px 12px;
      transition: border-color 0.15s ease, background 0.15s ease;
    }

    .search-box:focus-within {
      border-color: var(--maroon);
      background: #fff;
      box-shadow: 0 0 0 3px rgba(99, 20, 24, 0.1);
    }

    .search-box input {
      border: none;
      background: transparent;
      outline: none;
      width: 100%;
      font-size: 0.88rem;
      color: var(--text-main);
    }

    .search-clear {
      display: none;
      border: none;
      background: #e2dcd3;
      color: var(--text-main);
      width: 22px;
      height: 22px;
      border-radius: 50%;
      font-size: 0.78rem;
      cursor: pointer;
      flex-shrink: 0;
    }

    .search-clear.show {
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }

    .search-results {
      display: none;
      position: absolute;
      left: 14px;
      right: 14px;
      top: calc(100% - 2px);
      background: #fff;
      border: 1.5px solid var(--border);
      border-radius: 12px;
      box-shadow: 0 12px 28px rgba(0, 0, 0, 0.14);
      max-height: 280px;
      overflow-y: auto;
      z-index: 50;
    }

    .search-results.open {
      display: block;
    }

    .search-item {
      width: 100%;
      text-align: left;
      background: none;
      border: none;
      border-bottom: 1px solid #f2eee8;
      padding: 10px 12px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 10px;
      cursor: pointer;
    }

    .search-item:last-child {
      border-bottom: none;
    }

    .search-item:hover {
      background: #faf7f2;
    }

    .search-item-title {
      font-size: 0.86rem;
      font-weight: 700;
      color: var(--text-main);
    }

    .search-item-sub {
      font-size: 0.74rem;
      color: var(--text-muted);
      margin-top: 2px;
    }

    .search-item-badge {
      font-size: 0.7rem;
      font-weight: 800;
      color: var(--maroon);
      background: #fdf2f2;
      border: 1px solid #f3d2d4;
      padding: 3px 8px;
      border-radius: 999px;
      white-space: nowrap;
      flex-shrink: 0;
    }

    /* Flow Stepper */
    .flow-bar {
      display: flex;
      align-items: center;
      gap: 4px;
      padding: 6px 14px 10px;
      overflow-x: auto;
      font-size: 0.73rem;
      border-bottom: 1px solid var(--border);
      background: var(--card-bg);
    }

    .flow-step {
      display: inline-flex;
      align-items: center;
      gap: 4px;
      padding: 4px 8px;
      border-radius: 999px;
      border: 1px solid transparent;
      background: #f4f1ea;
      color: var(--text-muted);
      font-weight: 600;
      cursor: pointer;
      white-space: nowrap;
      transition: all 0.15s ease;
    }

    .flow-step.done {
      background: #fdf2f2;
      color: var(--maroon);
      border-color: #eed4d6;
    }

    .flow-step.active {
      background: var(--maroon);
      color: #fff;
      font-weight: 700;
    }

    .flow-sep {
      color: #b4aba0;
      font-weight: 700;
      flex-shrink: 0;
    }

    /* Controls Section: Building + Floor */
    .controls-section {
      padding: 10px 14px;
      background: #fbfaf7;
      border-bottom: 1px solid var(--border);
      display: flex;
      flex-direction: column;
      gap: 8px;
    }

    .building-row {
      display: grid;
      grid-template-columns: auto 1fr 1fr;
      gap: 7px;
    }

    .bldg-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
      padding: 9px 10px;
      border-radius: 10px;
      border: 1.5px solid var(--border);
      background: #fff;
      color: var(--text-main);
      font-size: 0.8rem;
      font-weight: 700;
      cursor: pointer;
      transition: all 0.15s ease;
      text-align: center;
    }

    .bldg-btn:hover {
      border-color: var(--maroon);
    }

    .bldg-btn.active {
      background: var(--maroon);
      color: #fff;
      border-color: var(--maroon);
      box-shadow: 0 3px 10px rgba(99, 20, 24, 0.25);
    }

    .floor-row {
      display: none;
      grid-template-columns: repeat(3, 1fr);
      gap: 7px;
    }

    .floor-row.show {
      display: grid;
    }

    .floor-btn {
      padding: 8px 6px;
      border-radius: 9px;
      border: 1.5px solid var(--border);
      background: #fff;
      color: var(--text-main);
      font-size: 0.77rem;
      font-weight: 700;
      cursor: pointer;
      transition: all 0.15s ease;
      text-align: center;
    }

    .floor-btn span {
      display: block;
      font-size: 0.66rem;
      font-weight: 500;
      color: var(--text-muted);
      margin-top: 1px;
    }

    .floor-btn.active {
      background: var(--gold-soft);
      border-color: var(--gold);
      color: #78350f;
      box-shadow: 0 2px 8px rgba(217, 119, 6, 0.2);
    }

    .floor-btn.active span {
      color: #92400e;
    }

    /* Interactive Map Viewport */
    .map-section {
      padding: 10px 14px 6px;
      background: var(--card-bg);
    }

    .map-header-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 8px;
      margin-bottom: 6px;
    }

    .map-title {
      font-size: 0.84rem;
      font-weight: 800;
      color: var(--maroon-dark);
    }

    .map-subtitle {
      font-size: 0.72rem;
      color: var(--text-muted);
    }

    .map-stage {
      position: relative;
      width: 100%;
      aspect-ratio: 732 / 616;
      background: #f3efe7;
      border: 1.5px solid var(--border);
      border-radius: 14px;
      overflow: hidden;
      touch-action: none;
      cursor: grab;
      user-select: none;
    }

    .map-stage.dragging {
      cursor: grabbing;
    }

    .map-transform {
      position: relative;
      width: 100%;
      height: 100%;
      transform-origin: center center;
      transition: transform 0.12s ease-out;
    }

    .map-stage.dragging .map-transform {
      transition: none;
    }

    .map-image {
      width: 100%;
      height: 100%;
      object-fit: contain;
      display: block;
      pointer-events: none;
    }

    .svg-floor-wrap {
      display: none;
      width: 100%;
      height: 100%;
      background: #ffffff;
    }

    .svg-floor-wrap.show {
      display: block;
    }

    .map-overlay {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      pointer-events: auto;
    }

    /* Zoom Controls */
    .zoom-controls {
      position: absolute;
      right: 10px;
      bottom: 10px;
      display: flex;
      flex-direction: column;
      gap: 5px;
      z-index: 20;
    }

    .zoom-btn {
      width: 34px;
      height: 34px;
      border-radius: 9px;
      border: 1px solid rgba(0, 0, 0, 0.12);
      background: rgba(255, 255, 255, 0.94);
      color: var(--text-main);
      font-size: 1rem;
      font-weight: 800;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.14);
    }

    .zoom-btn:hover {
      background: #fff;
      color: var(--maroon);
    }

    /* Interactive Hotspots & Highlights */
    .building-hotspot {
      fill: rgba(99, 20, 24, 0.08);
      stroke: rgba(99, 20, 24, 0.45);
      stroke-width: 2.5;
      stroke-dasharray: 6 4;
      cursor: pointer;
      transition: all 0.2s ease;
    }

    .building-hotspot:hover {
      fill: rgba(99, 20, 24, 0.18);
      stroke: var(--maroon);
      stroke-width: 3.5;
    }

    .building-hotspot.selected {
      fill: rgba(217, 119, 6, 0.22);
      stroke: var(--gold);
      stroke-width: 4.5;
      stroke-dasharray: none;
    }

    .room-hotspot {
      fill: rgba(29, 78, 216, 0.08);
      stroke: rgba(29, 78, 216, 0.45);
      stroke-width: 2;
      cursor: pointer;
      transition: all 0.18s ease;
    }

    .room-hotspot:hover {
      fill: rgba(29, 78, 216, 0.2);
      stroke: var(--blue);
      stroke-width: 3;
    }

    .room-hotspot.selected {
      fill: rgba(217, 119, 6, 0.3);
      stroke: #b45309;
      stroke-width: 4.5;
    }

    .pulse-ring {
      animation: pulseRing 1.5s infinite ease-out;
      transform-origin: center;
    }

    @keyframes pulseRing {
      0% { opacity: 0.85; r: 10; }
      100% { opacity: 0; r: 30; }
    }

    .route-line {
      fill: none;
      stroke: var(--blue);
      stroke-width: 5;
      stroke-linecap: round;
      stroke-linejoin: round;
      stroke-dasharray: 10 8;
      animation: dashFlow 1s linear infinite;
    }

    @keyframes dashFlow {
      to { stroke-dashoffset: -18; }
    }

    /* User Location Bar & Controls */
    .location-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 8px;
      margin-bottom: 8px;
      padding: 8px 10px;
      border-radius: 11px;
      background: #eff6ff;
      border: 1.5px solid #bfdbfe;
      font-size: 0.76rem;
    }

    .location-status {
      display: flex;
      align-items: center;
      gap: 7px;
      min-width: 0;
      color: #1e3a8a;
      font-weight: 700;
    }

    .location-dot {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: #2563eb;
      box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.22);
      flex-shrink: 0;
    }

    .location-status-text {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    .location-btns {
      display: flex;
      align-items: center;
      gap: 5px;
      flex-shrink: 0;
    }

    .loc-btn {
      border: 1px solid #93c5fd;
      background: #ffffff;
      color: #1d4ed8;
      font-size: 0.72rem;
      font-weight: 700;
      padding: 5px 9px;
      border-radius: 8px;
      cursor: pointer;
      white-space: nowrap;
    }

    .loc-btn.primary {
      background: #2563eb;
      border-color: #2563eb;
      color: #ffffff;
    }

    .loc-btn.active {
      background: #d97706;
      border-color: #d97706;
      color: #ffffff;
    }

    .landmark-picker {
      display: none;
      flex-wrap: wrap;
      gap: 6px;
      margin-bottom: 8px;
      padding: 8px 10px;
      background: #f8fafc;
      border: 1px solid var(--border);
      border-radius: 10px;
    }

    .landmark-picker.show {
      display: flex;
    }

    .landmark-chip {
      border: 1px solid #cbd5e1;
      background: #ffffff;
      color: var(--text-main);
      font-size: 0.72rem;
      font-weight: 600;
      padding: 5px 9px;
      border-radius: 999px;
      cursor: pointer;
    }

    .landmark-chip:hover, .landmark-chip.active {
      background: #2563eb;
      border-color: #2563eb;
      color: #ffffff;
    }

    .user-pulse {
      animation: userPulse 1.8s infinite ease-out;
    }

    @keyframes userPulse {
      0% { opacity: 0.75; r: 10; }
      100% { opacity: 0; r: 34; }
    }

    /* Selected Info Card */
    .selected-card {
      display: none;
      margin: 8px 14px 4px;
      padding: 12px 14px;
      border-radius: 12px;
      background: linear-gradient(135deg, #fffbeb 0%, #fef3c7 100%);
      border: 1.5px solid #f59e0b;
      box-shadow: 0 3px 12px rgba(217, 119, 6, 0.14);
    }

    .selected-card.show {
      display: block;
    }

    .selected-card-top {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      gap: 10px;
    }

    .room-code-pill {
      display: inline-block;
      background: var(--maroon);
      color: #fff;
      font-size: 0.72rem;
      font-weight: 800;
      padding: 3px 9px;
      border-radius: 999px;
      margin-bottom: 4px;
    }

    .selected-card h2 {
      font-size: 0.96rem;
      font-weight: 800;
      color: #451a03;
    }

    .selected-card p {
      font-size: 0.77rem;
      color: #78350f;
      margin-top: 3px;
    }

    .selected-card-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 7px;
      margin-top: 10px;
    }

    .action-btn {
      border: none;
      border-radius: 8px;
      padding: 7px 11px;
      font-size: 0.76rem;
      font-weight: 700;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 5px;
    }

    .action-btn-primary {
      background: var(--maroon);
      color: #fff;
    }

    .action-btn-secondary {
      background: #fff;
      color: var(--maroon);
      border: 1px solid #d6b2b5;
    }

    /* Directory / Room List */
    .directory-section {
      padding: 10px 14px 20px;
      flex: 1;
    }

    .directory-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 8px;
    }

    .directory-header h3 {
      font-size: 0.84rem;
      font-weight: 800;
      color: var(--text-main);
    }

    .directory-count {
      font-size: 0.72rem;
      color: var(--text-muted);
      font-weight: 600;
    }

    /* Vicinity Building Cards */
    .vicinity-cards {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 10px;
    }

    .vicinity-card {
      border: 1.5px solid var(--border);
      border-radius: 12px;
      padding: 12px;
      background: #fff;
      text-align: left;
      cursor: pointer;
      transition: all 0.15s ease;
    }

    .vicinity-card:hover {
      border-color: var(--maroon);
      transform: translateY(-1px);
      box-shadow: 0 4px 12px rgba(99, 20, 24, 0.1);
    }

    .vicinity-card.active {
      border-color: var(--gold);
      background: #fffbeb;
    }

    .vicinity-card .v-icon {
      font-size: 1.35rem;
      margin-bottom: 5px;
    }

    .vicinity-card .v-title {
      font-size: 0.86rem;
      font-weight: 800;
      color: var(--maroon-dark);
    }

    .vicinity-card .v-sub {
      font-size: 0.72rem;
      color: var(--text-muted);
      margin-top: 3px;
      line-height: 1.35;
    }

    .vicinity-card .v-cta {
      display: inline-block;
      margin-top: 8px;
      font-size: 0.73rem;
      font-weight: 700;
      color: var(--maroon);
    }

    /* Room List Grid */
    .room-list {
      display: flex;
      flex-direction: column;
      gap: 7px;
    }

    .room-card {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 10px;
      width: 100%;
      text-align: left;
      padding: 10px 12px;
      border-radius: 11px;
      border: 1.5px solid var(--border);
      background: #fff;
      cursor: pointer;
      transition: all 0.15s ease;
    }

    .room-card:hover {
      border-color: var(--maroon);
      background: #fdfbfa;
    }

    .room-card.active {
      border-color: var(--gold);
      background: #fffbeb;
      box-shadow: 0 2px 10px rgba(217, 119, 6, 0.16);
    }

    .room-card-left {
      display: flex;
      align-items: center;
      gap: 10px;
      min-width: 0;
    }

    .room-num-box {
      min-width: 68px;
      padding: 5px 8px;
      border-radius: 8px;
      background: #f4f1ea;
      color: var(--maroon-dark);
      font-size: 0.73rem;
      font-weight: 800;
      text-align: center;
      flex-shrink: 0;
    }

    .room-card.active .room-num-box {
      background: var(--maroon);
      color: #fff;
    }

    .room-info {
      min-width: 0;
    }

    .room-name {
      font-size: 0.84rem;
      font-weight: 700;
      color: var(--text-main);
    }

    .room-loc {
      font-size: 0.72rem;
      color: var(--text-muted);
      margin-top: 2px;
    }

    .room-arrow {
      font-size: 0.76rem;
      font-weight: 700;
      color: var(--maroon);
      flex-shrink: 0;
    }

    @media (max-width: 400px) {
      .building-row {
        grid-template-columns: 1fr 1fr;
      }
      .bldg-btn[data-bldg="vicinity"] {
        grid-column: 1 / -1;
      }
      .vicinity-cards {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>
  <div class="app-shell">
    <!-- Top Header -->
    <header class="header">
      <div class="brand">
        <img src="assets/earist-logo.png" alt="EARIST Seal" />
        <div class="brand-text">
          <h1>EARIST Cavite Campus</h1>
          <p>School Navigation System</p>
        </div>
      </div>
      <a class="qr-link-btn" href="index.html" title="Open QR Code Sign">📱 QR Code</a>
    </header>

    <!-- Search Bar -->
    <div class="search-wrap">
      <div class="search-box">
        <span>🔍</span>
        <input type="text" id="searchInput" placeholder="Search room or office (e.g. MB 305, Registrar)..." autocomplete="off" />
        <button type="button" class="search-clear" id="searchClear" aria-label="Clear search">✕</button>
      </div>
      <div class="search-results" id="searchResults"></div>
    </div>

    <!-- Building & Floor Switcher -->
    <section class="controls-section">
      <div class="building-row">
        <button type="button" class="bldg-btn active" data-bldg="vicinity">🗺️ Campus Map</button>
        <button type="button" class="bldg-btn" data-bldg="main">🏛️ Main Bldg</button>
        <button type="button" class="bldg-btn" data-bldg="annex">🏢 Annex Bldg</button>
      </div>
      <div class="floor-row" id="floorRow">
        <button type="button" class="floor-btn" data-floor="1f">1st Floor<span>Ground</span></button>
        <button type="button" class="floor-btn" data-floor="2f">2nd Floor<span>Middle</span></button>
        <button type="button" class="floor-btn" data-floor="3f">3rd Floor<span>Top</span></button>
      </div>
    </section>

    <!-- Interactive Map / Floor Plan Viewport -->
    <section class="map-section">
      <div class="location-bar" id="locationBar">
        <div class="location-status">
          <span class="location-dot"></span>
          <span class="location-status-text" id="locationStatusText">Near: Main Entrance</span>
        </div>
        <div class="location-btns">
          <button type="button" class="loc-btn primary" id="locateMeBtn" title="Find where you are on campus">📍 Where am I?</button>
        </div>
      </div>

      <div class="landmark-picker" id="landmarkPicker">
        <button type="button" class="landmark-chip active" data-spot="entrance">Main Entrance</button>
        <button type="button" class="landmark-chip" data-spot="quadrangle">Quadrangle</button>
        <button type="button" class="landmark-chip" data-spot="mainA">Main Bldg (Hall A)</button>
        <button type="button" class="landmark-chip" data-spot="mainB">Main Bldg (Hall B)</button>
        <button type="button" class="landmark-chip" data-spot="annex">Annex Bldg</button>
        <button type="button" class="landmark-chip" data-spot="canteen">New Canteen</button>
        <button type="button" class="landmark-chip" data-spot="faculty">Faculty Bldg</button>
      </div>

      <div class="map-header-bar">
        <div>
          <div class="map-title" id="mapTitle">School Vicinity Map</div>
          <div class="map-subtitle" id="mapSubtitle">Tap Main Building or Annex Building on the map to explore floors &amp; rooms</div>
        </div>
      </div>

      <div class="map-stage" id="mapStage">
        <div class="map-transform" id="mapTransform">
          <img src="assets/campus-map.png" alt="EARIST Campus Map" class="map-image" id="mapImage" />
          <div class="svg-floor-wrap" id="svgFloorWrap"></div>
          <svg class="map-overlay" id="mapOverlay" viewBox="0 0 732 616" preserveAspectRatio="xMidYMid meet"></svg>
        </div>

        <div class="zoom-controls">
          <button type="button" class="zoom-btn" id="zoomInBtn" title="Zoom In">+</button>
          <button type="button" class="zoom-btn" id="zoomOutBtn" title="Zoom Out">−</button>
          <button type="button" class="zoom-btn" id="zoomResetBtn" title="Reset View">↺</button>
        </div>
      </div>
    </section>

    <!-- Highlighted Room / Building Details Card -->
    <section class="selected-card" id="selectedCard">
      <div class="selected-card-top">
        <div>
          <span class="room-code-pill" id="selectedBadge">ROOM</span>
          <h2 id="selectedTitle">Room Name</h2>
          <p id="selectedLocation">Building • Floor • Wing</p>
        </div>
      </div>
      <div class="selected-card-actions" id="selectedActions"></div>
    </section>

    <!-- Directory List (Buildings on Vicinity, Rooms on Floor) -->
    <section class="directory-section">
      <div class="directory-header">
        <h3 id="directoryTitle">Select a Building to Begin</h3>
        <span class="directory-count" id="directoryCount">2 Buildings</span>
      </div>
      <div id="directoryBody"></div>
    </section>
  </div>

  <script>
    const BUILDINGS = {
      main: {
        id: "main",
        name: "Main Building",
        subtitle: "Hall A & Hall B • 3 Floors • Offices, Labs & Classrooms",
        vicinityHotspots: [
          { x: 472, y: 525, w: 283, h: 87 },
          { x: 710, y: 422, w: 45, h: 173 }
        ],
        pin: { x: 605, y: 568 },
        routeFromEntrance: [
          { x: 458, y: 618 },
          { x: 458, y: 518 },
          { x: 605, y: 518 },
          { x: 605, y: 568 }
        ],
        floors: {
          "1f": {
            id: "1f",
            label: "1st Floor (Ground)",
            type: "image",
            src: "assets/floor-main-1f.jpg",
            viewBox: "0 0 1024 617",
            aspect: "1024 / 617",
            rooms: [
              { number: "MB 101", name: "Classroom MB 101", location: "Main Building • 1st Floor • South Hallway", box: { x: 650, y: 468, w: 54, h: 56 } },
              { number: "MB 102", name: "Classroom MB 102", location: "Main Building • 1st Floor • South Hallway", box: { x: 708, y: 468, w: 56, h: 56 } },
              { number: "MB 103", name: "Classroom MB 103", location: "Main Building • 1st Floor • South Hallway", box: { x: 768, y: 468, w: 72, h: 56 } },
              { number: "MB 104", name: "Auto Diesel Shop", location: "Main Building • 1st Floor • East Wing (Hall B)", box: { x: 912, y: 315, w: 58, h: 66 } },
              { number: "MB 105", name: "Classroom MB 105", location: "Main Building • 1st Floor • East Wing (Hall B)", box: { x: 912, y: 245, w: 58, h: 66 } },
              { number: "MB RM 106", name: "Electrical Room", location: "Main Building • 1st Floor • East Wing (Hall B)", box: { x: 912, y: 170, w: 58, h: 72 } },
              { number: "MB R107", name: "Electronics Laboratory", location: "Main Building • 1st Floor • East Wing North", box: { x: 912, y: 80, w: 58, h: 86 } },
              { number: "ROTC", name: "ROTC Quarter", location: "Main Building • 1st Floor • West End (Hall A)", box: { x: 478, y: 440, w: 42, h: 32 } },
              { number: "T&B 1F", name: "Comfort Room (T&B)", location: "Main Building • 1st Floor • South Hallway", box: { x: 560, y: 482, w: 66, h: 46 } }
            ]
          },
          "2f": {
            id: "2f",
            label: "2nd Floor",
            type: "svg",
            viewBox: "0 0 1024 560",
            aspect: "1024 / 560",
            rooms: [
              { number: "ADMISSION", name: "Admission Office", location: "Main Building • 2nd Floor • West Wing (Upper Hall A)", box: { x: 48, y: 245, w: 92, h: 80 } },
              { number: "CONF", name: "Conference Room", location: "Main Building • 2nd Floor • West Wing (Upper Hall A)", box: { x: 145, y: 245, w: 92, h: 80 } },
              { number: "ADMIN", name: "Admin Office", location: "Main Building • 2nd Floor • West Wing (Upper Hall A)", box: { x: 242, y: 245, w: 92, h: 80 } },
              { number: "REGISTRAR", name: "Registrar Office", location: "Main Building • 2nd Floor • West Wing (Lower Hall A)", box: { x: 145, y: 365, w: 96, h: 85 } },
              { number: "MB 201", name: "Speech Laboratory (MB 201)", location: "Main Building • 2nd Floor • South Hallway (Hall A)", box: { x: 246, y: 365, w: 82, h: 85 } },
              { number: "MB 202", name: "Property Management (MB 202)", location: "Main Building • 2nd Floor • South Hallway (Hall A)", box: { x: 332, y: 365, w: 86, h: 85 } },
              { number: "MB 203", name: "Classroom MB 203", location: "Main Building • 2nd Floor • South Hallway (Hall A)", box: { x: 422, y: 365, w: 72, h: 85 } },
              { number: "MB 204", name: "Classroom MB 204", location: "Main Building • 2nd Floor • South Hallway (Hall A)", box: { x: 498, y: 365, w: 72, h: 85 } },
              { number: "MB 205", name: "Classroom MB 205", location: "Main Building • 2nd Floor • South Hallway (Hall A)", box: { x: 574, y: 365, w: 72, h: 85 } },
              { number: "MB 206", name: "Classroom MB 206", location: "Main Building • 2nd Floor • South Hallway (Hall A)", box: { x: 650, y: 365, w: 72, h: 85 } },
              { number: "MB 207", name: "Classroom MB 207", location: "Main Building • 2nd Floor • South-East Hall A", box: { x: 726, y: 365, w: 72, h: 85 } },
              { number: "T&B 2F", name: "Comfort Room (T&B)", location: "Main Building • 2nd Floor • South-East Corner", box: { x: 804, y: 365, w: 62, h: 85 } },
              { number: "MB 208", name: "Food Tech. Room (MB 208)", location: "Main Building • 2nd Floor • East Wing (Hall B)", box: { x: 870, y: 278, w: 105, h: 52 } },
              { number: "MB 209", name: "Food Tech. Room (MB 209)", location: "Main Building • 2nd Floor • East Wing (Hall B)", box: { x: 870, y: 222, w: 105, h: 52 } },
              { number: "MB 210", name: "BSE Lab (MB 210)", location: "Main Building • 2nd Floor • East Wing (Hall B)", box: { x: 870, y: 166, w: 105, h: 52 } },
              { number: "MB 211", name: "Drafting Tech. (MB Room 211)", location: "Main Building • 2nd Floor • East Wing North (Hall B)", box: { x: 870, y: 106, w: 105, h: 56 } }
            ]
          },
          "3f": {
            id: "3f",
            label: "3rd Floor",
            type: "image",
            src: "assets/floor-main-3f.jpg",
            viewBox: "0 0 1024 566",
            aspect: "1024 / 566",
            rooms: [
              { number: "LIB-UG", name: "Library (Undergraduate Prog.)", location: "Main Building • 3rd Floor • West Wing (Upper)", box: { x: 378, y: 345, w: 62, h: 56 } },
              { number: "LIB-GR", name: "Library (Graduate Prog.)", location: "Main Building • 3rd Floor • West Wing", box: { x: 378, y: 412, w: 62, h: 54 } },
              { number: "INET", name: "Internet Room", location: "Main Building • 3rd Floor • West Wing (Near Stairs)", box: { x: 340, y: 438, w: 38, h: 54 } },
              { number: "MB 301", name: "Graduate Office (MB 301)", location: "Main Building • 3rd Floor • South Hallway", box: { x: 442, y: 415, w: 56, h: 52 } },
              { number: "MB 302", name: "Computer Lab (MB 302)", location: "Main Building • 3rd Floor • South Hallway", box: { x: 500, y: 415, w: 56, h: 52 } },
              { number: "MB 303", name: "Computer Lab (MB 303)", location: "Main Building • 3rd Floor • South Hallway", box: { x: 558, y: 415, w: 58, h: 52 } },
              { number: "MPH 1", name: "Multi-Purpose Hall 1", location: "Main Building • 3rd Floor • South-East Hallway", box: { x: 644, y: 415, w: 56, h: 52 } },
              { number: "MPH 2", name: "Multi-Purpose Hall 2", location: "Main Building • 3rd Floor • South-East Hallway", box: { x: 702, y: 415, w: 56, h: 52 } },
              { number: "MPH 3", name: "Multi-Purpose Hall 3", location: "Main Building • 3rd Floor • South-East Hallway", box: { x: 760, y: 415, w: 60, h: 52 } },
              { number: "MB 304", name: "Criminology Lab (MB 304)", location: "Main Building • 3rd Floor • East Wing (Hall B)", box: { x: 930, y: 280, w: 62, h: 82 } },
              { number: "MB 305", name: "Forensic Lab (MB 305)", location: "Main Building • 3rd Floor • East Wing (Hall B)", box: { x: 930, y: 214, w: 62, h: 64 } },
              { number: "MB 306", name: "Biology Lab (MB 306)", location: "Main Building • 3rd Floor • East Wing (Hall B)", box: { x: 930, y: 148, w: 62, h: 64 } },
              { number: "MB 307", name: "Chemistry Lab (MB 307)", location: "Main Building • 3rd Floor • East Wing North", box: { x: 930, y: 78, w: 62, h: 68 } }
            ]
          }
        }
      },
      annex: {
        id: "annex",
        name: "Annex Building",
        subtitle: "West Wing • 3 Floors • OSA, Guidance, Annex Rooms & Canteen",
        vicinityHotspots: [
          { x: 408, y: 342, w: 36, h: 153 }
        ],
        pin: { x: 426, y: 418 },
        routeFromEntrance: [
          { x: 458, y: 618 },
          { x: 458, y: 518 },
          { x: 426, y: 518 },
          { x: 426, y: 418 }
        ],
        floors: {
          "1f": {
            id: "1f",
            label: "1st Floor (Ground)",
            type: "image",
            src: "assets/floor-annex-1f.jpg",
            viewBox: "0 0 1024 657",
            aspect: "1024 / 657",
            rooms: [
              { number: "T&B A1F", name: "Comfort Room (T&B)", location: "Annex Building • 1st Floor • West End", box: { x: 22, y: 30, w: 62, h: 112 } },
              { number: "OSA", name: "Office of Student Affairs (OSA)", location: "Annex Building • 1st Floor • West Wing", box: { x: 86, y: 30, w: 44, h: 112 } },
              { number: "ISG", name: "Institutional Student Gov. (ISG)", location: "Annex Building • 1st Floor • West Wing", box: { x: 132, y: 30, w: 44, h: 112 } },
              { number: "GUIDANCE", name: "Guidance & Publication", location: "Annex Building • 1st Floor • Central Wing", box: { x: 178, y: 30, w: 96, h: 112 } },
              { number: "ANNEX 101", name: "Classroom Annex 101", location: "Annex Building • 1st Floor • Central Wing", box: { x: 276, y: 30, w: 88, h: 112 } },
              { number: "ANNEX 102", name: "Classroom Annex 102", location: "Annex Building • 1st Floor • East-Central", box: { x: 366, y: 30, w: 88, h: 112 } },
              { number: "ANNEX 103", name: "Classroom Annex 103", location: "Annex Building • 1st Floor • East Wing", box: { x: 458, y: 30, w: 98, h: 112 } },
              { number: "RESEARCH", name: "Research Building", location: "Annex Building • Ground Courtyard (Behind Annex)", box: { x: 686, y: 366, w: 132, h: 132 } }
            ]
          },
          "2f": {
            id: "2f",
            label: "2nd Floor",
            type: "svg",
            viewBox: "0 0 1024 560",
            aspect: "1024 / 560",
            rooms: [
              { number: "T&B A2F", name: "Comfort Room (T&B)", location: "Annex Building • 2nd Floor • West End (Near Stairs)", box: { x: 86, y: 170, w: 72, h: 145 } },
              { number: "ANNEX 201", name: "Classroom Annex 201", location: "Annex Building • 2nd Floor • West Wing", box: { x: 164, y: 170, w: 142, h: 145 } },
              { number: "ANNEX 202", name: "Classroom Annex 202", location: "Annex Building • 2nd Floor • West-Central", box: { x: 312, y: 170, w: 142, h: 145 } },
              { number: "ANNEX 203", name: "Classroom Annex 203", location: "Annex Building • 2nd Floor • Central Wing", box: { x: 460, y: 170, w: 142, h: 145 } },
              { number: "ANNEX 204", name: "Classroom Annex 204", location: "Annex Building • 2nd Floor • East-Central", box: { x: 608, y: 170, w: 142, h: 145 } },
              { number: "ANNEX 205", name: "Classroom Annex 205", location: "Annex Building • 2nd Floor • East Wing", box: { x: 756, y: 170, w: 142, h: 145 } }
            ]
          },
          "3f": {
            id: "3f",
            label: "3rd Floor",
            type: "image",
            src: "assets/floor-annex-3f.jpg",
            viewBox: "0 0 1024 711",
            aspect: "1024 / 711",
            rooms: [
              { number: "T&B A3F", name: "Comfort Room (T&B)", location: "Annex Building • 3rd Floor • West End (Near Stairs)", box: { x: 32, y: 492, w: 78, h: 90 } },
              { number: "ANNEX 301", name: "Classroom Annex 301", location: "Annex Building • 3rd Floor • West Wing", box: { x: 112, y: 492, w: 110, h: 90 } },
              { number: "ANNEX 302", name: "Classroom Annex 302", location: "Annex Building • 3rd Floor • Central Wing", box: { x: 224, y: 492, w: 108, h: 90 } },
              { number: "CANTEEN", name: "New Canteen (Stalls 1–3)", location: "Annex Building • Adjacent Grounds • North-East", box: { x: 948, y: 36, w: 42, h: 405 } }
            ]
          }
        }
      }
    };

    const CAMPUS_LANDMARKS = {
      entrance:   { x: 458, y: 618, name: "Main Entrance" },
      quadrangle: { x: 595, y: 468, name: "Quadrangle" },
      mainA:      { x: 605, y: 568, name: "Main Building (Hall A)" },
      mainB:      { x: 733, y: 495, name: "Main Building (Hall B)" },
      annex:      { x: 426, y: 418, name: "Annex Building" },
      canteen:    { x: 359, y: 306, name: "Canteen" },
      faculty:    { x: 374, y: 534, name: "Faculty Building" }
    };

    // Approximate GPS bounds for EARIST Cavite Campus (Congressional Rd, GMA, Cavite)
    const CAMPUS_GPS = {
      centerLat: 14.2977,
      centerLng: 121.0069,
      latSpan: 0.0014,
      lngSpan: 0.0018
    };

    // App State
    const state = {
      view: "vicinity",       // "vicinity" | "floor"
      building: null,         // "main" | "annex" | null
      floor: null,            // "1f" | "2f" | "3f" | null
      roomNumber: null,       // selected room number
      showRouteOnVicinity: false,
      userPos: { x: 458, y: 618, label: "Main Entrance", source: "default" },
      pickSpotMode: false,
      scale: 1,
      panX: 0,
      panY: 0
    };

    // DOM refs
    const mapStage = document.getElementById("mapStage");
    const mapTransform = document.getElementById("mapTransform");
    const mapImage = document.getElementById("mapImage");
    const svgFloorWrap = document.getElementById("svgFloorWrap");
    const mapOverlay = document.getElementById("mapOverlay");
    const mapTitle = document.getElementById("mapTitle");
    const mapSubtitle = document.getElementById("mapSubtitle");
    const floorRow = document.getElementById("floorRow");
    const selectedCard = document.getElementById("selectedCard");
    const selectedBadge = document.getElementById("selectedBadge");
    const selectedTitle = document.getElementById("selectedTitle");
    const selectedLocation = document.getElementById("selectedLocation");
    const selectedActions = document.getElementById("selectedActions");
    const directoryTitle = document.getElementById("directoryTitle");
    const directoryCount = document.getElementById("directoryCount");
    const directoryBody = document.getElementById("directoryBody");
    const searchInput = document.getElementById("searchInput");
    const searchClear = document.getElementById("searchClear");
    const searchResults = document.getElementById("searchResults");

    // Flatten all rooms for instant search
    const ALL_ROOMS = [];
    Object.values(BUILDINGS).forEach((bldg) => {
      Object.values(bldg.floors).forEach((fl) => {
        fl.rooms.forEach((rm) => {
          ALL_ROOMS.push({
            buildingId: bldg.id,
            buildingName: bldg.name,
            floorId: fl.id,
            floorLabel: fl.label,
            ...rm
          });
        });
      });
    });

    function resetZoom() {
      state.scale = 1;
      state.panX = 0;
      state.panY = 0;
      applyTransform();
    }

    function applyTransform() {
      mapTransform.style.transform = `translate(${state.panX}px, ${state.panY}px) scale(${state.scale})`;
    }

    function zoomToBox(box, viewBoxStr) {
      const [, , vw, vh] = viewBoxStr.split(" ").map(Number);
      const cx = box.x + box.w / 2;
      const cy = box.y + box.h / 2;
      const stageW = mapStage.clientWidth || 400;
      const stageH = mapStage.clientHeight || 300;
      state.scale = 1.65;
      state.panX = ((vw / 2 - cx) / vw) * stageW * 0.75;
      state.panY = ((vh / 2 - cy) / vh) * stageH * 0.75;
      applyTransform();
    }

    function updateStepper() {
      const sVic = document.getElementById("stepVicinity");
      const sBldg = document.getElementById("stepBuilding");
      const sFlr = document.getElementById("stepFloor");
      const sRm = document.getElementById("stepRoom");

      [sVic, sBldg, sFlr, sRm].forEach((el) => el.classList.remove("active", "done"));

      if (state.view === "vicinity") {
        sVic.classList.add("active");
        if (state.building) {
          sBldg.classList.add("done");
          sBldg.textContent = `2. ${BUILDINGS[state.building].name}`;
        } else {
          sBldg.textContent = "2. Building";
        }
        sFlr.textContent = "3. Floor";
        sRm.textContent = "4. Room";
      } else {
        sVic.classList.add("done");
        sBldg.classList.add("done");
        sBldg.textContent = `2. ${BUILDINGS[state.building].name}`;

        if (state.roomNumber) {
          sFlr.classList.add("done");
          sFlr.textContent = `3. ${BUILDINGS[state.building].floors[state.floor].label.replace(" (Ground)", "")}`;
          sRm.classList.add("active");
          sRm.textContent = `4. ${state.roomNumber}`;
        } else {
          sFlr.classList.add("active");
          sFlr.textContent = `3. ${BUILDINGS[state.building].floors[state.floor].label.replace(" (Ground)", "")}`;
          sRm.textContent = "4. Room";
        }
      }
    }

    function updateButtons() {
      document.querySelectorAll(".bldg-btn").forEach((btn) => {
        const key = btn.dataset.bldg;
        const isActive = (key === "vicinity" && state.view === "vicinity") || (key === state.building && state.view === "floor");
        btn.classList.toggle("active", isActive);
      });

      if (state.building) {
        floorRow.classList.add("show");
        document.querySelectorAll(".floor-btn").forEach((btn) => {
          btn.classList.toggle("active", btn.dataset.floor === state.floor);
        });
      } else {
        floorRow.classList.remove("show");
      }
    }

    function renderSvgFloorBlueprint(bldgId, floorId, floorData) {
      const isMain = bldgId === "main";
      const title = `${BUILDINGS[bldgId].name.toUpperCase()} — ${floorData.label.toUpperCase()}`;
      const corridorSvg = isMain
        ? `<rect x="48" y="458" width="895" height="32" fill="#f3f4f6" stroke="#9ca3af" stroke-width="1.5"/>
           <text x="495" y="479" text-anchor="middle" font-size="13" font-weight="700" fill="#6b7280" letter-spacing="4">MAIN CORRIDOR / WALKWAY</text>
           <rect x="832" y="122" width="30" height="336" fill="#f3f4f6" stroke="#9ca3af" stroke-width="1.5"/>
           <text x="847" y="290" text-anchor="middle" font-size="11" font-weight="700" fill="#6b7280" transform="rotate(-90 847 290)">HALL B CORRIDOR</text>`
        : `<rect x="80" y="320" width="835" height="38" fill="#f3f4f6" stroke="#9ca3af" stroke-width="1.5"/>
           <text x="495" y="344" text-anchor="middle" font-size="13" font-weight="700" fill="#6b7280" letter-spacing="4">ANNEX 2ND FLOOR CORRIDOR</text>
           <rect x="35" y="170" width="48" height="145" fill="#fef3c7" stroke="#9ca3af" stroke-width="1.5"/>
           <text x="59" y="246" text-anchor="middle" font-size="11" font-weight="700" fill="#92400e">STAIRS</text>
           <rect x="912" y="170" width="48" height="145" fill="#fef3c7" stroke="#9ca3af" stroke-width="1.5"/>
           <text x="936" y="246" text-anchor="middle" font-size="11" font-weight="700" fill="#92400e">STAIRS</text>`;

      const roomBoxes = floorData.rooms.map((rm) => {
        const cx = rm.box.x + rm.box.w / 2;
        const cy = rm.box.y + rm.box.h / 2;
        return `
          <rect x="${rm.box.x}" y="${rm.box.y}" width="${rm.box.w}" height="${rm.box.h}" rx="4" fill="#ffffff" stroke="#374151" stroke-width="2.2"/>
          <text x="${cx}" y="${cy - 5}" text-anchor="middle" font-size="12" font-weight="800" fill="#4a0e12">${rm.number}</text>
          <text x="${cx}" y="${cy + 12}" text-anchor="middle" font-size="9.5" font-weight="600" fill="#4b5563">${rm.name.replace(/\s*\(.*?\)/g, "").slice(0, 16)}</text>
        `;
      }).join("");

      svgFloorWrap.innerHTML = `
        <svg viewBox="${floorData.viewBox}" width="100%" height="100%" style="background:#faf9f6;display:block;">
          <rect x="14" y="14" width="996" height="532" rx="10" fill="#ffffff" stroke="#d6d3d1" stroke-width="2"/>
          <text x="512" y="40" text-anchor="middle" font-size="16" font-weight="800" fill="#4a0e12" letter-spacing="1">${title}</text>
          ${corridorSvg}
          ${roomBoxes}
        </svg>
      `;
    }

    function renderSvgVicinityMap() {
      const tree = (x, y, s = 1) => `
        <g transform="translate(${x},${y}) scale(${s})">
          <circle cx="3" cy="4" r="12" fill="rgba(15, 23, 42, 0.22)"/>
          <circle cx="0" cy="0" r="12" fill="#2e6f22" stroke="#1e4d15" stroke-width="1"/>
          <circle cx="-2" cy="-2" r="9" fill="#469334"/>
          <circle cx="-3" cy="-4" r="5" fill="#6ab950" opacity="0.85"/>
        </g>
      `;

      const treesSvg = [
        [330, 175, 0.95], [330, 212, 0.9], [330, 250, 0.9], [308, 312, 0.9], [285, 348, 0.95],
        [448, 290, 0.85], [475, 296, 0.8], [492, 320, 0.9], [496, 345, 0.85],
        [528, 523, 0.82], [562, 523, 0.82], [596, 523, 0.82], [630, 523, 0.82],
        [454, 576, 0.85], [418, 592, 0.82], [372, 594, 0.85], [352, 568, 0.82],
        [670, 336, 0.85], [705, 336, 0.85], [755, 276, 0.9], [770, 312, 0.85]
      ].map(([x, y, s]) => tree(x, y, s)).join("");

      svgFloorWrap.innerHTML = `
        <svg viewBox="0 0 1000 720" width="100%" height="100%" style="background:#eceae4;display:block;">
          <defs>
            <linearGradient id="grassGrad" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0%" stop-color="#78ad45"/>
              <stop offset="100%" stop-color="#588a2c"/>
            </linearGradient>
            <linearGradient id="creekGrad" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0%" stop-color="#38bdf8"/>
              <stop offset="100%" stop-color="#0284c7"/>
            </linearGradient>
            <linearGradient id="roofRed" x1="0" y1="0" x2="0" y2="1">
              <stop offset="0%" stop-color="#b84444"/>
              <stop offset="100%" stop-color="#8b2929"/>
            </linearGradient>
            <linearGradient id="roofCyan" x1="0" y1="0" x2="0" y2="1">
              <stop offset="0%" stop-color="#5eead4"/>
              <stop offset="100%" stop-color="#2dd4bf"/>
            </linearGradient>
            <linearGradient id="roofGold" x1="0" y1="0" x2="0" y2="1">
              <stop offset="0%" stop-color="#facc15"/>
              <stop offset="100%" stop-color="#ca8a04"/>
            </linearGradient>
            <filter id="bldgShadow" x="-15%" y="-15%" width="140%" height="140%">
              <feDropShadow dx="3" dy="5" stdDeviation="3.5" flood-color="#0f172a" flood-opacity="0.32"/>
            </filter>
          </defs>

          <!-- Surrounding Neighborhood Ground & Blocks -->
          <rect x="0" y="0" width="1000" height="720" fill="#ebe8e1"/>
          <rect x="30" y="410" width="210" height="190" rx="8" fill="#e0ddd5"/>
          <rect x="780" y="340" width="195" height="260" rx="8" fill="#e0ddd5"/>

          <!-- Congressional Road (Realistic Asphalt + Sidewalk) -->
          <rect x="0" y="610" width="1000" height="110" fill="#cbd5e1"/>
          <rect x="0" y="618" width="1000" height="94" fill="#475569"/>
          <line x1="0" y1="665" x2="1000" y2="665" stroke="#facc15" stroke-width="2.5" stroke-dasharray="18 14"/>
          <text x="500" y="698" text-anchor="middle" font-size="14" font-weight="800" fill="#f8fafc" letter-spacing="8">CONGRESSIONAL ROAD</text>

          <!-- Creek along top-right boundary -->
          <path d="M 336,20 L 738,174 L 955,286 L 955,318 L 724,205 L 326,52 Z" fill="url(#creekGrad)" stroke="#0369a1" stroke-width="1.5"/>
          <text x="690" y="168" text-anchor="middle" font-size="11" font-weight="800" fill="#f0f9ff" transform="rotate(22 690 168)" letter-spacing="3">CREEK</text>

          <!-- Campus Property Lot (Realistic Green Lawn) -->
          <polygon points="340,42 730,192 945,295 765,305 765,610 342,610 342,390 250,390" fill="url(#grassGrad)" stroke="#334155" stroke-width="2"/>

          <!-- Upper Fruit / Dragon Fruit Plantation Plots -->
          <polygon points="442,88 532,122 508,238 425,215" fill="#447219" stroke="#365314" stroke-width="1.2" stroke-dasharray="5 3"/>
          <text x="478" y="165" text-anchor="middle" font-size="8.5" font-weight="800" fill="#ecfccb">FRUIT &amp; VEG.</text>
          <text x="478" y="176" text-anchor="middle" font-size="8.5" font-weight="800" fill="#ecfccb">PLANTATION</text>

          <rect x="528" y="238" width="102" height="58" rx="4" fill="#447219" stroke="#365314" stroke-width="1.2" stroke-dasharray="5 3"/>
          <text x="579" y="264" text-anchor="middle" font-size="8.5" font-weight="800" fill="#ecfccb">DRAGON FRUIT</text>
          <text x="579" y="275" text-anchor="middle" font-size="8.5" font-weight="800" fill="#ecfccb">PLANTATION</text>

          <!-- Concrete Walkways & Paved Courtyard -->
          <path d="M 436,618 L 436,512 L 735,512 L 735,534 L 462,534 L 462,618 Z" fill="#e2e8f0" stroke="#94a3b8" stroke-width="1.5"/>
          <rect x="462" y="340" width="224" height="172" fill="#f1f5f9" stroke="#cbd5e1" stroke-width="1.2"/>
          <rect x="342" y="458" width="94" height="22" fill="#e2e8f0" stroke="#94a3b8" stroke-width="1.2"/>
          <rect x="462" y="295" width="305" height="45" fill="#e2e8f0" stroke="#94a3b8" stroke-width="1.2"/>

          <!-- PROPOSED PROJECTS (3D Gold Roofs) -->
          <g filter="url(#bldgShadow)">
            <path d="M 358,74 L 444,106 L 424,162 L 392,150 L 404,118 L 372,106 L 352,158 L 324,148 Z" fill="url(#roofGold)" stroke="#713f12" stroke-width="1.5"/>
            <path d="M 294,258 L 326,258 L 326,348 L 412,348 L 412,378 L 294,378 Z" fill="url(#roofGold)" stroke="#713f12" stroke-width="1.5"/>
            <polygon points="552,148 708,208 696,238 540,178" fill="url(#roofGold)" stroke="#713f12" stroke-width="1.5"/>
            <path d="M 520,274 L 548,274 L 548,318 L 616,318 L 616,274 L 644,274 L 644,342 L 520,342 Z" fill="url(#roofGold)" stroke="#713f12" stroke-width="1.5"/>
            <rect x="652" y="256" width="52" height="82" rx="3" fill="url(#roofGold)" stroke="#713f12" stroke-width="1.5"/>
            <rect x="782" y="296" width="112" height="32" rx="3" fill="url(#roofGold)" stroke="#713f12" stroke-width="1.5"/>
          </g>
          <text x="386" y="102" text-anchor="middle" font-size="8.5" font-weight="800" fill="#422006" transform="rotate(20 386 102)">DORMITORY</text>
          <text x="310" y="318" text-anchor="middle" font-size="8" font-weight="800" fill="#422006" transform="rotate(-90 310 318)">ENGINEERING</text>
          <text x="368" y="366" text-anchor="middle" font-size="8" font-weight="800" fill="#422006">ENGINEERING BLDG.</text>
          <text x="625" y="196" text-anchor="middle" font-size="8.5" font-weight="800" fill="#422006" transform="rotate(21 625 196)">STAFF HOUSING</text>
          <text x="582" y="334" text-anchor="middle" font-size="8" font-weight="800" fill="#422006">THEATER &amp; ARTS / POOL</text>
          <text x="678" y="294" text-anchor="middle" font-size="8" font-weight="800" fill="#422006">CIT &amp;</text>
          <text x="678" y="305" text-anchor="middle" font-size="8" font-weight="800" fill="#422006">ICT</text>
          <text x="838" y="315" text-anchor="middle" font-size="8" font-weight="800" fill="#422006">MULTIPURPOSE</text>

          <!-- ON-GOING CONSTRUCTION / REPAIR (3D Cyan Roofs) -->
          <g filter="url(#bldgShadow)">
            <rect x="342" y="192" width="70" height="62" rx="3" fill="url(#roofCyan)" stroke="#0f766e" stroke-width="1.6"/>
            <rect x="422" y="342" width="38" height="164" rx="3" fill="url(#roofCyan)" stroke="#0f766e" stroke-width="2"/>
          </g>
          <text x="377" y="226" text-anchor="middle" font-size="8.5" font-weight="800" fill="#0f172a">CANTEEN</text>

          <!-- RECENTLY ACCOMPLISHED (Pink Roofs) -->
          <g filter="url(#bldgShadow)">
            <rect x="342" y="176" width="70" height="14" rx="2" fill="#f472b6" stroke="#831843" stroke-width="1.3"/>
            <rect x="488" y="365" width="34" height="28" rx="2" fill="#f472b6" stroke="#831843" stroke-width="1.4"/>
          </g>
          <text x="377" y="186" text-anchor="middle" font-size="7" font-weight="800" fill="#ffffff">CLINIC</text>
          <text x="505" y="382" text-anchor="middle" font-size="6.5" font-weight="800" fill="#ffffff">GUIDANCE</text>

          <!-- COMPLETED / EXISTING BUILDINGS (3D Brick-Red Roofs) -->
          <g filter="url(#bldgShadow)">
            <rect x="356" y="486" width="60" height="44" rx="3" fill="url(#roofRed)" stroke="#450a0a" stroke-width="1.6"/>
            <rect x="364" y="538" width="52" height="38" rx="3" fill="url(#roofRed)" stroke="#450a0a" stroke-width="1.6"/>
            <rect x="428" y="304" width="28" height="26" rx="2" fill="url(#roofRed)" stroke="#450a0a" stroke-width="1.4"/>
            <rect x="526" y="365" width="38" height="28" rx="2" fill="url(#roofRed)" stroke="#450a0a" stroke-width="1.4"/>
            <!-- Existing Quadrangle -->
            <rect x="506" y="398" width="160" height="98" rx="3" fill="url(#roofRed)" stroke="#450a0a" stroke-width="1.8"/>
            <!-- Existing Main Building Hall - A & Hall - B -->
            <path d="M 472,540 L 682,540 L 682,365 L 728,365 L 728,578 L 698,592 L 472,592 Z" fill="url(#roofRed)" stroke="#450a0a" stroke-width="2"/>
          </g>

          <!-- Quadrangle Court Markings for Realism -->
          <rect x="522" y="408" width="128" height="78" fill="none" stroke="rgba(255,255,255,0.42)" stroke-width="1.4"/>
          <line x1="586" y1="408" x2="586" y2="486" stroke="rgba(255,255,255,0.42)" stroke-width="1.4"/>
          <circle cx="586" cy="447" r="14" fill="none" stroke="rgba(255,255,255,0.42)" stroke-width="1.4"/>
          <text x="586" y="451" text-anchor="middle" font-size="10.5" font-weight="800" fill="#ffffff" letter-spacing="0.5">QUADRANGLE</text>

          <!-- Existing Building Labels -->
          <text x="386" y="506" text-anchor="middle" font-size="8" font-weight="800" fill="#ffffff">FACULTY</text>
          <text x="386" y="517" text-anchor="middle" font-size="8" font-weight="800" fill="#ffffff">BLDG.</text>
          <text x="390" y="555" text-anchor="middle" font-size="7" font-weight="800" fill="#ffffff">WATER</text>
          <text x="390" y="565" text-anchor="middle" font-size="7" font-weight="800" fill="#ffffff">CISTERN</text>
          <text x="388" y="596" text-anchor="middle" font-size="7.5" font-weight="800" fill="#ecfccb">RED FOX GARDEN</text>
          <text x="442" y="320" text-anchor="middle" font-size="6.5" font-weight="800" fill="#ffffff">CRIM.</text>
          <text x="545" y="382" text-anchor="middle" font-size="6.2" font-weight="800" fill="#ffffff">RESEARCH</text>
          <text x="706" y="468" text-anchor="middle" font-size="9" font-weight="800" fill="#ffffff" transform="rotate(-90 706 468)">MAIN BLDG HALL - B</text>

          <!-- Trees with Shadows -->
          ${treesSvg}

          <!-- Clean MAIN GATE Marker -->
          <rect x="412" y="618" width="72" height="22" rx="11" fill="#631418" stroke="#ffffff" stroke-width="1.8"/>
          <text x="448" y="633" text-anchor="middle" font-size="9.5" font-weight="800" fill="#ffffff">MAIN GATE</text>
        </svg>
      `;
    }

    function renderMap() {
      mapOverlay.innerHTML = "";

      if (state.view === "vicinity") {
        mapStage.style.aspectRatio = "1024 / 639";
        mapImage.style.display = "block";
        mapImage.src = "assets/master-site-plan.jpg";
        svgFloorWrap.classList.remove("show");
        mapOverlay.setAttribute("viewBox", "0 0 1024 639");

        mapTitle.textContent = "School Vicinity Map";
        mapSubtitle.textContent = "Tap Main Building or Annex Building on the map to view floors & rooms";

        // Clean area & facility labels directly on the clean map
        const areaLabels = [
          [368, 84,  "Dormitory"],
          [468, 158, "Fruit & Veg. Plot"],
          [612, 186, "Staff Housing"],
          [675, 138, "Creek"],
          [552, 225, "Dragon Fruit Plot"],
          [359, 264, "Clinic"],
          [359, 306, "Canteen"],
          [312, 358, "Engineering Bldg."],
          [425, 324, "Crim. Bldg."],
          [562, 294, "Outdoor Pool"],
          [582, 344, "Theater & Arts"],
          [715, 292, "CIT & ICT"],
          [828, 292, "Multipurpose"],
          [741, 382, "Segregation"],
          [489, 376, "Guidance"],
          [524, 400, "Research"],
          [595, 468, "Quadrangle"],
          [374, 534, "Faculty Bldg."],
          [363, 595, "Water Cistern"],
          [733, 495, "Main Bldg Hall-B"]
        ].map(([x, y, txt]) => `
          <g style="pointer-events:none;">
            <rect x="${x - (txt.length * 3.1 + 7)}" y="${y - 9}" width="${txt.length * 6.2 + 14}" height="18" rx="9" fill="rgba(255,255,255,0.92)" stroke="#334155" stroke-width="1"/>
            <text x="${x}" y="${y + 3}" text-anchor="middle" font-size="9.8" font-weight="800" fill="#1e293b">${txt}</text>
          </g>
        `).join("");

        // Entrance pin at Main Gate
        const entranceHtml = `
          <g style="pointer-events:none;">
            <circle cx="458" cy="618" r="7.5" fill="#dc2626" stroke="#fff" stroke-width="2"/>
            <rect x="422" y="620" width="72" height="17" rx="8.5" fill="#631418" stroke="#fff" stroke-width="1.4"/>
            <text x="458" y="632" text-anchor="middle" font-size="9" font-weight="800" fill="#fff">MAIN GATE</text>
          </g>
        `;

        // Building hotspots
        const bldgHtml = Object.values(BUILDINGS).map((bldg) => {
          const isSel = state.building === bldg.id;
          const rects = bldg.vicinityHotspots.map((r) =>
            `<rect class="building-hotspot ${isSel ? "selected" : ""}" x="${r.x}" y="${r.y}" width="${r.w}" height="${r.h}" rx="8" data-bldg-click="${bldg.id}"/>`
          ).join("");
          const pulse = isSel
            ? `<circle class="pulse-ring" cx="${bldg.pin.x}" cy="${bldg.pin.y}" r="14" fill="none" stroke="#d97706" stroke-width="3"/>`
            : "";
          const badge = `
            <g style="cursor:pointer" data-bldg-click="${bldg.id}">
              ${pulse}
              <rect x="${bldg.pin.x - 58}" y="${bldg.pin.y - 13}" width="116" height="25" rx="12.5" fill="${isSel ? "#d97706" : "#631418"}" stroke="#fff" stroke-width="2"/>
              <text x="${bldg.pin.x}" y="${bldg.pin.y + 3}" text-anchor="middle" font-size="11.5" font-weight="800" fill="#fff">${bldg.name}</text>
            </g>
          `;
          return rects + badge;
        }).join("");

        // Optional walking route from user's location
        let routeHtml = "";
        if (state.showRouteOnVicinity && state.building) {
          const targetPin = BUILDINGS[state.building].pin;
          const midY = 518;
          const pts = [
            `${state.userPos.x},${state.userPos.y}`,
            `${state.userPos.x},${midY}`,
            `${targetPin.x},${midY}`,
            `${targetPin.x},${targetPin.y}`
          ].join(" ");
          routeHtml = `<polyline class="route-line" points="${pts}"/>`;
        }

        // User "You Are Here" marker
        const u = state.userPos;
        const userMarkerHtml = `
          <g style="pointer-events:none;">
            <circle class="user-pulse" cx="${u.x}" cy="${u.y}" r="14" fill="#2563eb" opacity="0.35"/>
            <circle cx="${u.x}" cy="${u.y}" r="9" fill="#2563eb" stroke="#ffffff" stroke-width="3"/>
            <rect x="${u.x - 24}" y="${u.y - 30}" width="48" height="17" rx="8.5" fill="#1e3a8a" stroke="#ffffff" stroke-width="1.5"/>
            <text x="${u.x}" y="${u.y - 18}" text-anchor="middle" font-size="10" font-weight="800" fill="#ffffff">YOU</text>
          </g>
        `;

        mapOverlay.innerHTML = routeHtml + areaLabels + bldgHtml + entranceHtml + userMarkerHtml;

        mapOverlay.querySelectorAll("[data-bldg-click]").forEach((el) => {
          el.addEventListener("click", (e) => {
            e.stopPropagation();
            selectBuilding(el.dataset.bldgClick, true);
          });
        });
      } else {
        const bldg = BUILDINGS[state.building];
        const floorData = bldg.floors[state.floor];
        mapStage.style.aspectRatio = floorData.aspect;
        mapOverlay.setAttribute("viewBox", floorData.viewBox);

        if (floorData.type === "image") {
          mapImage.style.display = "block";
          mapImage.src = floorData.src;
          svgFloorWrap.classList.remove("show");
        } else {
          mapImage.style.display = "none";
          svgFloorWrap.classList.add("show");
          renderSvgFloorBlueprint(state.building, state.floor, floorData);
        }

        mapTitle.textContent = `${bldg.name} — ${floorData.label}`;
        mapSubtitle.textContent = "Tap any room on the floor plan or list below to highlight it";

        const roomsHtml = floorData.rooms.map((rm) => {
          const isSel = state.roomNumber === rm.number;
          const cx = rm.box.x + rm.box.w / 2;
          const cy = rm.box.y + rm.box.h / 2;
          const pin = isSel ? `
            <circle class="pulse-ring" cx="${cx}" cy="${cy}" r="14" fill="none" stroke="#b45309" stroke-width="4"/>
            <circle cx="${cx}" cy="${cy}" r="9" fill="#631418" stroke="#fff" stroke-width="3"/>
          ` : "";
          return `
            <rect class="room-hotspot ${isSel ? "selected" : ""}" x="${rm.box.x}" y="${rm.box.y}" width="${rm.box.w}" height="${rm.box.h}" rx="5" data-room-click="${rm.number}"/>
            ${pin}
          `;
        }).join("");

        mapOverlay.innerHTML = roomsHtml;
        mapOverlay.querySelectorAll("[data-room-click]").forEach((el) => {
          el.addEventListener("click", (e) => {
            e.stopPropagation();
            selectRoom(el.dataset.roomClick);
          });
        });
      }
    }

    function renderSelectedCard() {
      if (state.view === "vicinity" && state.building) {
        const bldg = BUILDINGS[state.building];
        selectedCard.classList.add("show");
        selectedBadge.textContent = "SELECTED BUILDING";
        selectedTitle.textContent = bldg.name;
        selectedLocation.textContent = bldg.subtitle;
        selectedActions.innerHTML = `
          <button type="button" class="action-btn action-btn-primary" id="openFloorsBtn">View Floors &amp; Rooms →</button>
          <button type="button" class="action-btn action-btn-secondary" id="toggleRouteBtn">${state.showRouteOnVicinity ? "Hide Route" : "Show Walk Route from Gate"}</button>
        `;
        document.getElementById("openFloorsBtn").addEventListener("click", () => {
          selectFloor("1f");
        });
        document.getElementById("toggleRouteBtn").addEventListener("click", () => {
          state.showRouteOnVicinity = !state.showRouteOnVicinity;
          renderMap();
          renderSelectedCard();
        });
        return;
      }

      if (state.view === "floor" && state.roomNumber) {
        const floorData = BUILDINGS[state.building].floors[state.floor];
        const rm = floorData.rooms.find((r) => r.number === state.roomNumber);
        if (rm) {
          selectedCard.classList.add("show");
          selectedBadge.textContent = rm.number;
          selectedTitle.textContent = rm.name;
          selectedLocation.textContent = rm.location;
          selectedActions.innerHTML = `
            <button type="button" class="action-btn action-btn-primary" id="walkFromGateBtn">🗺️ Walk Here from Main Gate</button>
            <button type="button" class="action-btn action-btn-secondary" id="resetRoomZoomBtn">Reset Floor Zoom</button>
          `;
          document.getElementById("walkFromGateBtn").addEventListener("click", () => {
            state.view = "vicinity";
            state.showRouteOnVicinity = true;
            resetZoom();
            renderAll();
          });
          document.getElementById("resetRoomZoomBtn").addEventListener("click", () => {
            resetZoom();
          });
          return;
        }
      }

      selectedCard.classList.remove("show");
    }

    function renderDirectory() {
      if (state.view === "vicinity") {
        directoryTitle.textContent = "Select a Building";
        directoryCount.textContent = "2 Buildings";
        directoryBody.innerHTML = `
          <div class="vicinity-cards">
            ${Object.values(BUILDINGS).map((bldg) => `
              <button type="button" class="vicinity-card ${state.building === bldg.id ? "active" : ""}" data-card-bldg="${bldg.id}">
                <div class="v-icon">${bldg.id === "main" ? "🏛️" : "🏢"}</div>
                <div class="v-title">${bldg.name}</div>
                <div class="v-sub">${bldg.subtitle}</div>
                <span class="v-cta">Select Building &amp; Floors →</span>
              </button>
            `).join("")}
          </div>
        `;
        directoryBody.querySelectorAll("[data-card-bldg]").forEach((btn) => {
          btn.addEventListener("click", () => {
            selectBuilding(btn.dataset.cardBldg, true);
          });
        });
      } else {
        const bldg = BUILDINGS[state.building];
        const floorData = bldg.floors[state.floor];
        directoryTitle.textContent = `${bldg.name} • ${floorData.label} Rooms`;
        directoryCount.textContent = `${floorData.rooms.length} Rooms`;
        directoryBody.innerHTML = `
          <div class="room-list">
            ${floorData.rooms.map((rm) => `
              <button type="button" class="room-card ${state.roomNumber === rm.number ? "active" : ""}" data-room-card="${rm.number}">
                <div class="room-card-left">
                  <div class="room-num-box">${rm.number}</div>
                  <div class="room-info">
                    <div class="room-name">${rm.name}</div>
                    <div class="room-loc">${rm.location}</div>
                  </div>
                </div>
                <span class="room-arrow">${state.roomNumber === rm.number ? "Selected ✓" : "Locate →"}</span>
              </button>
            `).join("")}
          </div>
        `;
        directoryBody.querySelectorAll("[data-room-card]").forEach((btn) => {
          btn.addEventListener("click", () => {
            selectRoom(btn.dataset.roomCard);
          });
        });
      }
    }

    function renderAll() {
      updateButtons();
      renderMap();
      renderSelectedCard();
      renderDirectory();
    }

    // Actions
    function showVicinity(keepBuilding = false) {
      state.view = "vicinity";
      if (!keepBuilding) {
        state.building = null;
        state.floor = null;
        state.roomNumber = null;
        state.showRouteOnVicinity = false;
      }
      resetZoom();
      renderAll();
    }

    function selectBuilding(bldgId, goToFirstFloor = true) {
      state.building = bldgId;
      state.roomNumber = null;
      state.showRouteOnVicinity = true;
      if (goToFirstFloor) {
        state.view = "floor";
        state.floor = state.floor || "1f";
      } else {
        state.view = "vicinity";
      }
      resetZoom();
      renderAll();
    }

    function selectFloor(floorId) {
      if (!state.building) state.building = "main";
      state.view = "floor";
      state.floor = floorId;
      state.roomNumber = null;
      resetZoom();
      renderAll();
    }

    function selectRoom(roomNum) {
      state.roomNumber = roomNum;
      const floorData = BUILDINGS[state.building].floors[state.floor];
      const rm = floorData.rooms.find((r) => r.number === roomNum);
      renderAll();
      if (rm) {
        zoomToBox(rm.box, floorData.viewBox);
      }
    }

    // Event Listeners: Buttons & Stepper
    document.querySelectorAll(".bldg-btn").forEach((btn) => {
      btn.addEventListener("click", () => {
        const key = btn.dataset.bldg;
        if (key === "vicinity") showVicinity(false);
        else selectBuilding(key, true);
      });
    });

    document.querySelectorAll(".floor-btn").forEach((btn) => {
      btn.addEventListener("click", () => {
        selectFloor(btn.dataset.floor);
      });
    });

    // Search Autocomplete
    function handleSearch(query) {
      const q = query.trim().toLowerCase();
      searchClear.classList.toggle("show", q.length > 0);
      if (!q) {
        searchResults.classList.remove("open");
        return;
      }
      const matches = ALL_ROOMS.filter((r) =>
        r.number.toLowerCase().includes(q) ||
        r.name.toLowerCase().includes(q) ||
        r.location.toLowerCase().includes(q)
      ).slice(0, 10);

      if (matches.length === 0) {
        searchResults.innerHTML = `<div class="search-item"><div class="search-item-sub">No matching room found. Try "MB 305", "Registrar", or "Annex 101".</div></div>`;
      } else {
        searchResults.innerHTML = matches.map((m) => `
          <button type="button" class="search-item" data-sb="${m.buildingId}" data-sf="${m.floorId}" data-sr="${m.number}">
            <div>
              <div class="search-item-title">${m.name}</div>
              <div class="search-item-sub">${m.location}</div>
            </div>
            <span class="search-item-badge">${m.number}</span>
          </button>
        `).join("");
        searchResults.querySelectorAll("[data-sr]").forEach((btn) => {
          btn.addEventListener("click", () => {
            state.building = btn.dataset.sb;
            state.floor = btn.dataset.sf;
            state.view = "floor";
            searchResults.classList.remove("open");
            searchInput.value = `${btn.dataset.sr}`;
            selectRoom(btn.dataset.sr);
          });
        });
      }
      searchResults.classList.add("open");
    }

    searchInput.addEventListener("input", (e) => handleSearch(e.target.value));
    searchClear.addEventListener("click", () => {
      searchInput.value = "";
      handleSearch("");
    });
    document.addEventListener("click", (e) => {
      if (!e.target.closest(".search-wrap")) searchResults.classList.remove("open");
    });

    // Zoom & Pan
    document.getElementById("zoomInBtn").addEventListener("click", () => {
      state.scale = Math.min(3.5, state.scale + 0.35);
      applyTransform();
    });
    document.getElementById("zoomOutBtn").addEventListener("click", () => {
      state.scale = Math.max(1, state.scale - 0.35);
      if (state.scale === 1) { state.panX = 0; state.panY = 0; }
      applyTransform();
    });
    document.getElementById("zoomResetBtn").addEventListener("click", resetZoom);

    let isDragging = false, startX = 0, startY = 0;
    mapStage.addEventListener("pointerdown", (e) => {
      if (e.target.closest(".zoom-controls") || e.target.closest("[data-bldg-click]") || e.target.closest("[data-room-click]")) return;
      isDragging = true;
      startX = e.clientX - state.panX;
      startY = e.clientY - state.panY;
      mapStage.classList.add("dragging");
    });
    window.addEventListener("pointermove", (e) => {
      if (!isDragging) return;
      if (state.scale === 1) state.scale = 1.25;
      state.panX = e.clientX - startX;
      state.panY = e.clientY - startY;
      applyTransform();
    });
    window.addEventListener("pointerup", () => {
      isDragging = false;
      mapStage.classList.remove("dragging");
    });

    // User Location: GPS + Simple Campus Spot Picker
    const locationStatusText = document.getElementById("locationStatusText");
    const locateMeBtn = document.getElementById("locateMeBtn");
    const landmarkPicker = document.getElementById("landmarkPicker");

    function findNearestLandmark(x, y) {
      let best = CAMPUS_LANDMARKS.entrance;
      let bestDist = Infinity;
      Object.values(CAMPUS_LANDMARKS).forEach((lm) => {
        const d = Math.hypot(lm.x - x, lm.y - y);
        if (d < bestDist) { bestDist = d; best = lm; }
      });
      return best.name;
    }

    function setUserPosition(x, y, label, source = "manual") {
      state.userPos = {
        x: Math.max(20, Math.min(1004, Math.round(x))),
        y: Math.max(20, Math.min(619, Math.round(y))),
        label: label || findNearestLandmark(x, y),
        source
      };
      locationStatusText.textContent = source === "gps"
        ? `GPS: Near ${state.userPos.label}`
        : `Near: ${state.userPos.label}`;
      if (state.view !== "vicinity") {
        state.view = "vicinity";
        resetZoom();
      }
      renderAll();
    }

    function haversineMeters(lat1, lon1, lat2, lon2) {
      const R = 6371000;
      const toRad = (v) => (v * Math.PI) / 180;
      const dLat = toRad(lat2 - lat1);
      const dLon = toRad(lon2 - lon1);
      const a = Math.sin(dLat / 2) ** 2 + Math.cos(toRad(lat1)) * Math.cos(toRad(lat2)) * Math.sin(dLon / 2) ** 2;
      return R * 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
    }

    locateMeBtn.addEventListener("click", () => {
      if (landmarkPicker.classList.contains("show")) {
        landmarkPicker.classList.remove("show");
        state.pickSpotMode = false;
        locationStatusText.textContent = `Near: ${state.userPos.label}`;
        return;
      }
      if (!navigator.geolocation) {
        locationStatusText.textContent = "Tap your nearest spot below:";
        landmarkPicker.classList.add("show");
        state.pickSpotMode = true;
        return;
      }
      locationStatusText.textContent = "Checking your GPS...";
      navigator.geolocation.getCurrentPosition(
        (pos) => {
          const { latitude, longitude } = pos.coords;
          const dist = haversineMeters(latitude, longitude, CAMPUS_GPS.centerLat, CAMPUS_GPS.centerLng);
          if (dist <= 400) {
            const normX = (longitude - (CAMPUS_GPS.centerLng - CAMPUS_GPS.lngSpan / 2)) / CAMPUS_GPS.lngSpan;
            const normY = ((CAMPUS_GPS.centerLat + CAMPUS_GPS.latSpan / 2) - latitude) / CAMPUS_GPS.latSpan;
            const mapX = Math.max(30, Math.min(994, normX * 1024));
            const mapY = Math.max(30, Math.min(609, normY * 639));
            setUserPosition(mapX, mapY, findNearestLandmark(mapX, mapY), "gps");
          } else {
            locationStatusText.textContent = "Not on campus — tap your spot below:";
            landmarkPicker.classList.add("show");
            state.pickSpotMode = true;
            if (state.view !== "vicinity") {
              state.view = "vicinity";
              resetZoom();
              renderAll();
            }
          }
        },
        () => {
          locationStatusText.textContent = "Tap your nearest spot below:";
          landmarkPicker.classList.add("show");
          state.pickSpotMode = true;
        },
        { enableHighAccuracy: true, timeout: 7000, maximumAge: 10000 }
      );
    });

    document.querySelectorAll("[data-spot]").forEach((chip) => {
      chip.addEventListener("click", () => {
        document.querySelectorAll("[data-spot]").forEach((c) => c.classList.remove("active"));
        chip.classList.add("active");
        const lm = CAMPUS_LANDMARKS[chip.dataset.spot];
        if (lm) {
          state.pickSpotMode = false;
          landmarkPicker.classList.remove("show");
          setUserPosition(lm.x, lm.y, lm.name, "manual");
        }
      });
    });

    mapOverlay.addEventListener("click", (e) => {
      if (!state.pickSpotMode || state.view !== "vicinity") return;
      const rect = mapOverlay.getBoundingClientRect();
      const x = ((e.clientX - rect.left) / rect.width) * 1024;
      const y = ((e.clientY - rect.top) / rect.height) * 639;
      state.pickSpotMode = false;
      landmarkPicker.classList.remove("show");
      setUserPosition(x, y, findNearestLandmark(x, y), "manual");
    });

    // URL Params support (e.g. ?building=main&floor=3f or ?plan=main-3f or ?at=quadrangle)
    const params = new URLSearchParams(window.location.search);
    const pAt = params.get("at");
    if (pAt && CAMPUS_LANDMARKS[pAt]) {
      const lm = CAMPUS_LANDMARKS[pAt];
      state.userPos = { x: lm.x, y: lm.y, label: lm.name, source: "manual" };
      locationStatusText.textContent = `You are at: ${lm.name}`;
    }
    const pPlan = params.get("plan");
    let pBldg = params.get("building");
    let pFloor = params.get("floor");
    const pRoom = params.get("room");
    if (pPlan && pPlan.includes("-")) {
      const [b, f] = pPlan.split("-");
      if (BUILDINGS[b]) { pBldg = b; pFloor = f; }
    }
    if (pBldg && BUILDINGS[pBldg]) {
      state.building = pBldg;
      state.view = "floor";
      state.floor = (pFloor && BUILDINGS[pBldg].floors[pFloor]) ? pFloor : "1f";
      if (pRoom) state.roomNumber = pRoom;
    }

    renderAll();
  </script>
</body>
</html>
