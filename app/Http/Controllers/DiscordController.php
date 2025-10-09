<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


#[\Spatie\RouteAttributes\Attributes\Group(domain: 'discord.monmamo.test')]
#[\Spatie\RouteAttributes\Attributes\Group(domain: 'discord.monmamo.com')]
class DiscordController extends Controller
{

    private    function _request($endpoint, $body = null)
    {
        // append endpoint to root API URL
        $url = 'https://discord.com/api/v10/' . $endpoint;

        // use curl to connect to $url
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bot ' . env('DISCORD_TOKEN'),
            'Content-Type: application/json; charset=UTF-8',
            'User-Agent: DiscordBot (https://github.com/discord/discord-example-app, 1.0.0)',
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(compact('body')));
        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($httpcode < 200 || $httpcode >= 300) {
            throw new \Exception("Discord API error: " . $response, $httpcode);
        }
        curl_close($ch);
        return json_decode($response, true);
    }


    private function _command_leaderboard($data)
    {
        // Send a message into the channel where command was triggered from
        return response()->json([
            'type' => 4, // InteractionResponseType::CHANNEL_MESSAGE_WITH_SOURCE
            'data' => [
                'content' => 'Leaderboard functionality is not yet implemented.',
                'allowed_mentions' => [
                    'parse' => [],
                ],
            ],
        ]);
    }

    private function _command_profile($data)
    {
        // Use interaction context that the interaction was triggered from
        $interactionContext = $data['context'] ?? null;

        $profilePayloadData = [
            'content' => 'Profile functionality is not yet implemented.',
        ];

        // If profile isn't run in a DM with the app, we'll make the response ephemeral and add a share button
        if ($interactionContext !== 1) {
            // Make message ephemeral
            $profilePayloadData['flags'] = 64;
            // Add button to components
            $profilePayloadData['components'] = [
                [
                    'type' => 1,
                    'components' => [
                        [
                            'type' => 2,
                            'label' => 'Share Profile',
                            'custom_id' => 'share_profile',
                            'style' => 2,
                        ],
                    ],
                ],
            ];
        }

        // Send response
        return response()->json([
            'type' => 4, // InteractionResponseType::CHANNEL_MESSAGE_WITH_SOURCE
            'data' => $profilePayloadData,
        ]);
    }

    private function _command_link($data)
    {
        // Send a message into the channel where command was triggered from
        return response()->json([
            'type' => 4, // InteractionResponseType::CHANNEL_MESSAGE_WITH_SOURCE
            'data' => [
                'content' => 'Authorize your Quests of Wumpus account with your Discord profile.',
                'components' => [
                    [
                        'type' => 1,
                        'components' => [
                            [
                                'type' => 2,
                                'label' => 'Link Account',
                                'style' => 5,
                                // If you were building this functionality, you could guide the user through authorizing via your game/site
                                'url' => 'https://discord.com/developers/docs/intro',
                            ],
                        ],
                    ],
                ],
            ],
        ]);
    }

    /**
     * A ping.
     */
    private function _PING()
    {
        return response()->json(['type' => \App\Enums\Discord\InteractionResponseType::PONG->value]);
    }

     /**
      * A command invocation.
      */
    private function _APPLICATION_COMMAND($interactionData)
    {
        $name = $interactionData['name'];

        if (method_exists($this, '_command_' . $name)) {
            return $this->{'_command_' . $name}($interactionData);
        } else {
            return response()->json([
                'type' => 4, // InteractionResponseType::CHANNEL_MESSAGE_WITH_SOURCE
                'data' => [
                    'content' => "Unknown command: $name",
                    'allowed_mentions' => [
                        'parse' => [],
                    ],
                ],
            ]);
        }
    }

    /**
     * Usage of a message's component.
     */
    private function _MESSAGE_COMPONENT($interactionData)
    {

        //     const profile = getFakeProfile(0);
        //     const profileEmbed = createPlayerEmbed(profile);
        //     return res.send({
        //       type: InteractionResponseType.CHANNEL_MESSAGE_WITH_SOURCE,
        //       data: {
        //         embeds: [profileEmbed],
        //       },
        //     });
        //   }

    }

    /**
     * An interaction sent when an application command option is filled out.
     */
    private function _APPLICATION_COMMAND_AUTOCOMPLETE($interactionData)
    {
    }

    /**
     * An interaction sent when a modal is submitted.
     */
    private function _MODAL_SUBMIT($interactionData)
    {
    }

    #[\Spatie\RouteAttributes\Attributes\Post('/interactions', 'discord.interactions')]
    public function interactions(Request $request)
    {
        $data = $request->all();
        $type = $data['type'];
        $interactionData = $data['data'] ?? null;

        $function_name = '_' . \App\Enums\Discord\InteractionType::from($type)->name;
        return $this->$function_name($interactionData);
    }

    #[\Spatie\RouteAttributes\Attributes\Get('/test', 'discord.test')]
    public function test(){
return 'Hello world from DiscordController!';
    }
}
