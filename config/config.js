/**
 * OpenSource 2025 AeroX
 * Code by itsfizys
 * AeroX Development
 * 
 * Kali Billi Bot Configuration
 * Update these URLs to configure your bot's support server and invite links
 */

const CONFIG = {
  // Bot invite link - users will be redirected here when clicking "Invite Kali Billi"
  botInviteUrl: "https://discord.com/oauth2/authorize?client_id=1464526217729282111&permissions=8&integration_type=0&scope=bot+applications.commands",
  
  // Support server invite link - users will be redirected here for support
  supportServerUrl: "https://discord.gg/ZrFDjNuyDX",
  
  // Bot name (for display)
  botName: "Black Cat",
  
  // Bot description
  botDescription: "Funny Bot ˃ ᵕ ˂"
};

// Export for use in browsers
if (typeof window !== 'undefined') {
  window.CONFIG = CONFIG;
}
