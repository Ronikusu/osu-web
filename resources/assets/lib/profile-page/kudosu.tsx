// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

import KudosuHistoryJson from 'interfaces/kudosu-history-json';
import { route } from 'laroute';
import ExtraHeader from 'profile-page/extra-header';
import ExtraPageProps, { ProfilePagePaginationData } from 'profile-page/extra-page-props';
import * as React from 'react';
import ShowMoreLink from 'show-more-link';
import StringWithComponent from 'string-with-component';
import TimeWithTooltip from 'time-with-tooltip';
import { wikiUrl } from 'utils/url';
import ValueDisplay from 'value-display';

function Entry({ kudosu }: { kudosu: KudosuHistoryJson }) {
  const textMappings = {
    amount: (
      <strong className='profile-extra-entries__kudosu-amount'>
        {osu.trans('users.show.extra.kudosu.entry.amount', { amount: osu.formatNumber(Math.abs(kudosu.amount)) })}
      </strong>
    ),
    giver: kudosu.giver == null
      ? osu.trans('users.deleted')
      : <a href={kudosu.giver.url}>{kudosu.giver.username}</a>,
    post: kudosu.post.url == null
      ? kudosu.post.title
      : <a href={kudosu.post.url}>{kudosu.post.title}</a>,
  };

  return (
    <li className='profile-extra-entries__item'>
      <div className='profile-extra-entries__detail'>
        <div className='profile-extra-entries__text'>
          <StringWithComponent
            mappings={textMappings}
            pattern={osu.trans(`users.show.extra.kudosu.entry.${kudosu.model}.${kudosu.action}`)}
          />
        </div>
      </div>
      <div className='profile-extra-entries__time'>
        <TimeWithTooltip dateTime={kudosu.created_at} relative />
      </div>
    </li>
  );
}

interface Props extends ExtraPageProps {
  pagination: ProfilePagePaginationData;
  recentlyReceivedKudosu?: KudosuHistoryJson[];
}

export default class Kudosu extends React.Component<Props> {
  render() {
    return (
      <div className='page-extra'>
        <ExtraHeader name={this.props.name} withEdit={this.props.withEdit} />

        <div className='kudosu-box'>
          <ValueDisplay
            description={(
              <StringWithComponent
                mappings={{
                  link: (
                    <a href={wikiUrl('Kudosu')}>
                      {osu.trans('users.show.extra.kudosu.total_info.link')}
                    </a>
                  ),
                }}
                pattern={osu.trans('users.show.extra.kudosu.total_info._')}
              />
            )}
            label={osu.trans('users.show.extra.kudosu.total')}
            modifiers='kudosu'
            value={osu.formatNumber(this.props.user.kudosu.total)}
          />
        </div>

        {this.renderEntries()}
      </div>
    );
  }

  private renderEntries() {
    if (this.props.recentlyReceivedKudosu == null || this.props.recentlyReceivedKudosu.length === 0) {
      return (
        <div className='profile-extra-entries profile-extra-entries--kudosu'>
          {osu.trans('users.show.extra.kudosu.entry.empty')}
        </div>
      );
    }

    return (
      <ul className='profile-extra-entries profile-extra-entries--kudosu'>
        {this.props.recentlyReceivedKudosu.map((kudosu) => <Entry key={kudosu.id} kudosu={kudosu} />)}

        <li className='profile-extra-entries__item'>
          <ShowMoreLink
            data={{
              name: 'recentlyReceivedKudosu',
              url: route('users.kudosu', { user: this.props.user.id }),
            }}
            event='profile:showMore'
            hasMore={this.props.pagination.recentlyReceivedKudosu.hasMore}
            loading={this.props.pagination.recentlyReceivedKudosu.loading}
            modifiers='profile-page'
          />
        </li>
      </ul>
    );
  }
}